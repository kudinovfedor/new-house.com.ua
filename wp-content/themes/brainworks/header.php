<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, height=device-height, minimum-scale=1.0, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes, shrink-to-fit=no">
  <title><?php wp_title(' | ', true, 'right'); bloginfo('name'); ?></title>
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon/favicon-16x16.png" rel="icon" type="image/png" sizes="16x16">
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon/favicon-32x32.png" rel="icon" type="image/png" sizes="32x32">
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon/manifest.json" rel="manifest">
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon/safari-pinned-tab.svg" rel="mask-icon">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="application-name" content="<?php bloginfo( 'name' ); ?>">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?>">
  <meta name="msapplication-config" content="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.ico" rel="shortcut icon">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if (function_exists('ot_get_option')) {
  $header_image = ot_get_option('header_image', get_template_directory_uri() . '/img/header-bg.jpg');
} ?>
<header class="header" style="background-image: url(<?php echo esc_attr($header_image); ?>)">
  <div class="container">
    <div class="header-top">
      <div class="header-logo">
        <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
        </a>
      </div>
      <div class="header-tels">
        <?php if (function_exists('ot_get_option')) {
          $phone_number_1 = ot_get_option('phone_number_1');
          $phone_number_2 = ot_get_option('phone_number_2');
          $phone_number_3 = ot_get_option('phone_number_3');
          $phone_number_4 = ot_get_option('phone_number_4');
          ?>
          <?php if ($phone_number_1) : ?>
            <a class="header-tel" href="tel:<?php echo esc_attr(tel_clear($phone_number_1)); ?>"><?php echo esc_html($phone_number_1); ?></a>
          <?php endif; ?>
          <?php if ($phone_number_2) : ?>
            <a class="header-tel" href="tel:<?php echo esc_attr(tel_clear($phone_number_2)); ?>"><?php echo esc_html($phone_number_2); ?></a>
          <?php endif; ?>
          <?php if ($phone_number_3) : ?>
            <a class="header-tel" href="tel:<?php echo esc_attr(tel_clear($phone_number_3)); ?>"><?php echo esc_html($phone_number_3); ?></a>
          <?php endif; ?>
          <?php if ($phone_number_4) : ?>
            <a class="header-tel" href="tel:<?php echo esc_attr(tel_clear($phone_number_4)); ?>"><?php echo esc_html($phone_number_4); ?></a>
          <?php endif; ?>
        <?php } ?>
      </div>
      <div class="header-btn">
        <button class="btn btn-primary btn-block js-order-call">
          <svg class="svg-icon" width="24" height="32">
            <use xlink:href="#mobile"></use>
          </svg>
          <?php _e('Заказать звонок', 'brainworks'); ?>
        </button>
      </div>
    </div>
    <section class="header-middle text-center">
      <h3 class="header-subtitle"><?php _e('Новый двухэтажный', 'brainworks'); ?></h3>
      <h2 class="header-title"><?php _e('дом 120 м<sup>2</sup> с ремонтом', 'brainworks'); ?></h2>
      <p class="header-desc"><?php _e('в пригороде киева от собственника', 'brainworks'); ?></p>
      <span class="btn btn-primary js-scroll-down"><?php _e('Узнать больше', 'brainworks'); ?></span>
    </section>
    <div class="header-bottom">
      <div class="scroll-down js-scroll-down">
        <svg class="svg-icon" width="33" height="53">
          <use xlink:href="#mouse"></use>
        </svg>
      </div>
    </div>
  </div>
</header>