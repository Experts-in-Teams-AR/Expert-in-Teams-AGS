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

            <div class="flex-none w-full px-20">
                <form action="{{ route('session.setupformpost') }}" method="POST">
                    @csrf

                    <label for="port" class="block text-3xl mt-4"> Port Number </label>
                    <input type="text" id="port" name="port" class="block rounded-xl bg-gray-100 w-full h-14 text-2xl mt-2" placeholder="Please insert the port number (e.g. 5432)">

                    <label for="ip" class="block text-3xl mt-6"> IP Address </label>
                    <input type="text" id="ip" name="ip" class="block rounded-xl bg-gray-100 w-full h-14 text-2xl mt-2" placeholder="Please insert the IP address (e.g. 127.0.0.1)">
                    <div class="flex justify-center">
                        <button type="submit" class="bg-[#9EE493] rounded-xl w-1/2 mt-6 h-16 text-3xl">Connect to device</button>
                    </div>
                </form>

                <hr class="border-gray-300 border my-6">

                <div>
                    <p class="text-3xl"> Connection Tips: </p>
                    <ul class="text-2xl m-4">
                        <li class="m-2"> - Make sure your Audience Reactor is powered on </li>
                        <li class="m-2"> - Check that you're connected to the same network</li>
                        <li class="m-2"> - Remember that robot name is case-sensitive </li>
                    </ul>
                </div>
            </div>

        </div> 
    </div>
</x-app-layout>