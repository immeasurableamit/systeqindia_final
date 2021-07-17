<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
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
        $faqs  = Faq::latest()->paginate(10);
        return view('admin.faq.index',compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFaqRequest $request)
    {
        $payload = $request->post();
        $payload['created_by'] = auth()->user()->id;
        $faq = Faq::create($payload);

        flash('Created successfully')->success();
        return redirect()->route('faq.edit', ['faq' => $faq->id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq  = Faq::findOrFail($id);
        return view('admin.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFaqRequest $request, $id)
    {
        $payload = $request->post();
        $payload['created_by'] = auth()->user()->id;
        $faq = Faq::findOrFail($id);

        if (!empty($faq)) {
            $faq->update($payload);
            flash('Updated successfully')->success();
            return redirect()->route('faq.edit', ['faq' => $faq->id]);
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
        $faq = Faq::findOrFail($id);

        $faq->update([
            'deleted_by' => auth()->user()->id
        ]);

        $faq->delete($id);

        flash('Category deleted successfully')->success();
        return redirect()->route('faq.index');
    }
}
