<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostAboutRequest;
use App\Models\About;
use File;
use Str;
use Image;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $about = About::first();
        return view('admin.about.create', compact('about'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostAboutRequest $request)
    {
        $payload = $request->post();
        $payload['created_by'] = auth()->user()->id;
        $about = About::create($payload);
        $this->handleAboutImage($about);


        flash('Created successfully')->success();
        return redirect()->route('about.edit', ['about' => $about->id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostAboutRequest $request, $id)
    {
        $payload = $request->post();
        $payload['created_by'] = auth()->user()->id;
        $about = About::find($id);

        if (!empty($about)) {
            $about->update($payload);
        } else {
            $about = About::create($payload);
        }
        $this->handleAboutImage($about);
        flash('Created successfully')->success();
        return redirect()->route('about.create');
    }


    private function handleAboutImage($about)
    {
        if (request()->hasFile('about_image')) {
            $destination = ABOUT_IMAGE_PATH . '/' . $about->id;

            if (!File::isDirectory($destination)) {
                File::makeDirectory($destination, 0777, true, true);
            }

            $file = request()->about_image;
            $fileName = Str::random(10) . '.' . $file->extension();

            Image::make($file)->fit(1440, 910)->save($destination . '/' . $fileName);

            $about->about_image = $fileName;
            $about->save();
        }
    }
}
