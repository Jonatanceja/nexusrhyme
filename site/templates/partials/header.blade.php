<div x-data="{ scrolled: false, open: false }" @click.away="open = false" x-init="window.addEventListener('scroll', () => { scrolled = (window.scrollY > 0) })">
    <div class="fixed w-full py-2 md:py-0 z-50 px-5" :class="{ 'bg-transparent': !scrolled && window.innerWidth >= 768, 'bg-zinc-900': scrolled || window.innerWidth < 768 }">
        <nav class="grid grid-cols-1 md:grid-cols-3 items-center w-full md:py-5">
            <div class="hidden md:flex">
                <ul class="space-x-8 uppercase pr-4 text-center w-full flex items-center">
                    <li><a href="{{ $site->url() }}#home" class="text-white hover:text-golden poppins-light tracking-widest" aria-label="Ir a la sección de inicio">Home</a></li>
                    <li><a href="{{ $site->url() }}#about" class="text-white hover:text-golden poppins-light tracking-widest" aria-label="Ir a la sección de la banda">About</a></li>
                    <li><a href="{{ $site->url() }}#music" class="text-white hover:text-golden poppins-light tracking-widest" aria-label="Ir a la sección de musica">Music</a></li>
                    <li><a href="{{ $site->url() }}#news" class="text-white hover:text-golden poppins-light tracking-widest" aria-label="Ir a la sección de musica">News</a></li>
                </ul>
            </div>
            <div class="hidden md:block">
                <a href="{{ $site->url() }}"><img class="h-5 md:block hidden mx-auto" src="/images/nexus.svg" alt="Mutant Form The Nebula" aria-label="Ir a página de inicio"></a>
            </div>
            <div class="md:flex space-x-5 top-1/2 hidden md:justify-end">
                <div>
                    <ul class="text-white flex items-center uppercase space-x-5">
                        <?php foreach($kirby->languages() as $language): ?>
                        <li<?php e($kirby->language() == $language, ' class="active"') ?>>
                          <a href="<?php echo $language->url() ?>" hreflang="<?php echo $language->code() ?>">
                            <?php echo html($language->code()) ?>
                          </a>
                        </li>
                        <?php endforeach ?>
                      </ul>
                </div>
                <div class="text-golden text-2xl transition duration-300 transform hover:scale-125">
                    <a href="{{ $site->instagram() }}" target="blank"><i class="lni lni-instagram-original" aria-label="Ir a Instagram"></i></a>
                </div>
                <div class="text-golden text-2xl transition duration-300 transform hover:scale-125">
                    <a href="{{ $site->facebook() }}" target="blank"><i class="lni lni-facebook-original" aria-label="Ir a Facebook"></i></a>
                </div>
                <div class="text-golden text-2xl transition duration-300 transform hover:scale-125">
                    <a href="{{ $site->youtube() }}" target="blank"><i class="lni lni-youtube" aria-label="Ir a YouTube"></i></a>
                </div>
            </div>
            <!--- Mobile -->
            <div class="md:hidden mt-2 text-white flex items-center w-full">
                <div class="w-2/3">
                    <a href="{{ $site->url() }}"><img class="h-5" src="/images/nexus.svg" alt="Mutant Form The Nebula" aria-label="Ir a página de inicio"></a>
                </div>
                <div class="flex justify-end w-1/3">
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
                <li><a href="{{ $site->url() }}#home" class="text-white hover:text-zinc-100 poppins-light tracking-widest" aria-label="Ir a la sección de inicio">Home</a></li>
                    <li><a href="{{ $site->url() }}#about" class="text-white hover:text-zinc-100 poppins-light tracking-widest" aria-label="Ir a la sección de la banda">About</a></li>
                    <li><a href="{{ $site->url() }}#music" class="text-white hover:text-zinc-100 poppins-light tracking-widest" aria-label="Ir a la sección de musica">Music</a></li>
                    <li><a href="{{ $site->url() }}#news" class="text-white hover:text-zinc-100 poppins-light tracking-widest" aria-label="Ir a la sección de musica">News</a></li>
            </ul>
            <div class="flex space-x-8 justify-center">
                <div>
                    <ul class="text-white flex items-center uppercase space-x-5">
                        <?php foreach($kirby->languages() as $language): ?>
                        <li<?php e($kirby->language() == $language, ' class="active"') ?>>
                          <a href="<?php echo $language->url() ?>" hreflang="<?php echo $language->code() ?>">
                            <?php echo html($language->code()) ?>
                          </a>
                        </li>
                        <?php endforeach ?>
                      </ul>
                </div>
                <div class="text-golden text-2xl transition duration-300 transform hover:scale-125">
                    <a href="{{ $site->instagram() }}" target="blank"><i class="lni lni-instagram-original" aria-label="Ir a Instagram"></i></a>
                </div>
                <div class="text-golden text-2xl transition duration-300 transform hover:scale-125">
                    <a href="{{ $site->facebook() }}" target="blank"><i class="lni lni-facebook-original" aria-label="Ir a Facebook"></i></a>
                </div>
                <div class="text-golden text-2xl transition duration-300 transform hover:scale-125">
                    <a href="{{ $site->youtube() }}" target="blank"><i class="lni lni-youtube" aria-label="Ir a YouTube"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
