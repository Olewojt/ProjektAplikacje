<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $data)
    {
        $rules = [
            'login' => 'required|string|unique:users|max:50',
            'password' => 'required|string|min:8|max:256',
            'e_mail' => 'required|email|unique:users',
            'name' => 'required|max:60',
            'surname' => 'required|max:60',
            'phone_number' => 'required|max:9|regex:/^\d+$/'
        ];

        $messages = [
            'login.required' => "Pole login jest wymagane",
            'login.unique' => "Podany login jest już zajęty",
            'login.max' => "Podany login jest za długi",
            'password.min' => "Podane hasło jest za krótkie",
            'password.max' => "Podane hasło jest za długie",
            'password.required' => "Hasło jest wymagane",
            'e_mail.required' => "E-mail jest wymagany",
            'e_mail.unique' => "Podany e-mail jest już zajęty",
            'name.required' => "Pole imię jest wymagane",
            'name.max' => "Pole imię jest za długie",
            'surname.required' => "Pole nazwisko jest wymagane",
            'surname.max' => "Pole nazwisko jest za długie",
            'phone_number.required' => "Numer telefonu jest wymagany",
            'phone_number.max' => "Zbyt długi numer telefonu",
            'phone_number.regex' => "Nieprawidłowy numer telefonu",
        ];

        $validator = Validator::make($data->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->to('register')->withErrors($validator)->withInput();
        }
        
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
