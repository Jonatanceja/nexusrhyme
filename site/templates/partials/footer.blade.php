<footer class="py-10 md:py-16 space-y-8">
    <img class="w-24 mx-auto" src="/images/nexus-icon.svg" alt="{{ $site->title() }}">
    <div class="flex space-x-10 text-center justify-center items-center">
        <div>
            <a href="{{ $site->instagram() }}" class="text-golden text-2xl" target="blank"><i class="lni lni-instagram-original"></i></a>
        </div>
        <div>
            <a href="{{ $site->facebook() }}" class="text-golden text-2xl" target="blank"><i class="lni lni-facebook-original"></i></a>
        </div>
        <div>
            <a href="{{ $site->youtube() }}" class="text-golden text-2xl" target="blank"><i class="lni lni-youtube"></i></a>
        </div>
    </div>
    <div class="h-px bg-golden"></div>
    <div class="max-w-6xl text-sm mx-auto px-5 text-center dark:text-zinc-400 text-zinc-900 uppercase tracking-widest">
        {{ $site->copyright() }} {{ $site->title() }} {{ date("Y") }}
    </div>
</footer>