<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\PostBlogRequest;
use App\Models\Blog;
use File;
use Str;
use Image;

class BlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs  = Blog::latest()->paginate(10);
        return view('admin.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostBlogRequest $request)
    {
        $payload = $request->post();
        $payload['created_by'] = auth()->user()->id;
        $payload['slug'] = Str::slug($request->title);
        $blog = Blog::create($payload);
        $this->handleBlogImage($blog);

        flash('Created successfully')->success();
        return redirect()->route('blog.edit', ['blog' => $blog->id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog  = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
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
        $blog = Blog::findOrFail($id);

        if (!empty($blog)) {
            $blog->update($payload);
            $this->handleBlogImage($blog);

            flash('Blog updated successfully')->success();
            return redirect()->route('blog.edit', ['blog' => $blog->id]);
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
        $blog = Blog::findOrFail($id);

        $blog->update([
            'deleted_by' => auth()->user()->id
        ]);

        $destination = BLOG_IMAGE_PATH . '/' . $id . '/' . $blog-> blog_image;
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $blog->delete($id);

        flash( 'Blog deleted successfully')->success();
        return redirect()->route('blog.index');
    }

    private function handleBlogImage($blog)
    {
        if (request()->hasFile('blog_image')) {
            $destination = BLOG_IMAGE_PATH . '/' . $blog->id;

            if (!File::isDirectory($destination)) {
                File::makeDirectory($destination, 0777, true, true);
            }

            $file = request()->blog_image;
            $fileName = Str::random(10) . '.' . $file->extension();

            Image::make($file)->save($destination . '/' . $fileName);

            $blog->blog_image = $fileName;
            $blog->save();
        }
    }
}


