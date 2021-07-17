<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\PremiumClints;
use File;
use Str;
use Image;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePremiumClientsRequest;

class PremiumClintsController extends Controller
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
        $premium_clients = PremiumClints::latest()->paginate(10);
        return view('admin.premium-clients.index', compact('premium_clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.premium-clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePremiumClientsRequest $request)
    {
        $payload = $request->post();
        $payload['created_by'] = auth()->user()->id;
        $premium_client = PremiumClints::create($payload);

        $this->handlePremimumImage($premium_client);


        flash('Created successfully')->success();
        return redirect()->route('premium-clients.edit', ['premium_client' => $premium_client->id]);
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
        $premium_client = PremiumClints::findOrFail($id);
        return view('admin.premium-clients.edit', compact('premium_client'));
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
        $premium_client = PremiumClints::findOrFail($id);

        if (!empty($premium_client)) {
            $premium_client->update($payload);
            $this->handlePremimumImage($premium_client);

            flash('Slider updated successfully')->success();
            return redirect()->route('premium-clients.edit', ['premium_client' => $premium_client->id]);
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
        $premium_client = PremiumClints::findOrFail($id);

        $premium_client->update([
            'deleted_by' => auth()->user()->id
        ]);

        $destination = PREMIUM_CLIENTS_IMAGE_PATH . '/' . $id . '/' . $premium_client->slider_image;
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $premium_client->delete($id);

        flash('Premium client deleted successfully')->success();
        return redirect()->route('premium-clients.index');
    }

    private function handlePremimumImage($premium_client)
    {
        if (request()->hasFile('image')) {
            $destination = PREMIUM_CLIENTS_IMAGE_PATH . '/' . $premium_client->id;

            if (!File::isDirectory($destination)) {
                File::makeDirectory($destination, 0777, true, true);
            }

            $file = request()->image;
            $fileName = Str::random(10) . '.' . $file->extension();

            Image::make($file)->save($destination . '/' . $fileName);

            $premium_client->image = $fileName;
            $premium_client->save();
        }
    }
}
