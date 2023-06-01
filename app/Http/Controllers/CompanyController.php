<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyAddress;
use App\Models\Industry;
use App\Models\Voivodeship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $voivodeships = Voivodeship::all();
            $industries = Industry::all();
            return view('company/create_company', ['voivodeship'=>$voivodeships, 'industry'=>$industries]);
        }
        return redirect()->route('main');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $data)
    {
        $rules = [
            'name' => 'required|string|max:60',
            'phone_number' => 'required|max:9|regex:/^\d+$/',
            'e_mail' => 'required|email|max:100',
            'website' => 'required|string|max:200',
            'street' => 'required|max:100',
            'city' => 'required|max:100',
            'building_number' => 'required|max:10',
            'voivodeship' => 'required',
            'zip_code' => 'required|max:6',
            'nip' => 'required|max:10|unique:companies',
            'regon' => 'required|max:14|unique:companies',
            'description' => 'required|max:1024',
            'industry' => 'required',
        ];

        $messages = [
            'name.max' => "Pole nazwa jest za długie",
            'phone_number.max' => "Pole numer telefonu jest za długie",
            'e_mail.max' => "Pole e-mail jest za długie",
            'website.max' => "Pole strona jest za długie",
            'street.max' => "Pole ulica jest za długie",
            'city.max' => "Pole miasto jest za długie",
            'building_number.max' => "Pole nr. budynku jest za długie",
            'voivodeship.max' => "Pole województwo jest za długie",
            'zip_code.max' => "Pole kod pocztowy jest za długie",
            'nip.max' => "Pole nip jest za długie",
            'regon.max' => "Pole regon jest za długie",
            'desciption.max' => "Pole opis jest za długie",
            'name.required' => "Pole nazwa jest wymagane",
            'phone_number.required' => "Pole numer telefonu jest wymagane",
            'e_mail.required' => "Pole e-mail jest wymagane",
            'website.required' => "Pole strona jest wymagane",
            'street.required' => "Pole ulica jest wymagane",
            'city.required' => "Pole miasto jest wymagane",
            'building_number.required' => "Pole nr. budynku jest wymagane",
            'voivodeship.required' => "Pole województwo jest wymagane",
            'zip_code.required' => "Pole kod pocztowy jest wymagane",
            'nip.required' => "Pole nip jest wymagane",
            'regon.required' => "Pole regon jest wymagane",
            'description.required' => "Pole opis jest wymagane",
            'industry.required' => "Pole branża jest wymagane",
            'nip.unique' => "Podany nip już istnieje!",
            'regon.unique' => "Pole regon już istnieje!",
        ];

        $validator = Validator::make($data->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->route('company.create')->withErrors($validator)->withInput();
        }

        $company = new Company();
        $company->user_id = Auth::user()->id;
        $company->name = $data['name'];
        $company->phone_number = $data['phone_number'];
        $company->e_mail = $data['e_mail'];
        $company->website = $data['website'];
        $company->nip = $data['nip'];
        $company->regon = $data['regon'];
        $company->description = $data['description'];
        $company->industry_id = $data['industry'];

        $company->save();

        $company_address = new CompanyAddress();
        $company_address->company_id = $company->id;
        $company_address->voivodeship_id = $data['voivodeship'];
        $company_address->city = $data['city'];
        $company_address->street = $data['street'];
        $company_address->building_number = $data['building_number'];
        $company_address->zip_code = $data['zip_code'];

        $company_address->save();
        
        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $company = Company::find($id);
        if ($company == null){
            return view('notFound');
        }
        return view('company/company', ['company' => $company]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
