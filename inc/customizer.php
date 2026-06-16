<?php

function rj_customizer_register( $wp_customize ) {

    $wp_customize->add_panel( 'rj_panel', array(
        'title'    => __( '40th Anniversary', 'my-theme' ),
        'priority' => 30,
    ) );

    /* --------------------------------------------------------
       Section headings
    -------------------------------------------------------- */
    $wp_customize->add_section( 'rj_section_headings', array(
        'title' => __( 'Section Headings', 'my-theme' ),
        'panel' => 'rj_panel',
    ) );

    $heading_settings = array(
        'rj_moments_heading'    => array( 'default' => 'Moments That Made <em>a Difference.</em>', 'label' => 'Moments — Heading' ),
        'rj_moments_subheading' => array( 'default' => 'To mark forty years, we\'re walking through the six distinct eras of the agency\'s history — each defined by the communications forces of its time, told through the perspectives of founders, leadership, clients, and team.', 'label' => 'Moments — Subheading' ),
        'rj_scroll_heading'     => array( 'default' => 'Six eras, <em>up close.</em>', 'label' => 'Era Scroll — Heading' ),
        'rj_scroll_subheading'  => array( 'default' => 'Scroll through four decades — one era at a time. Each chapter reshaped how we work, and who we work for.', 'label' => 'Era Scroll — Subheading' ),
        'rj_quotes_heading'     => array( 'default' => 'In their <em>own words.</em>', 'label' => 'Quotes — Heading' ),
    );

    foreach ( $heading_settings as $id => $args ) {
        $wp_customize->add_setting( $id, array(
            'default'           => $args['default'],
            'sanitize_callback' => 'rj_sanitize_heading',
        ) );
        $wp_customize->add_control( $id, array(
            'label'   => __( $args['label'], 'my-theme' ),
            'section' => 'rj_section_headings',
            'type'    => 'textarea',
        ) );
    }

    /* --------------------------------------------------------
       CTA section
    -------------------------------------------------------- */
    $wp_customize->add_section( 'rj_cta', array(
        'title' => __( 'CTA Section', 'my-theme' ),
        'panel' => 'rj_panel',
    ) );

    $cta_settings = array(
        'rj_cta_headline'    => array( 'default' => 'Here\'s to the <em>next</em> forty.',  'label' => 'Headline',        'type' => 'textarea' ),
        'rj_cta_btn1_text'   => array( 'default' => 'Start a project',                       'label' => 'Button 1 Text',   'type' => 'text' ),
        'rj_cta_btn1_url'    => array( 'default' => 'mailto:info@randjsc.com',               'label' => 'Button 1 URL',    'type' => 'url' ),
        'rj_cta_btn2_text'   => array( 'default' => 'See the work',                          'label' => 'Button 2 Text',   'type' => 'text' ),
        'rj_cta_btn2_url'    => array( 'default' => '/',                                     'label' => 'Button 2 URL',    'type' => 'url' ),
    );

    foreach ( $cta_settings as $id => $args ) {
        $sanitize = ( $args['type'] === 'url' ) ? 'esc_url_raw' : 'rj_sanitize_heading';
        $wp_customize->add_setting( $id, array(
            'default'           => $args['default'],
            'sanitize_callback' => $sanitize,
        ) );
        $wp_customize->add_control( $id, array(
            'label'   => __( $args['label'], 'my-theme' ),
            'section' => 'rj_cta',
            'type'    => $args['type'],
        ) );
    }
}
add_action( 'customize_register', 'rj_customizer_register' );

function rj_sanitize_heading( $value ) {
    return wp_kses( $value, array( 'em' => array(), 'strong' => array(), 'br' => array() ) );
}
