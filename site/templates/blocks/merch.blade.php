<section class="py-10 md:py-16 bg-zinc-950 px-5" id="merch">
    <div class="max-w-6xl mx-auto prose prose-invert prose-h1:uppercase prose-h1:tracking-widest prose-h1:text-2xl prose-p:tracking-widest poppins-light pb-10 md:pb-16"> 
        <h2 class="uppercase mb-10 tracking-widest">{{ $page->title() }}</h2>
        <hr>
    </div>

    <!--- Foreach --->
    <div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 md:gap-10 max-w-6xl mx-auto">
            @foreach ($page->children()->listed()->index() as $product)
                <div class="text-white space-y-3 text-center relative">
                    @if ($image = $product->picture()->toFile())
                    <div class="overflow-hidden relative">
                        <a href="{{ $product->url() }}" aria-label="Ver producto">
                            <picture>
                                <source srcset="{{ $image->thumb(['format' => 'webp',])->url() }}" type="image/webp">
                                <img class="w-full transform transition duration-500 hover:scale-110" src="{{ $image->url() }}" alt="{{ $site->title() }}">
                            </picture>
                    </div>
                        </a>
                    @endif
                    <div>
                        <div class="text-white tracking-widest poppins-light uppercase text-xl">{{ $product->title() }}</div>
                        <div class="text-white"><span class="text-xs">$</span> {{ $product->price() }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    
</section>
