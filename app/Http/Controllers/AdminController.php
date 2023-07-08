<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (User::where('email', $request->email)->exists() && User::where('password', $request->password)->exists()) {
            return redirect('/students')->with('message', ['Admin', ' Loggedin Successfully!']);
        } else {
            return redirect('/admin/login')->with('message', ['Invalid', 'Email or Password']);
        }
    }
}
