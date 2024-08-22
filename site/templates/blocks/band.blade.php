<section class="grid grid-cols-2 md:grid-cols-3 mx-auto gap-0 text-white py-10">
    @foreach ($page->children()->listed() as $member)
        @if ($image = $member->picture()->toFile())
        <div class="relative z-0">
            <picture>
                <source srcset="{{ $image->thumb(['format' => 'webp', 'width' => 500, 'height' => 700,])->url() }}" type="image/webp">
                <img class="w-full" src="{{ $image->crop(400, 600, 'top')->url() }}" alt="{{ $member->title() }}">
            </picture>
        </div>            
        @endif
    @endforeach
</section>