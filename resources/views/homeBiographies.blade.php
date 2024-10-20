<x-layout>
<<<<<<< HEAD
    <h1>Anteprima delle Biografie</h1>

<x-biography-card>
    
</x-biography-card>
=======
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
>>>>>>> 6d12302153853afcbe98e70c59ac22cf1970adc1
</x-layout>