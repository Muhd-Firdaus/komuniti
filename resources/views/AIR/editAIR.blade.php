<style>
    th{
        text-align: left;
    }

</style>
</head>
@include('includes.navigator')
<h1>Edit Isi Rumah</h1>
<form action="{{url('/update-ahli')}}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $record->id }}">
    <table>
        <tr>
            <th>Nama:</th>
            <td><input type="text" name="nama" value="{{$record->name}}"></td>
        </tr>
        <tr>
            <th>No. Kad Pengenalan:</th>
            <td><input type="text" name="ic" value="{{$record->ic ?? 'null'}}"></td>
        </tr>
        <tr>
            <th>Jantina:</th>
            <td><select name="jantina">
                <option>pilih</option>
                <option value="01" {{ ($record->jantina=='01')? "selected" : "" }}>Lelaki</option>
                <option value="02" {{ ($record->jantina=='02')? "selected" : "" }}>Perempuan</option>
            </select></td>
        </tr>
        <tr>
            <th>Tarikh Lahir</th>
            <td><input type="date" name="dob" value="{{ $record->dob }}"></td>
        </tr>
        <tr>
            <th>No. Telefon:</th>
            <td><input type="text" name="telefon" value="{{ $record->telefon }}"></td>
        </tr>
        <tr>
            <th>e-mail:</th>
            <td><input type="email" name="email" value="{{ $record->email }}"></td>
        </tr>
        <tr>
            <th>Hubungan:</th>
            <td>
                <select name="hubungan">
                    <option>pilih</option>
                    <option value="01" {{ ($record->hubungan=='01')? "selected" : "" }}>suami/isteri</option>
                    <option value="02" {{ ($record->hubungan=='02')? "selected" : "" }}>anak</option>
                    <option value="03" {{ ($record->hubungan=='03')? "selected" : "" }}>ayah/ibu</option>
                    <option value="04" {{ ($record->hubungan=='04')? "selected" : "" }}>Atuk/Nenek</option>
                    <option value="05" {{ ($record->hubungan=='05')? "selected" : "" }}>abang/kaka/adik</option>
                    <option value="06" {{ ($record->hubungan=='06')? "selected" : "" }}>ayah/ibu saudara</option>
                    <option value="07" {{ ($record->hubungan=='07')? "selected" : "" }}>anak saudara</option>
                    <option value="08" {{ ($record->hubungan=='08')? "selected" : "" }}>rakan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>
