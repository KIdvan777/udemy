<?php get_header();

while( have_posts()){
    the_post();

?>

 <div class="container">
     <div class="row">
         <div class="col-md-12">
             <h1><?php  the_title();?></h1>
             <?php
                if(function_exist( 'the_subtitle')){?>
                    <span><?php the_subtitle(); ?></span>
                <?
            }
             ?>

             <p><?php the_content(); ?></p>
         </div>
     </div>
 </div>

<?}
rewind_posts();
?>


<?php get_footer(); ?>
