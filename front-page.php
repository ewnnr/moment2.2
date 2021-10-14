<?= get_header();?>

    <div class="indexcontainer">
        <section class="senaste">
            <h1>SENASTE</h1>            
                <?php
                    query_posts('category_name=nyheter&posts_per_page=2');
                    if (have_posts()) {
                        while (have_posts()) {
                        the_post();?>                
                        
                            
                                <article>
                                     <h2><?= the_title();?></h2>
                                     <p><?= the_excerpt();?></p>
                                     <a href="<?php the_permalink();?>">Läs mer</a>
                                </article> <?php
        
                        }
                    }// endwhile;
                 //endif;?>
     
        </section> 
        <div class="bild"><?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();             
                        if ( has_post_thumbnail() ) {
                    }        the_post_thumbnail();
                }  
                }else{?>
                    <img src="<?=get_template_directory_uri();?>/bilder/Lasse122.jpg" alt="Skogsmaskin"><?php
                }?>
        </div>
    </div>

    
              
    
   <?php get_footer();?>