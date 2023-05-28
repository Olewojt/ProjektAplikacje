<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $data)
    {
        $data->validate([
            'login' => 'required|string|unique:users',
            'password' => 'required|string|min:8',
            'e_mail' => 'required|email|unique:users',
            'name' => 'required',
            'surname' => 'required',
            'phone_number' => 'required|max:9|regex:/^\d+$/'
        ]);
        
        $user = new User();
        $user->login = $data['login'];
        $user->password = Hash::make($data['password']);
        $user->e_mail = $data['e_mail'];
        $user->name = $data['name'];
        $user->surname = $data['surname'];
        $user->phone_number = $data['phone_number'];
        $user->privilege_id=0;

        $user->save();
        auth()->login($user);
        
        return redirect()->to('main');
    }
}
