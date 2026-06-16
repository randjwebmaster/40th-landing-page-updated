<?php get_header(); ?>

<main id="main">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h1><?php echo esc_html( get_the_title() ); ?></h1>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </article>

  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
