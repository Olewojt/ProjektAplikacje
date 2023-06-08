@extends('layouts.mainLayout')

@section('content')
<div id="content" class="container-fluid">
    <div class="row">
        <section id="companies" class="col-md-9">
            @if (count($companies)!=0)
                @foreach ($companies as $company)
                    <div class='row company mx-0'>
                        <div class='col-md-9' style='padding:1em'>
                            <div class='row d-flex justify-content-between'>
                                <a href={{ route('company.show', $company->id) }} class='col h3 text-decoration-none'>{{ $company->name }}</a>
                            </div>

                            <div class='row'>
                                <h6>+48 {{ $company->phone_number }}</h6>
                            </div>

                            <div class='row'>
                                <p class='trunc'>{{ $company->description }}</p>
                                <hr>
                                <div class='col'>
                                    <p class='col text-start mb-0'>Branża: <b>{{ $company->industry->name }}</b></p>
                                </div>
                                <div class='col'>
                                    <p class='col text-end mb-0'>
                                        @if ($company->average_rating != 0)
                                            <i class="bi bi-star-fill"> {{ $company->average_rating }}/5</i>
                                        @else
                                            <i class="bi bi-star-fill"> Brak opinii</i>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class='vr col-md-1 bg-success'></div>
                        <div class='col d-flex align-items-center justify-content-center'>
                            @if ($company->logo != null)
                                <a href={{ route('company.show', $company->id) }}><img class='text-center' alt="Nie udało się wczytać loga firmy :(" src={{ asset('storage/'.$company->logo) }} style='max-height:5em; max-width:5em'></a>
                            @else
                                <p>Brak loga</p>
                            @endif
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    {{ $companies->links('layouts.pagination') }}
                </div>
            @else 
                <div class='row company'>
                    <h3 class='text-center my-2'>Brak wyników!</h3>
                </div>
            @endif
        </section>

        <section id="filters" class="col-md-3">
            <div class="col">
                <form id="filtersForm" method="GET" action={{ route('company.search') }}>
                    <h4 style="text-align:center;">Filtry</h4>
                    <hr>

                    <label class="formLabels" for='name'>Nazwa</label>
                    <input type="text" class="form-control" name='name' value="{{ Request::old('name') }}" placeholder="Nazwa firmy">

                    <label class="formLabels">Województwo</label>
                    <select class="form-select" name='voivodeship'>
                        <option value='0'></option>
                        @foreach ($voivodeship as $elem)
                            <option @if($elem->id==old('voivodeship')) selected @endif value="{{ $elem->id }}">{{ $elem->name }}</option>
                        @endforeach
                    </select>

                    <label class="formLabels">Branża</label>
                    <select class="form-select" name='industry'>
                        <option value='0'></option>
                        @foreach ($industry as $elem)
                            <option @if($elem->id==old('industry')) selected @endif value={{ $elem->id }}>{{ $elem->name }}</option>
                        @endforeach
                    </select>

                    <label class="formLabels">Opinie</label>
                    <select class="form-select" name='order'>
                        <option selected value="0"></option>
                        <option value="asc">Rosnąco</option>
                        <option value="desc">Malejąco</option>
                    </select>

                    <button type="submit" class="btn btn-success searchButton">Szukaj</button>
                </form>
            </div>
        </section>
    </div>
</div>
@endsection