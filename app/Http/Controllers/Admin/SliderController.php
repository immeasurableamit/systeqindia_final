<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostSliderRequest;
use App\Models\Slider;
use File;
use Str;
use Image;

class SliderController extends Controller
{
    /**
   * Create a new controller instance.
   *
   * @return void
   */
    public function __construct()
    {
        $this->middleware(['auth'])->except('logout');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::latest()->paginate(10);
        return view('admin.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostSliderRequest $request)
    {
        $payload = $request->post();
        $payload['created_by'] = auth()->user()->id;
        $slider = Slider::create($payload);
        $this->handleModulePictureCrop($slider);

        flash('Slider created successfully')->success();
        return redirect()->route('sliders.edit', ['slider' => $slider->id]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $payload = $request->post();
        $payload['created_by'] = auth()->user()->id;
        $slider = Slider::findOrFail($id);

        if (!empty($slider)) {
            $slider->update($payload);
            $this->handleModulePictureCrop($slider);

            flash('Slider updated successfully')->success();
            return redirect()->route('sliders.edit', ['slider' => $slider->id]);
        } else {
            abort(500, 'Something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);

        $slider->update([
            'deleted_by' => auth()->user()->id
        ]);

        $destination = SLIDER_IMAGE_PATH . '/' . $id . '/' . $slider->slider_image;
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $slider->delete($id);

        flash('Slider deleted successfully')->success();
        return redirect()->route('sliders.index');
    }

    private function handleModulePictureCrop($slider)
    {

        if (request()->hasFile('slider_image')) {
            $destination = SLIDER_IMAGE_PATH . '/' . $slider->id;

            if (!File::isDirectory($destination)) {
                File::makeDirectory($destination, 0777, true, true);
            }

            $file = request()->slider_image;
            $fileName = Str::random(10) . '.' . $file->extension();

            Image::make($file)->fit(1440, 910)->save($destination . '/' . $fileName);

            $slider->slider_image = $fileName;
            $slider->save();
        }
    }
}
