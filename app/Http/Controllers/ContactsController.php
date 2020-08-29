<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMessages;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactsController extends Controller
{
    public function create(){

        return view('contacts.create');
    }

    public function store(ContactRequest $request){

        $mailable = new ContactMessages($request->name,$request->email,$request->message);
        Mail::to('damediagnea@gmail.com')->send($mailable);

        return "Done";
    }
}
