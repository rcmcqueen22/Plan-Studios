<?php
/*
 Template Name: Services
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

								<section class="entry-content cf" itemprop="articleBody">
									<?php
										// the content (pretty self explanatory huh)
										the_content();
									?>

									<div class="row">
										<div class="m-all t-1of2 d-1of2">
											<img class="left" src="<?php the_field('services_one_icon'); ?>" />
											<h3><?php the_field('services_one_title'); ?></h3>
											<p><?php the_field('services_one_description'); ?></p>
										</div>
										<div class="m-all t-1of2 d-1of2">
											<img class="left" src="<?php the_field('services_two_icon'); ?>" />
											<h3><?php the_field('services_two_title'); ?></h3>
											<p><?php the_field('services_two_description'); ?></p>
										</div>
									</div>
									<div class="row">
										<div class="m-all t-1of2 d-1of2">
											<img class="left" src="<?php the_field('services_three_icon'); ?>" />
											<h3><?php the_field('services_three_title'); ?></h3>
											<p><?php the_field('services_three_description'); ?></p>
										</div>
										<div class="m-all t-1of2 d-1of2">
											<img class="left" src="<?php the_field('services_four_icon'); ?>" />
											<h3><?php the_field('services_four_title'); ?></h3>
											<p><?php the_field('services_four_description'); ?></p>
										</div>
									</div>
								</section>


								<footer class="article-footer">

                  <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

								</footer>

								<?php comments_template(); ?>

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

			</div>


<?php get_footer(); ?>