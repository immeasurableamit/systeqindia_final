<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;

class SeoSettingController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seo  = Settings::findOrFail($id);
        return view('admin.settings.seo.edit', compact('seo'));
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
        $seo = Settings::findOrFail($id);

        if (!empty( $seo)) {
            $seo->update($payload);
            flash('Updated successfully')->success();
            return redirect()->route('seo.edit', [ 'seo' => $seo->id]);
        } else {
            abort(500, 'Something went wrong');
        }
    }
}
