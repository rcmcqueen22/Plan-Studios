<?php
/*
 * CUSTOM POST TYPE TEMPLATE
 *
 * This is the custom post type post template. If you edit the post type name, you've got
 * to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is "register_post_type( 'bookmarks')",
 * then your single template should be single-bookmarks.php
 *
 * Be aware that you should rename 'custom_cat' and 'custom_tag' to the appropiate custom
 * category and taxonomy slugs, or this template will not finish to load properly.
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<div id="main" class="m-all t-all d-all cf" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

								<header class="article-header">

									<h1 class="single-title custom-post-type-title left"><?php the_title(); ?></h1>
									<p class="right"><a href="http://plan-studios.com/projects">&laquo; All Projects</a></p>

								</header>

								<section class="entry-content cf">
									<div class="m-all t-all d-all">
										<?php the_field('image_carousel'); ?>
									</div>
									<div class="m-all t-1of2 d-1of2">
										<div class="m-1of4 t-1of4 d-1of4">
											<h5>Location:</h5>
										</div>
										<div class="m-3of4 t-3of4 d-3of4">
											<h5><span><?php the_field('location'); ?></span></h5>
										</div>
										<div class="m-1of4 t-1of4 d-1of4">
											<h5>Scale:</h5>
										</div>
										<div class="m-3of4 t-3of4 d-3of4">
											<h5><span><?php the_field('scale'); ?></span></h5>
										</div>
										<div class="m-1of4 t-1of4 d-1of4">
											<h5>Scope:</h5>
										</div>
										<div class="m-3of4 t-3of4 d-3of4">
											<h5><span><?php the_field('scope'); ?></span></h5>
										</div>
										<div class="m-1of4 t-1of4 d-1of4">
											<h5>Team:</h5>
										</div>
										<div class="m-3of4 t-3of4 d-3of4">
											<h5><span><?php the_field('team'); ?></span></h5>
										</div>
									</div>
									<div class="m-all t-1of2 d-1of2">
										<?php the_content(); ?>				
									</div>
								</section> <!-- end article section -->

								<footer class="article-footer">
									<p class="tags"><?php echo get_the_term_list( get_the_ID(), 'custom_tag', '<span class="tags-title">' . __( 'Custom Tags:', 'bonestheme' ) . '</span> ', ', ' ) ?></p>

								</footer>

								<?php comments_template(); ?>

							</article>

							<?php endwhile; ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single-custom_type.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>

				</div>

			</div>

<?php get_footer(); ?>
