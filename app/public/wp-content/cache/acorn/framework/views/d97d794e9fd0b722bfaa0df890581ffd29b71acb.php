<p class="text-gray-500 dark:text-gray-400"></p>
<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
<p class="text-gray-500 dark:text-gray-400"></p>
<div class="flex flex-row  gap-5 justify-center alignment-center">
    <div class="box-content max-w-xs shadow-md p-4 rounded-md bg-sky-50">
        <img class="p1 rounded-tr rounded-tl " src="<?php the_post_thumbnail_url(); ?>" />
        <article
            <?php (post_class()); ?>>
            <div>
                <div class="pl-1 pb-1 pt-1 text-white font-semibold bg-blue-900 box-content h-6 w-40 shadow-md rounded-br-lg">
                    <?php $terms = get_the_terms($post->ID, 'content-type'); ?>
                    <?php if($terms): ?>
                        <?php $__currentLoopData = $terms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $term): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($term->name); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
            </div>
    </div>
    <header>
        <h2 class="entry-title font-bold text-xl font-serif text-sky-950 justify-center p-2 text-blue-900">
            <a href="<?php echo e(get_permalink()); ?>">

                <?php echo $title; ?>

            </a>
        </h2>
    </header>
    <div class="entry-summary justify-center p-2">
        <?php (the_excerpt()); ?>
    </div>
    </article>
</div>
<?php /**PATH /Users/chasedemaster.tech/Local Sites/insperity-theme/app/public/wp-content/themes/insperitytheme/resources/views/partials/content-client_stories.blade.php ENDPATH**/ ?>