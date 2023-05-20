<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function dashboard(){
        if (Auth::check()){
            $user = Auth::user();

            return view('dashboard', ['user' => $user]);
        }
        return redirect('/');
    }
}
