<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-light bg-white">

      <div class="container-fluid">
        <div class="row w-100">
          <div class="col-md-6">
            <div class="header__brand">
              <div class="logo">
                <div class="logo__icon">
                  <div class="battery">
                    <div class="battery__charge"></div>
                  </div>
                </div>
                <div class="logo__text">
                  <h1>518 Powerup</h1>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 navbar__holder">
            <div class="navbar__nav">
              <ul>
                <li><a href="#how-it-works">How It Works</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#" class="btn btn-primary">About Us</a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>



				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>


		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
