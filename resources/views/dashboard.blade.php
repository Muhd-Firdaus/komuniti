@extends('layouts\layout')

@section('title', 'Dashboard - Banci Pertanian')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- Slides only carousel -->
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/img/banner3.png" class="d-block w-100" alt="...">
                  </div>
                </div>
              </div><!-- End Slides only carousel-->

            </div>
          </div>
    </section>
@endsection

