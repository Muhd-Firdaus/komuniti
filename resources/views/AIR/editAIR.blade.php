@extends('layouts\layout')

@section('title', 'Ahli Isi Rumah - Komuniti')

@section('content')
    <div class="pagetitle">
        <h1>Senarai Ahli Isi Rumah</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item">Ahli Isi Rumah</li>
            <li class="breadcrumb-item active">Senarai</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit Ahli</h5>

                <!-- General Form Elements -->
                <form action="{{url('/update-ahli')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $record->id }}">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" value="{{$record->name}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">No. Kad Pengenalan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="ic" value="{{$record->ic}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Jantina</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" name="jantina">
                                <option selected="">Open this select menu</option>
                                <option value="01" {{ ($record->jantina=='01')? "selected" : "" }}>Lelaki</option>
                                <option value="02" {{ ($record->jantina=='02')? "selected" : "" }}>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputDate" class="col-sm-2 col-form-label">Tarikh Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="dob" value="{{ $record->dob }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">No. Telefon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="telefon" value="{{$record->telefon}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">e-mail</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" value="{{$record->email}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Hubungan</label>
                        <div class="col-sm-10">
                            <select name="hubungan" class="form-select" aria-label="Default select example">
                                <option selected="">Open this select menu</option>
                                <option value="01" {{ ($record->hubungan ==='01')? "selected" : "" }}>suami/isteri</option>
                                <option value="02" {{ ($record->hubungan ==='02')? "selected" : "" }}>anak</option>
                                <option value="03" {{ ($record->hubungan ==='03')? "selected" : "" }}>ayah/ibu</option>
                                <option value="04" {{ ($record->hubungan ==='04')? "selected" : "" }}>Atuk/Nenek</option>
                                <option value="05" {{ ($record->hubungan ==='05')? "selected" : "" }}>abang/kaka/adik</option>
                                <option value="06" {{ ($record->hubungan ==='06')? "selected" : "" }}>ayah/ibu saudara</option>
                                <option value="07" {{ ($record->hubungan ==='07')? "selected" : "" }}>anak saudara</option>
                                <option value="08" {{ ($record->hubungan ==='08')? "selected" : "" }}>rakan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit Form</button>
                        </div>
                    </div>
                </form><!-- End General Form Elements -->
            </div>
        </div>
    </section>
@endsection

