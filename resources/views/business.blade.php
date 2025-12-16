<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @include('partials.navbar')
        </h1>
    </x-slot>
    <div class="justify-center items-center min-h-[85vh]">
        <div class="pt-20 pb-10 bg-[#0D1821] px-6 md:px-20 lg:px-40">
            <div class="top-icon justify-center flex">
                <img src="/images/11.svg" width="50" height="50" alt="Business icon" />
            </div>
            <h1 class="text-4xl text-center h-auto leading-tight pt-2 justify-center max-w-6xl mx-auto text-white"> For Business</h1>
            <p class="text-xl text-center justify-center max-w-6xl mx-auto pt-5 pb-5 text-white"> 
                Strong communication makes ideas convincing
            </p>
        </div>

        <div class="grid gap-8 grid-cols-1 pt-10 items-start text-left px-6 md:px-20 lg:px-64">
            <div class="text-2xl text-center rounded-2xl p-6 px-10 mt-7">
                    <p class="pt-5">Whether pitching to investors, presenting to clients, or leading teams, 
                        the way ideas are delivered matters as much as the ideas themselves. Yet many professionals rarely practice their
                        delivery or receive meaningful feedback. </p>
                    <p class="pt-10">Audience Reactor helps professionals refine their speaking skills in a practical, 
                    engaging way turning rehearsal into measurable improvement. </p>
            </div>

            <p class= "py-10 text-center text-3xl mt-10">How can Audience Reactor support business communication?</p>

           <div class="bg-[#EDF2F4] rounded-2xl shadow-sm p-6 border border-black-100 transition-shadow mb-24">
                        <ul class="list-disc marker:text-[#9EE493] pl-5 pt-5 space-y-2">
                            <li>Practice startup pitches and demo presentations </li>
                            <li>Prepare for investor and client meetings </li>
                            <li>Refine delivery for leadership and public speaking roles</li>
                            <li>Support public speaking coaches as a training tool for their clients. 
                            Audience Reactor does not replace coaching it extends it, helping clients practice more effectively and arrive better prepared. 
                            </li>
                        </ul> 
            </div>
        </div>

        <div class="pt-20 pb-10 bg-[var(--background-box)] px-6 md:px-20 lg:px-40">
            <h1 class="text-2xl text-center h-auto leading-tight pt-2 justify-center max-w-6xl mx-auto text-white">
                Interested in bringing Audience Reactor to your organisation?
            </h1>
            <p class="text-2xl text-center justify-center max-w-6xl mx-auto pt-5 pb-5 text-white"> 
                Book a demo to explore business use cases, deployment options, and pricing models. 
            </p>
            <div class="flex justify-center gap-10 mt-[1.87rem] flex-wrap">
                <a href="{{ route('register') }}" class="bg-[#9EE493] px-8 hover:bg-[#7eda70] py-4 rounded-lg text-[1.56rem] font-medium text-gray-900 font-sans sm:px-6 sm:py-3 sm:text-xl text-center inline-flex items-center gap-2 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    Book a demo
                </a>
                <a href="{{ route('register') }}" class="bg-white px-8 hover:bg-gray-100 py-4 rounded-lg text-[1.56rem] font-medium text-gray-900 font-sans sm:px-6 sm:py-3 sm:text-xl text-center inline-flex items-center gap-2 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    View business pricing
                </a>
            </div>
        </div>

    </div>
</x-app-layout>
