<!-- FULLY RESPONSIVE PROFESSIONAL REDESIGN (Option C) -->
<!-- All px replaced with rem, responsive Tailwind breakpoints added, layout fixed for all screen sizes -->
<!-- Visual design remains identical, but now scales perfectly on mobile, tablet, laptop, and ultrawide -->

<link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/apps.css') }}">

<style>
    :root {
        --headline-size: 4rem;
        --subline-large: 1.5rem;
        --subline-medium: 1.3rem;
        --content-size: 1.2rem;
        --section-title-size: 3.5rem;
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

    .headline {
        font-size: var(--headline-size);
        text-align: center;
        font-family: Poppins, sans-serif;
        color: var(--text-dark);
        line-height: 1.1;
    }

    .subline1,
    .subline2 {
        text-align: center;
        font-family: Poppins, sans-serif;
        margin-top: 1.5rem;
    }

    .subline1 { font-size: var(--subline-large); }
    .subline2 { font-size: var(--subline-medium); }

    .button {
        background-color: #9EE493;
        padding: 1rem 2rem;
        border-radius: 0.5rem;
        font-size: 1.3rem;
        font-family: Poppins, sans-serif;
        margin-top: 2rem;
        font-weight: 500;
        color: var(--text-dark);
    }

    .spacing-home {
        max-width: 90rem;
        margin: auto;
        padding: 4rem 2rem;
        text-align: center;
    }

    .section-title {
        font-size: var(--section-title-size);
        font-family: Poppins, sans-serif;
        text-align: center;
        margin-bottom: 2rem;
        color: var(--text-dark);
        padding: 0 1rem;
    }

    .content-text {
        font-size: var(--content-size);
        font-family: Poppins, sans-serif;
        margin-top: 1.5rem;
        text-align: justify;
    }

    .why-feature-section { margin-top: 2rem; }

    .why-feature-title {
        font-size: 1.6rem;
        font-weight: 500;
        color: var(--text-dark);
        font-family: Poppins, sans-serif;
        margin-bottom: 1rem;
    }

    .why-feature-list { margin-top: 1.5rem; padding-left: 0; }
    .why-feature-list li {
        margin-bottom: 1rem;
        padding-left: 2rem;
        font-size: 1.2rem;
        position: relative;
    }

    .why-feature-list li::before {
        content: "✓";
        color: var(--button-bg);
        position: absolute;
        left: 0;
        top: 0;
        font-size: 1.2rem;
        font-weight: 700;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        @include('partials.navbar')
    </x-slot>

    <!-- HERO SECTION -->
    <div class="spacing-home">
        <div class="headline">
            <p>Great speakers are made,</p>
            <p>not born</p>
        </div>

        <div class="subline1">
            Find your voice and speak with confidence every single time.
        </div>

        <div class="subline2 max-w-4xl mx-auto">
            Practice with Audience Reactor – your personal, judgment-free audience that helps you improve every time you rehearse your speech.
        </div>

        <div class="flex justify-center mt-6">
            <a class="button" href="{{ route('about.how') }}">&#9654; See how it works!</a>
        </div>
    </div>

    <!-- SECTION 2 -->

    <section class="max-w-6xl mx-auto px-6 py-20">
        <h2 class="section-title">A smarter way to practice your speaking skills.</h2>

        <p class="subline2 max-w-3xl mx-auto">
            Audience Reactor listens, analyses, and reacts to your speech in real time just like a true audience would!
            It helps you improve your delivery, pacing, and confidence — without judgment.
        </p>

        <div class="grid gap-12 md:grid-cols-3 mt-20 text-center">
            <div>
                <img src="/images/1.svg" class="w-24 h-24 mx-auto" />
                <h3 class="text-2xl mt-5 text-[var(--text-dark)]">SPEAK</h3>
                <p class="mt-4">Rehearse your speech in front of Audience Reactor.</p>
            </div>

            <div>
                <img src="/images/2.svg" class="w-24 h-24 mx-auto" />
                <h3 class="text-2xl mt-5 text-[var(--text-dark)]">REACT</h3>
                <p class="mt-4">See feedback live and improve while speaking.</p>
            </div>

            <div>
                <img src="/images/3.svg" class="w-24 h-24 mx-auto" />
                <h3 class="text-2xl mt-5 text-[var(--text-dark)]">IMPROVE</h3>
                <p class="mt-4">Review your speech and get performance insights.</p>
            </div>
        </div>
    </section>

    <!-- SECTION 3 -->

    <section class="max-w-5xl mx-auto px-6 py-20">

        <h2 class="section-title">Why It Matters?</h2>

        <p class="content-text">
            Speaking with clarity and confidence can open doors and leave a lasting impression.
            Yet most of us practice alone, unsure if our message truly reaches our audience.
        </p>

        <p class="content-text mt-6">
            Audience Reactor transforms practice into progress — helping you improve faster, gain confidence, and speak with impact.
        </p>

        <div class="why-feature-section mt-12">
            <h3 class="why-feature-title">With Audience Reactor, you can:</h3>

            <ul class="why-feature-list">
                <li>Know what works and what doesn’t while you practice.</li>
                <li>Refine your tone, pace, and clarity with improvement suggestions.</li>
                <li>Build confidence so anxiety no longer holds you back.</li>
                <li>Make every speech more engaging and effective.</li>
            </ul>
        </div>

        <div class="mt-16 text-center">
            <h3 class="text-3xl font-medium">
                Your message deserves to be heard! Practice smarter, speak with confidence, and deliver with impact.
            </h3>

            <div class="mt-8 flex justify-center">
                <a class="button" href="{{ route('profile') }}">Try Audience Reactor today! →</a>
            </div>
        </div>
    </section>

    <!-- SECTION 4 Testimonials -->

    <section class="max-w-6xl mx-auto px-6 py-24 text-center">
        <h2 class="text-3xl md:text-4xl text-[var(--text-dark)] font-medium leading-relaxed pb-16">
            "Good speakers inspire, lead, and connect. Whether you're presenting at university, pitching a startup, or teaching others — great delivery makes all the difference."
        </h2>

        <div class="grid gap-10 md:grid-cols-3">
            <div class="bg-[#EDF2F4] rounded-2xl p-8 shadow-sm border">
                <span class="text-4xl text-green-500">“</span>
                <p class="text-[var(--text-grey)] mt-4 mb-6">Audience Reactor helped me overcome my fear of public speaking.</p>
                <p class="text-sm font-medium text-gray-500">— University Student</p>
            </div>

            <div class="bg-[#EDF2F4] rounded-2xl p-8 shadow-sm border">
                <span class="text-4xl text-green-500">“</span>
                <p class="text-[var(--text-grey)] mt-4 mb-6">It made a huge difference in pitching my startup. I landed funding!</p>
                <p class="text-sm font-medium text-gray-500">— Startup Founder</p>
            </div>

            <div class="bg-[#EDF2F4] rounded-2xl p-8 shadow-sm border">
                <span class="text-4xl text-green-500">“</span>
                <p class="text-[var(--text-grey)] mt-4 mb-6">The judgment-free environment helped me find my authentic style.</p>
                <p class="text-sm font-medium text-gray-500">— Teacher</p>
            </div>
        </div>
    </section>

    <!-- SECTION 5 HOW IT WORKS -->

    <section class="max-w-6xl mx-auto px-6 py-24 text-center">
        <h2 class="section-title">How it works?</h2>

        <p class="subline2 max-w-3xl mx-auto">
            Audience Reactor analyses your speech in real time — tracking pace, tone, clarity, volume, filler words, and emotional delivery.
        </p>

        <div class="grid gap-16 md:grid-cols-2 mt-20">

            <div>
                <p class="text-3xl font-semibold mb-6">Tracked speech parameters:</p>
                <ul class="why-feature-list">
                    <li><strong>Pace:</strong> Speaking speed analysis.</li>
                    <li><strong>Tone:</strong> Voice emotional expression.</li>
                    <li><strong>Clarity:</strong> Word understandability.</li>
                    <li><strong>Volume:</strong> Projection level.</li>
                    <li><strong>Filler Words:</strong> Detection of “uh”, “um”, etc.</li>
                    <li><strong>Confidence:</strong> Emotional delivery strength.</li>
                </ul>
            </div>

            <div>
                <p class="text-3xl font-semibold mb-6">Visual Feedback:</p>

                <div class="bg-[#EDF2F4] p-8 rounded-2xl shadow-sm border">
                    <ul class="space-y-4 text-left">
                        <li class="flex items-start gap-3"><img class="w-7 h-7" src="/images/speed.png"><span><strong>Speed:</strong> How fast you're speaking.</span></li>
                        <li class="flex items-start gap-3"><img class="w-7 h-7" src="/images/clarity.png"><span><strong>Clarity:</strong> How understandable your words are.</span></li>
                        <li class="flex items-start gap-3"><img class="w-7 h-7" src="/images/tone.png"><span><strong>Tone:</strong> Emotional expression.</span></li>
                    </ul>

                    <hr class="my-6">

                    <ul class="space-y-4 text-left">
                        <li class="flex items-start gap-3"><img class="w-7 h-7" src="/images/volume.png"><span><strong>Volume:</strong> Voice strength.</span></li>
                        <li class="flex items-start gap-3"><img class="w-7 h-7" src="/images/fillers.png"><span><strong>Filler Words:</strong> Detection of hesitations.</span></li>
                        <li class="flex items-start gap-3"><img class="w-7 h-7" src="/images/emotion.png"><span><strong>Emotion:</strong> Delivery sentiment.</span></li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

</x-app-layout>
