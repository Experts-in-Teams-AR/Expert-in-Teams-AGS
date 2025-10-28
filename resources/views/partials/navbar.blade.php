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
        padding: 0.5rem;
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
        padding: 0.5rem 0;
        margin: 0;
        border-radius: 4px;
        min-width: 160px;
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
</style>

<nav>
    <ul>
        <li class="dropdown">
            <a href="{{ route('about') }}">ABOUT AUDIENCE REACTOR</a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('what') }}">What is Audiance Reactor?</a></li>
                <li><a href="{{ route('why') }}">Why it matters?</a></li>
                <li><a href="{{ route('how') }}"> How it works?</a></li>
                <li><a href="{{ route('meet') }}">Meet our team!</a></li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="{{ route('practice') }}">PRACTICE</a>
            @auth 
                <ul class="dropdown-menu">
                    <li><a href="{{ route('setup') }}">Setup device</a></li>
                    <li><a href="{{ route('start') }}">Start practice</a></li>
                    <li><a href="{{ route('results') }}">See results</a></li>
                </ul>
            @endauth
        </li>

        <li class="dropdown">
            <a href="{{ route('resources') }}">RESOURCES</a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('case') }}">Case studies</a></li>
                <li><a href="{{ route('research') }}">Research</a></li>
                @auth
                    <li><a href="{{ route('export') }}">Export data</a></li>
                @endauth
            </ul>
        </li>

        <li class="dropdown">
            <a href="{{ route('enterprise') }}">ENTERPRISE</a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('education') }}">For education</a></li>
                <li><a href="{{ route('business') }}">For business</a></li>
            </ul>
        </li>

         <li class="dropdown">
            <a href="{{ route('pricing') }}">PRICING</a>
        </li>

         <li class="dropdown">
            <a href="{{ route('faq') }}">FAQ</a>
        </li>
    </ul>
</nav>