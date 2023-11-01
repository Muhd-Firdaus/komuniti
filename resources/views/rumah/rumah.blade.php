@include('includes.navigator')
<h1>Maklumat Rumah</h1>

<table>
    <tr>
        <td><b>No Rumah:</b></td>
        <td>{{$record->no_rumah ?? 'null'}}</td>
    </tr>
    <tr>
        <td><b>Jalan:</b></td>
        <td>{{$record->jalan ?? 'null'}}</td>
    </tr>
</table>
<a href="{{url('/edit-rumah')}}"><button>edit</button></a>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif