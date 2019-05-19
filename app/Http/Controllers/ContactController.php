<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function create()
    {
        return view('contact.create');
    }

    public function store(ContactFormRequest $request)
    {
        Mail::send(new ContactEmail($request->input()));

        flash('Your message has been sent!')->success();

        return redirect()->route('contact.create');
    }
}
