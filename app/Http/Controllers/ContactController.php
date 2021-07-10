<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(PostContactRequest $request){
        $payload = $request->post();
        $service = Contact::create($payload);

        flash('Query submitted successfully')->success();
        return back();
    }
}
