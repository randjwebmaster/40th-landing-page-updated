<?php

/* ============================================================
   Stat meta box — _stat_number
   ============================================================ */

function rj_stat_add_meta_box() {
    add_meta_box( 'rj_stat_details', __( 'Stat Details', 'my-theme' ), 'rj_stat_meta_box_render', 'rj_stat', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'rj_stat_add_meta_box' );

function rj_stat_meta_box_render( $post ) {
    wp_nonce_field( 'rj_stat_save', 'rj_stat_nonce' );
    $number = get_post_meta( $post->ID, '_stat_number', true );
    ?>
    <p style="margin-bottom:4px"><strong><?php esc_html_e( 'Displayed Number', 'my-theme' ); ?></strong></p>
    <p style="color:#666;font-size:12px;margin-bottom:8px"><?php esc_html_e( 'The large number shown (e.g. 40). Post title is the label beneath it.', 'my-theme' ); ?></p>
    <input type="text" name="stat_number" value="<?php echo esc_attr( $number ); ?>" style="width:100%" placeholder="40" />
    <?php
}

function rj_stat_meta_box_save( $post_id ) {
    if ( ! isset( $_POST['rj_stat_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['rj_stat_nonce'] ) ), 'rj_stat_save' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    if ( isset( $_POST['stat_number'] ) ) {
        update_post_meta( $post_id, '_stat_number', sanitize_text_field( wp_unslash( $_POST['stat_number'] ) ) );
    }
}
add_action( 'save_post_rj_stat', 'rj_stat_meta_box_save' );


/* ============================================================
   Era meta box — _era_number, _era_years, _era_nav_label
   ============================================================ */

function rj_era_add_meta_box() {
    add_meta_box( 'rj_era_details', __( 'Era Details', 'my-theme' ), 'rj_era_meta_box_render', 'rj_era', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'rj_era_add_meta_box' );

function rj_era_meta_box_render( $post ) {
    wp_nonce_field( 'rj_era_save', 'rj_era_nonce' );
    $number    = get_post_meta( $post->ID, '_era_number', true );
    $years     = get_post_meta( $post->ID, '_era_years', true );
    $nav_label = get_post_meta( $post->ID, '_era_nav_label', true );
    ?>
    <p style="margin:0 0 4px"><strong><?php esc_html_e( 'Era Number', 'my-theme' ); ?></strong></p>
    <p style="color:#666;font-size:12px;margin:0 0 8px"><?php esc_html_e( 'Two-digit number (e.g. 01). Used as the large ghost numeral and data attribute.', 'my-theme' ); ?></p>
    <input type="text" name="era_number" value="<?php echo esc_attr( $number ); ?>" style="width:100%;margin-bottom:16px" placeholder="01" />

    <p style="margin:0 0 4px"><strong><?php esc_html_e( 'Year Range', 'my-theme' ); ?></strong></p>
    <p style="color:#666;font-size:12px;margin:0 0 8px"><?php esc_html_e( 'Displayed year span (e.g. 1986–92).', 'my-theme' ); ?></p>
    <input type="text" name="era_years" value="<?php echo esc_attr( $years ); ?>" style="width:100%;margin-bottom:16px" placeholder="1986–92" />

    <p style="margin:0 0 4px"><strong><?php esc_html_e( 'Navigation Label', 'my-theme' ); ?></strong></p>
    <p style="color:#666;font-size:12px;margin:0 0 8px"><?php esc_html_e( 'Short label shown in the scroll rail (e.g. Founders).', 'my-theme' ); ?></p>
    <input type="text" name="era_nav_label" value="<?php echo esc_attr( $nav_label ); ?>" style="width:100%" placeholder="Founders" />
    <?php
}

function rj_era_meta_box_save( $post_id ) {
    if ( ! isset( $_POST['rj_era_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['rj_era_nonce'] ) ), 'rj_era_save' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    $fields = array( 'era_number' => '_era_number', 'era_years' => '_era_years', 'era_nav_label' => '_era_nav_label' );
    foreach ( $fields as $input => $meta_key ) {
        if ( isset( $_POST[ $input ] ) ) {
            update_post_meta( $post_id, $meta_key, sanitize_text_field( wp_unslash( $_POST[ $input ] ) ) );
        }
    }
}
add_action( 'save_post_rj_era', 'rj_era_meta_box_save' );


/* ============================================================
   Quote meta box — _quote_role
   ============================================================ */

function rj_quote_add_meta_box() {
    add_meta_box( 'rj_quote_details', __( 'Quote Details', 'my-theme' ), 'rj_quote_meta_box_render', 'rj_quote', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'rj_quote_add_meta_box' );

function rj_quote_meta_box_render( $post ) {
    wp_nonce_field( 'rj_quote_save', 'rj_quote_nonce' );
    $role = get_post_meta( $post->ID, '_quote_role', true );
    ?>
    <p style="margin:0 0 4px"><strong><?php esc_html_e( 'Role / Title', 'my-theme' ); ?></strong></p>
    <p style="color:#666;font-size:12px;margin:0 0 8px"><?php esc_html_e( 'Displayed above the person\'s name (e.g. Founder or President &amp; Partner).', 'my-theme' ); ?></p>
    <input type="text" name="quote_role" value="<?php echo esc_attr( $role ); ?>" style="width:100%" placeholder="Founder" />
    <p style="color:#666;font-size:12px;margin:12px 0 0"><?php esc_html_e( 'Post Title = person\'s name. Post Content = the quote text.', 'my-theme' ); ?></p>
    <?php
}

function rj_quote_meta_box_save( $post_id ) {
    if ( ! isset( $_POST['rj_quote_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['rj_quote_nonce'] ) ), 'rj_quote_save' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    if ( isset( $_POST['quote_role'] ) ) {
        update_post_meta( $post_id, '_quote_role', sanitize_text_field( wp_unslash( $_POST['quote_role'] ) ) );
    }
}
add_action( 'save_post_rj_quote', 'rj_quote_meta_box_save' );
