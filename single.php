<?php get_header(); ?>

<main id="main">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h1><?php echo esc_html( get_the_title() ); ?></h1>
      <div class="entry-meta">
        <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_time( 'F j, Y' ) ); ?></time>
        <span class="byline"><?php the_author_posts_link(); ?></span>
      </div>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </article>

    <nav class="post-navigation">
      <?php previous_post_link( '%link', '&larr; %title' ); ?>
      <?php next_post_link( '%link', '%title &rarr;' ); ?>
    </nav>

  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
