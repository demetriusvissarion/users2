<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        //// select * from users
        $users = User::all();
        // return $users;
        return view('users.index', compact('users'));
    }

    public function store()
    {
        $user = new User;

        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

        // return back();
        return redirect('/');
    }
}
