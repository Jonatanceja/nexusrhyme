<div x-data="{ scrolled: false, open: false }" @click.away="open = false" x-init="window.addEventListener('scroll', () => { scrolled = (window.scrollY > 0) })">
    <div class="fixed w-full py-2 md:py-0 z-50" :class="{ 'bg-transparent': !scrolled && window.innerWidth >= 768, 'bg-black': scrolled || window.innerWidth < 768 }">
        <nav class="flex md:justify-center items-center w-full">
            <div class="hidden md:flex">
                <ul class="space-x-8 uppercase pr-4 text-center w-full flex items-center">
                    <li><a href="{{ $site->url() }}#about" class="text-white hover:text-zinc-100 poppins-light tracking-widest" aria-label="Ir a la sección de la banda">Banda</a></li>
                    <li><a href="{{ $site->url() }}#music" class="text-white hover:text-zinc-100 poppins-light tracking-widest" aria-label="Ir a la sección de Musica">Musica</a></li>
                    <li><a href="{{ $site->url() }}"><img class="w-24" src="/images/logo.png" alt="Mutant Form The Nebula" aria-label="Ir a página de inicio"></li></a>
                    <li><a href="{{ $site->url() }}#dates" class="text-white hover:text-zinc-100 poppins-light tracking-widest" aria-label="Ver más fechas">Tour</a></li>
                    <li><a href="{{ $site->url() }}#book" class="text-white hover:text-zinc-100 poppins-light tracking-widest" aria-label="Agendar a la banda">Book</a></li>
                </ul>
            </div>
            <!--- Mobile -->
            <div class="md:hidden mt-2 text-white flex items-center w-full px-5">
                <div class="w-1/2 flex">
                    <a href="{{ $site->url() }}" aria-label="Ir a página de inicio">
                        <img class="w-16" src="/images/logo.png" alt="Mutant Form The Nebula">
                    </a>
                </div>
                <div class="w-1/2 flex justify-end">
                    <button aria-label="Open Menu" @click="open = !open" class="text-naranja focus:outline-none">
                        <svg x-show="!open" class="h-10 w-10 transition-transform duration-300 transform" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4 6h16v2H4V6zm0 5h16v2H4v-2zm16 4H4v2h16v-2z" fill="currentColor"></path>
                        </svg>
                        <svg x-show="open" class="h-10 w-10 transition-transform duration-300 transform rotate-180" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.364 5.636a1 1 0 0 0-1.414 0L12 10.586 7.05 5.636a1 1 0 1 0-1.414 1.414L10.586 12l-4.95 4.95a1 1 0 1 0 1.414 1.414L12 13.414l4.95 4.95a1 1 0 0 0 1.414-1.414L13.414 12l4.95-4.95a1 1 0 0 0 0-1.414z" fill="currentColor"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
        <div x-show="open" class="md:hidden bg-zinc-900 mt-2">
            <ul class="px-2 py-5 uppercase text-white text-center space-y-4">
                <li><a href="{{ $site->url() }}#about" class="text-white hover:text-zinc-100 poppins-light tracking-widest" aria-label="Ir a la sección de la banda">Banda</a></li>
                <li><a href="{{ $site->url() }}#music" class="text-white hover:text-zinc-100 poppins-light tracking-widest" aria-label="Ir a la sección de Musica">Musica</a></li>
                <li><a href="{{ $site->url() }}#dates" class="text-white hover:text-zinc-100 poppins-light tracking-widest" aria-label="Ver más fechas">Tour</a></li>
                <li><a href="{{ $site->url() }}#book" class="text-white hover:text-zinc-100 poppins-light tracking-widest" aria-label="Agendar a la banda">Book</a></li>
            </ul>
        </div>
    </div>
</div>
