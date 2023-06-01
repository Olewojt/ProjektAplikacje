@extends('layouts.mainLayout')

@section('content')
<div class="container">
    <div class="company">
        <form method="POST" action={{ route('company.store') }}>
            <div class='row'>
                <div class='col-md-6 px-4'>
                    <label for='name' class='formLabels'>Nazwa firmy</label><br/>
                    <input type='text' name='name' class="form-control" maxlength=60 required>
                </div>
                <div class='col-md-6 px-4'>
                    <label for='phone_number' class='formLabels'>Telefon</label><br/>
                    <input type='text' name='phone_number' class="form-control"  maxlength=9 required>
                </div>
            </div>
            
            <div class='row'>
                <div class='col-md-6 px-4'>
                    <label for='e_mail' class='formLabels'>E-mail</label><br/>
                    <input type='email' name='e_mail' class="form-control"  maxlength=100 required>
                </div>
                <div class='col-md-6 px-4'>
                    <label for='website' class='formLabels'>Strona www</label><br/>
                    <input type='text' name='website' class="form-control"  maxlength=200 required>
                </div>
            </div>
            <hr>
            <div class='row'>
                <div class='col-md-6 px-4'>
                    <label for='street' class='formLabels'>Ulica</label><br/>
                    <input type='text' name='street' class="form-control"  maxlength=100 required>
                    <label for='building_number' class='formLabels'>Nr. budynku</label><br/>
                    <input type='text' name='building_number' class="form-control"  maxlength=10 required>
                    <label for='zip_code' class='formLabels'>Kod pocztowy</label><br/>
                    <input type='text' name='zip_code' class="form-control"  maxlength=6 required>
                </div>
                <div class='col-md-6 px-4'>
                        <label for='city' class='formLabels'>Miasto</label><br/>
                        <input type='text' name='city' class="form-control"  maxlength=100 required>
                        <label for='voivodeship' class='formLabels'>Województwo</label><br/>
                        <select name ='voivodeship' class="form-select">
                            <option selected></option>
                            @foreach ($voivodeship as $elem)
                                <option value={{ $elem->id }}>{{ $elem->name }}</option>
                            @endforeach
                        </select>
                        <label for='industry' class='formLabels'>Branża</label><br/>
                        <select name ='industry' class="form-select">
                            <option selected></option>
                            @foreach ($industry as $elem)
                                <option value={{ $elem->id }}>{{ $elem->name }}</option>
                            @endforeach
                        </select>
                </div>
            </div>
            <hr>
            <div class='row'>
                <div class='col-md-6 px-4'>
                    <label for='nip' class='formLabels'>NIP</label><br/>
                    <input type='text' name='nip' class="form-control"  maxlength=10 required>
                </div>

                <div class='col-md-6 px-4'>
                    <label for='regon' class='formLabels'>REGON</label><br/>
                    <input type='text' name='regon' class="form-control"  maxlength=14 required>
                </div>
            </div>

            <hr>

            <div class='row'>
                <div class='col-md-12 px-4'>
                    <label for='description' class='formLabels'>Opis</label><br/>
                    <textarea class="form-control" name="description" rows="3" maxlength=1024 required></textarea>
                </div>
            </div>
        
            <div class='row d-flex justify-content-around py-2'>
                <button type="submit" class="btn btn-success col-md-4">Akceptuj</button>
                <button type="reset" class="btn btn-warning col-md-4">Wyczyść</button>
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            </div>

            @if ($errors -> any())
            <div class='row d-flex justify-content-center py-2'>
                   @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
            </div>
            @endif
        </form>
    </div>
</div>
@endsection