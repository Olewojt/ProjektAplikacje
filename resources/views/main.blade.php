@extends('layouts.mainLayout')

@section('content')
<div id="content" class="container-fluid">
    <div class="row">
        <section id="companies" class="col-md-9">
            @foreach ($company as $company)
                <div class='row company'>
                <section class='col' style='padding:1em'>
                    <div class='row d-flex justify-content-between'>
                        <h3 class='col'>{{ $company->name }}</h3>
                        <h5 class='col text-end'>{{ $company->industry->name }}</h5>
                    </div>

                    <div class='row'>
                        <h6>+48 {{ $company->phone_number }}</h6>
                    </div>

                    <div class='row'>
                        <p>{{ $company->description }}</p>
                    </div>
                </section>

                <div class='vr bg-success'></div>

                <section class='col-2 d-flex align-items-center justify-content-center'>
                    <a href={{ route('company.show', $company->id) }}><button class='btn btn-info'>Więcej</button></a>
                </section>
                </div>
            @endforeach
        </section>

        <section id="filters" class="col-md-3">
            <div class="col">
                <form id="filtersForm">
                    <h4 style="text-align:center;">Filtry</h4>
                    <hr>

                    <label class="formLabels">Nazwa</label>
                    <input type="text" class="form-control" placeholder="Nazwa firmy">

                    <label class="formLabels">Województwo</label>
                    <select class="form-select">
                        <option selected></option>
                        @foreach ($voivodeship as $elem)
                            <option value="{{ $elem->id }}">{{ $elem->name }}</option>
                        @endforeach
                    </select>

                    <label class="formLabels">Branża</label>
                    <select class="form-select">
                        <option selected></option>
                        @foreach ($industry as $elem)
                        @endforeach
                    </select>

                    <label class="formLabels">Opinie</label>
                    <select class="form-select">
                        <option selected value="1">Najlepsze</option>
                        <option value="2">Najgorsze</option>
                    </select>

                    <button type="submit" class="btn btn-success searchButton">Szukaj</button>
                </form>
            </div>
        </section>
    </div>
</div>
@endsection