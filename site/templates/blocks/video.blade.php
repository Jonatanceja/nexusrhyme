<section class="grid grid-cols-1 md:grid-cols-2 bg-zinc-950" id="video">
    @foreach ($page->reels()->toStructure() as $item)
    @if ($reel = $item->video()->toFile())
    <a href="{{ $reel->url() }}" data-fancybox>
    @endif
        <div class="relative z-0">
            @if ($image = $item->cover()->toFile())
            <picture>
                <source srcset="{{ $image->thumb(['format' => 'webp',])->url() }}" type="image/webp">
                <img src="{{ $image->url() }}" alt="{{ $site->title() }}">
            </picture>
                <a href="{{ $item->video() }}" data-fancybox aria-label="Ver video">
                    <div class="absolute inset-0 flex justify-center items-center text-white z-20 text-2xl md:text-6xl border-2 border-white w-16 md:w-32 h-16 md:h-32 rounded-full mx-auto my-auto transition duration-300 hover:bg-white hover:text-zinc-900"><i class="lni lni-play"></i></div>
                    <h3 class="absolute top-5 z-20 text-white text-xs md:text-lg font-bold text-center px-5">{{ $item->title() }}</h3>
                </a>
            @endif
        </div>
    </a>        
    @endforeach
</section>