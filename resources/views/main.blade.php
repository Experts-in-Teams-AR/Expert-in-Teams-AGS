<style>
    .headline {
        font-size: 100px;
        font-family: Poppins;
        text-align: center;
    }

    .subline1 {
        font-size: 40px;
        font-family: Poppins;
        margin-top: 70px;
        text-align: center;
        font-weight: 400;
    }

    .subline2 {
        font-size: 35px;
        font-family: Poppins;
        margin-top: 70px;
        text-align: center;
        font-weight: 300;
    }

    .button {
        background-color: #9EE493;
        width: 30%;
        border: 2px;
        border-radius: 8px;
        font-size: 35px;
        font-family: Poppins;
        margin-top: 70px;
        text-align: center;
        font-weight: 300;
    }

    .button-spacing {
        display: flex;
        justify-content: center;
    }

    .spacing {
        justify-content: center;
        margin-top: 150px;
        margin-left: 300px;
        margin-right: 300px;
        height: 40vh;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @include('partials.navbar')
        </h1>
    </x-slot>
    <div class="spacing">
        <div class="headline">
            <p>Great speakers are made, not born</p>
        </div>

        <div class="subline1">
            <p>Find your voice and speak with confidence every single time.</p>
        </div>

        <div class="subline2">
            <p>Practice with Audience Reactor – your personal, judgment-free audience that helps you improve every time you rehearse your speech.</p>
        </div>

        <div class="button-spacing">
            <div class="button">
                <a href="{{ route('about.how') }}"> &#9654; See how it works! </a>
            </div>
        </div>
    </div>
</x-app-layout>
