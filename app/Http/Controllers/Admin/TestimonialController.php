<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Http\Requests\TestimonialRequest;
use File;
use Str;
use Image;

class TestimonialController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(10);
        return view('admin.testimonial.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialRequest $request)
    {
        $payload = $request->post();
        $payload['created_by'] = auth()->user()->id;
        $testimonial = Testimonial::create($payload);
        $this->handleTestimonialImage($testimonial);

        flash('Created successfully')->success();
        return redirect()->route('testimonial.edit', ['testimonial' => $testimonial->id]);
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
        $testimonial  = Testimonial::findOrFail($id);
        return view('admin.testimonial.edit', compact('testimonial'));
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
        $testimonial = Testimonial::findOrFail($id);

        if (!empty($testimonial)) {
            $testimonial->update($payload);
            $this->handleTestimonialImage($testimonial);

            flash('Updated successfully')->success();
            return redirect()->route('testimonial.edit', [ 'testimonial' => $testimonial->id]);
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
        $testimonial = Testimonial::findOrFail($id);

        $testimonial->update([
            'deleted_by' => auth()->user()->id
        ]);

        $destination = TESTIMONIAL_IMAGE_PATH . '/' . $id . '/' . $testimonial->testimonial_image;
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $testimonial->delete($id);

        flash('Testimonial deleted successfully')->success();
        return redirect()->route('testimonial.index');
    }

    private function handleTestimonialImage($testimonial)
    {
        if (request()->hasFile('testimonial_image')) {
            $destination = TESTIMONIAL_IMAGE_PATH . '/' . $testimonial->id;

            if (!File::isDirectory($destination)) {
                File::makeDirectory($destination, 0777, true, true);
            }

            $file = request()->testimonial_image;
            $fileName = Str::random(10) . '.' . $file->extension();

            Image::make($file)->save($destination . '/' . $fileName);

            $testimonial->testimonial_image = $fileName;
            $testimonial->save();
        }
    }
}
