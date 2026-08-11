<?php get_header(); ?>

<main id="main">
  <?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h2>
        <div class="entry-excerpt">
          <?php the_excerpt(); ?>
        </div>
      </article>

    <?php endwhile; ?>

    <?php the_posts_pagination(); ?>

  <?php else : ?>
    <p><?php esc_html_e( 'No posts found.', 'my-theme' ); ?></p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
