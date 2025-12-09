<link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/apps.css') }}">


<style>

    :root{
        --base-font: "Poppins", sans-serif;
        --base-font-size: 1.19rem;
        --headline-size: 4rem;
        --subline-large: 1.75rem;
        --subline-medium: 1.56rem;
        --section-title-size: 3.37rem;
    }

    @media (max-width: 1024px) {
        :root {
        --headline-size: 3rem;
        --subline-large: 1.3rem;
        --subline-medium: 1.15rem;
        --section-title-size: 2.7rem;
        }
    }


    @media (max-width: 640px) {
        :root {
        --headline-size: 2.2rem;
        --subline-large: 1rem;
        --subline-medium: 0.95rem;
        --section-title-size: 2rem;
        }
    }

    @media (max-width: 640px) {
    .button {
            padding: 0.75rem 1.5rem;
            font-size: 1.25rem;
        }
    }

    @media (max-width: 640px) {
    .spacing-section2,
    .spacing-section3 {
            min-height: auto;
            padding: 4rem;
        }
    }

    @media (max-width: 640px) {
        .headline {
            line-height: 1.2;
        }
        .content-text {
            line-height: 1.5;
        }
    }

    .headline {
        font-size: var(--headline-size);
        font-family: Poppins, sans-serif;
        text-align: center;
        color: var(--text-dark);
        line-height: 1.1;

    }

    .subline1,
    .subline2 {
        text-align: center;
        font-family: Poppins, sans-serif;
        margin-top: 1.87rem;
        font-weight: 400;
    }

    .subline1 { font-size: var(--subline-large); }
    .subline2 { font-size: var(--subline-medium); }
    

    .button {
        background-color: #9EE493;
        /*width: 30%;*/
        padding: 1rem 2rem;
        border-radius: 0.5rem;
        font-size: 1.56rem;
        font-family: Poppins, sans-serif;
        margin-top: 1.87rem;
        text-align: center;
        font-weight: 500;
        color: var(--text-dark);
    }

    .button-spacing {
        display: flex;
        justify-content: center;
    }

    .spacing-home {
        /*max-width: 90rem;*/
        justify-content: center;
        margin-top: 4.37rem;
        padding: 0 5%;
        /*min-height: 75vh;*/
    }

    .section-title{
        font-size: 3.37rem;
        font-family: Poppins, sans-serif;
        text-align: center;
        color: var(--text-dark);
        padding:0 5%;
    }

    .spacing-section2 {
            justify-content: center;
            padding: 0 5%;
            min-height: auto;
            padding-top: 2.5rem;
        }

    .content-text{
        font-size: var(--base-font-size);
        font-family: Poppins, sans-serif;
        margin-top: 1.87rem;
        text-align: justify;
        font-weight: 400;
    }

    .spacing-section3 {
            justify-content: center;
            padding: 0 19%;
                min-height: auto;
                padding-top: 2.5rem;
    }

    .why-feature-section {
    font-size: 1.19rem;
        font-family: Poppins, sans-serif;
        margin-top: 1.87rem;
        text-align: justify;
        font-weight: 400;
    }

    .why-feature-title {
        font-size: 1.44rem;
        font-weight: 400;
        color: var(--text-dark);
        text-align: left;
        font-family: var(--base-font);
    }

    .why-feature-list {
        list-style: none;
        padding: 0;
        margin-top: 1.75rem;
    }

    .why-feature-list li {
        position: relative;
        padding-left: 2rem; /* space for the checkmark */
        margin-bottom: 1rem;
        font-size: 1.19rem;
        font-family: var(--base-font);
        text-align: justify;
        font-weight: 400;
        color: var(--text-grey);
        line-height: 1.6;
    }

    /* Green checkmark before each item */
    .why-feature-list li::before {
        content: "✓";
        position: absolute;
        left: 0;
        top: 0;
        color: var(--button-bg, #9EE493);
        font-weight: 600;
        font-size: 1.19rem;
        line-height: 1.2;
    }



</style>


<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @include('partials.navbar')
        </h1>
    </x-slot>
    <div class="spacing-home min-h-[75vh] sm:min-h-screen md:min-h-[60vh] lg:min-h-[80vh] py-8">
        <div class="headline">
            <p>Great speakers are made,</p>
            <p>not born</p>
        </div>

        <div class="subline1">
            <p>Find your voice and speak with confidence - every time.</p>
        </div>

        <div class="subline2 max-w-4xl mx-auto">
            <p>Practice with Audience Reactor – your personal, judgment-free audience</p>
            <p> that helps you improve every time you rehearse your speech.</p>
        </div>

        <div class="button-spacing">
            <div class="button mt-20">
                <a href="{{ route('about.how') }}"> &#9654; See how it works! </a>
            </div>
        </div>
    </div>

    {{-- Second view --}}

    <div class = "spacing-section2">
        <section id="what-is-it" class="what-section">
        <h2 class="section-title">A smarter way to practice your speaking skills.</h2>
            <p class="subline2">
                Audience Reactor is an interactive robot that listens, analyses, and reacts to your speech just like a true audience would!  
                It helps you improve your delivery, pacing, and confidence in a stress-free way.
            </p>
            <div class="cards grid gap-8 grid-cols-1 md:grid-cols-3 mt-20 text-center text-xl">
                <div class="card">
                    <div class="icon1 justify-center flex">
                        <img src="/images/1.svg" width="100" height="100" alt="Speak icon" />
                    </div>
                    <h3 class="card-title1 mt-5 text-[var(--text-dark)] text-2xl">SPEAK</h3>
                    <p class="card-text1 mt-5">Rehearse your speech in front of Audience Reactor</p>
                </div>

                <div class="card">
                    <div class="icon2 justify-center flex">
                        <img src="/images/2.svg" width="100" height="100" alt="React icon" />
                    </div>
                    <h3 class="card-title2 mt-5 text-[var(--text-dark)] text-2xl">REACT</h3>
                    <p class="card-text2 mt-5">See feedback live and improve while speaking</p>
                </div>

                <div class="card">
                    <div class="icon3 justify-center flex">
                        <img src="/images/3.svg" width="100" height="100" alt="Improve icon" />
                    </div>
                    <h3 class="card-title3 mt-5 text-[var(--text-dark)] text-2xl">IMPROVE</h3>
                    <p class="card-text3 mt-5">Review your speech and get performance insights</p>
                </div>
            </div>
        </section>
    </div>

    {{-- Third view --}}

    <div class = "spacing-section3">
        <section id="why-it-matters" class="why-section">
        <h2 class="section-title">Why It Matters? </h2>
            <p class="content-text">
                Speaking clearly and confidently can open doors  in education, business, and everyday life. 
                Yet most of us practice alone and rarely receive any meaningful feedback about how we sound. 
                Without knowing what works and what doesn’t, we keep repeating the same habits, feel unsure about our delivery, and walk into presentations stressed and unprepared.            </p>
            <p class="content-text">   
                Audience Reactor changes that. It turns practice into real progress by showing how your delivery is perceived while you rehearse. 
                Instead of guessing, you get simple, supportive cues that help you adjust, improve, and build confidence step by step.
            </p>
        </section>

        <section class="why-feature-section">
            <h2 class="why-feature-title">With Audience Reactor, you can:</h2>
            <ul class="why-feature-list">
                <li>Know what works and what doesn’t while you practice.</li>
                <li>Refine your tone, pace, and clarity with improvement suggestions.</li>
                <li>Build confidence so anxiety no longer holds you back.</li>
                <li>Make every speech more engaging and effective, whether it's a work presentation, pitch, or class talk.</li>
            </ul>
        </section>

        <div class="mt-20">
            <h2 class="why-feature-title text-center text-4xl">Your message deserves to be heard!
                Practice smarter, speak with confidence, and deliver with impact.</h2>
            <div class="button-spacing mt-10">
                <div class="button">
                    <a href="{{ route('profile') }}"> Try Audience Reactor today! &#8594 </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Fourth View --}}

    <section class="h-auto lg:min-h-screen pt-10 flex flex-col justify-center max-w-6xl mx-auto px-6 text-center">
        <h2 class="why-feature-title text-[1.87rem] font-normal text-[var(--text-dark)] text-center font-[var(--base-font)] pb-20">
            "Good speakers inspire, lead, and connect. 
            Whether you're presenting at university, pitching a startup, or teaching others to communicate —
            great delivery makes all the difference. 
            Audience Reactor helps you find your authentic voice, practice with purpose, and perform with confidence."
        </h2>

        <div class="grid gap-8 grid-cols-1 md:grid-cols-3">
            <!-- Card 1 -->
            <div class="bg-[#EDF2F4] rounded-2xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <span class="text-3xl text-green-500">“</span>
            <p class="text-[var(--text-grey)] mt-2 mb-4 leading-relaxed">
                Audience Reactor helped me overcome my fear of public speaking. The real-time feedback gave me confidence I never had before.
            </p>
            <p class="text-sm font-medium text-gray-500">— University Student</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-[#EDF2F4] rounded-2xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <span class="text-3xl text-green-500">“</span>
            <p class="text-[var(--text-grey)] mt-2 mb-4 leading-relaxed">
                As a startup founder, practicing my pitch with Audience Reactor made a huge difference. I landed my seed funding!
            </p>
            <p class="text-sm font-medium text-gray-500">— Startup Founder</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-[#EDF2F4] rounded-2xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <span class="text-3xl text-green-500">“</span>
            <p class="text-[var(--text-grey)] mt-2 mb-4 leading-relaxed">
                The judgment-free environment let me experiment and find my authentic speaking style. Game changer for educators.
            </p>
            <p class="text-sm font-medium text-gray-500">— Teacher</p>
            </div>
        </div>
    </section>

    {{--Fifth View --}}

    <section id="how-it-works" class="how-section h-auto lg:min-h-screen pt-10 flex flex-col justify-center max-w-6xl mx-auto px-5 text-center">
       <h2 class="section-title"> How it works? </h2>
        <p class="subline2">
                Audience Reactor analyses short segments of your speech and reacts 
                like a real listener using face expressions, colours, and movement to show how your delivery feels.
        </p>
        <div class="grid gap-8 grid-cols-1 md:grid-cols-2 pt-20 items-start text-left">
            <!--- Card Why -->
            <div class="bg-[#EDF2F4] rounded-2xl shadow-sm p-6 border border-gray-100 transition-shadow mt-7">
                <p class="text-2xl">Tracked speech parameters: </p>
                <ul class="why-feature-list">
                    <li><strong>Pitch variability -</strong> how expressive or monotone you sound</li>
                    <li><strong>Pitch level -</strong> is your voice too low or too high?</li>
                    <li><strong>Pauses & pace -</strong> timing, rhythm, and clarity</li>
                    <li><strong>Resonance (mouth openness) -</strong> articulation clarity</li>
                    <li><strong>Energy -</strong> how strong or weak your voice feels</li>
                </ul>
                <hr class="border-gray-300 my-6">
                    <ul class="space-y-4 pt-5">   
                        <p class="text-2xl pt-5 text-[var(--text-dark)]">Natural reactions</p>
                        <p class="text-xl pt-5">To make practice more realistic, the robot:</p>
                        <ul class="space-y-4">
                        <ul class="why-feature-list">
                        <li>Follows your movement as you speak</li>
                        <li>Nods when performance improves (Red → Yellow → Green)</li>
                        <li>Tilts its head when quality slightly drops (Green → Yellow)</li>
                    </ul>
            </div>

            <!-- Card How -->
            <div>
                <div class="bg-[#EDF2F4] rounded-2xl shadow-sm p-6 border border-gray-100 transition-shadow mt-7">
                    <p class="text-2xl text-[var(--text-dark)]">Visual Feedback</p>
                        <p class="text-xl pt-5">Audience Reactor gives feedback through:</p>
                        <p class="text-xl pt-5 text-[var(--text-dark)]">4 facial expressions</p>

                        <ul class="space-y-4 pt-5">
                            <li class="flex items-start">
                            <img src="/images/speed.png" alt="Happy" class="w-6 h-6 mr-3 mt-1">
                            <span><strong>Happy:</strong> Strong delivery</span>
                            </li>
                            <li class="flex items-start">
                            <img src="/images/clarity.png" alt="Confused" class="w-6 h-6 mr-3 mt-1">
                            <span><strong>Confused:</strong> Average clarity or rhythm</span>
                            </li>
                            <li class="flex items-start">
                            <img src="/images/tone.png" alt="Sleepy" class="w-6 h-6 mr-3 mt-1">
                            <span><strong>Sleepy:</strong> Too flat, quiet, or slow</span>
                            </li>
                            <li class="flex items-start">
                            <img src="/images/volume.png" alt="Overwhelmed" class="w-6 h-6 mr-3 mt-1">
                            <span><strong>Overwhelmed:</strong> Too fast, loud, or intense</span>
                            </li>
                        </ul>

                    <hr class="border-gray-300 my-6">
                    
                    <p class="text-xl pt-5 text-[var(--text-dark)]">3 Body Colours</p>
                    <ul class="space-y-4 pt-5">
                        <li class="flex items-start">
                        <img src="/images/volume.png" alt="Green" class="w-6 h-6 mr-3 mt-1">
                        <span>Green — strong performance</span>
                        </li>
                        <li class="flex items-start">
                        <img src="/images/fillers.png" alt="Yellow" class="w-6 h-6 mr-3 mt-1">
                        <span>Yellow — moderate performance</span>
                        </li>
                        <li class="flex items-start">
                        <img src="/images/emotion.png" alt="Red" class="w-6 h-6 mr-3 mt-1">
                        <span>Red — needs improvement</span>
                        </li>
                    </ul>
                </div>
            </div>
        
            <!-- Card Bottom -->
             <div class="bg-[#EDF2F4] rounded-2xl shadow-sm p-6 px-10 border border-gray-100 transition-shadow mt-7 md:col-span-2">
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
        </div>
    </section>
</x-app-layout>