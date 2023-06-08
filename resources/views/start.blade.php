@extends('layouts.mainLayout')

@section('content')
<div class='container'>
    <h1 class='text-center'>Katalog firm</h1>
    <hr>
    <section id="filters" class="col-md-12">
        <div class="col">
            <form class='my-4 text-center' method="GET" action={{ route('company.search') }}>
                <h4 style="text-align:center;">Wyszukaj</h4>
                <hr>

                <label class="formLabels" for='name'>Nazwa</label>
                <input type="text" class="form-control" name='name' pla$err = [];ceholder="Nazwa firmy">

                <label class="formLabels">Województwo</label>
                <select class="form-select" name='voivodeship'>
                    <option value='0' selected></option>
                    @foreach ($voivodeship as $elem)
                        <option value="{{ $elem->id }}">{{ $elem->name }}</option>
                    @endforeach
                </select>

                <label class="formLabels">Branża</label>
                <select class="form-select" name='industry'>
                    <option value='0' selected></option>
                    @foreach ($industry as $elem)
                        <option value={{ $elem->id }}>{{ $elem->name }}</option>
                    @endforeach
                </select>

                <label class="formLabels">Opinie</label>
                <select class="form-select" name='order'>
                    <option selected value="0"></option>
                    <option value="asc">Najgorsze</option>
                    <option value="desc">Najgorsze</option>
                </select>

                <button type="submit" class="btn btn-success w-75 mt-3">Szukaj</button>
            </form>
        </div>
    </section>

    <div class='text-center mb-5'>
        <a href={{ route('company.index') }} class='btn btn-success w-75'>Pokaż wszystkie firmy!</a>
    </div>
</div>
@endsection