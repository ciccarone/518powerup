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
    <h2 class="h2">Donate Used Or New Chargers To Hospitals In the Capital Region</h2>
  </div>
</section>


<section class="buckets outer">
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
            <p class="lead">Hospital patients in the Capital Region have an urgent need for phone chargers.  Due to COVID restrictions, these accessories are in very short supply and high demand.  Let's fix this problem!</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="bucket">
          <div class="animate__animated animate__backInUp">
            <svg viewbox="0 0 50 50" height="56px" class="bucket__triangle bucket__triangle--second">
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
            <p class="lead">518 Powerup is looking to collect the following types of phone charging accessories:  Apple, Samsung, Android, Mini-USB, Micro-USB, USB-A, USB-C, Universal, and Wall Power Adapters</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="outer section light text-center" id="how-it-works">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="h2">How It Works</p>
        <p class="lead mb-4 step__intro">A small gesture like donating a phone charging accessory can make a huge difference in someone's life.  It's simple!</p>
        <div class="row">
          <div class="col-md-4">
            <div class="step">
              <div class="step__icon animate__animated animate__delay-1s">
                <img src="/wp-content/themes/understrap-child-master/imgs/bag.svg" alt="">
              </div>
              <div class="step__text">
                <p class="h5">Put chargers in ziplock</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <div class="step__icon animate__animated animate__delay-2s">
                <img src="/wp-content/themes/understrap-child-master/imgs/envelope-packed.svg" alt="">
              </div>
              <div class="step__text">
                <p class="h5">Put ziplock in envelope</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <div class="step__icon animate__animated animate__delay-3s">
                <img src="/wp-content/themes/understrap-child-master/imgs/send-envelope.svg" alt="">
              </div>
              <div class="step__text">
                <p class="h5">Send envelope to address below</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mx-auto text-center lead mt-5">
            <p class="h4 text-primary po-box"><strong>518 Powerup</strong><br />
            PO Box 1372<br />
            1764 Route 9<br />
            Halfmoon, NY 12065-9998<br />
          </p>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="outer blocks section">
  <div class="block hospital">
    <div class="hospital__inner">

      <img src="/wp-content/themes/understrap-child-master/imgs/saratoga-hospital.jpg" alt="">
    </div>
  </div>
  <div class="block">
    <div class="block__inner">
      <div class="hospital__icon">
        <i class="fas fa-3x fa-hospital-symbol text-primary"></i>
        <p class="h5">Capital Region hospitals that are in need of our help</p>
      </div>
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

<section class="story section" id="story">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="h1 text-center text-dark">The Story</p>
        <p class="lead">518 Powerup came about after seeing posts from a few Capital Region nurses working in trauma units. They expressed how within the trauma unit there is a desperate need for extra chargers. Due to COVID restrictions, visitors are not allowed to bring in any personal items.</p>

        <p class="lead">Oftentimes, our cell phones are the only way we can keep in touch with loved ones. A small gesture such as donating a charger can make a huge difference to someone needing to connect to their family and friends.  This need inspired my husband and I to create 518 Powerup by using our skills, marketing and web development, to be of service to the community.</p>
      </div>
    </div>
  </div>
</section>


<section class="outer section contact position-relative" id="contact">
  <div class="contact__icon__holder">
    <img src="/wp-content/themes/understrap-child-master/imgs/send-email.svg" alt="" class="contact__icon animate__animated">

  </div>
  <div class="container contact__form">
    <div class="row">
      <div class="col-md-4">
        <p class="h2 section__title">Contact Us</p>
        <p class="lead contact__text">Do you have a question or would like more infomation on the 518 Powerup initiative?  Send us a message and we'll get back to you as soon as possible</p>
      </div>
      <div class="col-md-8">
        <?php echo do_shortcode('[contact-form-7 id="6" title="518 Powerup Contact Form"]') ?>
      </div>
    </div>
  </div>
</section>

<section class="outer map">
  <div id="map"></div>
</section>

<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVinLyBqBtKeV8LthFW_I3w9VSYekAzaU&callback=initMap&libraries=&v=weekly"
  defer
></script>

<?php get_footer(); ?>
