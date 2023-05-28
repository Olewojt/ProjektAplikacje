@extends('layouts.mainLayout')

@section('content')

<div class='container-fluid d-flex justify-content-center'>
    <form class='text-center' action="{{ route('register.store') }}" method="POST"> 
        <div class="row">
            <div class="form-group col-md-6">
                <label class='p-2' for="login">Login</label>
                <input type="text" class="form-control" name='login' required maxlength=50>
            </div>
        
            <div class="form-group col-md-6">
                <label class='p-2' for="name">Imię</label>
                <input type="text" class="form-control" name='name' required maxlength=60>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label class='p-2' for="password">Hasło</label>
                <input type="password" class="form-control" name='password' required maxlength=255 minlength=8> 
            </div>
    
            <div class="form-group col-md-6">
                <label class='p-2' for="name">Nazwisko</label>
                <input type="text" class="form-control" name='surname' required maxlength=60>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label class='p-2' for="email">E-Mail</label>
                <input type="email" class="form-control" name='e_mail' required maxlength=100>
            </div>
    
            <div class="form-group col-md-6">
                <label class='p-2' for="name">Numer telefonu</label>
                <input type="text" class="form-control" name='phone_number' required maxlength=9>
            </div>
        </div>

        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-primary m-2">Zarejestruj</button>
        <hr>
        @if ($errors -> any())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif
    </form>
</div>

@endsection