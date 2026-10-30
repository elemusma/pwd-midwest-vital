<footer>
<?php
$footer_phone = trim( (string) globalPhone() );
$footer_phone_href = preg_replace( '/\D+/', '', $footer_phone );

if ( $footer_phone_href && '1' !== substr( $footer_phone_href, 0, 1 ) ) {
    $footer_phone_href = '1' . $footer_phone_href;
}

$footer_email = sanitize_email( emailAddress() );
$footer_about = companyAbout();
?>
<section class="mv-footer bg-accent-tertiary text-white" style="padding:85px 0px;" id="contact">
    <div class="container">
        <div class="row mv-footer-main">
            <div class="col-lg-4 col-md-6 col-12 mv-footer-about">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( 'Homepage link for ' . get_bloginfo( 'name' ) ); ?>">
                    <?php 
                  $logo_image = logoImg();

if (! empty($logo_image['id'])) {
    echo wp_get_attachment_image(
        $logo_image['id'],
        'full',
        false,
        array(
            'class' => 'w-100 h-auto skip-lazy'
        )
    );
} else {
    echo logoSVG();
}
                  ?>
                </a>

                <p><?php echo wp_kses_post( $footer_about ); ?></p>

                <p class="mv-footer-label">Request Facility Availability</p>
                <a class="mv-footer-strong" href="<?php echo esc_url( 'tel:+' . $footer_phone_href ); ?>"><?php echo esc_html( $footer_phone ); ?></a>

                <a class="mv-footer-strong" href="<?php echo esc_url( 'mailto:' . $footer_email ); ?>"><?php echo esc_html( $footer_email ); ?></a>

                <div class="mv-footer-socials">
                    <?php get_template_part( 'partials/si' ); ?>
                </div>
            </div>

            <div class="col-lg-5 col-md-6 col-12 mv-footer-services">
                <h3>Midwest Vital Services</h3>
                <div class="mv-footer-rule"><i></i><span></span></div>
                <?php
                wp_nav_menu(array(
                    'menu' => 'Services',
                    'menu_class'=>'menu list-unstyled mb-0'
                ));
                ?>
                
                <!-- <ul>
                    <li><i>✦</i>Vehicle Inspection</li>
                    <li><i>✦</i>Expert Reporting</li>
                    <li><i>✦</i>Technical Analysis</li>
                    <li><i>✦</i>Consultation</li>
                    <li><i>✦</i>Document Review</li>
                    <li><i>✦</i>Case Support</li>
                    <li><i>✦</i>Independent Review</li>
                    <li><i>✦</i>Clear Documentation</li>
                </ul> -->
            </div>

            <div class="col-lg-3 col-md-6 col-12 mv-footer-contact">
                <h3>Contact</h3>
                <div class="mv-footer-rule"><i></i><span></span></div>

                <p class="mv-footer-phone">
                    <b aria-hidden="true">●</b>
                    <a href="<?php echo esc_url( 'tel:+' . $footer_phone_href ); ?>"><?php echo esc_html( $footer_phone ); ?></a>
                </p>

                <div class="mv-footer-hours">
                    <p class="mv-footer-hours-title">Working Hours</p>
                    <strong>Monday - Friday<br>08:00 am - 06:00 pm</strong>
                    <strong>Saturday - Sunday<br>Closed</strong>
                </div>
            </div>

            <div class="col-12">
                <div class="mv-footer-credit text-white">
<!-- start of backlink -->
<div class="col-12 text-center" style="">
    <p style="margin-bottom:0px;font-size:85%;" class="">Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>. All Rights Reserved.</p>
</div>

<div class="col-12">
    <hr style="margin:20px auto !important;border-color:rgba(255,255,255,.18);">
</div>

