@if ($image = $page->picture()->tofile())
<section class="bg-cover bg-center min-h-screen bg-zinc-900 flex items-end py-10 md:py-16" style="background-image: url({{ $image->thumb(['format' => 'webp',])->url() }}), url({{ $image->url() }})">
    <div class="max-w-6xl mx-auto space-y-5 md:space-y-10">
        <div class="text-white text-center space-y-5">
            <div class="uppercase font-light tracking-[.5em]">NEWS</div>
            <h1 class="font-bold text-2xl md:text-4xl uppercase tracking-[.5em]">{{ $page->newsletter() }}</h1>
            <div>
                @foreach ($page->button()->toStructure() as $item)
                    <a class="border-b-2 border-white uppercase" href="">
                        {{ $item->text() }} <span class="">→</span>
                    </a>
                @endforeach
            </div>
        </div>
        @include('partials.music')
    </div>
</section>
@endif