<x-layout>
    <header class="container-fluid my-10">
        <div class="row">
            <div class="col-12">
                <div class="mt-5" style="color:white; display: flex; justify-content: center; align-items: center;">
                    <h1>Dialoghi Illuminismo</h1>
                </div>
                <div class="container mt-5 mb-5 box">
                    <div class="row">
                        <div class="col-md-6 image-container">
                            <img class="p-3"
                                src="{{ asset('images/JamesGillray_JohnBullTakingALuncheonOrBritishCooksCrammingOldGr_(MeisterDrucke_257939).jpg') }}"
                                alt="Descrizione dell'immagine">

                        </div>
                        <div class="col-md-6 my-5 image-description">
                            <h2>Il Genere Satirico</h2>
                            <div class="article-preview">
                                <p>La satira è nel Settecento un genere molto diffuso. L'ispirazione satirica, la
                                    derisione e la parodia corrosiva hanno una genealogia antica: Luciano, Petronio,
                                    Orazio e, tra i moderni, è soprattutto la tradizione degli autori
                                    quattro-cinquecenteschi che ispira le figure satiriche.</p>
                                <a href="{{ route('genereSatirico') }}">Continua a leggere</a>
                            </div>

                        </div>
                    </div>
                </div>
</x-layout>
