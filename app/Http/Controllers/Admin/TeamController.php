<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teams;
use App\Http\Requests\PostTeamRequest;
use File;
use Str;
use Image;

class TeamController extends Controller
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
        $teams = Teams::latest()->paginate(10);
        return view('admin.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostTeamRequest $request)
    {
        $payload = $request->post();
        $payload['created_by'] = auth()->user()->id;
        $team = Teams::create($payload);
        $this->handleModulePictureCrop($team);

        flash('Team created successfully')->success();
        return redirect()->route('teams.edit', ['team' => $team->id]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team  = Teams::findOrFail($id);
        return view('admin.teams.edit', compact('team'));
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
        $team = Teams::findOrFail($id);

        if (!empty($team)) {
            $team->update($payload);
            $this->handleModulePictureCrop($team);

            flash('Team updated successfully')->success();
            return redirect()->route('teams.edit', ['team' => $team->id]);
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
        $team = Teams::findOrFail($id);

        $team->update([
            'deleted_by' => auth()->user()->id
        ]);

        $destination = TEAM_IMAGE_PATH . '/' . $id . '/' . $team->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $team->delete($id);

        flash('Team deleted successfully')->success();
        return redirect()->route('teams.index');
    }

    private function handleModulePictureCrop($team)
    {

        if (request()->hasFile('image')) {
            $destination = TEAM_IMAGE_PATH . '/' . $team->id;

            if (!File::isDirectory($destination)) {
                File::makeDirectory($destination, 0777, true, true);
            }

            $file = request()->image;
            $fileName = Str::random(10) . '.' . $file->extension();

            Image::make($file)->save($destination . '/' . $fileName);

            $team->image = $fileName;
            $team->save();
        }
    }
}
