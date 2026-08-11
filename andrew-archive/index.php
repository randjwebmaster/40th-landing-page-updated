<?php get_header(); ?>

<main id="main">

  <?php // ── Hero: title + lede from the WordPress page ──────────────────── ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="page-hero">
    <div>
      <div class="eyebrow"><span class="dot">●</span> 1986 &mdash; 2026</div>
      <h1><?php echo esc_html( get_the_title() ); ?></h1>
      <div class="lede"><?php the_content(); ?></div>
    </div>
    <div class="logo-card">
      <div class="logo-stack">
        <img class="logo-mark" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/rj-mark.png" alt="<?php bloginfo( 'name' ); ?> 40th Anniversary — 1986–2026" />
        <img class="logo-tagline" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/rj-tagline.png" alt="years of making a difference" aria-hidden="true" />
      </div>
    </div>
  </section>

  <?php endwhile; endif; ?>

  <div class="dateline">
    <div><span class="lime"></span>Anniversary Edition &middot; Vol. 40</div>
    <div class="center"><?php bloginfo( 'name' ); ?></div>
    <div>Somerville, NJ</div>
  </div>

  <?php
  // ── Fetch all CPT data once ───────────────────────────────────────────────
  $cpt_args = array( 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'ASC', 'post_status' => 'publish' );

  $stat_query  = new WP_Query( array_merge( $cpt_args, array( 'post_type' => 'rj_stat' ) ) );
  $era_query   = new WP_Query( array_merge( $cpt_args, array( 'post_type' => 'rj_era' ) ) );
  $quote_query = new WP_Query( array_merge( $cpt_args, array( 'post_type' => 'rj_quote' ) ) );
  ?>

  <?php // ── Stats grid ───────────────────────────────────────────────────── ?>
  <?php if ( $stat_query->have_posts() ) : ?>
  <section class="s-cream">
    <div class="s-inner">
      <div class="stats-grid">
        <?php while ( $stat_query->have_posts() ) : $stat_query->the_post();
          $stat_number = get_post_meta( get_the_ID(), '_stat_number', true );
        ?>
        <div class="stat-cell">
          <div class="num"><em><?php echo esc_html( $stat_number ); ?></em></div>
          <div class="label"><?php echo esc_html( get_the_title() ); ?></div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <?php // ── Era overview grid ────────────────────────────────────────────── ?>
  <?php if ( $era_query->have_posts() ) : ?>
  <section class="s-cream" style="padding-top: 0;">
    <div class="s-inner">
      <div class="section-head">
        <div>
          <h2><?php echo wp_kses_post( get_theme_mod( 'rj_moments_heading', 'Moments That Made <em>a Difference.</em>' ) ); ?></h2>
        </div>
        <p><?php echo esc_html( get_theme_mod( 'rj_moments_subheading', 'To mark forty years, we\'re walking through the six distinct eras of the agency\'s history — each defined by the communications forces of its time, told through the perspectives of founders, leadership, clients, and team.' ) ); ?></p>
      </div>

      <div class="era-grid">
        <?php while ( $era_query->have_posts() ) : $era_query->the_post();
          $era_number = get_post_meta( get_the_ID(), '_era_number', true );
          $era_years  = get_post_meta( get_the_ID(), '_era_years', true );
        ?>
        <article class="era-card">
          <div class="era-num">&mdash; Era <?php echo esc_html( $era_number ); ?></div>
          <div class="era-years"><?php echo esc_html( $era_years ); ?></div>
          <h3><?php echo esc_html( get_the_title() ); ?></h3>
          <p><?php echo esc_html( wp_strip_all_tags( get_the_content() ) ); ?></p>
        </article>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <?php // ── Era immersive scroll ──────────────────────────────────────────── ?>
  <?php $era_query->rewind_posts(); ?>
  <?php if ( $era_query->have_posts() ) : ?>
  <section class="era-scroll">
    <div class="es-intro">
      <div class="eyebrow"><span class="dot">●</span> Walk the timeline</div>
      <h2><?php echo wp_kses_post( get_theme_mod( 'rj_scroll_heading', 'Six eras, <em>up close.</em>' ) ); ?></h2>
      <p><?php echo esc_html( get_theme_mod( 'rj_scroll_subheading', 'Scroll through four decades — one era at a time. Each chapter reshaped how we work, and who we work for.' ) ); ?></p>
      <div class="es-hint">Scroll to begin</div>
    </div>

    <?php while ( $era_query->have_posts() ) : $era_query->the_post();
      $era_number  = get_post_meta( get_the_ID(), '_era_number', true );
      $era_years   = get_post_meta( get_the_ID(), '_era_years', true );
    ?>
    <article class="era-panel" data-era="<?php echo esc_attr( $era_number ); ?>">
      <div class="ghost"><span><?php echo esc_html( $era_number ); ?></span></div>
      <div class="es-wrap">
        <div class="content">
          <div class="e-num reveal">Era <?php echo esc_html( $era_number ); ?></div>
          <div class="e-years reveal"><?php echo esc_html( $era_years ); ?></div>
          <h3 class="reveal"><?php echo esc_html( get_the_title() ); ?></h3>
          <p class="desc reveal"><?php echo esc_html( wp_strip_all_tags( get_the_content() ) ); ?></p>
        </div>
      </div>
    </article>
    <?php endwhile; ?>

    <?php // Rail nav — loop eras a third time for the button labels ?>
    <nav class="era-rail" aria-label="Era navigation">
      <?php $era_query->rewind_posts(); $rail_i = 0; ?>
      <?php while ( $era_query->have_posts() ) : $era_query->the_post();
        $nav_label = get_post_meta( get_the_ID(), '_era_nav_label', true );
      ?>
      <button type="button" data-i="<?php echo esc_attr( $rail_i++ ); ?>">
        <span class="lab"><?php echo esc_html( $nav_label ); ?></span>
        <span class="tick"></span>
      </button>
      <?php endwhile; wp_reset_postdata(); ?>
    </nav>
  </section>
  <?php endif; ?>

  <?php // ── Founder quotes ───────────────────────────────────────────────── ?>
  <?php if ( $quote_query->have_posts() ) : ?>
  <section class="s-cream" style="padding-top: 0;">
    <div class="s-inner">
      <div class="section-head single">
        <h2 style="max-width: 22ch;"><?php echo wp_kses_post( get_theme_mod( 'rj_quotes_heading', 'In their <em>own words.</em>' ) ); ?></h2>
      </div>

      <?php while ( $quote_query->have_posts() ) : $quote_query->the_post();
        $quote_role = get_post_meta( get_the_ID(), '_quote_role', true );
      ?>
      <div class="founder-quote">
        <div class="who"><?php echo esc_html( $quote_role ); ?><strong><?php echo esc_html( get_the_title() ); ?></strong></div>
        <blockquote><?php echo esc_html( wp_strip_all_tags( get_the_content() ) ); ?></blockquote>
      </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </section>
  <?php endif; ?>

  <?php // ── CTA ───────────────────────────────────────────────────────────── ?>
  <section class="cta-cream">
    <div class="inner">
      <div>
        <h2><?php echo wp_kses_post( get_theme_mod( 'rj_cta_headline', 'Here\'s to the <em>next</em> forty.' ) ); ?></h2>
      </div>
      <div class="actions">
        <a href="<?php echo esc_url( get_theme_mod( 'rj_cta_btn1_url', 'mailto:info@randjsc.com' ) ); ?>" class="btn btn-primary btn-arrow">
          <?php echo esc_html( get_theme_mod( 'rj_cta_btn1_text', 'Start a project' ) ); ?>
        </a>
        <a href="<?php echo esc_url( get_theme_mod( 'rj_cta_btn2_url', home_url( '/' ) ) ); ?>" class="btn btn-ghost btn-arrow">
          <?php echo esc_html( get_theme_mod( 'rj_cta_btn2_text', 'See the work' ) ); ?>
        </a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
