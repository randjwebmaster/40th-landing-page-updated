<?php get_header(); ?>

<main id="main">
  <h1>Page Not Found</h1>
  <p><?php esc_html_e( 'The page you are looking for could not be found.', 'my-theme' ); ?></p>
  <?php get_search_form(); ?>
</main>

<?php get_footer(); ?>
