<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        518 Powerup was created with <3 from<span><a href="https://busybee.marketing/">Busybee Marketing</a> and <a href="https://tonyciccarone.com/">Tony Ciccarone</a></span>
      </div>
    </div>
  </div>
</section>

</div><!-- #page we need this extra closing tag here -->
<script src="https://kit.fontawesome.com/cff905c27f.js" crossorigin="anonymous"></script>

<?php wp_footer(); ?>

</body>

</html>
