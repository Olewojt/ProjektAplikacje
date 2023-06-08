<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pending;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $user = User::find($id);
        if ($user==null){
            return view('notFound');
        }

        return view('user.user', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $user = User::find($id);
        if ($user==null){
            return view('notFound');
        }

        return view('user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $data, int $id)
    {
        if (Auth::user()->privilege_id == 2){
            $rules = [
                'name' => 'required',
                'surname' => 'required',
                'phone_number' => 'required|max:9|regex:/^\d+$/',
                'e_mail' => 'required|email'
            ];
    
            $messages = [
                'name.required' => "Pole imię jest wymagane",
                'surname.required' => "Pole nazwisko jest wymagane",
                'phone_number.required' => "Numer telefonu jest wymagany",
                'phone_number.max' => "Zbyt długi numer telefonu",
                'phone_number.regex' => "Nieprawidłowy numer telefonu",
                'e_mail.required' => "Pole e-mail jest wymagane",
                'e_mail.email' => "Nieprawidłowy e-mail",
            ];
    
            $validator = Validator::make($data->all(), $rules, $messages);
    
            if ($validator->fails()) {
                return redirect()->route('user.edit', ['id' => $id])->withErrors($validator)->withInput();
            }
    
            $user = User::find($id);
    
            $user->name = $data['name'];
            $user->surname = $data['surname'];
            $user->phone_number = $data['phone_number'];
            $user->e_mail = $data['e_mail'];
            $user->save();
            return redirect()->route('user.show', ['id' => $id]);
        }
        return redirect('login');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $user = User::find($id);
        if($user==null){
            return view('notFound');
        }
        if (Auth::user()->privilege_id == 2){
            $user->destroy($id);
        }
        return redirect('main');
    }

    public function accept(int $id){
        if(Auth::check()) {
            $user = User::find($id);
            if ($user == null){
                return redirect('main');
            }
            $admin = Auth::user();
            if ($admin->privilege_id == 2){
                if (!is_null($user->pending)){
                    $pen = Pending::find($user->pending->id);
                    $pen->accepted = 1;
                    $pen->save();

                    $user->privilege_id = 1;
                    $user->save();
                }
                return redirect()->route('user.show', ['id' => $user->id]);
            }
        }
        return redirect()->route('login');
    }
}
