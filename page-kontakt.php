<?php get_header();?>
<div class="kontaktcontainer">
<?php
        query_posts('category_name=kontakt&post_per_page=2');
        if (have_posts()) {
            while (have_posts()) { ?>

                <div class='text'>
                    <?php the_post();?>
                    <h2><?=the_title(); ?></h2>                    
                    <?php the_content(); ?>
                </div>
               
                <?php
            }
        } // endwhile;
        //endif;
    ?>
</div>
    <?php get_footer();?>
        