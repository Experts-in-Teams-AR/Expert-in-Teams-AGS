<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @include('partials.navbar')
        </h1>
    </x-slot>
    <div class="px-60 py-10">
        <div class="flex flex-col justify-center items-center border-4 border-black rounded-3xl mx-20 px-15 pt-10 pb-5" style="font-family: 'Poppins';">
            <p class="text-5xl"> Speaking Session </p> 
            <p class="text-3xl text-gray-500 my-4"> Click start when you're ready. The Audience Reactor will analyze your speech in real-time. </p>
            <img src="{{ asset('images/8.svg') }}" alt="image" width="170" class="rounded-3xl mb-6 mt-20">

            <p class="text-4xl mt-8"> Ready to Start </p>
            <p class="text-3xl mt-6 text-[#8D99AE]"> Press the button below to begin your session </p>

            <div class="flex justify-center items-center mt-12 bg-[#9EE493] rounded-xl w-1/2 h-16 py-3 mb-10">
                <img src="{{ asset('images/9.svg') }}" alt="image" class="rounded-xl w-10">
                <a href="{{ route('session.startsession') }}" class="text-4xl text-center font-semibold"> Start Recording </a>
            </div>

            <div class="flex-none w-full">
                <div class="bg-gray-200 m-8 rounded-2xl px-6 py-10">
                    <p class="text-3xl"> Tips for a great session: </p>
                    <p class="text-2xl text-[#8D99AE] my-3 mx-3"> • Find a quiet environment with minimal background noise </p>
                    <p class="text-2xl text-[#8D99AE] my-3 mx-3"> • Speak naturally as if you're presenting to a real audience </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>