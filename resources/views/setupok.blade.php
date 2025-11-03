<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @include('partials.navbar')
        </h1>
    </x-slot>
    <div class="px-60 py-10">
        <div class="flex flex-col justify-center items-center border-4 border-black rounded-3xl mx-20 px-20 py-10 bg-gray-200" style="font-family: 'Poppins';">
            <p class="text-8xl my-4">&#127760;</p>
            <p class="text-5xl"> Connect with your Audience Reactor </p> 
            <p class="text-3xl text-gray-500 my-4"> Enter the initial data to establish a connection </p>

            <p class="text-8xl mt-20"> &#9989; </p>
            <p class="text-4xl mt-8"> Successfully Connected! </p>
            <p class="text-3xl mt-6"> Connected to Oli </p>

            <a href="{{ route('session.start') }}" class="text-4xl mt-6 bg-[#9EE493] rounded-xl w-1/2 text-center h-16 py-3"> Proceed to session setup! </a>
        </div>
    </div>
</x-app-layout>