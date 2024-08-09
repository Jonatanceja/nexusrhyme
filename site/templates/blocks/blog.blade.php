<section class="py-10 md:py-16 bg-zinc-950 px-5" id="blog">
    <div class="max-w-6xl mx-auto prose prose-invert prose-h1:uppercase prose-h1:tracking-widest prose-h1:text-2xl prose-p:tracking-widest poppins-light"> 
        <h2 class="uppercase mb-10 tracking-widest">{{ $page->title() }}</h2>
    </div>
    <div class="max-w-6xl mx-auto"> 
        @foreach ($page->children()->listed() as $article)
            <div class="grid grid-cols-1 md:grid-cols-5 gap-5 md:gap-10 items-center border-t border-t-white pt-10 md:pt-16">
                <div class="col-span-2">
                    @if ($image = $article->picture()->toFile())
                        <img class="w-full" src="{{ $image->crop(500, 500)->url() }}" alt="Imagen del articulo">
                    @endif
                </div>
                <div class="col-span-3 prose prose-invert prose-h2:uppercase prose-h2:tracking-widest prose-h2:text-2xl prose-p:tracking-widest poppins-light">
                    <h2>{{ $article->title() }}</h2>
                    @php
                    // Cargar las traducciones de Carbon para español
                    Carbon\Carbon::setLocale('es');
                
                    // Crear instancia de Carbon
                    $dateTimestamp = $article->date()->toTimestamp();
                    $carbonDate = \Carbon\Carbon::createFromTimestamp($dateTimestamp);
                
                    // Obtener los nombres traducidos
                    $dayOfWeek = ucfirst($carbonDate->translatedFormat('l'));
                    $dayOfMonth = $carbonDate->translatedFormat('d');
                    $month = ucfirst($carbonDate->translatedFormat('F'));
                    $year = $carbonDate->translatedFormat('Y');
                    @endphp
                    <div>{{ $dayOfMonth }} de {{ $month }} {{ $year }}</div>
                    <p>@kt($article->short())</p>
                    <a href="{{ $article->url() }}" aria-label="Leer más del articulo">Leer más</a>
                </div>
            </div>
        @endforeach
    </div>
    
</section>