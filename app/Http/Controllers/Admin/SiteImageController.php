<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;
use File;
use Str;
use Image;
use App\Http\Requests\SiteImageRequest;

class SiteImageController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting = Settings::select('id', 'favicon', 'admin_logo', 'admin_small_logo', 'site_logo')->firstOrFail();
        return view('admin.settings.site-images.create', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SiteImageRequest $request, $id)
    {
        $payload = $request->post();
        $payload['created_by'] = auth()->user()->id;
        $setting = Settings::findOrFail($id);

        if (!empty($setting)) {
            $setting->update($payload);
            $this->handleFaviconImage($setting);
            $this->handleAdminLogoImage($setting);
            $this->handleAdminSmallLogoImage($setting);
            $this->handleSiteLogoImage($setting);


            flash('Updated successfully')->success();
            return redirect()->route('site-image.create');
        } else {
            abort(500, 'Something went wrong');
        }
    }


    private function handleFaviconImage($setting)
    {
        if (request()->hasFile('favicon')) {
            $destination = FAVICON_IMAGE_PATH . '/' . $setting->id;

            if (!File::isDirectory($destination)) {
                File::makeDirectory($destination, 0777, true, true);
            }

            $file = request()->favicon;

            $fileName = Str::random(10) . '.' . $file->extension();

            Image::make($file)->save($destination . '/' . $fileName);

            $setting->favicon = $fileName;
            $setting->save();
        }
    }

    private function handleAdminLogoImage($setting)
    {
        if (request()->hasFile('admin_logo')) {
            $destination = ADMIN_LOGO_IMAGE_PATH . '/' . $setting->id;

            if (!File::isDirectory($destination)) {
                File::makeDirectory($destination, 0777, true, true);
            }

            $file = request()->admin_logo;
            $fileName = Str::random(10) . '.' . $file->extension();

            Image::make($file)->save($destination . '/' . $fileName);

            $setting->admin_logo = $fileName;
            $setting->save();
        }
    }

    private function handleAdminSmallLogoImage($setting)
    {
        if (request()->hasFile('admin_small_logo')) {
            $destination = ADMIN_SMALL_LOGO_IMAGE_PATH . '/' . $setting->id;

            if (!File::isDirectory($destination)) {
                File::makeDirectory($destination, 0777, true, true);
            }

            $file = request()->admin_small_logo;
            $fileName = Str::random(10) . '.' . $file->extension();

            Image::make($file)->save($destination . '/' . $fileName);

            $setting->admin_small_logo = $fileName;
            $setting->save();
        }
    }

    private function handleSiteLogoImage($setting)
    {
        if (request()->hasFile('site_logo')) {
            $destination = SITE_LOGO_IMAGE_PATH . '/' . $setting->id;

            if (!File::isDirectory($destination)) {
                File::makeDirectory($destination, 0777, true, true);
            }

            $file = request()->site_logo;
            $fileName = Str::random(10) . '.' . $file->extension();

            Image::make($file)->save($destination . '/' . $fileName);

            $setting->site_logo = $fileName;
            $setting->save();
        }
    }
}
