<?php get_header();?>
<div class="spalt">

    <?php
    /*Template Name: En-spalts design */
    query_posts('category_name=om-oss');
    if (have_posts()) {
        while (have_posts()) { ?>

            <div class='enspalt'>
                <?php the_post();
                if (has_post_thumbnail()) {
                    the_post_thumbnail();
                } ?>
                <h2><?= the_title(); ?></h2>
                <?php the_content(); ?>
            </div><?php

    
        }
    } // endwhile;
    //endif;
    ?>
<?php get_footer();?>