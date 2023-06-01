@extends('layouts.mainLayout')

@if ($errors -> any())
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
@endif

@section('content')
    <div id="content" class="container-fluid">
        <div class='row mx-auto'>
            <div id="company" class='col-md-7 bg- company'>
                <div class='row'>
                    <div class='text-center fs-1'>{{ $company->name }}</div>
                    <hr>
                </div>
                <div class='row'>
                    <p class="col-md bi bi-telephone"> +48 {{ $company->phone_number }}</p>
                    <p class="bi bi-envelope-at"> {{ $company->e_mail }}</p>
                    <p class="bi bi-compass"> <a href="http://{{ $company->website }}" target='_blank'>{{ $company->website }}</a></p>
                    <hr>
                </div>

                <div class='row'>
                    <p>ul. {{ $company->address->street }} {{ $company->address->building_number }}</p>
                    <p>{{ $company->address->zip_code }} {{ $company->address->city }}</p>
                    <p>{{ $company->address->voivodeship->name }}</p>
                    <hr>
                    <p>NIP: {{ $company->nip }}</p>
                    <p>REGON: {{ $company->regon }}</p>
                    <hr>
                </div>
                
                <div class='row'>
                    <p>{{ $company->description }}</p>
                </div>
            </div>

            <div class='vr opacity-0'></div>

            <div id="opinions" class='col-md-4 company'>
                <div class='row'>
                    <div class='text-center fs-1'>Opinie</div>
                    <hr>
                </div>
                @foreach ( $company->reviews as $review)
                    <div class='row company mx-2 pt-2' style='box-shadow: 0.1em 0.1em 0.1em 0.1em gray;'>
                        <h4>{{ $review->title }}</h4>
                        <hr>
                        <p style='font-size: 0.8em'>{{ $review->description }}</p>
                        <p class='d-flex text-start justify-content-between'>{{ $review->user->name }} {{ $review->user->surname }}<i class="bi bi-star-fill"> {{ $review->rating }}/5</i></p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection