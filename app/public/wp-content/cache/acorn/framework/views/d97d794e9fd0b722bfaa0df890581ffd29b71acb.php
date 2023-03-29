<article <?php (post_class()); ?>>
    <header>
      <h2 class="entry-title text-lime-300" >
each story in the loop
        <a href="<?php echo e(get_permalink()); ?>">
          <?php echo $title; ?>

        </a>
      </h2>
  
      <?php echo $__env->make('partials.entry-meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>
  
    <div class="entry-summary">
      <?php (the_excerpt()); ?>
    </div>
  </article>
  

  <?php /**PATH /Users/chasedemaster.tech/Local Sites/insperity-theme/app/public/wp-content/themes/insperitytheme/resources/views/partials/content-client_stories.blade.php ENDPATH**/ ?>