<header class=" banner p-6 border shadow-lg">
  <a class="brand text-blue-900 text-2xl " href="{{ home_url('/client-stories') }}">
    ❇️{!! $siteName !!} 
    <p> <div class="text-green-500 text-base">HR that makes a difference </div>
  </a>
  @if (has_nav_menu('primary_navigation'))
  <div class="flex flex-row">
    <nav class="nav-primary flex flex-row" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  </div>
  
  @endif
</header>
