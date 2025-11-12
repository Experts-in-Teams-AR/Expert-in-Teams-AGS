<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @include('partials.navbar')
        </h1>
    </x-slot>
    <div class="flex justify-center items-center min-h-[85vh] px-6 md:px-20 lg:px-40 mt-10" style="font-family: 'Poppins';">
        <div class="w-full max-w-5xl bg-white rounded-3xl shadow-md p-8 md:p-12">
            <div class="flex flex-col justify-center items-center text-center mb-10">
                <img src="{{ asset('images/5.svg') }}" alt="image" class="w-24 mb-6">
                <p class="text-2xl md:text-4xl mb-3 text-gray-800">Connect with your Audience Reactor</p>
                <p class="text-base md:text-2xl text-gray-500">
                    Enter the initial data to establish a connection
                </p>
            </div>
            <form action="{{ route('session.setupformpost') }}" method="POST" class="w-full">
                @csrf

                <div class="mb-6">
                    <label for="port" class="block text-lg md:text-2xl mb-2 text-gray-800">
                        Port Number
                    </label>
                    <input type="text" id="port" name="port"
                        class="rounded-xl bg-gray-100 w-full h-14 text-lg md:text-2xl px-4 focus:ring-2 focus:ring-[#9EE493] outline-none transition"
                        placeholder="Please insert the port number (e.g. 5432)">
                </div>

                <div class="mb-10">
                    <label for="ip" class="block text-lg md:text-2xl mb-2 text-gray-800">
                        IP Address
                    </label>
                    <input type="text" id="ip" name="ip"
                        class="rounded-xl bg-gray-100 w-full h-14 text-lg md:text-2xl px-4 focus:ring-2 focus:ring-[#9EE493] outline-none transition"
                        placeholder="Please insert the IP address (e.g. 127.0.0.1)">
                </div>
                <div class="flex justify-center mb-10">
                    <button type="submit"
                        class="flex items-center justify-center gap-3 bg-[#9EE493] hover:bg-[#7eda70] transition-colors rounded-xl w-full md:w-2/3 h-16 text-xl md:text-2xl font-medium text-gray-800">
                        Connect to device
                    </button>
                </div>
            </form>
            <hr class="border-gray-300 my-10">
            <div>
                <p class="text-xl md:text-3xl mb-4 text-gray-800">Connection Tips:</p>
                <ul class="list-disc ml-6 space-y-2 text-base md:text-xl">
                    <li>Make sure your Audience Reactor is powered on</li>
                    <li>Check that you're connected to the same network</li>
                    <li>Remember that robot name is case-sensitive</li>
                </ul>
            </div>

        </div>
    </div>
</x-app-layout>