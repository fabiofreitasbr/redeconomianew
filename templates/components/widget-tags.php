<h3 class="text-xl my-2 font-medium text-red-700 uppercase">Tags</h3>
<div class="my-2">
    <?php
        $tags = get_terms( 'dicas', array(
            'hide_empty' => false,
        ) );
        foreach ($tags as $singletag) {
            ?><div><a href="<?php echo get_term_link($singletag, 'dicas'); ?>"><span class="inline-block my-2 py-2 px-4 text-lg text-red-700 font-bold uppercase border-2 border-red-700"><?php echo $singletag->name; ?></span></a></div><?php
        }
    ?>
    
    
</div>