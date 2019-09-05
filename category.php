<?php get_header(); ?>



			<div class="container">
				<div class="row row-bottom-padded-md">
                    <h1><?php the_archive_title(); ?></h1>

				        <?php get_template_part('partials/post/content-excerpt'); ?>

					<?php //include('partials/pagination.php'); ?>

				</div>
			</div>
		</div>


<?php get_footer(); ?>
