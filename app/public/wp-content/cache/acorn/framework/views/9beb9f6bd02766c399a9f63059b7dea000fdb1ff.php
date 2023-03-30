<a class="sr-only focus:not-sr-only" href="#main">
    <?php echo e(__('Skip to content')); ?>

</a>


<?php echo $__env->make('sections.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main id="main" class="main flex mt-4 p-4">
    
    <?php echo $__env->make('partials.content-subscribe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?> 

</main>

<?php if (! empty(trim($__env->yieldContent('sidebar')))): ?>
    <aside class="sidebar">
        <?php echo $__env->yieldContent('sidebar'); ?>

    </aside>
<?php endif; ?>

<?php echo $__env->make('sections.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /Users/chasedemaster.tech/Local Sites/insperity-theme/app/public/wp-content/themes/insperitytheme/resources/views/layouts/app.blade.php ENDPATH**/ ?>