@extends('layouts.mainLayout')

@section('content')
<div class="container">
    <div class="company">
        <form method="POST" action={{ route('company.update', ['id'=>$company->id]) }} enctype='multipart/form-data'>
            <div class='row'>
                <div class='col-md-6 px-4'>
                    <label for='name' class='formLabels'>Nazwa firmy</label><br/>
                    <input type='text' name='name' value="{{ $company->name }}" class="form-control" maxlength=60>
                </div>
                <div class='col-md-6 px-4'>
                    <label for='phone_number' class='formLabels'>Telefon</label><br/>
                    <input type='text' name='phone_number' value="{{ $company->phone_number }}" class="form-control" pattern='^\d+$' maxlength=9>
                </div>
            </div>
            
            <div class='row'>
                <div class='col-md-6 px-4'>
                    <label for='e_mail' class='formLabels'>E-mail</label><br/>
                    <input type='email' name='e_mail' class="form-control"  maxlength=100 value="{{ $company->e_mail }}">
                </div>
                <div class='col-md-6 px-4'>
                    <label for='website' class='formLabels'>Strona www</label><br/>
                    <input type='text' name='website' class="form-control"  maxlength=200 value="{{ $company->website }}">
                </div>
            </div>
            <hr>
            <div class='row'>
                <div class='col-md-6 px-4'>
                    <label for='street' class='formLabels'>Ulica</label><br/>
                    <input type='text' name='street' class="form-control"  maxlength=100 value="{{ $company->address->street }}">
                    <label for='building_number' class='formLabels'>Nr. budynku</label><br/>
                    <input type='text' name='building_number' class="form-control"  maxlength=10 value="{{ $company->address->building_number }}">
                    <label for='zip_code' class='formLabels'>Kod pocztowy</label><br/>
                    <input type='text' name='zip_code' class="form-control" pattern='^\d{2}-\d{3}$' maxlength=6 value="{{ $company->address->zip_code }}">
                </div>
                <div class='col-md-6 px-4'>
                        <label for='city' class='formLabels'>Miasto</label><br/>
                        <input type='text' name='city' class="form-control"  maxlength=100 value="{{ $company->address->city }}">
                        <label for='voivodeship' class='formLabels'>Województwo</label><br/>
                        <select name ='voivodeship' class="form-select">
                            <option value={{ $company->address->voivodeship->id }} selected>{{ $company->address->voivodeship->name }}</option>
                            @foreach ($voivodeship as $elem)
                                <option value={{ $elem->id }}>{{ $elem->name }}</option>
                            @endforeach
                        </select>
                        <label for='industry' class='formLabels'>Branża</label><br/>
                        <select name ='industry' class="form-select">
                            <option value={{ $company->industry->id }} selected>{{ $company->industry->name }}</option>
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
                    <input type='text' name='nip' class="form-control"  maxlength=10 value="{{ $company->nip }}">
                </div>

                <div class='col-md-6 px-4'>
                    <label for='regon' class='formLabels'>REGON</label><br/>
                    <input type='text' name='regon' class="form-control"  maxlength=14 value="{{ $company->regon}}">
                </div>
            </div>

            <hr>

            <div class='row'>
                <div class='col-md-6 px-4'>
                    <label for='logo' class='formLabels'>Logo</label><br/>
                    <input type='file' accept='.svg' class='form-control' name='logo'>
                </div>
            </div>
            
            <hr>

            <div class='row'>
                <div class='col-md-12 px-4'>
                    <label for='description' class='formLabels'>Opis</label><br/>
                    <textarea class="form-control" name="description" rows="3" maxlength=1024>{{ $company->description }}</textarea>
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