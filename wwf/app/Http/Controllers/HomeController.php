<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        Role::create(['name'=>'admin']);
//        Role::create(['name'=>'guest']);
//
//       Permission::create(['name'=>'user']);
//       auth()->user()->givePermissionTo('user');
//        auth()->user()->assignRole('guest');
//       return auth()->user()->roles;
//       return auth()->user()->permissions;
// Permission adása a super usernek
//        $user = Auth::user();
//        $user = Users::find($req->id);
//        $user = $req->input('Users');
//        $user = $req->user();
//        dd($user);
//        $user->givePermissionTo('Super User');
    }
}
