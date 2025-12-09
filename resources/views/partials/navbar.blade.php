<style>
    nav ul {
        list-style: none;
        display: flex;
        justify-content: left;
        gap: 3.13rem;
        margin: 0;
        padding: 0;
    }
    nav ul li {
        position: relative; 
    }
    nav ul li a {
    padding: 0.5rem;
        display: block;
    }
    nav ul li a:hover {
        background-color: lightgrey;
        border-radius: 0.3rem;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        background-color: lightgrey;
        top: 100%;
        left: 0;
        list-style: none;
    padding: 0.5rem 0;
        margin: 0;
        border-radius: 0.25rem;
        min-width: 10rem;
        z-index: 100;
    }

    .dropdown-menu li a {
    padding: 0.5rem 1rem;
        display: block;
    }

    .dropdown-menu li a:hover {
        background-color: darkgrey;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .nav-link.active {
        text-decoration: underline;
        text-decoration-color: #9EE493;
        text-decoration-thickness: 0.25rem;
        text-underline-offset: 0.5rem;
        font-weight: bold;
    }
</style>

<nav>
    @guest 
    <ul>
        <li class="dropdown">
            <a href="{{ route('home') }}">ABOUT AUDIENCE REACTOR</a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('home') }}#what-is-it">What is Audiance Reactor?</a></li>
                <li><a href="{{ route('home') }}#why-it-matters">Why it matters?</a></li>
                <li><a href="{{ route('home') }}#how-it-works"> How it works?</a></li>
                <li><a href="{{ route('home') }}">How to practice?</a></li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="{{ route('business') }}" class="nav-link {{ Route::is('business') ? 'active' : '' }}">FOR BUSINESS</a>
        </li>

        <li class="dropdown">
            <a href="{{ route('education') }}" class="nav-link {{ Route::is('education') ? 'active' : '' }}">FOR EDUCATION</a>
        </li>

         <li class="dropdown">
            <a href="{{ route('team') }}" class="nav-link {{ Route::is('team') ? 'active' : '' }}">MEET OUR TEAM!</a>
        </li>
    </ul>
    @endguest

    @auth
    <ul>
        <li class="dropdown">
            <a href="{{ route('session.start') }}" class="nav-link {{ Route::is('session.*') ? 'active' : '' }}">START PRACTICE</a>
        </li>

         <li class="dropdown">
            <a href="{{ route('tips') }}" class="nav-link {{ Route::is('tips') ? 'active' : '' }}">PRACTICE TIPS</a>
        </li>

         <li class="dropdown">
            <a href="{{ route('history') }}" class="nav-link {{ Route::is('history') ? 'active' : '' }}">VIEW PAST FEEDBACK</a>
        </li>
    </ul>
    @endauth 
</nav>
