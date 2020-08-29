<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Mail\ContactMessages;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactsController extends Controller
{
    public function create(){

        return view('contacts.create');
    }

    public function store(ContactRequest $request){

        $message =Message::create($request->only('name','email','message'));
       

        $mailable = new ContactMessages($message);
        Mail::to(config('laracarte.admin_support_email'))->send($mailable);

        Flashy::success('Votre message à bien été envoyer avec success');
        return back();
    }
}
