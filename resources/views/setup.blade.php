<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @include('partials.navbar')
        </h1>
    </x-slot>
    <div class="flex justify-center items-center min-h-[85vh] px-6 md:px-20 lg:px-40 mt-10" style="font-family: 'Poppins';">
        <div class="w-full max-w-5xl bg-white rounded-3xl shadow-md p-8 md:p-12">
            <div class="flex flex-col justify-center items-center text-center mb-10">
                <h1 class="text-3xl md:text-5xl mb-4">START PRACTICE</h1>
                <h2 class="text-lg md:text-2xl text-gray-700 mb-2">
                    Welcome, {{ auth()->user()->name }}! Ready to improve your speaking skills?
                </h2>
                <h3 class="text-base md:text-xl text-gray-500 mb-6">
                    Connect your Audience Reactor and begin your practice session
                </h3>
                <img src="{{ asset('images/5.svg') }}" alt="image" class="w-24 mb-6">
                <p class="text-2xl md:text-3xl mb-6 text-gray-800">
                    Connect your device
                </p>
            <div class="bg-gray-100 rounded-2xl p-8 md:p-10 mb-10 text-left">
                    <p class="text-2xl md:text-3xl mb-4 text-gray-800">Before you start:</p>
                    <ul class="list-disc ml-6 space-y-2 text-lg md:text-xl text-gray-700">
                        <li>Make sure your Audience Reactor is powered on</li>
                        <li>Ensure you're on the same network as your device</li>
                        <li>Have your robot name ready for connection</li>
                    </ul>
                </div>
            </div>
            <div class="flex justify-center">
                <a href="{{ route('session.setupform') }}"
                   class="flex items-center justify-center gap-3 bg-[#9EE493] hover:bg-[#7eda70] transition-colors rounded-xl w-full md:w-2/3 h-16 text-xl md:text-2xl font-medium text-gray-800 shadow-sm">
                    <img src="{{ asset('images/4.svg') }}" alt="image" class="w-8">
                    Connect with your Audience Reactor
                </a>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>