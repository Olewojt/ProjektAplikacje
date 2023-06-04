<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

use App\Models\Voivodeship;
use App\Models\Company;
use App\Models\CompanyAddress;
use App\Models\Industry;
use Spatie\LaravelIgnition\Exceptions\ViewException;

class MainController extends Controller
{
    public function index(): View
    {
        return view('start');
    }
}
