<?php get_header();?>

<div class="nyhet1container">
    <h2>NYHETER</h2>
    
                        <section>
                            <article class='enskild'>
                                <h3> <?php the_title();?></h3>
                                <?php  if (has_post_thumbnail()) {
                                            the_post_thumbnail('medium'); 
                                        }?>
                                <?php the_content();?>
                                <a href="wordpress\index.php">Tillbaka till nyheter</a>
                               
                            </article> 
                        </section> 
                   
</div>

<?php get_footer();?>    