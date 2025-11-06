<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @include('partials.navbar')
        </h1>
    </x-slot>
    <div class="px-60 py-10" style="font-family: 'Poppins';">
            <div class="flex flex-col justify-center items-center">
                <img src="{{ asset('images/7.svg') }}" alt="image" width="120" class="rounded-3xl">
                <p class="text-5xl m-10"> Setup your practice session </p> 
                <p class="text-3xl text-gray-500 mb-6"> Set your estimated practice time to help track your progress </p>
            </div>
            <div class="">
                <form action="{{ route('session.startsetup') }}" method="POST" class="w-full">
                    @csrf

                    <div class="flex space-x-4">
                        <div class="w-1/2">
                            <label for="minutes" class="text-2xl my-2 block font-bold"> Estimated Speech Duration (minutes) </label>
                            <input type="text" id="minutes" name="minutes" class="rounded-xl bg-gray-100 w-full h-14 text-3xl mt-2" placeholder="Please insert minutes (e.g. 5)">
                        </div>

                        <div class="w-1/2">
                            <label for="second" class="text-2xl my-2 block font-bold"> Estimated Speech Duration (seconds) </label>
                            <input type="text" id="second" name="second" class="rounded-xl bg-gray-100 w-full h-14 text-3xl mt-2" placeholder="Please insert seconds (e.g. 30)">
                        </div>
                    </div>


                    <p class="text-2xl text-[#8D99AE] mt-4"> Recommended: at least one minute for best results </p> 

                    <div class="ml-16 mt-16">
                        <p class="text-3xl "> What the Audience Reactor analyzes: </p>
                        <div class="flex flex-col justify-start items-start">
                            <div class="flex-none w-full">
                                <div class="flex flex-cols justify-between">
                                    <div class="flex justify-center items-center my-4">
                                        <img src="{{ asset('images/13.svg') }}" alt="image" class="rounded-xl w-20 mr-3">
                                        <div>
                                            <p class="text-3xl"> Tone & Clarity </p>
                                            <p class="text-2xl text-[#8D99AE]"> Voice quality and articulation </p>
                                        </div>
                                    </div>

                                    <div class="flex justify-center items-center my-4 mr-60">
                                        <img src="{{ asset('images/2.svg') }}" alt="image" class="rounded-xl w-20 mr-3">
                                        <div>
                                            <p class="text-3xl"> Pace & Rhythm </p>
                                            <p class="text-2xl text-[#8D99AE]"> Speaking speed and pauses </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-center items-center my-4">
                                <img src="{{ asset('images/11.svg') }}" alt="image" class="rounded-xl w-20 mr-3">
                                <div>
                                    <p class="text-3xl"> Confidence Level </p>
                                    <p class="text-2xl text-[#8D99AE]"> Vocal strength and energy </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col justify-center items-center">
                        <div class="flex justify-center items-center bg-[#9EE493] rounded-xl w-full mt-6 h-24 text-center">
                            <img src="{{ asset('images/9.svg') }}" alt="image" class="rounded-xl w-10">
                            <button type="submit" class="text-3xl rounded-xl">Start practice session now</button>
                        </div>
                    </div>
                </form>
            </div>
    </div>
</x-app-layout>