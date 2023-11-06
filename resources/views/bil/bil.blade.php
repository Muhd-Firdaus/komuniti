@extends('layouts\layout')

@section('title', 'Bil Rumah - Komuniti')

@section('content')
    <div class="pagetitle">
        <h1>Bil Rumah</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Bil Rumah</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-4">
                <div class="card info-card revenue-card">
                    <div class="card-body">
                        <h5 class="card-title">Caj Semasa</h5>
                          <div class="ps-3">
                            <h6>RM {{ $currentbil->caj + $currentbil->tunggakan }}</h6>
                            <span class="text-muted small pt-2 ps-1">Caj semasa: </span><span class="text-primary small pt-1 fw-bold">RM {{ $currentbil->caj }}</span>
                            <br>
                            <span class="text-muted small pt-2 ps-1">Tunggakan: </span><span class="text-danger small pt-1 fw-bold">RM {{ $currentbil->tunggakan }}</span>
                            <br>
                            <span class="text-muted small pt-2 ps-1">Tarikh Bil: </span><span class="text-dark small pt-1 fw-bold">{{ $currentbil->tarikh_bil }}</span>
                            <span class="text-muted small pt-2 ps-1">Status: </span>
                            @if ($currentbil->status === 1)
                                <span class="text-success small pt-1 fw-bold">Telah Dibayar</span>
                            @else
                                <span class="text-danger small pt-1 fw-bold">Belum Dibayar</span>
                            @endif
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                    <!-- Table with hoverable rows -->
                    <br>
                        <div class="datatable-top">
                            <h4>Senarai Bil</h4>
                            {{-- <div class="datatable-dropdown">
                                <a href="{{ url('/tambah-ahli') }}"><button type="button" class="btn btn-primary"><i class="bi bi-person-plus"></i> Tambah Ahli</button></a>
                            </div> --}}
                        </div>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Bulan</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">status</th>
                                <th scope="col" colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($record as $item)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $item->tarikh_bil ?? 'null' }}</td>
                                    <td>RM {{ $item->caj+$item->tunggakan ?? 'null' }}</td>
                                    <td>
                                        @if ($item->status === 1)
                                            <span class="text-success small pt-1 fw-bold">Telah Dibayar</span>
                                        @else
                                            <span class="text-danger small pt-1 fw-bold">Belum Dibayar</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{url('/edit-ahli/'.$item->id)}}"><button type="submit" class="btn btn-warning"><i class="bi bi-pen"></i></button></a>
                                        {{-- <form action="{{ url('edit-ahli') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <button type="submit" class="btn btn-warning"><i class="bi bi-pen"></i></button>
                                        </form> --}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with hoverable rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

