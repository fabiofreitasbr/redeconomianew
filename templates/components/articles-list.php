<div class="grid grid-cols-1 md:grid-cols-3 auto-rows-fr">
    <?php 
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <div class="px-2 py-4">
                <a href="<?php the_permalink(); ?>" class="h-full">
                    <div class="rounded-xl overflow-hidden shadow-lg shadow-gray-300 h-full">
                        <?php if (has_post_thumbnail()) { ?> <img src="<?php echo the_post_thumbnail_url() ?>" class="w-full" alt=""><?php } ?>
                        <div class="px-6 pt-6 pb-4 uppercase">
                            <h3 class="text-xl text-gray-400 font-medium pb-6"><?php the_title(); ?></h3>
                            <div class="text-red-700 text-right py-2 text-xl font-bold">VER MAIS</div>
                        </div>
                    </div>
                </a>
            </div>
            <?php 
        }
    }

    ?>
</div>
<?php echo paginateList(); ?>