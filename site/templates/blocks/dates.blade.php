<section class="py-10 md:py-16 bg-zinc-950 space-y-10 px-5 md:px-0" id="dates">
    <div class="max-w-6xl mx-auto prose prose-invert prose-h2:uppercase prose-h2:tracking-widest">
        <h2>Próximos eventos</h2>
    </div>
    @foreach ($page->dates()->toStructure() as $date)
        <div class="grid grid-cols-1 md:grid-cols-5 gap-5 md:gap-10 max-w-6xl mx-auto items-center border-t pt-10">
            <div class="col-span-1 md:col-span-3 space-y-1 poppins-light text-lg uppercase text-white tracking tracking-[.5em]">
                @php
                // Cargar las traducciones de Carbon para español
                Carbon\Carbon::setLocale('es');
            
                // Crear instancia de Carbon
                $dateTimestamp = $date->date()->toTimestamp();
                $carbonDate = \Carbon\Carbon::createFromTimestamp($dateTimestamp);
            
                // Obtener los nombres traducidos
                $dayOfWeek = ucfirst($carbonDate->translatedFormat('l'));
                $dayOfMonth = $carbonDate->translatedFormat('d');
                $month = ucfirst($carbonDate->translatedFormat('F'));
                $year = $carbonDate->translatedFormat('Y');
                @endphp
                <div>{{ $dayOfWeek }} {{ $dayOfMonth }} de {{ $month }}</div>
                <div>{{ $year }}</div>
                <div>{{ $date->place() }}</div>
            </div>
            <div class="col-span-1 md:col-span-2 flex md:justify-end items-center">
                <a href="{{ $site->tickets() }}" aria-label="Conseguir Boletos">
                    <button class="transition duration-300 poppins-light px-3 py-2 uppercase text-white tracking tracking-[.2em] border border-white hover:text-zinc-950 hover:bg-white">Conseguir Boletos</button>
                </a>
            </div>
        </div>
    @endforeach
</section>