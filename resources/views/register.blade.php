<h3>Selamat Datang</h3>
<p>Daftar Akaun</p>
<form action="{{url('/register')}}" method="POST">
    @csrf
    <table>
        <tr>
            <th>
                Nama:
            </th>
            <td>
                <input type="text" name="nama">
            </td>
        </tr>
        <tr>
            <th>
                email:
            </th>
            <td>
                <input type="email" name="email">
            </td>
        </tr>
        <tr>
            <th>
                password:
            </th>
            <td>
                <input type="password" name="password">
            </td>
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
            <td colspan="2"><input type="submit" value="login"></td>
        </tr>
    </table>
</form>