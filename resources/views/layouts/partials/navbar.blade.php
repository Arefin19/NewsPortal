<nav class="navbar">

    <div>
        <h1 class="logo">WebWire Tribune</h1>
    </div>

    <div class="nav-item">
        <li><a href="/">Home</a></li>
        <li><a href="/category">Category</a></li>
        <li><a href="/contactus">Contact</a></li>
        @auth
            <li><a href="/politics">Politics</a></li>
            <li><a href="/business">Business</a></li>
            <li><a href="/sports">Sports</a></li>
            <li><a href="/fashion">Fashion</a></li>
        @endauth
    </div>

    <div class="navbar-side">
        <form class="serach-form">
            <input type="search" class="form-control search-bar" placeholder="Search..." aria-label="Search">
        </form>

        @auth
            <p class="user">{{ auth()->user()->name }}</p>

            <li><a href="{{ route('logout.perform') }}">Logout</a></li>
        @endauth

        @guest
            <li><a href="{{ route('login.perform') }}">Login</a></li>
            <li><a href="{{ route('register.perform') }}">Signup</a></li>
        @endguest
    </div>
</nav>
