@extends('layouts\layout')

@section('title', 'Rumah - Komuniti')

@section('content')
    <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Rumah</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="card">
        <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
            </li>

            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
            </li>

            </ul>
            <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">Butir-butir Rumah / House Details</h5>

                <div class="row">
                <div class="col-lg-3 col-md-4 label ">No. Rumah / House No.</div>
                <div class="col-lg-9 col-md-8">{{ $record->no_rumah ?? 'Sila Lengkapkan' }}</div>
                </div>

                <div class="row">
                <div class="col-lg-3 col-md-4 label">Jalan / Street</div>
                <div class="col-lg-9 col-md-8">{{ $record->jalan ?? 'Sila Lengkapkan' }}</div>
                </div>
            </div>

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                <!-- Profile Edit Form -->
                <form action="/update-rumah" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">No. Rumah / House No.</label>
                        <div class="col-md-8 col-lg-9">
                        <input name="no_rumah" type="text" class="form-control" id="noRumah" value="{{ $record->no_rumah ?? null }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Jalan / Street</label>
                        <div class="col-md-8 col-lg-9">
                        <input name="jalan" type="text" class="form-control" id="jalan" value="{{ $record->jalan ?? null }}">
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form><!-- End Profile Edit Form -->

            </div>

            </div><!-- End Bordered Tabs -->

        </div>
        </div>
    @endsection