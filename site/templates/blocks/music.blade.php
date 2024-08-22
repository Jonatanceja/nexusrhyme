<section class="py-10 md:py-16space-y-5 md:space-y-10 px-5 md:px-0" id="music">
    <div class="grid grid-cols-1 md:grid-cols-2 md:gap-10 gap-16">
        <div class="px-0 md:px-10">
            {!! $page->embed()->value() !!}
        </div>
        <x-text>
            @kt($page->music())
        </x-text>
    </div>
</section>