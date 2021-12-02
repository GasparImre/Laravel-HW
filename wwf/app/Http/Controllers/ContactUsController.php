<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\ValidationException;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContactUsController extends Controller
{
    public function create(){
        return view('ContactUs');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'fullname' => 'required|regex:([a-zA-Z]{2,}\s[a-zA-Z]{1,}\'?-?[a-zA-Z]{2,}\s?([a-zA-Z]{1,})?)',
            'email' => 'required|email:rfc,dns',
            'message' => 'required|max:255',

        ]);

        DB::table('contact_table')->insert([
            'fullname'=>$request->fullname,
            'email'=>$request->email,
            'message'=>$request->message,
            'created_at'=>Carbon::now(),
        ]);
        return view('feedback');
    }
}
