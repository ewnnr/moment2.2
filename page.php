<?php get_header();?>

<div class="omosscontainer">

    <?php
    query_posts('category_name=om-oss');
    if (have_posts()) {
        while (have_posts()) { ?>

            <div class='omoss'>
                <?php the_post();
                if (has_post_thumbnail()) {
                    the_post_thumbnail();
                } ?>
                <h2><?= get_the_title(); ?></h2>
                <?php the_content(); ?>
            </div><?php

    
        }
    } // endwhile;
    //endif;
    ?>

</div>

<?php get_footer();?>