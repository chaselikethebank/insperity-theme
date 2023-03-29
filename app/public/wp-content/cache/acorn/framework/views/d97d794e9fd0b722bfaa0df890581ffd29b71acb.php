<div class="flex flex-wrap gap-8 ">
    
    <div class="box-content h-220 w-60 shadow-md p-4 rounded-md bg-slate-100">
        cpt Image/Vid goes here
        <article <?php (post_class()); ?>>
            
            <header >
                cpt:
                <h2 class="entry-title font-bold text-xl font-serif text-sky-950 justify-center ">
                    <a href="<?php echo e(get_permalink()); ?>">
                        
                        <?php echo $title; ?>

                    </a>
                </h2>
                <?php echo $__env->make('partials.entry-meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </header>

            <div class="entry-summary ">
                cpt excerpt:
                <?php (the_excerpt()); ?>
            </div>
        </article>
    </div>



    
<?php /**PATH /Users/chasedemaster.tech/Local Sites/insperity-theme/app/public/wp-content/themes/insperitytheme/resources/views/partials/content-client_stories.blade.php ENDPATH**/ ?>