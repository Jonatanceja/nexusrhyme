@if ($image = $page->picture()->tofile())
<section class="bg-cover bg-center min-h-screen bg-zinc-900 md:flex items-end py-10 md:py-16 hidden" style="background-image: url({{ $image->thumb(['format' => 'webp',])->url() }}), url({{ $image->url() }})">
    <div class="max-w-6xl mx-auto space-y-5 md:space-y-10">
        <div class="text-white block md:flex items-center justify-center space-x-5">
            <div class="">
                @if ($page->spotify()->isNotEmpty())
                        <a class="text-white flex items-center justify-center uppercase tracking-[.5em] poppins-light transform transition duration-300 hover:scale-110 text-sm" href="{{ $page->spotify() }}" aria-label="Enlace a Spotify">
                            <span class="mr-2 -mb-2"><i class="lni lni-spotify-original"></i></span> 
                            Spotify
                        </a>       
                @endif
            </div>
            <div class="">
                @if ($page->apple()->isNotEmpty())
                        <a class="text-white flex items-center justify-center uppercase tracking-[.5em] poppins-light transform transition duration-300 hover:scale-110 text-sm" href="{{ $page->apple() }}" aria-label="Enlace a Apple Music">
                            <span class="mr-2 -mb-2"><i class="lni lni-apple-brand"></i></span> 
                            Apple Music
                        </a>       
                @endif
            </div>
            <div class="">
                @if ($page->deezer()->isNotEmpty())
                        <a class="text-white flex items-center justify-center uppercase tracking-[.5em] poppins-light transform transition duration-300 hover:scale-110 text-sm" href="{{ $page->deezer() }}" aria-label="Enlace a Deezer">
                            <span class="mr-2 -mb-2">
                                <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4847 2.89874C16.6605 1.87987 16.9184 1.23917 17.2041 1.23795H17.2048C17.7376 1.23978 18.1695 3.46172 18.1695 6.20504C18.1695 8.94833 17.7369 11.1721 17.2036 11.1721C16.9849 11.1721 16.7831 10.7945 16.6206 10.1618C16.3639 12.478 15.8311 14.0703 15.2144 14.0703C14.7371 14.0703 14.3088 13.1138 14.0213 11.6054C13.825 14.4741 13.3309 16.5094 12.7533 16.5094C12.3909 16.5094 12.0605 15.7029 11.8158 14.3897C11.5216 17.1006 10.8421 19 10.0495 19C9.25695 19 8.5762 17.1011 8.2832 14.3897C8.04035 15.7029 7.70995 16.5094 7.34566 16.5094C6.76818 16.5094 6.27524 14.4741 6.07772 11.6054C5.79019 13.1138 5.36312 14.0703 4.88467 14.0703C4.26851 14.0703 3.73513 12.4786 3.4784 10.1618C3.31711 10.7964 3.11414 11.1721 2.89547 11.1721C2.36207 11.1721 1.92955 8.94833 1.92955 6.20504C1.92955 3.46172 2.36207 1.23795 2.89547 1.23795C3.1818 1.23795 3.43792 1.88048 3.61552 2.89874C3.90004 1.14187 4.36217 0 4.88467 0C5.50506 0 6.04269 1.6149 6.29701 3.95984C6.54588 2.25315 6.92342 1.16513 7.34629 1.16513C7.93886 1.16513 8.44268 3.30507 8.62936 6.29011C8.9803 4.75962 9.48832 3.79951 10.0507 3.79951C10.6131 3.79951 11.1211 4.76025 11.4715 6.29011C11.6588 3.30507 12.162 1.16513 12.7546 1.16513C13.1768 1.16513 13.5538 2.25315 13.8038 3.95984C14.0575 1.6149 14.5952 0 15.2155 0C15.7363 0 16.2002 1.14249 16.4847 2.89874ZM0.549316 5.71651C0.549316 4.49018 0.794572 3.49577 1.09721 3.49577C1.39985 3.49577 1.64511 4.49018 1.64511 5.71651C1.64511 6.9428 1.39985 7.93721 1.09721 7.93721C0.794572 7.93721 0.549316 6.9428 0.549316 5.71651ZM18.4535 5.71651C18.4535 4.49018 18.6987 3.49577 19.0014 3.49577C19.3041 3.49577 19.5493 4.49018 19.5493 5.71651C19.5493 6.9428 19.3041 7.93721 19.0014 7.93721C18.6987 7.93721 18.4535 6.9428 18.4535 5.71651Z" fill="white"/>
                                </svg>                                
                            </span> 
                            Deezer
                        </a>       
                @endif
            </div>
            <div class="">
                @if ($page->amazon()->isNotEmpty())
                        <a class="text-white flex items-center justify-center uppercase tracking-[.5em] poppins-light transform transition duration-300 hover:scale-110 text-sm" href="{{ $page->amazon() }}" aria-label="Enlace a Amazon Music Prime">
                            <span class="mr-2 -mb-2"><i class="lni lni-amazon-original"></i></span> 
                            Amazon Music Prime
                        </a>       
                @endif
            </div>
            <div class="">
                @if ($page->tidal()->isNotEmpty())
                        <a class="text-white flex items-center justify-center uppercase tracking-[.5em] poppins-light transform transition duration-300 hover:scale-110 w-1/2 md:w-1/5 text-sm" href="{{ $page->tidal() }}" aria-label="Enlace a Tidal">
                            <span class="mr-2 -mb-2">
                                <svg width="30" height="19" viewBox="0 0 30 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.1492 0L10.3109 4.75L5.47259 0L0.634277 4.75L5.47259 9.5L10.3109 4.75L15.1492 9.5L10.3109 14.25L15.1492 19L19.9875 14.25L15.1492 9.5L19.9875 4.75L15.1492 0ZM20.0202 4.74911L24.825 0.0275802L29.6343 4.74911L24.825 9.47064L20.0202 4.74911Z" fill="white"/>
                                </svg>                                    
                            </span> 
                            Tidal
                        </a>       
                @endif
            </div>
        </div>
        <div class="text-white flex items-center space-x-5">
            @if ($firstdate = $page->dates()->toPage())
            @if ($date = $firstdate->dates()->toStructure()->first())
            <div class="space-y-1 poppins-light text-lg uppercase text-white tracking tracking-[.5em]">
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
                <div>Próxima fecha: {{ $dayOfMonth }} de {{ $month }} {{ $year }}</div>
            </div>
            <div class="col-span-1 md:col-span-2 flex md:justify-end items-center">
                <a href="#dates">
                    <button class="transition duration-300 poppins-light px-3 py-2 uppercase text-white tracking tracking-[.2em] border border-white hover:text-zinc-950 hover:bg-white">Ver eventos</button>
                </a>
            </div>
                
            @endif
            @endif            
        </div>
    </div>
