<?php
/*
 Template Name: Who We Are
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<div id="main" class="m-all t-all d-all cf" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

							<header class="article-header">

								<h1 class="page-title"><?php the_title(); ?></h1>

							</header>

						</article>

						<?php endwhile; else : ?>

								<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
									</footer>
								</article>

						<?php endif; ?>

					</div>

				</div>

				<div class="row who-we-are">
					<div class="m-all t-1of3 d-1of3 bio one">
						<a href="henry-dowling">
							<div class="overlay">
								<img class="bio one" src="<?php the_field('bio_one_image'); ?>" />
							</div>
						</a>
						<div class="info">
							<h4><a href="henry-dowling"><?php the_field('bio_one_name'); ?></a></h4>
							<p><?php the_field('bio_one_title'); ?></p>
						</div>
					</div>
					<div class="m-all t-1of3 d-1of3 bio two">
						<a href="nathan-king">
							<div class="overlay">
								<img class="bio two" src="<?php the_field('bio_two_image'); ?>" />
							</div>
						</a>
						<div class="info">
							<h4><a href="nathan-king"><?php the_field('bio_two_name'); ?></a></h4>
							<p><?php the_field('bio_two_title'); ?></p>
						</div>
					</div>
					<div class="m-all t-1of3 d-1of3 bio three last">
						<a href="zach-perdue">
							<div class="overlay">
								<img class="bio three" src="<?php the_field('bio_three_image'); ?>" />
							</div>
						</a>
						<div class="info">
							<h4><a href="zach-perdue"><?php the_field('bio_three_name'); ?></a></h4>
							<p><?php the_field('bio_three_title'); ?></p>
						</div>
					</div>

					<!-- bio descriptions 
					<div class="bio-one description m-all t-all d-all">
						<div class="triangle-up"></div>
						<p><?php the_field('bio_one_description'); ?></p>
					</div>

					<div class="bio-two description m-all t-all d-all">
						<div class="triangle-up"></div>
						<p><?php the_field('bio_two_description'); ?></p>
					</div>

					<div class="bio-three description m-all t-all d-all">
						<div class="triangle-up"></div>
						<p><?php the_field('bio_three_description'); ?></p>
					</div> -->

					<section class="entry-content cf" itemprop="articleBody">
						<?php
							// the content (pretty self explanatory huh)
							the_content();

						?>
					</section>
				</div>

			</div>


<?php get_footer(); ?>
