<?php
/*
 * CUSTOM POST TYPE ARCHIVE TEMPLATE
 *
 * This is the custom post type archive template. If you edit the custom post type name,
 * you've got to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is called "register_post_type( 'bookmarks')",
 * then your template name should be archive-bookmarks.php
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>

<?php get_header(); ?>

			<div id="content" class="projects">

				<div id="inner-content" class="wrap cf">

					<div id="main" class="m-all t-all d-all cf" role="main">

						<!-- <h1 class="page-title"><?php post_type_archive_title(); ?></h1> -->

					</div>

				</div>

				<div class="m-all t-all d-all cf">
					
					<?php
					global $query_string;
					query_posts( $query_string . '&posts_per_page=-1' );
					if (have_posts()) : while (have_posts()) : the_post(); ?>

						<div class="m-all t-1of4 d-1of4">
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<section class="entry-content cf">
									<!-- <h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3> -->
									<a href="<?php the_permalink(); ?>">
										<div class="overlay"></div>
										<?php the_post_thumbnail(); ?>
									</a>
								</section>

							</article>
						</div>

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
									<p><?php _e( 'This is the error message in the custom posty type archive template.', 'bonestheme' ); ?></p>
							</footer>
						</article>

					<?php endif; ?>

					</div>

				</div>

			</div>

<?php get_footer(); ?>
