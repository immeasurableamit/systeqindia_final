<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostPageRequest;
use App\Models\Page;
use Str;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::latest()->paginate(10);
        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostPageRequest $request)
    {
        $payload = $request->post();
        $payload['created_by'] = auth()->user()->id;
        $payload['status'] = 1;
        $payload['slug'] = Str::slug($request->title);
        $page = Page::create($payload);

        flash('Created successfully')->success();
        return redirect()->route('pages.edit', ['page' => $page->id]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::find($id);
        return view('admin.pages.edit', compact('page'));
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
        $payload['slug'] = Str::slug($request->title);
        $page = Page::findOrFail($id);

        if (!empty($page)) {
            $page->update($payload);
            flash('Updated successfully')->success();
            return redirect()->route('pages.edit', ['page' => $page->id]);
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
        $page = Page::findOrFail($id);

        $page->update([
            'deleted_by' => auth()->user()->id
        ]);

        $page->delete($id);

        flash('Deleted successfully')->success();
        return redirect()->route('pages.index');
    }
}
