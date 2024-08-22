<section class="py-10 md:py-16 px-5 max-w-6xl mx-auto" id="news">
    <x-text>@kt($page->heading())</x-text>
    <div class="max-w-6xl grid grid-cols-1 md:grid-cols-2 gap-20 mx-auto"> 
        <!--- Aquí va el destacado   --->
        @foreach ($page->featured()->toPages() as $article)
            <div class="gap-5 md:gap-10 items-center space-y-10">
                <div class="space-y-5">
                    <x-text><h2>{{ $article->title() }}</h2></x-text>
                    <div>
                        @if ($image = $article->picture()->toFile())
                            <img class="w-full" src="{{ $image->crop(500, 500)->url() }}" alt="Imagen del articulo">
                        @endif
                    </div>
                </div>
                <x-text>
                    @php
                        // Obtener el código del idioma actual
                        $currentLocale = kirby()->language()->code();

                        // Configurar Carbon con el idioma actual
                        Carbon\Carbon::setLocale($currentLocale);

                        // Crear instancia de Carbon
                        $dateTimestamp = $article->date()->toTimestamp();
                        $carbonDate = \Carbon\Carbon::createFromTimestamp($dateTimestamp);

                        // Obtener los nombres traducidos
                        $formattedDate = $carbonDate->translatedFormat('l, d F Y');
                    @endphp
                    <div>{{ $formattedDate }}</div>
                    <p>@kt($article->short())</p>
                    <a href="{{ $article->url() }}" aria-label="Leer más del articulo">Leer más</a>
                </x-text>
            </div>
        @endforeach
        <!--- Aquí van los artículos normales     --->
        <div class="gap-5 md:gap-10 items-center">
            @foreach ($page->children()->listed() as $article)
                <div class="grid grid-cols-12 items-start">
                    <div class="col-span-9">
                        <x-text>
                            <h2>{{ $article->title() }}</h2>
                            @php
                                // Obtener el código del idioma actual
                                $currentLocale = kirby()->language()->code();

                                // Configurar Carbon con el idioma actual
                                Carbon\Carbon::setLocale($currentLocale);

                                // Crear instancia de Carbon
                                $dateTimestamp = $article->date()->toTimestamp();
                                $carbonDate = \Carbon\Carbon::createFromTimestamp($dateTimestamp);

                                // Obtener los nombres traducidos
                                $formattedDate = $carbonDate->translatedFormat('l, d F Y');
                            @endphp
                            <div>{{ $formattedDate }}</div>
                        </x-text>
                    </div>
                    <div class="col-span-3">
                        @if ($image = $article->picture()->toFile())
                            <img class="w-full" src="{{ $image->crop(500, 500)->url() }}" alt="Imagen del articulo">
                        @endif
                    </div>
                </div>
                <div class="-mt-16">
                    <x-text>
                        <p>@kt($article->short())</p>
                        <a href="{{ $article->url() }}" aria-label="Leer más del articulo">Leer más</a>
                    </x-text>
                </div>
            @endforeach
        </div>
    </div>
</section>
