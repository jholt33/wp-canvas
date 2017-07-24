<?php

/*
*
Template Name: Portfolio Page
*
*/

get_header(); ?>

<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Portfolio</h1>
				<span>Showcase of Our Awesome Works in 4 Columns</span>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Portfolio</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio grid-container portfolio-nomargin clearfix">

						<?php

							 $args = array(
								'post_type'      => 'portfolio',
								'posts_per_page' => '10',
								'post_status'    => 'publish',

							 );
							 $category_posts = new WP_Query($args);

							 if($category_posts->have_posts()) :
									while($category_posts->have_posts()) :
										 $category_posts->the_post();
						?>

						<article class="portfolio-item pf-media pf-icons">

							<div class="portfolio-image">
									<?php the_post_thumbnail(); ?>
								<div class="portfolio-overlay">
									<!-- <a href="#" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a> -->
									<a href="<?php the_permalink(); ?>" class="center-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
								<?php the_content() ?>
							</div>

						</article>

						<?php
									endwhile;
							 else:
						?>

									Oops, there are no posts.

						<?php
							 endif;
						?>

					</div><!-- #portfolio end -->

				</div>

			</div>

		</section><!-- #content end -->

<?php get_footer(); ?>
