<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\ValidationException;

class ContactUsController extends Controller
{
    public function create(){
        return view('ContactUs');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'fullname' => 'required|regex:^([a-zA-Z]{2,}\s[a-zA-Z]{1,}\'?-?[a-zA-Z]{2,}\s?([a-zA-Z]{1,})?)',
            'email' => 'required|email:rfc,dns',
            'message' => 'required|max:255',

        ]);
    }
}
