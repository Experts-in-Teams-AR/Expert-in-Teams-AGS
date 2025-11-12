<link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/apps.css') }}">


<style>
    .headline {
        font-size: 64px;
        font-family: Poppins, sans-serif;
        text-align: center;
        color: var(--text-dark);
    }

    .subline1 {
        font-size: 28px;
        font-family: Poppins, sans-serif;
        margin-top: 30px;
        text-align: center;
        font-weight: 400;
    }

    .subline2 {
        font-size: 25px;
        font-family: Poppins, sans-serif;
        margin-top: 30px;
        text-align: center;
        font-weight: 400;
    }

    .button {
        background-color: #9EE493;
        width: 30%;
        padding: 15px;
        border-radius: 8px;
        font-size: 25px;
        font-family: Poppins, sans-serif;
        margin-top: 30px;
        text-align: center;
        font-weight: 500;
        color: var(--text-dark);
    }

    .button-spacing {
        display: flex;
        justify-content: center;
    }

    .spacing-home {
        justify-content: center;
        margin-top: 70px;
        margin-left: 300px;
        margin-right: 300px;
        height: 75vh;
    }

    .section-title{
        font-size: 54px;
        font-family: Poppins, sans-serif;
        text-align: center;
        color: var(--text-dark);
        padding-left: 210px;
        padding-right: 210px;
    }

    .spacing-section2 {
            justify-content: center;
            margin-left: 180px;
            margin-right: 180px;
                min-height: 100vh;
                padding-top: 40px;
        }

    .content-text{
        font-size: 19px;
        font-family: Poppins, sans-serif;
        margin-top: 30px;
        text-align: justify;
        font-weight: 400;
    }

    .spacing-section3 {
            justify-content: center;
            margin-left: 300px;
            margin-right: 300px;
                min-height: 100vh;
                padding-top: 40px;
    }

    .why-feature-section {
    font-size: 19px;
        font-family: Poppins, sans-serif;
        margin-top: 30px;
        text-align: justify;
        font-weight: 400;
}

.why-feature-title {
    font-size: 23px;
    font-weight: 400;
    color: var(--text-dark);
    text-align: left;
    font-family: var(--base-font);
}

.why-feature-list {
    list-style: none;
    padding: 0;
    margin-top: 28px;
}

.why-feature-list li {
    position: relative;
    padding-left: 32px; /* space for the checkmark */
    margin-bottom: 16px;
    font-size: 19px;
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
    color: var(--button-bg);
    font-weight: 600;
    font-size: 19px;
    line-height: 1.2;
}



</style>


