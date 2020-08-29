<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactsController extends Controller
{
    public function create(){

        return view('contacts.create');
    }

    public function store(ContactRequest $request){

        

    }
}
