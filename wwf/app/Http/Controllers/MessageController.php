<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = ContactModel::latest()->paginate(50);
        return view("messages", compact('messages'));
    }
}
