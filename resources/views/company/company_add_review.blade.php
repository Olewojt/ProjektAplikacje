@extends('layouts.mainLayout')

@if ($errors -> any())
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
@endif

@section('content')

<div class="container">
    <div class='col md-8'>
        <div class='row'>
            <h3 class='text-center'>Opinia dla firmy {{ $company->name }}</h3>
        </div>
        <div class='row'>
            <form method="POST" action={{ route('company.addReview', ['id'=>$company->id]) }}>
                <div class="form-group">
                    <label for="title">Tytuł</label>
                    <input type="text" name="title" class="form-control" maxlength=40>
                </div>

                <div class="form-group my-2">
                    <label for="description">Tresc opinii</label>
                    <textarea type="text" name='description' class="form-control" maxlength=512></textarea>
                </div>

                <div class="form-group my-2">
                    <label for="rating">Ilosc gwiazdek 1-5</label>
                    <input type="number" class="form-control" name='rating' max=5 min=1>
                </div>
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-primary my-2">Dodaj</button>
            </form>
        </div>
    </div>
</div>

@endsection