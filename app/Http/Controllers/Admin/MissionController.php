<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostSliderServicesRequest;
use App\Models\SliderServices;
use App\Models\Missions;

class MissionController extends Controller
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
        $missions = Missions::latest()->paginate(10);
        return view('admin.missions.index', compact('missions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.missions.create');
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
        $mission = Missions::create($payload);

        flash('Created successfully')->success();
        return redirect()->route('missions.edit', ['mission' => $mission->id]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mission = Missions::findOrFail($id);
        return view('admin.missions.edit', compact('mission'));
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
        $mission = Missions::findOrFail($id);

        if (!empty($mission)) {
            $mission->update($payload);

            flash('Mission updated successfully')->success();
            return redirect()->route('missions.edit', ['mission' => $mission->id]);
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
        $mission = Missions::findOrFail($id);

        $mission->update([
            'deleted_by' => auth()->user()->id
        ]);

        $mission->delete($id);

        flash('Deleted successfully')->success();
        return redirect()->route('missions.index');
    }
}
