<?php
/**
 * The template for displaying all pages
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

<div id="primary-about" class="site-content-about">
	<div id="about-main" class="main-content about-main" role="main">
		<?php while ( have_posts() ) : the_post();
			$sub_heading = get_field('sub_heading');
			$service_overview = get_field('service_overview');
			$service_1 = get_field('service_1');
			$description_1 = get_field('description_1');
			$icon_1 = get_field('icon_1');
			$service_2 = get_field('service_2');
			$description_2 = get_field('description_2');
			$icon_2 = get_field('icon_2');
			$service_3 = get_field('service_3');
			$description_3 = get_field('description_3');
			$icon_3 = get_field('icon_3');
			$service_4 = get_field('service_4');
			$description_4 = get_field('description_4');
			$icon_4 = get_field('icon_4');
		?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</div><!-- .main-content -->
</div><!-- #primary -->
<section class="services">
	<h4><?php echo $sub_heading; ?></h4>
	<p><?php echo $service_overview; ?></p>
	<div class="service-list-grid">
		<div class="service-1">
			<h3><?php echo $service_1; ?></h3>
			<p><?php echo $description_1; ?></p>
		</div>
		<div class="icon-1">
			<?php echo wp_get_attachment_image($icon_1) ?>
		</div>
		<div class="service-2">
			<h3><?php echo $service_2; ?></h3>
			<p><?php echo $description_2; ?></p>
		</div>
		<div class="icon-2">
			<?php echo wp_get_attachment_image($icon_2) ?>
		</div>
		<div class="service-3">
			<h3><?php echo $service_3; ?></h3>
			<p><?php echo $description_3; ?></p>
		</div>
		<div class="icon-3">
			<?php echo wp_get_attachment_image($icon_3) ?>
		</div>
		<div class="service-4">
			<h3><?php echo $service_4; ?></h3>
			<p><?php echo $description_4; ?></p>
		</div>
		<div class="icon-4">
			<?php echo wp_get_attachment_image($icon_4) ?>
		</div>
	</div>
</section>
<div class="call-to-action">
	<h3>Interested in working with us?<a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a></h3>
</div>

<?php get_footer(); ?>
