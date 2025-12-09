<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @include('partials.navbar')
        </h1>
    </x-slot>
    <div>
        <p>Result page display provided content here </p>
        @foreach ($values as $entry)
            <div>
                <p>Mean F0: {{ $entry->meanF0 }}</p>
                <p>F0 std: {{ $entry->F0std }}</p>
                <p>Mean F1: {{ $entry->meanF1 }}</p>
                <p>H1-A3: {{ $entry->H1minusA3 }}</p>
                <p>Pause Count: {{ $entry->pauseCount }}</p>
                <hr>
            </div>
        @endforeach
    </div>
</x-app-layout>