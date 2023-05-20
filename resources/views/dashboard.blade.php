@extends('layouts.mainLayout')

@section('content')
<div class="d-flex flex-column align-items-center">
    <div class='company col-md-8 my-2'>
        <div class='row'>
            <div class='text-center pt-3'>
                <h2>Witaj {{ $user->name }}!</h2>
                <hr>
            </div>
        </div>

        <form method="POST">
            <div class='row'>
                <div class='col-md-6 px-4'>
                    <label for='name' class='formLabels'>Imię</label><br/>
                    <input type='text' name='name' placeholder={{ $user->name }} class="form-control">
                </div>
                <div class='col-md-6 px-4'>
                    <label for='surname' class='formLabels'>Nazwisko</label><br/>
                    <input type='text' name='name' placeholder={{ $user->surname }} class="form-control">
                </div>
            </div>

            <div class='row'>
                <div class='col-md-6 px-4'>
                    <label for='e_mail' class='formLabels'>E-mail</label><br/>
                    <input type='email' name='e_mail' placeholder={{ $user->e_mail }} class="form-control" disabled>
                </div>
                <div class='col-md-6 px-4'>
                    <label for='phone_number' class='formLabels'>Numer telefonu</label><br/>
                    <input type='text' name='phone_number' placeholder={{ $user->phone_number }} class="form-control" maxlength='9'>
                </div>
            </div>

            <div class='row d-flex justify-content-around py-2'>
                <button type="submit" class="btn btn-success col-md-4">Akceptuj</button>
                <button type="reset" class="btn btn-warning col-md-4">Wyczyść</button>
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            </div>
        </form>
    </div>

    <div class='company col-md-8 my-2'>
        <div class='row'>
            <div class='text-center pt-2'>
                <h2>Twoje opinie</h2>
                <hr>
            </div>
        </div>

        @foreach ( $user->reviews as $review)
            <div class='row'>
                <h2>{{ $review->title }}</h2>
                <p>{{ $review->description }}</p>
                <p>{{ $review->company->name }}</p>
            </div>
        @endforeach
    </div>

    <div class='company col-md-8 my-2'>
        <div class='row'>
            <div class='text-center pt-2'>
                <h2>Twoje przedsiębiorstwa</h2>
                <hr>
            </div>
        </div>

        <div class='row'>

        </div>
    </div>
</div>
@endsection
