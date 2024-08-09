@extends('layouts.default')
@section('content')
    <main class="py-10 md:py-16 bg-zinc-950 min-h-screen">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 max-w-6xl mx-auto px-5 mt-8 md:mt-16">
            <div>
                @if ($image = $page->picture()->toFile())
                <picture>
                    <source srcset="{{ $image->thumb(['format' => 'webp',])->url() }}" type="image/webp">
                    <img src="{{ $image->url() }}" alt="Imagen de producto">
                </picture>
                @endif
            </div>
            <div class="prose prose-invert space-y-5">
                <h1>{{ $page->title() }}</h1>
                <div class="text-xl font-bold">$ {{ $page->price() }}</div>
                <p class="pt-3 border-t border-t-white">{{ $page->description() }}</p>
                <div class="flex items-center">
                    Tallas: 
                    <ul class="list-none flex space-x-2 items-center">
                        @foreach ($page->tallas()->split() as $talla)
                            <li class="bg-zinc-700 px-2 py-1 rounded-sm">{{ $talla }}</li>
                        @endforeach
                    </ul>
                </div>
                <a href="{{ $site->whatsapp() }}">
                    <button class="transition duration-300 poppins-light px-3 py-2 uppercase text-white tracking tracking-[.2em] border border-white hover:text-zinc-950 hover:bg-white">Comprar</button>
                </a>
                <div class="text-sm"><a href="{{ $site->url() }}" aria-label="Regresar al inicio"><span><i class="lni lni-arrow-left"></i></span> Volver</a></div>
            </div>
        </div>
    </main>
@endsection