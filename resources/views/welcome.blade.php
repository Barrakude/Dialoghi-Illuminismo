<x-layout>
    <header class="container-fluid my-10">
        <div class="row">
            <div class="col-12">
                <div class="mt-5" style="color:white; display: flex; justify-content: center; align-items: center;">
                    <h1>Dialoghi Illuminismo</h1>
                </div>
                {{-- immagine e descrizione --}}
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
                {{-- altra immagine con altra descrizione --}}
                <div class="container mt-5 mb-5 box">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="p-3" src="{{ asset('images/candide2.jpg') }}" alt="Esempio di Immagine"
                                class="image-frame">
                        </div>
                        <div class="col-md-6 my-5 image-description">

                            <h2>Dialettica, Natura e Cultura</h2>
                            <p>Raccogliendo l'eredità del pensiero critico tardo-cinquecentesco e secentesco, di quei
                                filoni tematici che vanno da Montaigne a Bayle, la riflessione degli illuministi dà
                                impulso ad un ampio dibattito, che trova nella dialettica natura/cultura il proprio
                                fulcro problematico. </p>
                            <a href="{{ route('dialetticaNaturaCultura') }}">Continua a leggere</a>
                        </div>

                    </div>
                </div>

                {{-- immagine e descrizione --}}
                <div class="container mt-5 mb-5 box">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="p-3" src="{{ asset('images/candide3.jpg') }}" alt="Esempio di Immagine"
                                class="image-frame">
                        </div>
                        <div class="col-md-6 my-5 image-description">
                            <h2>Mito del Buon Selvaggio</h2>
                            <p>Questa è una descrizione dell'immagine. Puoi aggiungere qualsiasi testo qui per
                                descrivere l'immagine accanto. Utilizza HTML e CSS per personalizzare ulteriormente lo
                                stile e il layout secondo le tue esigenze.</p>
                        </div>
                    </div>
                </div>

                {{-- immagine e descrizione --}}
                <div class="container mt-5 mb-5 box">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="my-5 mx-5" src="{{ asset('images/candide4.jpg') }}" alt="Esempio di Immagine"
                                class="image-frame">
                        </div>
                        <div class="col-md-6 my-5 image-description">
                            <h2>La Questione Femminile</h2>
                            <p>Questa è una descrizione dell'immagine. Puoi aggiungere qualsiasi testo qui per
                                descrivere l'immagine accanto. Utilizza HTML e CSS per personalizzare ulteriormente lo
                                stile e il layout secondo le tue esigenze.</p>
                        </div>
                    </div>
                </div>

                {{-- immagine e descrizione --}}
                <div class="container mt-5 mb-5 box">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="my-5 mx-5" src="{{ asset('images/candide5.jpg') }}" alt="Esempio di Immagine"
                                class="image-frame">
                        </div>
                        <div class="col-md-6 my-5 image-description">
                            <h2>Felicità e Virtù</h2>
                            <p>Questa è una descrizione dell'immagine. Puoi aggiungere qualsiasi testo qui per
                                descrivere l'immagine accanto. Utilizza HTML e CSS per personalizzare ulteriormente lo
                                stile e il layout secondo le tue esigenze.</p>
                        </div>
                    </div>
                </div>

                {{-- immagine e descrizione --}}
                <div class="container mt-5 mb-5 box">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="my-5 mx-5" src="{{ asset('images/gull1.jpg') }}" alt="Esempio di Immagine"
                                class="image-frame">
                        </div>
                        <div class="col-md-6 my-5 image-description">
                            <h2>La figura della donna nel romanzo del Settecento</h2>
                            <p>Questa è una descrizione dell'immagine. Puoi aggiungere qualsiasi testo qui per
                                descrivere l'immagine accanto. Utilizza HTML e CSS per personalizzare ulteriormente lo
                                stile e il layout secondo le tue esigenze.</p>
                        </div>
                    </div>
                </div>

                {{-- immagine e descrizione --}}
                <div class="container mt-5 mb-5 box">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="my-5 mx-5" src="{{ asset('images/gull2.jpg') }}" alt="Esempio di Immagine"
                                class="image-frame">
                        </div>
                        <div class="col-md-6 my-5 image-description">
                            <h2>Il racconto filosofico, saggi orientali, ingenui, giganti e pigmei</h2>
                            <p>Questa è una descrizione dell'immagine. Puoi aggiungere qualsiasi testo qui per
                                descrivere l'immagine accanto. Utilizza HTML e CSS per personalizzare ulteriormente lo
                                stile e il layout secondo le tue esigenze.</p>
                        </div>
                    </div>
                </div>

                {{-- immagine e descrizione --}}
                <div class="container mt-5 mb-5 box">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="my-5 mx-5" src="{{ asset('images/gull4.jpg') }}" alt="Esempio di Immagine"
                                class="image-frame">
                        </div>
                        <div class="col-md-6 my-5 image-description">
                            <h2>Illusione e Realtà</h2>
                            <p>Questa è una descrizione dell'immagine. Puoi aggiungere qualsiasi testo qui per
                                descrivere l'immagine accanto. Utilizza HTML e CSS per personalizzare ulteriormente lo
                                stile e il layout secondo le tue esigenze.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        </div>
    </header>
</x-layout>
