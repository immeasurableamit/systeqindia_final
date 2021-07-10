<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FounderMessage;
use App\Http\Requests\FounderMessageRequest;
use File;
use Str;
use Image;

class FounderMessageController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $founder_message = FounderMessage::first();
        return view('admin.founder-message.create', compact('founder_message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FounderMessageRequest $request, $id)
    {
        $payload = $request->post();
        $payload['created_by'] = auth()->user()->id;
        $founder_message = FounderMessage::find($id);

        if (!empty($founder_message)) {
            $founder_message->update($payload);
        } else {
            $founder_message = FounderMessage::create($payload);
        }

        $this->handleFounderMessageImage($founder_message);
        flash('Updated successfully')->success();
        return redirect()->route('founder-message.create');
    }

    private function handleFounderMessageImage($founder_message)
    {
        if (request()->hasFile('founder_message_image')) {
            $destination = FOUNDER_MESSAGE_IMAGE_PATH . '/' . $founder_message->id;

            if (!File::isDirectory($destination)) {
                File::makeDirectory($destination, 0777, true, true);
            }

            $file = request()->founder_message_image;
            $fileName = Str::random(10) . '.' . $file->extension();

            Image::make($file)->save($destination . '/' . $fileName);

            $founder_message->founder_message_image = $fileName;
            $founder_message->save();
        }
    }
}
