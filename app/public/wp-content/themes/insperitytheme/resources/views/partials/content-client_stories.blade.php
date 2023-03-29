<div class="flex flex-wrap gap-8 ">
    
    <div class="box-content h-220 w-60 shadow-md p-4 rounded-md bg-slate-100">
        cpt Image/Vid goes here
        <article @php(post_class())>
            <header >
                cpt:
                <h2 class="entry-title font-bold text-xl font-serif text-sky-950 justify-center ">
                    <a href="{{ get_permalink() }}">
                        
                        {!! $title !!}
                    </a>
                </h2>
                @include('partials.entry-meta')
            </header>

            <div class="entry-summary ">
                cpt excerpt:
                @php(the_excerpt())
            </div>
        </article>
    </div>



    {{-- card style --}}
