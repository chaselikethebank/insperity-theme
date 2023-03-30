<header class=" banner p-6 border shadow-lg">
  <a class="brand text-blue-900 text-2xl " href="<?php echo e(home_url('/client-stories')); ?>">
    ❇️<?php echo $siteName; ?> 
    <p> <div class="text-green-500 text-base">HR that makes a difference </div>
  </a>
  <?php if(has_nav_menu('primary_navigation')): ?>
  <div class="flex flex-row">
    <nav class="nav-primary flex flex-row" aria-label="<?php echo e(wp_get_nav_menu_name('primary_navigation')); ?>">
      <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]); ?>

    </nav>
  </div>
  
  <?php endif; ?>
</header>
<?php /**PATH /Users/chasedemaster.tech/Local Sites/insperity-theme/app/public/wp-content/themes/insperitytheme/resources/views/sections/header.blade.php ENDPATH**/ ?>