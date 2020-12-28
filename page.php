<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<section class="hero outer">
  <div class="hero__inner">
    <p class="h2">Donate your used chargers to hospitals in the Capital Region</p>
  </div>
</section>


<section class="buckets outer p-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="bucket">
          <div class="animate__animated animate__backInUp">
            <svg viewbox="0 0 50 50" height="56px" class="bucket__triangle">
              <path d="M1 50 V10 Q1 1 10 1 H50z" fill="#ffffff" />
            </svg>
          </div>

          <div class="bucket__icon">
            <div class="fa-stack fa-2x battery2 battery2-charge color">
              <i class="fa fa-stack-1x fa-battery-0"></i>
              <i class="fa fa-stack-1x fa-battery-1"></i>
              <i class="fa fa-stack-1x fa-battery-2"></i>
              <i class="fa fa-stack-1x fa-battery-3"></i>
              <i class="fa fa-stack-1x fa-battery-4"></i>
              <i class="fa fa-flash"></i>
            </div>
          </div>
          <div class="bucket__title">
            <p class="h3">About 518 Powerup</p>
          </div>
          <div class="bucket__text">
            <p class="lead">Hospital patients in Capital Region have a need for phone chargers and due to COVID restrictions, visitors are generally not allowed to bring those supplies to their loved ones. </p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="bucket">
          <div class="animate__animated animate__backInUp">
            <svg viewbox="0 0 50 50" height="56px" class="bucket__triangle">
              <path d="M1 50 V10 Q1 1 10 1 H50z" fill="#ffffff" />
            </svg>
          </div>
          <div class="bucket__icon">
            <i class="fas fa-question fa-2x"></i>
          </div>
          <div class="bucket__title">
            <p class="h3">What We Need</p>
          </div>
          <div class="bucket__text">
            <p class="lead">Hospital patients are in need of the following items:  Apple, Samsung, Android, Mini-USB, Micro-USB, USB-A, USB-C, Wall Power Adapters, and Multi-Charger Cables</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="outer section p-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <p class="h2 section__title">Contact Us</p>
        <p class="lead">Do you have questions or would like more infomation on the 518 Powerup initiative?  Send us a message and we'll get back to you as soon as possible</p>
      </div>
      <div class="col-md-8">
        <?php echo do_shortcode('[contact-form-7 id="6" title="518 Powerup Contact Form"]') ?>
      </div>
    </div>
  </div>
</section>

<section class="outer blocks">
  <div class="block hospital">
    <div class="hospital__inner">
      <p class="h2">Capital Region hospitals that are in need of our help</p>
    </div>
  </div>
  <div class="block">
    <div class="block__inner">
      <i class="fas fa-3x fa-hospital-symbol text-primary"></i>
      <ul class="lead">
        <li>St. Peter's Hospital Albany</li>
        <li>Albany Medical Center</li>
        <li>Saratoga Hospital</li>
        <li>Albany Memorial Hospital</li>
        <li>Albany Stratton Veterans Affairs Medical Center</li>
        <li>Cobleskill Regional Hospital</li>
        <li>Conifer Park Hospital</li>
        <li>Ellis Hospital</li>
        <li>Four-Winds Hospital-Sarasota Springs</li>
        <li>Glens Falls Hospital</li>
        <li>St Mary's Healthcare Amsterdam</li>
      </ul>
    </div>
  </div>
</section>


<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
