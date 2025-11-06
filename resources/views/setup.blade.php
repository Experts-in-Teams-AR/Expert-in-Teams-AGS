<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @include('partials.navbar')
        </h1>
    </x-slot>
    <div class="px-60">
        <div class="flex flex-col justify-start items-center p-6" style="font-family: 'Poppins';">
            <h1 class="text-center font-medium text-6xl m-3"> START PRACTICE </h1>
            <h2 class="text-center font-normal text-4xl text-gray-700"> Welcome, {{ auth()->user()->name }}! Ready to improve your speaking skills? </h2>
            <h3 class="text-center font-normal text-3xl m-3 text-gray-500"> Connect your Audience Reactor and begin your practice session </h3> 
        </div>
        <div class="flex flex-col justify-center items-center border-4 border-black rounded-3xl mx-20 px-20 py-10 bg-gray-200" style="font-family: 'Poppins';">
            <img src="{{ asset('images/5.svg') }}" alt="image" width="150" class="rounded-3xl">
            <p class="text-5xl mt-10"> Connect your device </p> 
            <p class="text-3xl text-gray-500 mt-4 mb-20"> Connect to your Audience Reactor to begin your practice session </p>
            <div class="bg-white w-full flex-none rounded-xl px-10 py-8">
                <p class="text-4xl"> Before you start: </p>
                <ul class="text-3xl m-4">
                    <li class="m-2"> - Make sure your Audience Reactor is powered on </li>
                    <li class="m-2 my-4"> - Ensure you're on the same network as your device</li>
                    <li class="m-2"> - Have your robot name ready for connection </li>
                </ul>
            </div>
            <div class="flex justify-center items-center w-3/4 bg-[#9EE493] text-4xl rounded-xl text-center m-6 h-24 py-3 text-center">
                <img src="{{ asset('images/4.svg') }}" alt="image" class="rounded-xl w-10 mr-2">
                <a href="{{ route('session.setupform') }}"> Connect with your Audience Reactor </a>
            </div>
        </div>
    </div>
</x-app-layout>