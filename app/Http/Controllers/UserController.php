<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pending;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
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
