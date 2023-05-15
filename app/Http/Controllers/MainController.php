<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index(): View
    {
        $voivodeships = DB::select('select * from voivodeships');
        return view('main', ['voivodeships' => $voivodeships]);
    }
}
