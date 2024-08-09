<footer class="py-10 md:py-16 space-y-5">
    <div class="flex space-x-10 text-center justify-center items-center md:hidden">
        <div>
            <a href="{{ $site->instagram() }}" class="text-zinc-400 text-2xl" target="blank"><i class="lni lni-instagram-original"></i></a>
        </div>
        <div>
            <a href="{{ $site->facebook() }}" class="text-zinc-400 text-2xl" target="blank"><i class="lni lni-facebook-original"></i></a>
        </div>
        <div>
            <a href="{{ $site->youtube() }}" class="text-zinc-400 text-2xl" target="blank"><i class="lni lni-youtube"></i></a>
        </div>
    </div>
    <div class="max-w-6xl mx-auto px-5 text-center text-zinc-400 uppercase">
        Todos los derechos reservados Mutant From The Nebula {{ date("Y") }}
    </div>
</footer>