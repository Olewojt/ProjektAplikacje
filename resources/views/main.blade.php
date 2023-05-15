@extends('layouts.mainLayout')

@section('content')
<div id="content" class="container-fluid">
    <div class="row">
        <section id="companies" class="col-md-9">
            <?php
            $fname = storage_path('dane.txt');
            ($file = fopen($fname, 'r')) or die('Some file error!');
            for ($i = 0; $i < 10; $i++) {
                $name = fgets($file);
                $number = fgets($file);
                $lorem = fgets($file);
                // printf('<br/>%s<br/>%s<br/>%s<br/>', $name, $number, $lorem);
                printf(
                    "
                            <div class='row company'>
                            <section class='col' style='padding:1em'>
                                <h3>%s</h3>
                                <h6>+48 %s</h6>
                                <p>%s</p>
                            </section>
            
                            <div class='vr bg-success'></div>
            
                            <section class='col-2 d-flex align-items-center justify-content-center'>
                                <button class='btn btn-info'>Więcej</button>
                            </section>
                            </div>
                            ",
                    $name,
                    $number,
                    $lorem,
                );
            }
            fclose($file);
            ?>
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
                        @foreach ($voivodeships as $elem)
                            <option value="{{ $elem->id }}">{{ $elem->name }}</option>
                        @endforeach
                    </select>

                    <label class="formLabels">Branża</label>
                    <select class="form-select">
                        <option selected></option>
                        <option value="1">Górnicza</option>
                        <option value="2">Spożywcza</option>
                        <option value="3">IT</option>
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