<div class="col-md-12 col-11 text-center">
<a href="https://precisewolf.com/" target="_blank" rel="noopener nofollow external" title="Web Design & SEO done by Precise Wolf in Denver, CO" class="precise-wolf-digital-logo">
  <span class="precise-wolf-site-created-text">Site Created by</span>
  <span class="precise-wolf-logo-svg-wrap">
    <svg class="precise-wolf-logo-svg" id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1560.29 510.25">
      <defs>
        <style>
          .footer-cls-1 {
            fill: url(#radial-gradient-2);
          }

          .footer-cls-2, .footer-cls-3 {
            stroke: #0f9fda;
          }

          .footer-cls-2, .footer-cls-3, .footer-cls-4, .footer-cls-5 {
            stroke-miterlimit: 10;
            stroke-width: 10px;
          }

          .footer-cls-2, .footer-cls-5 {
            fill: none;
          }

          .footer-cls-6 {
            fill: url(#radial-gradient);
          }

          .footer-cls-4 {
            stroke: #fff;
          }

          .footer-cls-7 {
            fill: #fff;
          }

          .footer-cls-5 {
            stroke: #000;
          }
        </style>
        <radialGradient id="radial-gradient" cx="194.47" cy="223" fx="194.47" fy="223" r="11.82" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#90f1fc"/>
          <stop offset="1" stop-color="#2be7fb"/>
        </radialGradient>
        <radialGradient id="radial-gradient-2" cx="194.47" cy="223" fx="194.47" fy="223" r="11.82" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#a1dff7"/>
          <stop offset="1" stop-color="#0f9fda"/>
        </radialGradient>
      </defs>
      <g id="Layer_1-2" data-name="Layer 1">
        <g>
          <g class="precise-wolf-logo-text">
            <g>
              <path d="M659.76,285.52h47.91c36.54,0,61.39,23.06,61.39,56.84s-24.85,56.84-61.39,56.84h-47.91v-113.68ZM706.69,385.07c28.1,0,46.12-17.21,46.12-42.71s-18.03-42.71-46.12-42.71h-30.69v85.42h30.69Z"/>
              <path d="M793.9,285.52h16.24v113.68h-16.24v-113.68Z"/>
              <path d="M923.01,341.71h15.59v44.33c-11.37,9.58-27.12,14.45-43.04,14.45-34.92,0-60.57-24.52-60.57-58.14s25.66-58.14,60.9-58.14c18.03,0,33.29,6.01,43.69,17.54l-10.07,10.07c-9.42-9.09-20.14-13.15-32.97-13.15-26.31,0-45.31,18.35-45.31,43.69s19,43.69,45.15,43.69c9.58,0,18.51-2.11,26.63-7.31v-37.03Z"/>
              <path d="M969.62,285.52h16.24v113.68h-16.24v-113.68Z"/>
              <path d="M1042.54,299.65h-38.98v-14.13h94.03v14.13h-38.98v99.55h-16.08v-99.55Z"/>
              <path d="M1182.04,370.78h-60.41l-12.5,28.42h-16.73l51.48-113.68h16.08l51.64,113.68h-17.05l-12.5-28.42ZM1176.36,357.79l-24.52-55.7-24.52,55.7h49.04Z"/>
              <path d="M1228.49,285.52h16.24v99.55h61.55v14.13h-77.79v-113.68Z"/>
            </g>
            <g>
              <path d="M657.63,86.93h42.53c22.67,0,33.3,13.29,33.3,36.74,0,29.24-16.1,36.12-36.59,36.12h-11.26v53.79h-27.99v-126.65ZM695,140.25c10.32,0,12.2-5.47,12.2-17.04,0-9.54-1.09-16.57-12.35-16.57h-9.23v33.62h9.38Z"/>
              <path d="M746.92,86.93h34.87c25.49,0,42.06,6.88,42.06,33.46,0,15.64-2.97,25.96-15.48,31.9l17.36,61.29h-28.93l-13.92-56.76h-7.97v56.76h-27.99v-126.65ZM782.72,140.72c11.73,0,15.17-6.57,15.17-17.82s-3.28-17.2-13.92-17.2h-9.07v35.02h7.82Z"/>
              <path d="M840.73,86.93h56.91v19.08h-28.93v31.43h22.05v19.39h-22.05v37.84h29.24v18.92h-57.23v-126.65Z"/>
              <path d="M908.9,173.24v-45.66c0-26.27,9.07-42.37,37.99-42.37s36.43,15.01,36.43,36.59v10.95h-27.36v-12.67c0-7.35-.16-15.17-9.07-15.17s-9.69,7.97-9.69,15.64v59.57c0,8.6,1.41,15.48,9.69,15.48,8.76,0,9.07-7.82,9.07-15.48v-13.29h27.36v10.95c0,21.58-8.13,37.68-36.43,37.68s-37.99-16.57-37.99-42.22Z"/>
              <path d="M998.81,86.93h27.99v126.65h-27.99v-126.65Z"/>
              <path d="M1042.9,175.27l23.92-3.6c.31,16.42,4.06,22.52,11.1,22.52,5.79,0,7.04-4.85,7.04-9.23,0-10.48-5.32-16.73-13.92-24.08l-10.95-9.54c-9.69-8.13-17.04-17.67-17.04-32.99,0-21.42,13.6-33.15,35.49-33.15,27.05,0,30.96,21.11,31.43,35.96l-24.08,2.97c-.31-11.26-1.09-18.45-8.29-18.45-5.16,0-7.51,5.47-7.51,9.85,0,9.38,4.85,14.38,12.2,20.8l10.48,9.23c10.94,9.38,19.7,20.48,19.7,37.99s-12.98,31.9-33.15,31.9c-23.92,0-35.49-12.04-36.43-40.18Z"/>
              <path d="M1126.08,86.93h56.91v19.08h-28.93v31.43h22.05v19.39h-22.05v37.84h29.24v18.92h-57.23v-126.65Z"/>
              <path d="M1230.84,86.93h23.77l7.51,73.8,9.54-73.64h18.61l10.01,73.18,7.66-73.33h23.45l-15.17,126.65h-24.39l-10.79-76.46-10.16,76.46h-24.7l-15.32-126.65Z"/>
              <path d="M1342.95,173.71v-47.06c0-26.11,9.54-41.43,37.99-41.43s38.31,15.32,38.31,41.43v47.06c0,26.11-9.69,41.75-38.31,41.75s-37.99-15.64-37.99-41.75ZM1390.64,180.75v-60.98c0-7.51-.94-14.85-9.69-14.85-8.29,0-9.38,7.35-9.38,14.85v60.98c0,7.19.63,14.85,9.38,14.85s9.69-7.66,9.69-14.85Z"/>
              <path d="M1436.3,86.93h27.99v107.73h29.08v18.92h-57.07v-126.65Z"/>
              <path d="M1505.56,86.93h54.73v18.92h-26.74v31.9h23.3v19.54h-23.3v56.29h-27.99v-126.65Z"/>
            </g>
          </g>
          <line class="footer-cls-3" x1="578.91" y1="162.09" x2="578.91" y2="351.89"/>
          <g>
            <g class="logo-circle">
              <circle class="footer-cls-5" cx="255" cy="255.25" r="250"/>
              <g>
                <line class="footer-cls-5" x1="252.43" y1="467.81" x2="252.43" y2="505.25"/>
                <line class="footer-cls-5" x1="252.43" y1="9.52" x2="252.43" y2="46.96"/>
                <line class="footer-cls-5" x1="44.92" y1="252.88" x2="7.35" y2="252.88"/>
                <line class="footer-cls-5" x1="65.5" y1="151.29" x2="35.66" y2="135.6"/>
                <line class="footer-cls-5" x1="65.63" y1="355.88" x2="37.85" y2="372.08"/>
                <line class="footer-cls-5" x1="506.52" y1="253.84" x2="468.95" y2="253.84"/>
                <line class="footer-cls-5" x1="371.28" y1="430.29" x2="394.26" y2="462.93"/>
                <line class="footer-cls-5" x1="109.44" y1="57.79" x2="127.09" y2="82.85"/>
                <line class="footer-cls-5" x1="140.37" y1="428.24" x2="118.82" y2="463.31"/>
                <line class="footer-cls-5" x1="377.14" y1="42.88" x2="360.56" y2="69.88"/>
                <line class="footer-cls-5" x1="445.96" y1="356.84" x2="476.43" y2="375.36"/>
                <line class="footer-cls-5" x1="445.96" y1="151.61" x2="473.34" y2="133.48"/>
              </g>
            </g>
            <circle class="footer-cls-6" cx="194.47" cy="223" r="11.82"/>
            <path class="footer-cls-4" d="M67.76,227.05l32.92-55.55c-17.03-58.2-15.13-112.9,19.55-161.51l82.3,74.07h96.7L386.66,6.9c31.35,32.32,39.01,89.49,24.69,169.74l31.89,54.52-21.6-6.17,35.49,79.21-38.06-11.32-38.06,89.5-9.77-32.4-65.32,85.38,2.57-42.18-54.01,50.41-56.58-50.41,4.11,42.69-64.29-87.44-8.74,34.46-40.63-90.53-33.95,10.29,33.43-79.21-20.06,3.6Z"/>
            <path class="footer-cls-7" d="M125.48,137.68l-13.37,12.86c-12.68-37.02-12.62-74.48,7.72-112.64,21.94,16.78,40.22,36.79,53.49,61.21l-21.6,19.55c-10.49-15.84-19.85-35.09-28.29-57.09-8.9,26.64-6.63,51.8,2.06,76.12Z"/>
            <path class="footer-cls-7" d="M381.93,136.14l13.37,12.86c12.68-37.02,12.62-74.48-7.72-112.64-21.94,16.78-40.22,36.79-53.49,61.21l21.6,19.55c10.49-15.84,19.85-35.09,28.29-57.09,8.9,26.64,6.63,51.8-2.06,76.12Z"/>
            <polygon class="footer-cls-7" points="135.77 234.12 201.6 289.67 187.72 337.51 153.77 290.19 160.45 324.65 114.68 282.99 135.77 234.12"/>
            <polygon class="footer-cls-7" points="370.31 233.41 304.22 292.76 318.1 340.59 352.05 293.27 345.37 327.74 391.14 286.07 370.31 233.41"/>
            <polygon class="footer-cls-7" points="109.28 232.06 87.67 270.64 112.88 267.04 109.28 232.06"/>
            <polygon class="footer-cls-7" points="396.93 231.61 420.33 271.8 395.13 268.2 396.93 231.61"/>
            <path class="footer-cls-7" d="M171.38,210.59l-21.09,6.69c5.16,15.17,11.71,26.67,20.06,33.43,10.79,7.68,21.59,11.25,32.4,13.37,4.8-2.83,7.98-6.47,8.74-11.32,1.14-6.42.82-10.72-2.06-11.32-11.24,2.05-21.09.39-29.32-5.66-5.45-8.25-9.07-16.61-8.74-25.2Z"/>
            <path class="footer-cls-7" d="M228.03,248.78v69.82s53.24,0,53.24,0v-69.44c12.39,39.65,24.04,77.45,29.7,100.3v16.2c-5.15,7.15-12.85,14.81-21.99,22.76-13.31-1.81-23.39-5.25-27.78-11.57,8.8-6.15,16.65-13.32,22.76-22.37,3.1-8.66,0-16.45-10.8-23.15h-39.73c-11.7,5.26-14.4,13-11.19,22.37,4.28,8.67,12.57,16.41,23.53,23.53-7.19,6.23-16.35,9.46-27,10.42-10.03-4.85-18.72-12.93-25.07-26.62,6.89-35.64,17.01-72.55,34.33-112.26Z"/>
            <g>
              <circle class="footer-cls-2" cx="317.08" cy="221.46" r="45.18"/>
              <circle class="footer-cls-2" cx="317.08" cy="221.46" r="22.35"/>
              <line class="footer-cls-2" x1="317.08" y1="287.81" x2="317.08" y2="155.1"/>
              <line class="footer-cls-2" x1="251.1" y1="221.46" x2="383.05" y2="221.46"/>
            </g>
            <circle class="footer-cls-1" cx="194.47" cy="223" r="11.82"/>
            <path class="footer-cls-7" d="M145.92,201.07c18.58-.35,34.39,2.71,45.52,11.57,10.04,4.7,18.58,10.72,26.23,17.49l13.37,1.54c1.12-16.4-2.41-31.3-21.6-41.15l-18.52-8.74c-24.75.09-37.34,8.09-45.01,19.29Z"/>
          </g>
        </g>
      </g>
    </svg>
  </span>
</a>
</div>

<style>
@keyframes rotate-infinite {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

.precise-wolf-digital-logo {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    width: 200px;
    text-decoration: none;
    color: inherit;
}

.precise-wolf-site-created-text {
    flex: 0 0 auto;
    font-size: 10px;
    line-height: 1.2;
    white-space: nowrap;
    color: inherit;
    transition: all .25s ease-in-out;
}

.precise-wolf-logo-svg-wrap {
    flex: 1 1 auto;
    min-width: 0;
    display: block;
}

.precise-wolf-logo-svg {
    width: 100%;
    height: auto;
    display: block;
}

.logo-circle {
    animation: rotate-infinite 35s linear infinite;
    transform-box: fill-box;
    transform-origin: 50% 50%;
}

.precise-wolf-digital-logo g.precise-wolf-logo-text,
.precise-wolf-digital-logo g.logo-circle * {
    transition: all .25s ease-in-out;
}

.precise-wolf-digital-logo:hover g.precise-wolf-logo-text {
    fill: #0f9fda;
}

.precise-wolf-digital-logo:hover g.logo-circle * {
    stroke: #0f9fda;
}

.precise-wolf-digital-logo:hover .precise-wolf-site-created-text {
    color: #0f9fda;
}

.text-white g.logo-circle * {
    stroke: white;
}

.text-white .precise-wolf-logo-text,
.text-white .precise-wolf-site-created-text {
    fill: white;
    color: white;
}
</style>
<!-- end of backlink -->

                </div>
            </div>
        </div>
    </div>
</section>

<!-- The first Modal -->
<div id="mobileMenu" class="modal-custom mobile-menu" style="opacity:0;pointer-events:none;">

<!-- Modal content -->
<div class="modal-content-menu modal-content-custom bg-white" style="padding: 50px 15px 100px;
    margin-top: 0;
    margin-left: 0;
    margin-bottom: 0;
    border-left: 0;
    border-bottom: 0;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
    height: 100vh;">
<span class="close-custom" id="navMenuClose">&times;</span>
	<?php

echo '<div style="width:100%;max-width:165px;" id="logoMain">';
echo '<a href="' . home_url() . '" title="Homepage link for ' . get_bloginfo('name') . ' - ' . get_bloginfo('description') . '">';


$logo_image = logoImg();

if (! empty($logo_image['id'])) {
    echo wp_get_attachment_image(
        $logo_image['id'],
        'full',
        false,
        array(
            'class' => 'w-100 h-auto skip-lazy'
        )
    );
} else {
    echo logoSVG();
}


echo '</a>';
echo '</div>';

wp_nav_menu(array(
    'menu' => 'primary',
    'menu_class'=>'menu list-unstyled mb-0'
));

?>
<div class="">
<?php
echo do_shortcode('[global_cta]');
?>
</div>

<?php

echo get_template_part('partials/si');

?>

<?php
echo '</div>';
echo '</div>';
// end of mobile nav menu


echo '</footer>';


echo codeFooter();
// if(get_field('footer', 'options')) { the_field('footer', 'options'); }
// if(get_field('footer_code')) { the_field('footer_code'); }

?>

<style>
label.screen-reader-text {
    display: none;
}
#searchform input#searchsubmit {
    width: 332px;
}

#searchform input#s {
    width: 300px;
}</style>
<!-- <div id="searchMenu" class="modal-custom" style="opacity:0;pointer-events:none;background-color:rgba(0, 0, 0, 0.75);">
<div class="modal-content-custom d-flex align-items-center position-relative" style="background: transparent;box-shadow: none;border: none;">
<span class="close-custom position-absolute" style="top:25px;right:0px;z-index:1;font-size:4rem;">&times;</span>

<div class="row">
<div class="col-12 text-center">
<span class="h2">Search for:</span>
<?php echo get_search_form(); ?>
</div>

</div>

</div>
</div> -->

<?php

wp_footer();

echo '</body>';
echo '</html>';
?>

