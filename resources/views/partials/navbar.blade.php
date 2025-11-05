<style>
    nav ul {
        list-style: none;
        display: flex;
        justify-content: left;
        gap: 50px;
        margin: 0;
        padding: 0;
    }
    nav ul li {
        position: relative; 
    }
    nav ul li a {
    padding: 8px;
        display: block;
    }
    nav ul li a:hover {
        background-color: lightgrey;
        border-radius: 5px;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        background-color: lightgrey;
        top: 100%;
        left: 0;
        list-style: none;
    padding: 8px 0;
        margin: 0;
        border-radius: 4px;
        min-width: 160px;
        z-index: 100;
    }

    .dropdown-menu li a {
    padding: 8px 16px;
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
        text-decoration-thickness: 4px;
        text-underline-offset: 8px;
        font-weight: bold;
    }
</style>

<nav>
    @guest 
    <ul>
        <li class="dropdown">
            <a href="{{ route('main') }}">ABOUT AUDIENCE REACTOR</a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('main') }}#what-is-it">What is Audiance Reactor?</a></li>
                <li><a href="{{ route('main') }}#why-it-matters">Why it matters?</a></li>
                <li><a href="{{ route('how') }}"> How it works?</a></li>
                <li><a href="{{ route('meet') }}">Meet our team!</a></li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="{{ route('practice') }}" class="nav-link {{ Route::is('practice') ? 'active' : '' }}">PRACTICE</a>
        </li>

        <li class="dropdown">
            <a href="{{ route('resources') }}" class="nav-link {{ Route::is('resources*') ? 'active' : '' }}">RESOURCES</a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('resources.blog') }}">Blog</a></li>
                <li><a href="{{ route('resources.case') }}">Case studies</a></li>
                <li><a href="{{ route('resources.research') }}">Research</a></li>
                <li><a href="{{ route('resources.export') }}">Export data</a></li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="{{ route('enterprise') }}" class="nav-link {{ Route::is('enterprise*') ? 'active' : '' }}">ENTERPRISE</a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('enterprise.education') }}">For education</a></li>
                <li><a href="{{ route('enterprise.business') }}">For business</a></li>
            </ul>
        </li>

         <li class="dropdown">
            <a href="{{ route('pricing') }}" class="nav-link {{ Route::is('pricing') ? 'active' : '' }}">PRICING</a>
        </li>

         <li class="dropdown">
            <a href="{{ route('faq') }}" class="nav-link {{ Route::is('faq') ? 'active' : '' }}">FAQ</a>
        </li>
    </ul>
    @endguest

    @auth
    <ul>
        <li class="dropdown">
            <a href="{{ route('session.setup') }}" class="nav-link {{ Route::is('session.*') ? 'active' : '' }}">START PRACTICE</a>
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
