@extends('layouts.mainLayout')

@section('content')

@if ($errors -> any())
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
@endif

<div class='container-fluid d-flex justify-content-center'>
    <form class='text-center' action="{{ route('login.authenticate') }}" method="POST"> 
        <div class="form-group">
            <label class='p-2' for="login">Login</label>
            <input type="text" class="form-control" name='login' required>
        </div>

        <div class="form-group">
            <label class='p-2' for="password">Hasło</label>
            <input type="password" class="form-control" name='password' required>
        </div>
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-primary m-2">Zaloguj</button>
        <hr>
        <p>Nie masz konta? <a href="{{ route('register') }}">Zarejestruj się!</a>
    </form>
</div>

@endsection