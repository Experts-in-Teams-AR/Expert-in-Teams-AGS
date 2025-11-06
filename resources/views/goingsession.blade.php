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
            <img src="{{ asset('images/10.svg') }}" alt="image" width="170" class="rounded-3xl mt-20">
            <div class="flex justify-center items-center bg-[#9EE493] rounded-3xl">
                <p class="font-bold text-4xl"> • </p>
                <p class="text-2xl"> RECORDING </p>
            </div>
            <div>
                <script>
                    let timeLeft = 10; // we  have to get here what user inserted now its hardcoded

                    function startTimer() {
                    const timerDisplay = document.getElementById('timer');
                    const interval = setInterval(() => {
                        timerDisplay.textContent = timeLeft + " seconds remaining";
                        timeLeft--;

                        if (timeLeft < 0) {
                        clearInterval(interval);
                        timerDisplay.textContent = "Time's up!";
                        }
                    }, 1000);
                    }

                    window.onload = startTimer;
                </script>
                <p id="timer" class="text-3xl mt-10 font-bold"></p> 
            </div>

            <p class="text-center text-3xl mt-10"> Speak clearly and naturally </p>

            <div class="flex justify-center items-center mt-12 bg-[#344966] rounded-xl w-1/4 h-16 py-3 mb-10">
                <img src="{{ asset('images/7.svg') }}" alt="image" class="rounded-xl w-10">
                <a href="{{ route('session.stopsession') }}" class="text-4xl text-center text-white font-semibold"> Stop practice </a>
            </div>
        </div>
    </div>
</x-app-layout>