<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
<noscript><style>.logo-tagline { --rev: 150deg; }</style></noscript>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="lp-nav">
  <div class="inner">
    <a class="lp-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php bloginfo( 'name' ); ?>">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/rj-lockup.png" alt="<?php bloginfo( 'name' ); ?>" />
    </a>
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false ) ); ?>
  </div>
</header>
