<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;
use App\Http\Requests\PostSiteInfoRequest;

class SiteSettingController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siteInfo = Settings::first();
        return view('admin.settings.site-info.create', compact('siteInfo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostSiteInfoRequest $request)
    {
        $payload = $request->post();
        $payload['created_by'] = auth()->user()->id;
        $siteInfo = Settings::create($payload);

        flash('Created successfully')->success();
        return redirect()->route('site-info.edit', ['site_info' => $siteInfo->id]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siteInfo  = Settings::findOrFail($id);
        return view('admin.settings.site-info.edit', compact('siteInfo'));
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
        $siteInfo = Settings::findOrFail($id);

        if (!empty($siteInfo)) {
            $siteInfo->update($payload);
            flash('Updated successfully')->success();
            return redirect()->route('site-info.edit', ['site_info' => $siteInfo->id]);
        } else {
            abort(500, 'Something went wrong');
        }
    }
}
