@if ($image = $page->picture()->toFile())
    <section class="bg-cover bg-fixed bg-top md:min-h-screen px-5" style="background-image: url({{ $image->thumb(['format' => 'webp',])->url() }}), url({{ $image->url() }})" id="book">
        <div class="grid grid-cols-1 md:grid-cols-5 items-center max-w-4xl mx-auto pt-5 pb-32 md:pt-20">
            <div class="col-span-1 md:col-span-3">
                <h2 class="col-span-1 md:col-span-3 uppercase text-white text-3xl">{{ $page->heading() }}</h2>
                <div class="text-white"><a href="mailto:{{ $site->email() }}">{{ $site->email() }}</a></div>
            </div>
            <div class="col-span-1 md:col-span-2 flex md:justify-end items-center">
                <a href="{{ $page->button() }}" aria-label="Contacto para presentaciones">
                    <button class="transition duration-300 poppins-light px-3 py-2 uppercase text-white tracking tracking-[.2em] hover:text-zinc-950 bg-transparent hover:bg-white border border-white">Contacto</button>
                </a>
            </div>
        </div>
    </section>
@endif