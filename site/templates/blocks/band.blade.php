<section class="grid grid-cols-2 md:grid-cols-5 bg-zinc-950 gap-0 text-white">
    @foreach ($page->children()->listed() as $member)
        @if ($image = $member->picture()->toFile())
        <div class="relative z-0">
            <picture>
                <source srcset="{{ $image->thumb(['format' => 'webp', 'width' => 400, 'height' => 600,])->url() }}" type="image/webp">
                <img src="{{ $image->crop(400, 600, 'top')->url() }}" alt="{{ $member->title() }}">
            </picture>
            <div class="absolute inset-x-0 bottom-10 text-center z-20 space-y-2">
                <div class="text-white poppins-light uppercase tracking-[.3em]">{{ $member->title() }}</div>
                <div class="text-white poppins-light uppercase tracking-[.3em] text-xs">{{ $member->instrument() }}</div>
            </div>
        </div>            
        @endif
    @endforeach
</section>