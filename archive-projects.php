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

				<div class="m-all t-all d-all">
					<ul class="controls">
						<li class="filter" data-filter="all">All</li>
						<li class="filter" data-filter=".resort-and-hospitality">Resort and Hospitality</li>
						<li class="filter" data-filter=".residential-estates">Residential Estates</li>
						<li class="filter" data-filter=".mountain-communities">Mountain Communities</li>
						<li class="filter" data-filter=".residential-communities">Residential Communities</li>
					</ul>
				</div>

				<div id="projects" class="m-all t-all d-all cf">

					<?php $args = array(
						'post_type' => 'projects',
						'posts_per_page' => -1
					); ?>

					<?php $my_query = new WP_Query($args); ?>

					<?php if($my_query->have_posts()): ?>

						<?php while($my_query->have_posts()): ?>

						<?php $my_query->the_post(); ?>

						<?php $category_classes = ''; ?>

						<?php $categories = get_the_terms($post->ID , 'custom_cat'); ?>

						<?php if($categories){
							foreach($categories as $category){
								$category_classes .= ' '.$category->slug;
							};
						}; ?>

						<div class="m-all t-1of4 d-1of4 mix<?php echo $category_classes; ?>">
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<section class="entry-content cf">
									<h3 class="project-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
									<a href="<?php the_permalink(); ?>">
										<div class="projects-overlay">
											<?php the_post_thumbnail( 'bones-thumb-500' ); ?>
										</div>
									</a>
								</section>

							</article>
						</div>

						<?php endwhile; ?>

					<?php endif; ?>

				</div>

			</div>

<?php get_footer(); ?>
