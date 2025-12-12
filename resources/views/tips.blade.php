<link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/apps.css') }}">

<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @include('partials.navbar')
        </h1>
    </x-slot>
    <div class="justify-center items-center min-h-[85vh] px-6 md:px-20 lg:px-40 mt-10" style="font-family: 'Poppins', sans-serif;">
        <div class="top-icon justify-center flex">
                        <img src="/images/4.svg" width="100" height="100" alt="Top icon" />
        </div>
        <h1 class="text-4xl text-center h-auto leading-tight pt-2 justify-center max-w-6xl mx-auto text-[var(--text-dark)]"> Practice Tips
        </h1>
            <p class = "text-xl text-center justify-center max-w-6xl mx-auto pt-5"> 
                Master the art of public speaking with our expert guidance</p>
            
                <div class="grid gap-8 grid-cols-1 md:grid-cols-2 pt-5 items-start text-left">
                    
                    <div class="bg-[#EDF2F4] rounded-2xl shadow-sm p-6 px-10 border border-black-100 transition-shadow mt-7 md:col-span-2">
                        <ul class="space-y-4">   
                                <p class="text-2xl text-[var(--text-dark)]">After your practice</p>
                                <p class="text-xl">Once you finish, you can see on the website:</p>
                                <ul class="space-y-4">
                                <ul class="why-feature-list">
                                <li>Your overall performance score</li>
                                <li>A breakdown of each speech parameter</li>
                                <li>Clear suggestions on what to improve</li>
                            </ul>
                    </div>

                    <!--- Card Why -->
                    <div class="bg-[#EDF2F4] rounded-2xl shadow-sm p-6 border border-black-100 transition-shadow">
                        <p class="text-xl">Voice Quality </p>
                        <p class="text-xl text-gray-400"> Optimize your vocal delivery</p>
                        <ul class="list-disc marker:text-[#9EE493] pl-5 pt-5 space-y-2">
                            <li>Warm up your voice before practicing</li>
                            <li>Maintain consistent volume throughout</li>
                            <li>Enunciate clearly, especially consonants</li>
                            <li>Vary your pitch to maintain engagement</li>
                        </ul> 
                    </div>

                    <div class="bg-[#EDF2F4] rounded-2xl shadow-sm p-6 border border-black-100 transition-shadow">
                        <p class="text-xl">Pacing & Rythm </p>
                        <p class="text-xl text-gray-400"> Control your speaking tempo</p>
                        <ul class="list-disc marker:text-[#9EE493] pl-5 pt-5 space-y-2">
                            <li>Speak at a moderate, steady pace</li>
                            <li>Use strategic pauses for ephasis</li>
                            <li>Don't rush through important points</li>
                            <li>Allow times for ideas to sink in</li>
                        </ul>
                    </div>

                    <!-- Card How -->
                   <div class="bg-[#EDF2F4] rounded-2xl shadow-sm p-6 border border-black-100 transition-shadow">
                        <p class="text-xl">Confidence Building </p>
                        <p class="text-xl text-gray-400"> Project authority and presence</p>
                        <ul class="list-disc marker:text-[#9EE493] pl-5 pt-5 space-y-2">
                            <li>Stand or sit with good posture</li>
                            <li>Practice regularly to build comfort</li>
                            <li>Record yourself to track progress</li>
                            <li>Celebrate small improvements</li>
                        </ul> 
                    </div>

                    <div class="bg-[#EDF2F4] rounded-2xl shadow-sm p-6 border border-black-100 transition-shadow">
                        <p class="text-xl">Continuous Improvement </p>
                        <p class="text-xl text-gray-400"> Track and enhance your skills</p>
                        <ul class="list-disc marker:text-[#9EE493] pl-5 pt-5 space-y-2">
                            <li>Set specific goals for each session</li>
                            <li>Focus on one skill at a time</li>
                            <li>Compare feedback over multiple sessions</li>
                            <li>Apply learnings to real presentations</li>
                        </ul>
                    </div>
                
                    <!-- Card Bottom -->
                    <div class="bg-[#EDF2F4] rounded-2xl shadow-sm p-6 px-10 border border-black-100 transition-shadow md:col-span-2"> 
                        <li class="flex items-start">
                            <img src="/images/15.svg" alt="Exclamation" class="w-6 h-6 mr-3 mt-1">
                            <span class="text-xl">Common Mistakes to Avoid </span>
                        </li>
                        <p class="text-xl text-gray-400 pt-2"> Watch out for these pitfalls that can hinder your progress</p>
                        <ul class="pt-5">
                            <li class="flex items-start">
                            <img src="/images/16.svg" alt="Cross" class="w-6 h-6 mr-3 mt-1">
                                <span>Practicing in noisy environments
                                    <p class="text-sm text-gray-400">Background noise can affect analysis accuracy</p>
                                </span>
                            </li>
                            <li class="flex items-start">
                            <img src="/images/16.svg" alt="Cross" class="w-6 h-6 mr-3 mt-1">
                                <span>Ignoring feedback patterns
                                    <p class="text-sm text-gray-400">Repeated suggestions indicate areas needing attention</p>
                                </span>
                            </li>
                            <li class="flex items-start">
                            <img src="/images/16.svg" alt="Cross" class="w-6 h-6 mr-3 mt-1">
                                <span>Rushing through sessions
                                    <p class="text-sm text-gray-400">Quality over quantity leads to better results</p>
                                </span>
                            </li>
                            <li class="flex items-start">
                            <img src="/images/16.svg" alt="Cross" class="w-6 h-6 mr-3 mt-1">
                                <span>Not applying insights to real situations
                                    <p class="text-sm text-gray-400">Practice should translate to real-world improvement</p>
                                </span>
                            </li>
                        </ul>
                    </div>
                
                </div>
    </div>
</x-app-layout>