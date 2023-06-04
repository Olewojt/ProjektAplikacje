@extends('layouts.mainLayout')

@if ($errors -> any())
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
@endif

@section('content')
<script>
</script>
<div class="d-flex flex-column align-items-center">
    <div class='company col-md-8 col-12 my-2 py-2'>
        <div class='row'>
            <div class='text-center pt-3'>
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
                <div class='row'>
                    <div class='col-md-6 px-4'>
                        <label for='name' class='formLabels'>Imię</label><br/>
                        <input type='text' name='name' value={{ $user->name }} class="form-control" disabled>
                    </div>
                    <div class='col-md-6 px-4'>
                        <label for='surname' class='formLabels'>Nazwisko</label><br/>
                        <input type='text' name='surname' value={{ $user->surname }} class="form-control" disabled>
                    </div>
                </div>

                <div class='row pb-2'>
                    <div class='col-md-6 px-4'>
                        <label for='e_mail' class='formLabels'>Numer telefonu</label><br/>
                        <input type='email' name='e_mail' value={{ $user->e_mail }} class="form-control" disabled>
                    </div>
                    <div class='col-md-6 px-4'>
                        <label for='phone_number' class='formLabels'>Numer telefonu</label><br/>
                        <input type='text' name='phone_number' value={{ $user->phone_number }} class="form-control" disabled>
                    </div>
                </div>

            @endauth
        </div>
    </div>

    <div class='company col-md-8 col-12 my-2 py-2'>
        <div class='row'>
            <div class='text-center pt-2'>
                <h2>Opinie</h2>
                <hr>
            </div>
        </div>
        
        @if (count($user->reviews)!=0)
            @foreach ( $user->reviews as $review)
                <div class='row company mx-3 pt-2' style='box-shadow: 0.1em 0.1em 0.1em 0.1em gray;'>
                    <h4>{{ $review->title }}</h4>
                    <hr>
                    <p style='font-size: 0.8em'>{{ $review->description }}</p>
                    <p class='d-flex text-start justify-content-between'><a href={{ route('company.show', $review->company->id) }}>{{ $review->company->name }}</a><i class="bi bi-star-fill"> {{ $review->rating }}/5</i></p>
                </div>
            @endforeach
        @else 
            <div class='row mx-3'>
                <div class='col d-flex justify-content-center pb-2'>
                    </h5>Użytkownik nie dodał jeszcze żadnej opinii</h5>
                </div>
            </div>
        @endif 
    </div>

    @if ($user->privilege_id==1)
        <div class='company col-md-8 col-12 my-2 py-2'>
            <div class='row'>
                <div class='text-center pt-2'>
                    <h2>Przedsiębiorstwa</h2>
                    <hr>
                </div>
            </div>

            @if (count($user->companies)!=0)
                @foreach ( $user->companies as $company )
                    <div class='row company mx-3 pt-1' style='box-shadow: 0.1em 0.1em 0.1em 0.1em gray;'>
                        <div class='col d-flex justify-content-between p-2'>
                            <h3>{{ $company->name }}</h3>
                            <div>
                                <a href={{ route('company.show', $company->id) }}><button class='btn btn-success'>Pokaż</button></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else 
                <div class='row mx-3'>
                    <div class='col d-flex justify-content-center pb-2'>
                        </h5>Użytkownik aktualnie nie posiada przedsiębiorstw</h5>
                    </div>
                    <div class='col d-flex justify-content-center pb-2'>
                        <a href={{ route('company.create') }}><button class='btn btn-primary'>Dodaj</button><a>
                    </div>
                </div>
            @endif
        </div>
    @endif
</div>
@endsection