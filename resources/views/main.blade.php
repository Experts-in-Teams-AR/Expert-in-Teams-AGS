<link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/apps.css') }}">


<style>
    .headline {
        font-size: 64px;
        font-family: Poppins, sans-serif;
        text-align: center;
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
        height: 100vh;
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
            margin-left: 120px;
            margin-right: 120px;
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
    margin-top: 30px;
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
            <div class="cards">
                <div class="card">
                    <div class="icon1">
                        <img src="/images/speak-icon.svg" alt="Speak icon" />
                    </div>
                    <h3 class="card-title1">SPEAK</h3>
                    <p class="card-text1">Rehearse your speech in front of Audience Reactor</p>
                </div>

                <div class="card">
                    <div class="icon2">
                        <img src="/images/react-icon.svg" alt="React icon" />
                    </div>
                    <h3 class="card-title2">REACT</h3>
                    <p class="card-text2">See feedback live and improve while speaking</p>
                </div>

                <div class="card">
                    <div class="icon3">
                        <img src="/images/improve-icon.svg" alt="Improve icon" />
                    </div>
                    <h3 class="card-title3">IMPROVE</h3>
                    <p class="card-text3">Review your speech and get performance insights</p>
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
            <h2 class="why-feature-title">Your message deserves to be heard!
                Practice smarter, speak with confidence, and deliver with impact.</h2>
            <div class="button-spacing">
                <div class="button">
                    <a href="{{ route('profile') }}"> Try Audience Reactor today! &#8594 </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Fourth View --}}

    <section class="min-h-screen pt-40 flex flex-col justify-center max-w-6xl mx-auto px-6 text-center">
        <h2 class="why-feature-title text-[30px] font-normal text-[var(--text-dark)] text-center font-[var(--base-font)] pb-20">
            "Good speakers inspire, lead, and connect. 
            Whether you're presenting at university, pitching a startup, or teaching others to communicate —
            great delivery makes all the difference. 
            Audience Reactor helps you find your authentic voice, practice with purpose, and perform with confidence."
        </h2>

        <div class="grid gap-8 md:grid-cols-3">
            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <span class="text-3xl text-green-500">“</span>
            <p class="text-[var(--text-grey)] mt-2 mb-4 leading-relaxed">
                Audience Reactor helped me overcome my fear of public speaking. The real-time feedback gave me confidence I never had before.
            </p>
            <p class="text-sm font-medium text-gray-500">— University Student</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <span class="text-3xl text-green-500">“</span>
            <p class="text-[var(--text-grey)] mt-2 mb-4 leading-relaxed">
                As a startup founder, practicing my pitch with Audience Reactor made a huge difference. I landed my seed funding!
            </p>
            <p class="text-sm font-medium text-gray-500">— Startup Founder</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <span class="text-3xl text-green-500">“</span>
            <p class="text-[var(--text-grey)] mt-2 mb-4 leading-relaxed">
                The judgment-free environment let me experiment and find my authentic speaking style. Game changer for educators.
            </p>
            <p class="text-sm font-medium text-gray-500">— Teacher</p>
            </div>
        </div>
    </section>

    {{--Fifth View --}}

    

</x-app-layout>
