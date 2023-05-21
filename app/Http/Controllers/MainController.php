<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

use App\Models\Voivodeship;
use App\Models\Company;
use App\Models\Industry;

class MainController extends Controller
{
    public function index(): View
    {
        $voivodeship = Voivodeship::all();
        $company = Company::all();
        $industry = Industry::all();
        return view('main', ['voivodeship' => $voivodeship, 'company' => $company, 'industry' => $industry]);
    }
}
