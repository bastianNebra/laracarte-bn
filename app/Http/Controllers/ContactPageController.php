<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

class ContactPageController extends Controller
{
    public function create(){
        return view('contacts.create');
    }

    public function store(ContactFormRequest $request){

        return view('contacts.create');
    }
}