<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @include('partials.navbar')
        </h1>
    </x-slot>
    <div class="spacing-home">
        <div class="headline">
            <p>Great speakers are made,</p>
            <p>not born</p>
        </div>

        <div class="subline1">
            <p>Find your voice and speak with confidence every single time.</p>
        </div>

        <div class="subline2">
            <p>Practice with Audience Reactor – your personal, judgment-free audience that helps you improve every time you rehearse your speech.</p>
        </div>

        <div class="button-spacing">
            <div class="button">
                <a href="{{ route('about.how') }}"> &#9654; See how it works! </a>
            </div>
        </div>
    </div>

    {{-- Second view --}}

    <div class = "spacing-section2">
        <section id="what-is-it" class="what-section">
        <h2 class="section-title">A smarter way to practice your speaking skills.</h2>
            <p class="subline2">
                Audience Reactor listens, analyses, and reacts to your speech in real time just like a true audience would! 
                It helps you improve your delivery, pacing, and confidence — without judgment.
            </p>
            <div class="cards grid gap-8 md:grid-cols-3 mt-20 text-center text-xl">
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
                Speaking with clarity and confidence can open doors and leave a lasting impression.
                Yet most of us practice alone, unsure if our message truly reaches our audience, leaving us with stress and anxiety. 
            </p>
            <p class="content-text">   
                Audience Reactor matters because it transforms practice into progress.
                By showing how your audience responds in real time, it helps you improve faster, gain confidence, and speak with impact. 
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

        <div class="mt-10">
            <h2 class="why-feature-title text-center text-4xl">Your message deserves to be heard!
                Practice smarter, speak with confidence, and deliver with impact.</h2>
            <div class="button-spacing">
                <div class="button">
                    <a href="{{ route('profile') }}"> Try Audience Reactor today! &#8594 </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Fourth View --}}

    <section class="min-h-screen pt-10 flex flex-col justify-center max-w-6xl mx-auto px-6 text-center">
        <h2 class="why-feature-title text-[30px] font-normal text-[var(--text-dark)] text-center font-[var(--base-font)] pb-20">
            "Good speakers inspire, lead, and connect. 
            Whether you're presenting at university, pitching a startup, or teaching others to communicate —
            great delivery makes all the difference. 
            Audience Reactor helps you find your authentic voice, practice with purpose, and perform with confidence."
        </h2>

        <div class="grid gap-8 md:grid-cols-3">
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

    <section id="how-it-works" class="how-section min-h-screen pt-10 flex flex-col justify-center max-w-6xl mx-auto px-1 text-center">
       <h2 class="section-title"> How it works? </h2>
        <p class="subline2">
                The Audience Reactor analyses your speech in real time — 
                tracking pace, tone, clarity, volume, filler words, and emotional delivery. 
                It then expresses reactions through facial expressions, colour, and sound, 
                so you know exactly how your rehearsal is going. 
        </p>
        <div class="grid gap-8 md:grid-cols-2 pt-20 items-start text-left">
          <!--- Coloumn -->
            <div class="section-how">
            <p class="font-bold text-4xl">Tracked speech parameters: </p>
            <ul class="why-feature-list">
                <li><strong>Pace:</strong> Are you speaking too fast or too slow?</li>
                <li><strong>Tone:</strong> Is your voice engaging and varied?</li>
                <li><strong>Clarity:</strong> Can your words be understood?</li>
                <li><strong>Volume:</strong> Are you projecting your voice?</li>
                <li><strong>Filler Words:</strong> Tracking "um," "uh," and other fillers</li>
                <li><strong>Confidence:</strong> Measuring your emotional delivery</li>

            </ul>
            </div>

            <!-- Card How -->
            <div>
                <p class="text-4xl text-[var(--text-dark)]">Visual Feedback:</p>

                <div class="bg-[#EDF2F4] rounded-2xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow mt-7">
                    <ul class="space-y-4">
                        <li class="flex items-start">
                        <img src="/images/speed.png" alt="Speed" class="w-6 h-6 mr-3 mt-1">
                        <span><strong>Speed:</strong> How fast you’re speaking during your talk.</span>
                        </li>
                        <li class="flex items-start">
                        <img src="/images/clarity.png" alt="Clarity" class="w-6 h-6 mr-3 mt-1">
                        <span><strong>Clarity:</strong> How understandable your words are.</span>
                        </li>
                        <li class="flex items-start">
                        <img src="/images/tone.png" alt="Tone" class="w-6 h-6 mr-3 mt-1">
                        <span><strong>Tone:</strong> The emotional character of your voice.</span>
                        </li>
                    </ul>

                    <hr class="border-gray-300 my-6">

                    <ul class="space-y-4">
                        <li class="flex items-start">
                        <img src="/images/volume.png" alt="Volume" class="w-6 h-6 mr-3 mt-1">
                        <span><strong>Volume:</strong> The strength and projection of your speech.</span>
                        </li>
                        <li class="flex items-start">
                        <img src="/images/fillers.png" alt="Filler words" class="w-6 h-6 mr-3 mt-1">
                        <span><strong>Filler words:</strong> Detection of “uh”, “um”, and similar hesitations.</span>
                        </li>
                        <li class="flex items-start">
                        <img src="/images/emotion.png" alt="Emotion" class="w-6 h-6 mr-3 mt-1">
                        <span><strong>Emotion:</strong> The sentiment and expressiveness of your delivery.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
