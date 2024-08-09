<section class="py-10 md:py-16 bg-zinc-950 space-y-5 md:space-y-10 px-5 md:px-0" id="music">
    <div class="max-w-6xl mx-auto prose prose-invert prose-h1:uppercase prose-h1:tracking-widest prose-h1:text-2xl prose-p:tracking-widest poppins-light"> 
        @kt($page->intro())
    </div>
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 md:gap-10 gap-16">
        <div class="prose prose-invert prose-h1:uppercase prose-h1:tracking-widest prose-h1:text-2xl prose-p:tracking-widest poppins-light"> 
            @kt($page->music())
        </div>
        <div>
            {!! $page->embed()->value() !!}
        </div>
    </div>
</section>