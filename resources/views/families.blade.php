<x-layout>
    <x-slot:pageName>Families</x-slot:pageName>
    <x-slot:heading>Families Page</x-slot:heading>
    <h1>Families Page</h1>

    <ul>
        @foreach ($families as $family)
            <li>
                <a href="/families/{{ $family['id'] }}" class="text-blue-500 hover:underline">
                    {{ $family['firstName'] }} {{ $family['lastName'] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
