<?php
/*
 * Template Name: Full Width Page
 */


get_header();

while( have_posts()){
    the_post();

?>


             <h1><?php  the_title();?></h1>


             <p><?php the_content(); ?></p>


<?}
rewind_posts();
?>


<?php get_footer(); ?>
