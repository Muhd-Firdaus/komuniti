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
              <!-- Table with hoverable rows -->
              <br>
                <div class="datatable-top">
                    <div class="datatable-dropdown">
                        <a href="{{ url('/tambah-ahli') }}"><button type="button" class="btn btn-primary"><i class="bi bi-person-plus"></i> Tambah Ahli</button></a>
                    </div>
                </div>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">IC</th>
                        <th scope="col">Telefon</th>
                        <th scope="col">email</th>
                        <th scope="col">Jantina</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Hubungan</th>
                        <th scope="col" colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($record as $item)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $item->name ?? 'null' }}</td>
                            <td>{{ $item->ic ?? 'null' }}</td>
                            <td>{{ $item->telefon ?? 'null' }}</td>
                            <td>{{ $item->email ?? 'null' }}</td>
                            <td>{{ is_null($item->jantina) ? 'null' : ($item->jantina == '01' ? 'Lelaki' : 'Perempuan') }}</td>
                            <td>{{ $item->dob ?? 'null' }}</td>
                            <td>{{ is_null($item->hubungan) ? 'null' : ($item->hubungan == '01' ? 'KIR' : 'AIR') }}</td>
                            <td>
                                <a href="{{url('/edit-ahli/'.$item->id)}}"><button type="submit" class="btn btn-warning"><i class="bi bi-pen"></i></button></a>
                                {{-- <form action="{{ url('edit-ahli') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button type="submit" class="btn btn-warning"><i class="bi bi-pen"></i></button>
                                </form> --}}
                            </td>
                            @if ($item->hubungan !== '01')
                                <td>
                                    <form action="{{ route('delete', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                    </form>                
                                </td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- End Table with hoverable rows -->
            </div>
        </div>
    </section>
@endsection

