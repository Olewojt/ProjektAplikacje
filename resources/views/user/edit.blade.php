@extends('layouts.mainLayout')

@if ($errors -> any())
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
@endif

@section('content')
<div class="d-flex flex-column align-items-center">
    <div class='company col-md-8 col-12 my-2 py-2'>
        <div class='row'>
            <div class='text-center'>
                <h2>{{ $user->name }}  {{ $user->surname}}</h2>
                <hr>
                @if ($user->privilege_id==0)
                    @if ( isset($user->pending) )
                        @if ($user->pending->accepted == 0)
                            <h5>Zwykły użytkownik (oczekujące)</h5>
                            @auth
                                @if ( Auth::user()->privilege_id==2 )
                                <a class='btn btn-success mb-1' href={{ route('user.accept', ['id' => $user->id]) }} onclick='return confirm("Czy napewno chcesz potwierdzić?")'>Potwierdź</a>
                                @endif
                            @endauth
                        @endif
                    @else
                        <h5>Zwykły użytkownik</h5>
                    @endif
                @elseif ($user->privilege_id==1)
                    <h5>Przedsiębiorca</h5>
                @elseif ($user->privilege_id==2)
                    <h5>Administrator</h5>
                @endif
                @auth
                    @if(Auth::user()->privilege_id==2)
                        <hr>
                    @endif
                @endauth
            </div>

            @auth 
                <form method='POST' route={{ route('user.update', ['id' => $user->id]) }}>
                    <div class='row'>
                        <div class='col-md-6 px-4'>
                            <label for='name' class='formLabels'>Imię</label><br/>
                            <input type='text' name='name' value={{ $user->name }} class="form-control">
                        </div>
                        <div class='col-md-6 px-4'>
                            <label for='surname' class='formLabels'>Nazwisko</label><br/>
                            <input type='text' name='surname' value={{ $user->surname }} class="form-control">
                        </div>
                    </div>

                    <div class='row pb-2'>
                        <div class='col-md-6 px-4'>
                            <label for='e_mail' class='formLabels'>E-mail</label><br/>
                            <input type='email' name='e_mail' value={{ $user->e_mail }} class="form-control">
                        </div>
                        <div class='col-md-6 px-4'>
                            <label for='phone_number' class='formLabels'>Numer telefonu</label><br/>
                            <input type='text' name='phone_number' value={{ $user->phone_number }} class="form-control">
                        </div>
                    </div>

                    <div class='row d-flex justify-content-around py-2'>
                        <button type="submit" class="btn btn-success col-md-4">Akceptuj</button>
                        <button type="reset" class="btn btn-warning col-md-4">Wyczyść</button>
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                    </div>
                </form>
            @endauth
        </div>
    </div>
@endsection