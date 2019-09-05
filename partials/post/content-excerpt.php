<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="col-lg-4 col-md-4 col-sm-6">
       <div class="fh5co-blog animate-box">
           <?php
           if(has_post_thumbnail()){
               ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class'=>'image_fade')); ?></a>
                <?
           }
           ?>
           <div class="blog-text">
               <div class="prod-title">
                   <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                   <span class="posted_by"><?= get_the_date(); ?></span>
                   <span class="comment"><a href=""><?php comments_number(); ?><i class="icon-bubble2"></i></a></span>
                   <p><?php the_excerpt(); ?></p>
                   <p><a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>">Posted by: <?php the_author(); ?></a></p>
                   <span><?php the_category(', '); ?></span>
               </div>
           </div>
       </div>
   </div>
      <div class="clearfix visible-sm-block"></div>
<?php endwhile; else : ?>
    <p>Записей нет.</p>
<?php endif; ?>
