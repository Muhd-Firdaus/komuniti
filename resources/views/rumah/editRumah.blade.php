<h3>Maklumat Rumah</h3>
<form action="{{url('/update-rumah')}}" method="POST">
    @csrf
    <table>
        <tr>
            <td><b>No Rumah:</b></td>
            <td><input type="text" name="no_rumah" value="{{$record->no_rumah ?? 'null'}}"></td>
        </tr>
        <tr>
            <td><b>Jalan:</b></td>
            <td><input type="text" name="jalan" value="{{$record->jalan ?? 'null'}}"></td>
        </tr>
    </table>
    <input type="hidden" name="id"  value="{{$record->id ?? 'null'}}">
    <input type="submit" value="submit">
</form>