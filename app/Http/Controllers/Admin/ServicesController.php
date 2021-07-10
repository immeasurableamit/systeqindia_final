<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Services;
use App\Http\Requests\PostServiceRequest;
use File;
use Str;
use Image;

class ServicesController extends Controller
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
        $services = Services::latest()->paginate(10);
        return view('admin.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( PostServiceRequest $request)
    {
        $payload = $request->post();
        $payload['created_by'] = auth()->user()->id;
        $service = Services::create($payload);
        $this->handleModulePictureCrop($service);

        flash('Services created successfully')->success();
        return redirect()->route('services.edit', ['service' => $service->id]);
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
        $service  = Services::findOrFail($id);
        return view('admin.services.edit', compact('service'));
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
        $service = Services::findOrFail($id);

        if (!empty($service)) {
            $service->update($payload);
            $this->handleModulePictureCrop($service);

            flash('Service updated successfully')->success();
            return redirect()->route('services.edit', ['service' => $service->id]);
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
        $service = Services::findOrFail($id);

        $service->update([
            'deleted_by' => auth()->user()->id
        ]);

        $destination = SERVICE_IMAGE_PATH . '/' . $id . '/' . $service->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $service->delete($id);

        flash('Service deleted successfully')->success();
        return redirect()->route('services.index');
    }

    private function handleModulePictureCrop($service)
    {
        if (request()->hasFile('image')) {
            $destination = SERVICE_IMAGE_PATH . '/' . $service->id;

            if (!File::isDirectory($destination)) {
                File::makeDirectory($destination, 0777, true, true);
            }

            $file = request()->image;
            $fileName = Str::random(10) . '.' . $file->extension();

            Image::make($file)->fit(1440, 910)->save($destination . '/' . $fileName);

            $service->image = $fileName;
            $service->save();
        }
    }
}
