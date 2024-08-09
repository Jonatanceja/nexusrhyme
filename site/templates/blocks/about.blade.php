<section class="py-10 md:py-16 bg-zinc-950" id="about">
    <div class="md:flex items-center">
        <div class="w-full md:w-1/2">
            @if ($image = $page->picture()->toFile())
            <picture>
                <source srcset="{{ $image->thumb(['format' => 'webp',])->url() }}" type="image/webp">
                <img src="{{ $image->url() }}" alt="{{ $site->title() }}">
            </picture>
            @endif
        </div>
        <div class="w-full md:w-1/2 bg-zinc-800 prose prose-invert py-10 px-5 md:p-10 prose-h1:uppercase prose-h1:tracking-widest prose-h1:text-2xl prose-p:tracking-widest poppins-light prose-hr:bg-white md:-mb-16">
            @kt($page->bio())
        </div>
    </div>
</section>