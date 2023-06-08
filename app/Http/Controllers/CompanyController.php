<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyAddress;
use App\Models\Industry;
use App\Models\Review;
use App\Models\Voivodeship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voivodeship = Voivodeship::all();
        $company = Company::all();
        // $avgRating = [];
        // foreach ($company as $elem){
        //     if(!empty($elem->reviews->all())){
        //         $avg = 0;
        //         foreach ($elem->reviews->all() as $rating){
        //             $avg = $avg + $rating->rating;
        //         }
        //         $avg = $avg/count($elem->reviews->all());
        //         array_push($avgRating, ['id'=>$elem->id, 'avg'=> $avg]);
        //     } else {
        //         array_push($avgRating, ['id'=>$elem->id, 'avg'=> 'Brak opinii']);
        //     }
        // }
        $industry = Industry::all();
        return view('main', ['voivodeship' => $voivodeship, 'company' => $company, 'industry' => $industry]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
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
    public function edit(int $id)
    {
        if (Auth::check()){
            $company = Company::find($id);
            if ($company->user_id==Auth::user()->id || Auth::user()->privilege_id==2){
                $voivodeships = Voivodeship::all();
                $industries = Industry::all();
                if ($company == null){
                    return view('notFound');
                }
                return view('company/update_company', ['company' => $company, 'voivodeship' => $voivodeships, 'industry' => $industries]);
            }
            return redirect('main');
        }
        return redirect('main');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $data, int $id)
    {
        $company = Company::find($id);
        $company_address = CompanyAddress::find($company->address->id);
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
            'nip' => 'required|max:10',
            'regon' => 'required|max:14',
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
        ];

        $validator = Validator::make($data->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

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

        $company_address->company_id = $company->id;
        $company_address->voivodeship_id = $data['voivodeship'];
        $company_address->city = $data['city'];
        $company_address->street = $data['street'];
        $company_address->building_number = $data['building_number'];
        $company_address->zip_code = $data['zip_code'];

        $company_address->save();

        return redirect()->route('company.show', ['id'=>$company->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $company = Company::find($id);
        if($company==null){
            return view('notFound');
        }
        if (Auth::check()){
            $company_owner = $company->user_id;
            if($company->user_id==Auth::user()->id){
                $company->destroy($id);
                return redirect()->to('/dashboard');
            } else if(Auth::user()->privilege_id==2){
                $company->destroy($id);
                return redirect()->to('/user/'.$company_owner);
            }
            return redirect('main');
        }
        return redirect('main');
    }

    public function review_form(int $id){
        $company = Company::find($id);
        if($company==null){
            return view('notFound');
        }

        return view('company/company_add_review', ['company'=>$company]);
    }

    public function review_add(int $id, Request $data){
        $company = Company::find($id);
        if($company==null){
            return view('notFound');
        }

        $rules = [
            'title' => 'required|string|max:40',
            'description' => 'required|string|max:512',
            'rating' => 'required|numeric|min:1|max:5',
        ];

        $messages = [
            'title.required' => "Pole tytuł jest wymagane",
            'description.required' => "Pole opis jest wymagane",
            'rating.required' => "Pole ocena jest wymagane",
            'title.max' => "Pole tytuł jest za długie",
            'description.max' => "Pole opis jest za długie (512 znaków)",
            'rating.min' => "Pole ocena musi zawierać się w przedziale od 1 do 5",
            'rating.max' => "Pole ocena musi zawierać się w przedziale od 1 do 5",
            'rating.numeric' => "Pole ocena musi być liczbą",
        ];

        $validator = Validator::make($data->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $review = new Review();
        $review->user_id = Auth::user()->id;
        $review->company_id = $id;
        $review->title = $data['title'];
        $review->description = $data['description'];
        $review->rating = $data['rating'];
        $review->save();
        
        return redirect()->route('company.show', ['id'=>$company->id]);
    }

    public function search(Request $request)
    {
        $query = Company::query();

        if ($request->has('name') & strlen($_GET['name'])!=0) {
            $query->where('name', 'LIKE', '%'.$request->input('name').'%');
        }

        if ($request->has('voivodeship') & $_GET['voivodeship']!='0') {
            $query
            ->join('company_address', 'companies.id', '=', 'company_address.company_id')
            ->where('company_address.voivodeship_id', $request->input('voivodeship'));
        }

        if ($request->has('industry') & $_GET['industry']!='0') {
            $query->where('companies.industry_id', $request->input('industry'));
        }

        if ($request->has('order') & $_GET['order']!='0') {
            if ($request->input('order') == 'asc' | $request->input('order') == 'desc'){
                $query->orderBy('average_rating', $request->input('order'));
            }
        }

        $company = $query->get();
        $voivodeship = Voivodeship::all();
        $industry = Industry::all();
        session()->flashInput($request->input());

        return view('main', ['voivodeship' => $voivodeship, 'company' => $company, 'industry' => $industry]);
    }
}
