<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/blog/') ?>">View Our Work</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<section class="featured-work">
	<h4>Featured Work</h4>
	<ul class="homepage-featured-work">
		<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
			<?php while ( have_posts() ) : the_post();
				$image_1 = get_field("image_1")
				//$size = "medium";
			?>
			<li class="individual-featured-work">
				<figure>
					<a href="<?php the_permalink(); ?>">
						<?php echo wp_get_attachment_image($image_1, 'medium'); ?>
					</a>
				</figure>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			</li>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
	</ul>
</section>

<section class="our-services">
	<?php
		$about_page = 47345;
		$service_1 = get_field('service_1', $about_page);
		$icon_1 = get_field('icon_1', $about_page);
		$service_2 = get_field('service_2', $about_page);
		$icon_2 = get_field('icon_2', $about_page);
		$service_3 = get_field('service_3', $about_page);
		$icon_3 = get_field('icon_3', $about_page);
		$service_4 = get_field('service_4', $about_page);
		$icon_4 = get_field('icon_4', $about_page);
	?>
	<h4><a href="<?php echo site_url('/about/') ?>">Our Services</a></h4>
	<ul class="service-list">
		<li>
			<?php echo wp_get_attachment_image($icon_1,$about_page); ?>
			<h3><?php echo $service_1; ?></h3>
		</li>
		<li>
			<?php echo wp_get_attachment_image($icon_2,$about_page); ?>
			<h3><?php echo $service_2; ?></h3>
		</li>
		<li>
			<?php echo wp_get_attachment_image($icon_3,$about_page); ?>
			<h3><?php echo $service_3; ?></h3>
		</li>
		<li>
			<?php echo wp_get_attachment_image($icon_4,$about_page); ?>
			<h3><?php echo $service_4; ?></h3>
		</li>
	</ul>
</section>

<section class="recent-posts">
 		<div class="site-content">
		 	<div class="blog-post">
	 			<h4>From the Blog</h4>
				<?php query_posts('posts_per_page=1'); ?>
	  			<?php while ( have_posts() ) : the_post(); ?>
	    			<h3><?php the_title(); ?></h3>
						<?php the_excerpt(); ?>
	  			<?php endwhile; ?>
				<?php wp_reset_query(); ?>
	  	</div>
			<div class="twitter-feed">
				<h4>Recent Tweets</h4>
				<h3>@Accelerate</h3>
				<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
					<div id="secondary" class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
					</div>
				<?php endif; ?>
				<div class="follow-us-link">
					<a href="https://twitter.com/SmashKap">
						<span>Follow Us</span> &rsaquo;
					</a>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
