<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pending;

class AccountController extends Controller
{
    public function dashboard(){
        if (Auth::check()){
            $user = Auth::user();

            return view('dashboard', ['user' => $user]);
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
}
