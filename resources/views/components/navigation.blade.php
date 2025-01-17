<nav>
    <a href="{{ route('home') }}">Home</a>
    @auth
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @else
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    @endauth
</nav>
