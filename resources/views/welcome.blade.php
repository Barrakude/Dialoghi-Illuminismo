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
                        <div class="col-md-6 image-container">
                            <img class="p-3"
                                src="{{ asset('images//buon selvaggio\Henri JF Rousseau - Exotic landscape - (MeisterDrucke-262893).jpg') }}"
                                alt="Esempio di Immagine" class="image-frame">
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
                        <div class="col-md-6 image-container">
                            <img class="p-3"
                                src="{{ asset('https://www.radiofrance.fr/s3/cruiser-production/2022/06/b3af3dd2-1ca9-409d-b36f-fa1cced3c79e/1200x680_sans-titre-16.jpg') }}"
                                alt="Esempio di Immagine" class="image-frame">
                        </div>
                        <div class="col-md-6 my-5 image-description">
                            <h2>Mito del Buon Selvaggio</h2>
                            <p>Ampiamente diffuso nel Settecento, il mito del buon selvaggio ha una duplice derivazione
                                classica e biblica, richiamando sia gli archetipi dell'Eden primitivo, del paradiso
                                terrestre, sia quelli dell'età dell'oro. La letteratura moderna, tra Cinquecento e
                                Settecento, ne dà una lettura originale, arricchendone i contenuti fino ad esprimere con
                                grande slancio utopistico, l'ideale di un'integrazione tra culture lontane</p>
                            <a href="{{ route('mitoDelBuonSelvaggio') }}">Continua a leggere</a>
                        </div>
                    </div>
                </div>

                {{-- immagine e descrizione --}}
                <div class="container mt-5 mb-5 box">
                    <div class="row">
                        <div class="col-md-6 image-container">
                            <img src="{{ asset('https://cdn.radiofrance.fr/s3/cruiser-production/2020/08/bad5614c-e147-4738-a181-4be0e0927abb/1136_054_cor20719.jpg') }}"
                                alt="Esempio di Immagine" class="p-3 image-frame">
                        </div>
                        <div class="col-md-6 my-5 image-description">
                            <h2>La Questione Femminile</h2>
                            <p>Il periodo che precede la Rivoluzione è fortemente caratterizzato dalla presenza di
                                élites femminili in quasi tutti gli stati europei. Benché a fatica, poche donne riescono
                                ad accedere all’istruzione, più spesso da autodidatte, e a riflettere sulla loro
                                condizione sociale. Esse propongono riforme legislative a favore del genere femminile,
                                degli oppressi, degli schiavi.</p>
                            <a href="{{ route('laQuestioneFemminile') }}">Continua a leggere</a>
                        </div>
                    </div>
                </div>

                {{-- immagine e descrizione --}}
                <div class="container mt-5 mb-5 box">
                    <div class="row">
                        <div class="col-md-6 image-container">
                            <img src="{{ asset('images/candide5.jpg') }}" alt="Esempio di Immagine"
                                class="image-frame p-3">
                        </div>
                        <div class="col-md-6 my-5 image-description">
                            <h2>Felicità e Virtù</h2>
                            <p>Questa è una descrizione dell'immagine. Puoi aggiungere qualsiasi testo qui per
                                descrivere l'immagine accanto. Utilizza HTML e CSS per personalizzare ulteriormente lo
                                stile e il layout secondo le tue esigenze.</p>
                            <a href="{{ route('felicitàVirtù') }}">Continua a leggere</a>
                        </div>
                    </div>
                </div>

                {{-- immagine e descrizione --}}
                <div class="container mt-5 mb-5 box">
                    <div class="row">
                        <div class="col-md-6 image-container">
                            <img src="{{ asset('images/gull1.jpg') }}" alt="Esempio di Immagine"
                                class="image-frame p-3">
                        </div>
                        <div class="col-md-6 my-5 image-description">
                            <h2>La figura della donna nel romanzo del Settecento</h2>
                            <p>Questa è una descrizione dell'immagine. Puoi aggiungere qualsiasi testo qui per
                                descrivere l'immagine accanto. Utilizza HTML e CSS per personalizzare ulteriormente lo
                                stile e il layout secondo le tue esigenze.</p>
                            <a href="{{ route('laFiguraDellaDonnaSettecento') }}">Continua a leggere</a>
                        </div>
                    </div>
                </div>

                {{-- immagine e descrizione --}}
                <div class="container mt-5 mb-5 box">
                    <div class="row">
                        <div class="col-md-6 image-container">
                            <img src="{{ asset('images/gull2.jpg') }}" alt="Esempio di Immagine"
                                class="image-frame p-3">
                        </div>
                        <div class="col-md-6 my-5 image-description">
                            <h2>Il racconto filosofico, saggi orientali, ingenui, giganti e pigmei</h2>
                            <p>Questa è una descrizione dell'immagine. Puoi aggiungere qualsiasi testo qui per
                                descrivere l'immagine accanto. Utilizza HTML e CSS per personalizzare ulteriormente lo
                                stile e il layout secondo le tue esigenze.</p>
                            <a href="{{ route('IlRaccontoFilosofico') }}">Continua a leggere</a>
                        </div>
                    </div>
                </div>

                {{-- immagine e descrizione --}}
                <div class="container mt-5 mb-5 box">
                    <div class="row">
                        <div class="col-md-6 image-container">
                            <img src="{{ asset('images/gull4.jpg') }}" alt="Esempio di Immagine"
                                class="image-frame p-3">
                        </div>
                        <div class="col-md-6 my-5 image-description">
                            <h2>Illusione e Realtà</h2>
                            <p>Questa è una descrizione dell'immagine. Puoi aggiungere qualsiasi testo qui per
                                descrivere l'immagine accanto. Utilizza HTML e CSS per personalizzare ulteriormente lo
                                stile e il layout secondo le tue esigenze.</p>
                            <a href="{{ route('illusioneRealtà') }}">Continua a leggere</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        </div>
    </header>
</x-layout>
