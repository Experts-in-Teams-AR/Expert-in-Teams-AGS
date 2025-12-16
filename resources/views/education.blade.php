<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @include('partials.navbar')
        </h1>
    </x-slot>
    <div class="justify-center items-center min-h-[85vh]">
        <div class="pt-20 pb-10 bg-[#0D1821] px-6 md:px-20 lg:px-40">
            <div class="top-icon justify-center flex">
                <img src="/images/12.svg" width="50" height="50" alt="Education icon" />
            </div>
            <h1 class="text-4xl text-center h-auto leading-tight pt-2 justify-center max-w-6xl mx-auto text-white"> For Education</h1>
            <p class="text-xl text-center justify-center max-w-6xl mx-auto pt-5 pb-5 text-white"> 
                Better public speaking supports better learning
            </p>
        </div>

        <div class="grid gap-8 grid-cols-1 pt-10 items-start text-left px-6 md:px-20 lg:px-64 mb-10 pb-10">
            <div class="text-2xl text-center rounded-2xl p-6 px-10 mt-7">
                    <p class="pt-5">Public speaking is a core skill in education. 
                        From student presentations and oral exams to lectures, seminars, and thesis defenses. 
                        Yet students rarely receive structured feedback on how they present, and lecturers often 
                        have limited opportunities to reflect on their own delivery and rhetorical style. </p>
                    <p class="pt-10">Audience Reactor provides a supportive, engaging way to practice public speaking and presentation delivery, 
                        helping speakers understand how their voice, pace, and expressiveness are perceived without pressure or judgment. </p>
            </div>
            <p class="py-10 text-center text-3xl max-w-4xl mx-auto text-[var(--text-dark)]">How can Audience Reactor be used in education?</p>
            <div class="grid gap-8 grid-cols-1 md:grid-cols-3">

                <div class="bg-[#EDF2F4] rounded-2xl shadow-sm p-6 border border-black-100">
                    <p class="text-[var(--text-dark)]">For practicing oral exams and presentations</p>
                    <p class="text-[var(--text-grey)] mt-2 mb-4 leading-relaxed">
                        Help students prepare for high-stakes speaking situations with structured, repeatable practice sessions.
                    </p>
                </div>

                <div class="bg-[#EDF2F4] rounded-2xl shadow-sm p-6 border border-black-100">
                    <p class="text-[var(--text-dark)]">Help students and lecturers prepare independently</p>
                    <p class="text-[var(--text-grey)] mt-2 mb-4 leading-relaxed">
                        Practice at your own pace, in your own space, without pressure or judgment.
                    </p>
                </div>

                <div class="bg-[#EDF2F4] rounded-2xl shadow-sm p-6 border border-black-100">
                    <p class="text-[var(--text-dark)]">Support teaching staff</p>
                    <p class="text-[var(--text-grey)] mt-2 mb-4 leading-relaxed">
                        Help teaching staff reflect on their own delivery and improve clarity and engagement in the classroom or in seminars.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-[#EDF2F4] py-16 mt-10 px-6 md:px-10 lg:px-20"> 
            <p class="py-10 text-center text-3xl max-w-4xl mx-auto text-[var(--text-dark)]">Why it works in educational settings?</p>
            <div class="bg-white rounded-2xl shadow-xl p-6 md:p-10 border border-gray-100 max-w-4xl mx-auto">
                <p class="text-xl">Public speaking is a core part of education, yet many students and lecturers experience high stress and uncertainty when presenting. This often comes from a lack of structured feedback and clear guidance on how and what to improve.</p>
                <ul class="list-disc marker:text-[#9EE493] pl-5 pt-5 space-y-2">
                    <li class = "text-[var(--text-dark)]">Addresses a real gap in education</li>
                    <p class = "text-lg">Presentation skills are expected, but rarely trained or assessed in a structured way.</p>
                    <li class = "text-[var(--text-dark)]">Encourages practice, not performance anxiety</li>
                    <p class = "text-lg">A non-judgmental, playful "audience" helps speakers rehearse without fear of failure.</p>
                    <li class = "text-[var(--text-dark)]">Treats speaking as a trainable skill</li>
                    <p class = "text-lg">Like sports training, progress comes from repetition, clear goals, and feedback.</p>
                    <li class = "text-[var(--text-dark)]">Supports both students and lecturers</li>
                    <p class = "text-lg">Students improve presentation confidence. Teaching staff can refine rhetoric and classroom delivery.</p>
                    <li class = "text-[var(--text-dark)]">Improves learning through better presentations</li>
                    <p class = "text-lg">Clearer, more engaging delivery benefits both speakers and listeners.</p>
                </ul> 
            </div>
        </div>

        <div class="pt-20 pb-10 bg-[var(--background-box)] px-6 md:px-20 lg:px-40">
            <h1 class="text-2xl text-center h-auto leading-tight pt-2 justify-center max-w-6xl mx-auto text-white">
                Interested in using Audience Reactor at your institution?
            </h1>
            <p class="text-2xl text-center justify-center max-w-6xl mx-auto pt-5 pb-5 text-white"> 
                Book a demo to explore use cases, setup options, and educational pricing. 
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
                    Contact us for a tailored offer
                </a>
            </div>
        </div>

    </div>
</x-app-layout>
