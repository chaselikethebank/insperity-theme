<a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
</a>


@include('sections.header')

<main id="main" class="main flex mt-4 p-4">
    
    {{-- @include('partials.content-subscribe') --}}
    @yield('content') 

</main>

@hasSection('sidebar')
    <aside class="sidebar">
        @yield('sidebar')

    </aside>
@endif

@include('sections.footer')
