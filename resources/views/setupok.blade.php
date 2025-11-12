<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mb-10">
            @include('partials.navbar')
        </h1>
    </x-slot>
<div class="flex justify-center items-center min-h-[85vh] px-6 md:px-20 lg:px-40 mt-10" style="font-family: 'Poppins';">
        <div class="w-full max-w-5xl bg-white rounded-3xl shadow-md p-8 md:p-12 text-center">
            <div class="flex flex-col justify-center items-center mb-10">
                <img src="{{ asset('images/5.svg') }}" alt="image" class="w-24 mb-6">
                <p class="text-2xl md:text-4xl mb-3 text-gray-800">
                    Connect with your Audience Reactor
                </p>
                <p class="text-base md:text-2xl text-gray-500">
                    Enter your robot's name to establish a connection
                </p>
            </div>
            <div class="flex flex-col justify-center items-center">
                <img src="{{ asset('images/6.svg') }}" alt="image" class="w-20 mb-4">
                <p class="text-2xl md:text-3xl font-semibold text-gray-800 mt-4">
                    Successfully Connected!
                </p>
                <p class="text-base md:text-xl text-gray-600 mt-2">
                    Connected to <span class="font-semibold text-gray-800">Oli</span>
                </p>

                <a href="{{ route('session.start') }}"
                   class="mt-10 bg-[#9EE493] hover:bg-[#7eda70] transition-colors rounded-xl w-full md:w-2/3 h-16 flex items-center justify-center text-xl md:text-2xl font-medium text-gray-800">
                    Proceed to session setup!
                </a>
            </div>
</x-app-layout>