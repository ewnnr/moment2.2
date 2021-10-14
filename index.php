<?php get_header();?>

<div class="nyhetercontainer">
<h2>NYHETER</h2>
        <section class="nyhet">
                <?php
                query_posts('category_name=nyheter');
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();?>
                            <article class='ny1'>
                                <h3><?= the_title();?></h3>
                                <?=the_content();?> 
                                <a href="<?php the_permalink();?>">Till nyheten</a>
                            </article><?php
                                             
                        
                        }
                    }// endwhile;
                        //endif;
                        ?>                  
        </section>
    
</div> 
      



<?php get_footer();?>