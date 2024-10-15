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
                            <img src="{{ asset('https://dariodepasquale.it/wp-content/uploads/2019/01/dario-de-pasquale-arte-francisco-goya-danza-bilbao.jpg') }}"
                                alt="Esempio di Immagine" class="image-frame p-3">
                        </div>
                        <div class="col-md-6 my-5 image-description">
                            <h2>Felicità e Virtù</h2>
                            <p>La questione della felicità ha una lunga storia nella tradizione filosofica occidentale.
                                Si può dire che nasca con la filosofia, quando ad Atene, tra V e IV secolo a.C., intorno
                                alla figura di Socrate si sviluppa il dibattito su quale sia il modo migliore di vivere.
                                Tutti i filosofi antichi si cimentarono con il problema della eudaimonia (il nome greco
                                della felicità), considerandola il fine ultimo della vita, l’oggetto del desiderio di
                                tutti gli uomini. </p>
                            <a href="{{ route('felicitàVirtù') }}">Continua a leggere</a>
                        </div>
                    </div>
                </div>

                {{-- immagine e descrizione --}}
                <div class="container mt-5 mb-5 box">
                    <div class="row">
                        <div class="col-md-6 image-container">
                            <img src="{{ asset('https://www.meisterdrucke.it/kunstwerke/1260px/Jean-Honore_Fragonard_-_Young_Girl_Reading_c1770_-_%28MeisterDrucke-57145%29.jpg') }}"
                                alt="Esempio di Immagine" class="image-frame p-3">
                        </div>
                        <div class="col-md-6 my-5 image-description">
                            <h2>La figura della donna nel romanzo del Settecento</h2>
                            <p>Il cosmopolitismo settecentesco trova nel romanzo il proprio luogo di elezione. Genere
                                ibrido, che non rispetta le unità di tempo e di luogo, il romanzo consente di dipingere
                                realtà geografiche diversissime tra loro, di evocare città e paesi reali o immaginari,
                                cui si imprime carattere di esemplarità, su cui si esercita la riflessione. Lo scopo
                                sotteso non è il puro divertimento del lettore, ma la sua istruzione. Questi si abitua a
                                confrontare i costumi, le idee, le filosofie, impara a discutere, a contraddire, a
                                dubitare, acquisisce il senso del relativo. </p>
                            <a href="{{ route('laFiguraDellaDonnaSettecento') }}">Continua a leggere</a>
                        </div>
                    </div>
                </div>

                {{-- immagine e descrizione --}}
                <div class="container mt-5 mb-5 box">
                    <div class="row">
                        <div class="col-md-6 image-container">
                            <img src="{{ asset('https://www.meisterdrucke.it/kunstwerke/1260px/Artus_Scheiner_-_Illustration_for_Gullivers_Travels_by_Jonathan_Swift_-_%28MeisterDrucke-646663%29.jpg') }}"
                                alt="Esempio di Immagine" class="image-frame p-3">
                        </div>
                        <div class="col-md-6 my-5 image-description">
                            <h2>Il racconto filosofico, saggi orientali, ingenui, giganti e pigmei</h2>
                            <p>Il romanzo illuministico si sviluppa spesso sotto forma di dialogo o in forma epistolare
                                o con narrazioni brevi a sfondo allegorico. È soprattutto il racconto filosofico lo
                                strumento espressivo che meglio sviluppa la polemica corrosiva dei Lumi. La sua
                                originalità comincia dalla forma e cioè dalla parodia delle cronache di viaggio per poi
                                diventare qualcosa di diverso e di affatto autonomo. In Francia è il “conte
                                philosophique” il genere più praticato. </p>
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
                            <p>La riflessione sul motivo delle illusioni appartiene all'essenza stessa della letteratura
                                e tuttavia spetta proprio al secolo dei lumi, il secolo che intende celebrare la
                                supremazia della ragione, la responsabilità di fornirne una prima definizione articolata
                                in senso moderno. Fino a questo momento, infatti, l'aspirazione dell'intelligenza umana
                                a sollevarsi oltre i confini delle verità accertate si era nutrita, pur con intensità e
                                sensibilità diverse, delle seduzioni fantastiche della mitologia classica o dei messaggi
                                edificanti dell'immaginario cristiano.</p>
                            <a href="{{ route('illusioneRealtà') }}">Continua a leggere</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        </div>
    </header>
</x-layout>
