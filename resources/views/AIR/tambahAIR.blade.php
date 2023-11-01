<style>
    th{
        text-align: left;
    }

</style>
</head>
@include('includes.navigator')
<h1>Tambah Isi Rumah</h1>
<form action="{{url('/tambah-ahli')}}" method="POST">
    @csrf
    <table>
        <tr>
            <th>Nama:</th>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <th>No. Kad Pengenalan:</th>
            <td><input type="text" name="ic"></td>
        </tr>
        <tr>
            <th>Jantina:</th>
            <td><select name="jantina">
                <option>pilih</option>
                <option value="01">Lelaki</option>
                <option value="02">Perempuan</option>
            </select></td>
        </tr>
        <tr>
            <th>Tarikh Lahir</th>
            <td><input type="date" name="dob"></td>
        </tr>
        <tr>
            <th>No. Telefon:</th>
            <td><input type="text" name="telefon"></td>
        </tr>
        <tr>
            <th>e-mail:</th>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <th>Hubungan:</th>
            <td>
                <select name="hubungan">
                    <option>pilih</option>
                    <option value="01">suami/isteri</option>
                    <option value="02">anak</option>
                    <option value="03">ayah/ibu</option>
                    <option value="04">Atuk/Nenek</option>
                    <option value="05">abang/kaka/adik</option>
                    <option value="06">ayah/ibu saudara</option>
                    <option value="07">anak saudara</option>
                    <option value="08">rakan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>
