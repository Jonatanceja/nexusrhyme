<section class="py-10 md:py-16 mx-auto" id="about">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        <x-text>
            @kt($page->bio())
        </x-text>
        <div class="">
            @if ($image = $page->picture()->toFile())
            <picture>
                <source srcset="{{ $image->thumb(['format' => 'webp',])->url() }}" type="image/webp">
                <img src="{{ $image->url() }}" alt="{{ $site->title() }}">
            </picture>
            @endif
        </div>
    </div>
</section>