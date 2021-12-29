<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('session.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:tb_user|max:255',
            'password' => 'required|max:255|min:5',
            'nama'     => 'required|max:255',
            'nip_npak' => 'required|unique:tb_user|max:255',
            'email'    => 'required|email|unique:tb_user|max:255',
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login');
    }
}