</section>
@endif

<!-- Movil --->
@if ($image = $page->pictureMobile()->tofile())
<section class="bg-cover bg-center min-h-screen bg-zinc-900 flex items-end py-10 md:py-16 md:hidden" style="background-image: url({{ $image->thumb(['format' => 'webp',])->url() }}), url({{ $image->url() }})">
    <div class="max-w-6xl mx-auto space-y-5">
        <div class="flex space-x-10 text-center justify-center">
            <div>
                <a href="{{ $site->instagram() }}" class="text-white text-2xl" target="blank"><i class="lni lni-instagram-original" aria-label="Enlace a Instagram"></i></a>
            </div>
            <div>
                <a href="{{ $site->facebook() }}" class="text-white text-2xl" target="blank"><i class="lni lni-facebook-original" aria-label="Enlace a Facebook"></i></a>
            </div>
            <div>
                <a href="{{ $site->youtube() }}" class="text-white text-2xl" target="blank"><i class="lni lni-youtube" aria-label="Enlace a Youtube"></i></a>
            </div>
        </div>
        <div class="text-white block md:flex items-center justify-center space-y-5">
            <div class="">
                @if ($page->spotify()->isNotEmpty())
                        <a class="text-white flex items-center justify-center uppercase tracking-[.5em] poppins-light transform transition duration-300 hover:scale-110 text-sm" href="{{ $page->spotify() }}" aria-label="Enlace a Spotify">
                            <span class="mr-2 -mb-2"><i class="lni lni-spotify-original"></i></span> 
                            Spotify
                        </a>       
                @endif
            </div>
            <div class="">
                @if ($page->apple()->isNotEmpty())
                        <a class="text-white flex items-center justify-center uppercase tracking-[.5em] poppins-light transform transition duration-300 hover:scale-110 text-sm" href="{{ $page->apple() }}" aria-label="Enlace a Apple Music">
                            <span class="mr-2 -mb-2"><i class="lni lni-apple-brand"></i></span> 
                            Apple Music
                        </a>       
                @endif
            </div>
            <div class="">
                @if ($page->deezer()->isNotEmpty())
                        <a class="text-white flex items-center justify-center uppercase tracking-[.5em] poppins-light transform transition duration-300 hover:scale-110 text-sm" href="{{ $page->deezer() }}" aria-label="Enlace a Deezer">
                            <span class="mr-2 -mb-2">
                                <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4847 2.89874C16.6605 1.87987 16.9184 1.23917 17.2041 1.23795H17.2048C17.7376 1.23978 18.1695 3.46172 18.1695 6.20504C18.1695 8.94833 17.7369 11.1721 17.2036 11.1721C16.9849 11.1721 16.7831 10.7945 16.6206 10.1618C16.3639 12.478 15.8311 14.0703 15.2144 14.0703C14.7371 14.0703 14.3088 13.1138 14.0213 11.6054C13.825 14.4741 13.3309 16.5094 12.7533 16.5094C12.3909 16.5094 12.0605 15.7029 11.8158 14.3897C11.5216 17.1006 10.8421 19 10.0495 19C9.25695 19 8.5762 17.1011 8.2832 14.3897C8.04035 15.7029 7.70995 16.5094 7.34566 16.5094C6.76818 16.5094 6.27524 14.4741 6.07772 11.6054C5.79019 13.1138 5.36312 14.0703 4.88467 14.0703C4.26851 14.0703 3.73513 12.4786 3.4784 10.1618C3.31711 10.7964 3.11414 11.1721 2.89547 11.1721C2.36207 11.1721 1.92955 8.94833 1.92955 6.20504C1.92955 3.46172 2.36207 1.23795 2.89547 1.23795C3.1818 1.23795 3.43792 1.88048 3.61552 2.89874C3.90004 1.14187 4.36217 0 4.88467 0C5.50506 0 6.04269 1.6149 6.29701 3.95984C6.54588 2.25315 6.92342 1.16513 7.34629 1.16513C7.93886 1.16513 8.44268 3.30507 8.62936 6.29011C8.9803 4.75962 9.48832 3.79951 10.0507 3.79951C10.6131 3.79951 11.1211 4.76025 11.4715 6.29011C11.6588 3.30507 12.162 1.16513 12.7546 1.16513C13.1768 1.16513 13.5538 2.25315 13.8038 3.95984C14.0575 1.6149 14.5952 0 15.2155 0C15.7363 0 16.2002 1.14249 16.4847 2.89874ZM0.549316 5.71651C0.549316 4.49018 0.794572 3.49577 1.09721 3.49577C1.39985 3.49577 1.64511 4.49018 1.64511 5.71651C1.64511 6.9428 1.39985 7.93721 1.09721 7.93721C0.794572 7.93721 0.549316 6.9428 0.549316 5.71651ZM18.4535 5.71651C18.4535 4.49018 18.6987 3.49577 19.0014 3.49577C19.3041 3.49577 19.5493 4.49018 19.5493 5.71651C19.5493 6.9428 19.3041 7.93721 19.0014 7.93721C18.6987 7.93721 18.4535 6.9428 18.4535 5.71651Z" fill="white"/>
                                </svg>                                
                            </span> 
                            Deezer
                        </a>       
                @endif
            </div>
            <div class="">
                @if ($page->amazon()->isNotEmpty())
                        <a class="text-white flex items-center justify-center uppercase tracking-[.5em] poppins-light transform transition duration-300 hover:scale-110 text-sm" href="{{ $page->amazon() }}" aria-label="Enlace a Amazon Music Prime">
                            <span class="mr-2 -mb-2"><i class="lni lni-amazon-original"></i></span> 
                            Amazon Music Prime
                        </a>       
                @endif
            </div>
            <div class="">
                @if ($page->tidal()->isNotEmpty())
                        <a class="text-white flex items-center justify-center uppercase tracking-[.5em] poppins-light transform transition duration-300 hover:scale-110 w-1/2 md:w-1/5 text-sm" href="{{ $page->tidal() }}" aria-label="Enlace a Tidal">
                            <span class="mr-2 -mb-2">
                                <svg width="30" height="19" viewBox="0 0 30 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.1492 0L10.3109 4.75L5.47259 0L0.634277 4.75L5.47259 9.5L10.3109 4.75L15.1492 9.5L10.3109 14.25L15.1492 19L19.9875 14.25L15.1492 9.5L19.9875 4.75L15.1492 0ZM20.0202 4.74911L24.825 0.0275802L29.6343 4.74911L24.825 9.47064L20.0202 4.74911Z" fill="white"/>
                                </svg>                                    
                            </span> 
                            Tidal
                        </a>       
                @endif
            </div>
        </div>
        <div class="text-white text-center px-5 space-y-5">
            @if ($firstdate = $page->dates()->toPage())
                @if ($date = $firstdate->dates()->toStructure()->first())
                    <div class="space-y-1 poppins-light uppercase text-white tracking tracking-[.5em]">
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
                        <div>Próxima fecha: {{ $dayOfMonth }} de {{ $month }} {{ $year }}</div>
                    </div>
                    <div class="flex justify-center">
                        <a href="#dates" aria-label="Ver más fechas">
                            <button class="transition duration-300 poppins-light px-3 py-2 uppercase text-white tracking tracking-[.2em] border border-white hover:text-zinc-950 hover:bg-white">Ver eventos</button>
                        </a>
                    </div>                
                @endif
            @endif            
        </div>
    </div>
</section>
@endif