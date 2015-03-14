<?php
/*
 Template Name: Contact
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

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

							<header class="article-header">

								<h1 class="page-title"><?php the_title(); ?></h1>

							</header>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<div id="main" class="m-all t-3of5 d-1of2 cf">

								<section class="entry-content cf" itemprop="articleBody">
									<?php
										// the content (pretty self explanatory huh)
										the_content();

									?>
								</section>

							</div>

							<div id="main" class="m-all t-2of5 d-1of2 cf">

								<section class="entry-content cf" itemprop="articleBody">
									<?php echo do_shortcode( '[contact-form-7 id="5" title="Contact form"]' ); ?>
									<a href="https://www.facebook.com/pages/p-l-a-n-Master-Planning-Landscape-Architecture/219408494798673?sk=wall" target="_blank"><img class="social" src="<?php bloginfo('template_directory'); ?>/library/images/fb.jpg" alt="Facebook"></a>
								</section>
								
							</div>

							</article>

							<?php endwhile; else : ?>

							<?php endif; ?>

						</div>

				</div>

			</div>


<?php get_footer(); ?>
