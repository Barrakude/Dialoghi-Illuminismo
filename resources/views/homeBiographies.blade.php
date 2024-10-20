<x-layout>
    <x-slot name="title">
        Home Biographies
    </x-slot>
    <h1>Home Biographies</h1>
    <p>Biographies of the people who live in the house.</p>
    <ul>
        @foreach ($biographiesViews as $view)
            <li>
                {{ $view }}
                <ul>
                    @include('biographies.' . $view)
                </ul>
            </li>
        @endforeach
    </ul>
</x-layout>