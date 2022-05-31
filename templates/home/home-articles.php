<section class="py-12" id="card">
    <div class="container mx-auto px-4">
        <h2 class="text-red-700 text-center text-2xl md:text-4xl my-4 pb-4 font-medium">RECEITAS</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 auto-rows-fr">
            <?php 
            $argsTips = array(
                'post_type' => 'dicas',
                'posts_per_page' => 4
            );
            $listTips = new WP_Query($argsTips);
            if ($listTips->have_posts()) {
                while ($listTips->have_posts()) {
                    $listTips->the_post();
                    ?>
                    
                    <div class="px-2 py-4">
                        <a href="<?php echo get_the_permalink(); ?>" class="h-full">
                            <div class="rounded-xl h-full overflow-hidden shadow-lg shadow-gray-300">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="w-full" alt="">
                                <div class="px-8 pt-8 pb-4 uppercase">
                                    <h3 class="text-xl text-gray-400 font-medium pb-6"><?php echo get_the_title(); ?></h3>
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
        
        <div class="w-full">
            <a href="<?php echo get_post_type_archive_link('dicas'); ?>">
                <button type="button" class="bg-red-700 px-12 md:px-32 mx-auto py-2 md:py-4 my-4 text-white text-lg md:text-2xl rounded-lg my-2 block font-bold">
                VER TODAS AS DICAS
                </button>
            </a>
        </div>
    </div>
</section>