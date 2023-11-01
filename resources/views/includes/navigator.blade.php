
<h3>navigator</h3>

<ul>
    <li><a href="{{url("/rumah")}}"><button>Rumah</button></a></li>
    <li><a href="{{url("/ahli")}}"><button>Ahli</button></a></li>
    <li>
        <form action="{{ url('/logout') }}" method="POST">
            @csrf
            @method('POST')
            <button type="submit">Logout</button>
        </form>
    </li>
</ul>

