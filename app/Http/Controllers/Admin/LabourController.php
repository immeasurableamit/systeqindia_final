<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\PostLabourRequest;
use App\Models\Labour;

class LabourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labours = Labour::latest()->paginate(10);
        return view('admin.labour.index',compact('labours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.labour.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostLabourRequest $request)
    {
        $payload = $request->post();
        $payload['created_by'] = auth()->user()->id;
        $payload['status'] = 1;
        $labour = Labour::create($payload);

        flash('Created successfully')->success();
        return redirect()->route('labour-management.edit', ['labour_management' => $labour->id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $labour = Labour::find($id);
        $categories = Category::get();
        return view('admin.labour.edit', compact('labour','categories'));
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
        $labour = Labour::findOrFail($id);

        if (!empty( $labour)) {
            $labour->update($payload);
            flash('Updated successfully')->success();
            return redirect()->route('labour-management.edit', ['labour_management' => $labour->id]);
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
        $labour = Labour::findOrFail($id);

        $labour->update([
            'deleted_by' => auth()->user()->id
        ]);

        $labour->delete($id);

        flash('Deleted successfully')->success();
        return redirect()->route('labour-management.index');
    }
}
