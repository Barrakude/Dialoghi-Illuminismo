<!-- resources/views/components/biography-card.blade.php -->

<div class="container mt-5 mb-5 box">
    <div class="row">
        <div class="col-md-6 image-container">
            <img class="p-3"
                src="{{ asset('images/' . $view . '.jpg') }}"
                alt="Esempio di Immagine" class="image-frame">
        </div>
        <div class="col-md-6 my-5 image-description">
            <h2>{{ ucfirst(str_replace('_', ' ', $view)) }}</h2>
            <p>Descrizione dinamica per {{ $view }}.</p>
            <a href="{{ route($view) }}">Continua a leggere</a>
        </div>
    </div>
</div>
