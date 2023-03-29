<article @php(post_class())>
    <header>
      <h2 class="entry-title text-lime-300" >
each story in the loop
        <a href="{{ get_permalink() }}">
          {!! $title !!}
        </a>
      </h2>
  
      @include('partials.entry-meta')
    </header>
  
    <div class="entry-summary">
      @php(the_excerpt())
    </div>
  </article>
  

  {{-- card style --}}