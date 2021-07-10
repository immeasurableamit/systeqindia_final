<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostSliderRequest;
use App\Models\Slider;
use File;
use Str;
use Image;
use App\Http\Requests\PostSliderServicesRequest;
use App\Models\SliderServices;

class SliderServicesController extends Controller
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
        $sliders = SliderServices::latest()->paginate(10);
        return view('admin.slider-services.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider-services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostSliderServicesRequest $request)
    {
        $payload = $request->post();
        $payload['created_by'] = auth()->user()->id;
        $slider = SliderServices::create($payload);

        flash('Slider Service created successfully')->success();
        return redirect()->route('slider-services.edit', ['slider_service' => $slider->id]);
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
        $slider = SliderServices::findOrFail($id);
        return view('admin.slider-services.edit', compact('slider'));
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
        $slider = SliderServices::findOrFail($id);

        if (!empty($slider)) {
            $slider->update($payload);

            flash('Slider Service updated successfully')->success();
            return redirect()->route('slider-services.edit', ['slider_service' => $slider->id]);
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
        $slider = SliderServices::findOrFail($id);

        $slider->update([
            'deleted_by' => auth()->user()->id
        ]);

        $slider->delete($id);

        flash('Slider Service deleted successfully')->success();
        return redirect()->route('slider-services.index');
    }
}
