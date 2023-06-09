@extends('layouts.mainLayout')

@section('content')
<script>
</script>
<div class="d-flex flex-column align-items-center">
    <div class='company col-md-8 col-12 my-2 py-2'>
        <div class='row'>
            <div class='text-center pt-3'>
                <h2>Witaj {{ $user->name }}!</h2>
                <hr>

                @if ($user->privilege_id==0)
                    <h5>Zwykły użytkownik</h5>
                    @if ( !isset($user->pending) )
                        <a href="{{ route('account.pending') }}"><button onclick="return confirm('Czy napewno chcesz wysłać prośbę o zostanie przedsiębiorcą?')" class='btn btn-info pb-0'><h6>Zostań przedsiębiorcą</h6></button></a>
                    @else
                        <h6>Twoja prośba o zostanie przedsiębiorcą czeka na potwierdzenie</h6>
                    @endif
                @elseif ($user->privilege_id==1)
                    <h5>Przedsiębiorca</h5>
                @elseif ($user->privilege_id==2)
                    <h5>Administrator</h5>
                @endif
                <hr>
            </div>
        </div>

        <form method="POST" action={{ route('account.update') }}>
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

            <div class='row'>
                <div class='col-md-6 px-4'>
                    <label for='phone_number' class='formLabels'>Numer telefonu</label><br/>
                    <input type='text' name='phone_number' value={{ $user->phone_number }} class="form-control" pattern='^\d+$' maxlength='9'>
                </div>
            </div>

            <div class='row d-flex justify-content-around py-2'>
                <button type="submit" class="btn btn-success col-md-4">Akceptuj</button>
                <button type="reset" class="btn btn-warning col-md-4">Wyczyść</button>
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            </div>
        </form>
        @if ( $errors->any() )
            <hr>
            @foreach($errors->all() as $err)
                <p>{{ $err }}</p>
            @endforeach
        @endif
    </div>


    @if ($user->privilege_id==2)
        <div class='company col-md-8 col-12 my-2 py-2'>
            <div class='row'>
                <div class='text-center pt-2'>
                    <h2>Prośby o zostanie przedsiębiorcą</h2>
                    <hr>
                </div>
            </div>
            
            @if (count($pending->where('accepted', 0)) != 0 )
                @foreach ( $pending->where('accepted', 0) as $pen)
                    <div class='row company mx-3 pt-2' style='box-shadow: 0.1em 0.1em 0.1em 0.1em gray;'>
                        <div class='d-flex justify-content-between py-1'>
                            <p>{{ $pen->user->name }} {{ $pen->user->surname }}</p>
                            <a href={{ route('user.show', ['id' => $pen->user->id]) }} class='btn btn-success mb-1'>Pokaż</a>
                        </div>
                    </div>
                @endforeach
            @else 
                <div class='row mx-3'>
                    <div class='col d-flex justify-content-center pb-2'>
                        </h5>Brak próśb</h5>
                    </div>
                </div>
            @endif 
        </div>
    @endif

    <div class='company col-md-8 col-12 my-2 py-2'>
        <div class='row'>
            <div class='text-center pt-2'>
                <h2>Twoje opinie</h2>
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
                    </h5>Nie masz jeszcze żadnych opinii</h5>
                </div>
            </div>
        @endif 
    </div>

    @if ($user->privilege_id==1 || $user->privilege_id==2)
        <div class='company col-md-8 col-12 my-2 py-2'>
            <div class='row'>
                <div class='text-center pt-2'>
                    <h2>Twoje przedsiębiorstwa</h2>
                    <hr>
                </div>
            </div>

            @if (count($user->companies)!=0)
                @foreach ( $user->companies as $company )
                    <div class='row company mx-3 pt-1' style='box-shadow: 0.1em 0.1em 0.1em 0.1em gray;'>
                        <div class='col d-flex justify-content-between p-2'>
                            <h3>{{ $company->name }}</h3>
                            <div>
                                <a href={{ route('company.update', $company->id) }}><button class='btn btn-info'>Aktualizuj</button></a>
                                <a href={{ route('company.delete', $company->id) }}><button onclick="return confirm('Czy napewno chcesz usunąć?')" class='btn btn-danger'>Usuń</button></a>
                                <a href={{ route('company.show', $company->id) }}><button class='btn btn-success'>Pokaż</button></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class='col d-flex justify-content-center pb-2'>
                    <a href={{ route('company.create') }}><button class='btn btn-success'>Dodaj</button><a>
                </div>
            @else 
                <div class='row mx-3'>
                    <div class='col d-flex justify-content-center pb-2'>
                        </h5>Nie masz jeszcze żadnych przedsiębiorstw</h5>
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
