<x-layout>
    <x-slot:pageName>Family</x-slot:pageName>
    <x-slot:heading>
        Family Page
    </x-slot:heading>

    <h2 class="font-bold text-lg">
        {{ $family['firstName'] }} {{ $family['lastName'] }}
    </h2>
</x-layout>
