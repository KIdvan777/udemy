<?php get_header();?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
<?
get_search_form();

while( have_posts()){
    the_post();
?>
<h1><?php _e('Search Results for:','udemy'); ?>
    <?php echo get_search_query(); ?>
</h1>
    <h2><?php  the_title();?></h2>
    <p><?php the_content(); ?></p>
<?}
rewind_posts();
?>
</div>
</div>
</div>

<?php get_footer(); ?>
