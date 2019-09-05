<?php
/*
 * Template Name: Full Width Post
 * Templte Post Type: post
 */


 get_header(); ?>
<div class="container">
    <div class="row row-bottom-padded-md">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            $author_ID = get_the_author_meta('ID');
            $author_url = get_author_posts_url($author_ID);

        ?>
            <div class="col-sm-12">
               <div class="fh5co-blog animate-box">
                   <?php
                   if(has_post_thumbnail()){
                       ?>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', array('class'=>'image_fade')); ?></a>
                        <?
                   }
                   ?>
                   <div class="blog-text">
                       <div class="prod-title">
                           <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                           <span class="posted_by"><?= get_the_date(); ?></span>
                           <span class="comment"><a href=""><?php comments_number(); ?><i class="icon-bubble2"></i></a></span>
                           <p><?php the_content();
                                wp_link_pages(array(
                                    'before'  =>'<p class="text-center">' . __('Pages:'),
                                    'after'   =>'</p>'
                                ));
                           ?></p>

                           <?php the_tags(); ?>
                           <p><a href="<?= $author_url;?>">Posted by: <?php the_author(); ?></a></p>
                           <?php echo get_avatar( $author_ID, 90, '', false, array( 'class' => 'img-circle' ) ); ?>
                            <?php echo nl2br(get_the_author_meta('description')); ?>
                            <br>
                           <span>categories: <?php the_category(', '); ?></span>
                           <br>
                           <?php previous_post_link(); ?> /
                           <?php next_post_link(); ?>
                           <div class="">

                           </div>

                       </div>
                   </div>
               </div>
           </div>
              <div class="clearfix visible-sm-block"></div>
        <?php endwhile; else : ?>
            <p>Записей нет.</p>
        <?php endif; ?>



        <?php
        if(comments_open() || get_comments_number()){
            comments_template();
        }
         ?>

         <h2 class="text-center">Related posts</h2>

         <?php

            $categories = get_the_category();

            $rp_query = new WP_Query(array(
                'posts_per_page' => 3,
                'post__not_in'   => array($post->ID),
                'cat'            => $categories[1]->term_id,

            ));

            if($rp_query->have_posts()){
                while($rp_query->have_posts()){
                    $rp_query->the_post();
                    ?>
                    <div class="col-md-4">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php if (has_post_thumbnail()): ?>
                            <div class="">
                                <a href=""><?php the_post_thumbnail('medium'); ?></a>
                            </div>
                        <?php endif; ?>
                        <?php the_excerpt(); ?>
                    </div>
                    <?
                }

                wp_reset_postdata();
            }

         ?>

    </div>
</div>
<?php get_footer(); ?>
