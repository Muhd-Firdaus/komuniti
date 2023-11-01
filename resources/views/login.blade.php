<h3>Selamat Datang</h3>
<form action="{{url('/login')}}" method="POST">
    @csrf
    <table>
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
            <td colspan="2"><input type="submit" value="login"></td>
        </tr>
    </table>
</form>