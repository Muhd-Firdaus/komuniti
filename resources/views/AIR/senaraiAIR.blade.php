<style>
    table, th, td {
      border:1px solid black;
    }
</style>
@include('includes.navigator')
<h1>Senarai Ahli</h1>

<a href="{{ url('/tambah-ahli') }}"><button>Tambah Ahli</button></a> <br>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div><br>
@endif
<table>
    <tr>
        <th rowspan="2">Nama</th>
        <th rowspan="2">IC</th>
        <th rowspan="2">Telefon</th>
        <th rowspan="2">emai</th>
        <th rowspan="2">Jantina</th>
        <th rowspan="2">Tarikh Lahir</th>
        <th rowspan="2">Hubungan</th>
        <th colspan="2">Action</th>
    </tr>
    <tr>
        <th>update</th>
        <th>delete</th>
    </tr>
    @foreach ($record as $item)
        <tr>
            <td>{{ $item->name ?? 'null' }}</td>
            <td>{{ $item->ic ?? 'null' }}</td>
            <td>{{ $item->telefon ?? 'null' }}</td>
            <td>{{ $item->email ?? 'null' }}</td>
            <td>{{ is_null($item->jantina) ? 'null' : ($item->jantina == '01' ? 'Lelaki' : 'Perempuan') }}</td>
            <td>{{ $item->dob ?? 'null' }}</td>
            <td>{{ is_null($item->role) ? 'null' : ($item->role == '1' ? 'KIR' : 'AIR') }}</td>
            <td>
                {{-- <a href="{{url('/edit-ahli/'.$item->id)}}"><button>edit</button></a> --}}
                <form action="{{ url('edit-ahli') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $item->id }}">
                    <input type="submit" value="edit">
                </form>
            </td>
            <td>
                <form action="{{ route('delete', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>                
            </td>
        </tr>
    @endforeach
</table>