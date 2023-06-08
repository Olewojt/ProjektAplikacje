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
                @auth
                    @if(Auth::user()->id == $company->user_id | Auth::user()->privilege_id==2)
                        <div class='row mt-2'>
                            <a href={{ route('company.update', $company->id) }} class='col-md-6 text-center'><button class='btn btn-info'>Aktualizuj</button></a>
                            <a href={{ route('company.delete', $company->id) }} class='col-md-6 text-center mb-2'><button onclick="return confirm('Czy napewno chcesz usunąć?')" class='btn btn-danger'>Usuń</button></a>
                            <hr class='mb-0'>
                        </div>
                    @endauth
                @endauth

                <div class='row'>
                    <div class='text-center fs-1'>{{ $company->name }}</div>
                    <hr>
                </div>
                @if ( $company->logo != null )
                    <div class='row d-flex justify-content-center'>
                            <img class='text-center' alt="Nie udało się wczytać loga firmy :(" src={{ asset('storage/' . $company->logo) }} style='max-height:15em; max-width:30em'>
                            <hr class='mt-2'>
                    </div>
                @endif
                <div class='row'>
                    <p class="bi bi-person"> <a href={{ route('user.show', ['id' => $company->user->id]) }}>{{ $company->user->name }}</a></p>
                    <p class="bi bi-telephone"> +48 {{ $company->phone_number }}</p>
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

                @if (count($company->reviews) == 0)
                    <div class='row company mx-2 pt-2' style='box-shadow: 0.1em 0.1em 0.1em 0.1em gray;'>
                        <h4 class='text-center'>Brak opinii!</h4>
                    </div>
                @else
                    @foreach ( $company->reviews as $review)
                        <div class='row company mx-2 pt-2' style='box-shadow: 0.1em 0.1em 0.1em 0.1em gray;'>
                            <h4>{{ $review->title }}</h4>
                            <hr>
                            <p style='font-size: 0.8em'>{{ $review->description }}</p>
                            <p class='d-flex text-start justify-content-between'><a href={{ route('user.show', ['id' => $review->user->id]) }}>{{ $review->user->name }} {{ $review->user->surname }}</a><i class="bi bi-star-fill"> {{ $review->rating }}/5</i></p>
                        </div>
                    @endforeach
                @endif

                @auth
                    @if ( count($company->reviews->where('user_id', Auth::user()->id))==0 )
                        <div class='row mx-2 pt-2'>
                            <a href={{ route('company.addReview', ['id'=>$company->id]) }} class='btn btn-info'>Dodaj</a>
                        </div>
                    @endif
                @endauth
            </div>
        </div>
    </div>
@endsection