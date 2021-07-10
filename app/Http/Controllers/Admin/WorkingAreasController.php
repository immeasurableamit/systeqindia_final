<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WorkingAreas;
use App\Http\Requests\PostWorkingAreasRequest;
use File;
use Str;
use Image;
use Symfony\Component\HttpFoundation\Request;

class WorkingAreasController extends Controller
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
        $workingAreas = WorkingAreas::latest()->paginate(10);
        return view('admin.working-areas.index', compact('workingAreas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.working-areas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostWorkingAreasRequest $request)
    {
        $payload = $request->post();
        $payload['created_by'] = auth()->user()->id;
        $workingArea = WorkingAreas::create($payload);
        $this->handleModulePictureCrop($workingArea);


        flash( 'Working area created successfully')->success();
        return redirect()->route('working-areas.edit', ['working_area' => $workingArea->id]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $workingArea = WorkingAreas::findOrFail($id);
        return view('admin.working-areas.edit', compact( 'workingArea'));
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
        $workingArea = WorkingAreas::findOrFail($id);

        if (!empty( $workingArea)) {
            $workingArea->update($payload);
            $this->handleModulePictureCrop($workingArea);

            flash('Working area updated successfully')->success();
            return redirect()->route('working-areas.edit', ['working_area' => $workingArea->id]);
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
        $workingArea = WorkingAreas::findOrFail($id);

        $workingArea->update([
            'deleted_by' => auth()->user()->id
        ]);

        $workingArea->delete($id);

        flash('Working area deleted successfully')->success();
        return redirect()->route('working-areas.index');
    }

    private function handleModulePictureCrop($workingArea)
    {

        if (request()->hasFile('image')) {
            $destination = WORKING_IMAGE_PATH . '/' . $workingArea->id;

            if (!File::isDirectory($destination)) {
                File::makeDirectory($destination, 0777, true, true);
            }

            $file = request()->image;
            $fileName = Str::random(10) . '.' . $file->extension();

            Image::make($file)->fit(1440, 910)->save($destination . '/' . $fileName);

            $workingArea->image = $fileName;
            $workingArea->save();
        }
    }
}
