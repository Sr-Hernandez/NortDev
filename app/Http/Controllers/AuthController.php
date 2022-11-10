<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\users;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function registro(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'confirm-password' => 'required|same:password'
        ]);
        $data = $request->except('confirm-password', 'password');
        $data['password'] = Hash::make($request->password);
        users::create($data);
        return redirect('/login');
    }





    
}
