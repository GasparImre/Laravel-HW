<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(50);
        return view("user-index", compact('users'));
    }

    public function create()
    {
        return view('create-user');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                "name" => "required",
                "email" => "required",
                "password" => "required"
            ]
        );
        $user = User::create($request->all());
        if(!is_null($user))
            return back()->with("success", "Success! User created");
        else
            return back()->with("failed", "Alert! User not created");
    }

    public function show(User $user)
    {
        return view('show-user', compact('user'));
    }

    public function edit(User $user)
    {
        return view('edit-user', compact('user'));
    }

    public function update(Request $request, User $user)
    { $userprofile = User::where('email',$request->input("email"));
        $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",
        ]);
        $userprofile->update([
           'name'=>$request->input("name"),
            'email'=>$request->input("email"),
            'password'=>Hash::make($request->input("password")),
        ]);

        if(!is_null($user))
            return back()->with("success", "Success! User updated");
        else
            return back()->with("failed", "Alert! User not updated");
    }

    public function destroy(User $user)
    {
        $user = $user->delete();
        if(!is_null($user))
            return back()->with("success", "Success! User deleted");
        else
            return back()->with("failed", "Alert! User not deleted");
    }
}
