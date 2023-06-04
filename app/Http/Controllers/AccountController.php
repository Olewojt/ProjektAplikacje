<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pending;
use App\Models\User;
use Illuminate\Support\Facades\Validator;


class AccountController extends Controller
{
    public function dashboard(){
        if (Auth::check()){
            $user = Auth::user();
            if ($user->privilege_id==2){
                $pending = Pending::all();
                return view('dashboard', ['user' => $user, 'pending' => $pending]);
            } 

            return view('dashboard', ['user' => $user, 'pending' => []]);
        }
        return redirect('/');
    }

    public function pending(){
        if(Auth::check()) {
            $user = Auth::user();
            if (is_null($user->pending)){
                Pending::insert([
                    'user_id' => $user->id,
                    'accepted' => 0
                ]); 
            }
            return redirect()->route('account.dashboard');
        }
        return redirect()->route('login');
    }

    public function update(Request $data){
        if(Auth::check()){
            $rules = [
                'name' => 'required',
                'surname' => 'required',
                'phone_number' => 'required|max:9|regex:/^\d+$/'
            ];

            $messages = [
                'name.required' => "Pole imię jest wymagane",
                'surname.required' => "Pole nazwisko jest wymagane",
                'phone_number.required' => "Numer telefonu jest wymagany",
                'phone_number.max' => "Zbyt długi numer telefonu",
                'phone_number.regex' => "Nieprawidłowy numer telefonu",
            ];

            $validator = Validator::make($data->all(), $rules, $messages);

            if ($validator->fails()) {
                return redirect()->route('account.dashboard')->withErrors($validator)->withInput();
            }

            $user = User::find(Auth::user()->id);

            $user->name = $data['name'];
            $user->surname = $data['surname'];
            $user->phone_number = $data['phone_number'];
            $user->save();
            return redirect()->route('account.dashboard');
        }
        return redirect()->route('login');
    }
}
