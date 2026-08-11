<?php

function rj_seed_content() {
    rj_seed_stats();
    rj_seed_eras();
    rj_seed_quotes();
}
add_action( 'after_switch_theme', 'rj_seed_content' );

function rj_seed_stats() {
    if ( get_posts( array( 'post_type' => 'rj_stat', 'numberposts' => 1, 'post_status' => 'any' ) ) ) return;

    $stats = array(
        array( 'number' => '40', 'label' => 'Years of growth, reinvention, and trusted communications counsel — 1986–2026.', 'order' => 0 ),
        array( 'number' => '3',  'label' => 'Founders — John Lonsdorf, Bob Gagauf, Bob Wille — opened the doors in Livingston, NJ.', 'order' => 1 ),
        array( 'number' => '6',  'label' => 'Distinct eras, each defined by the communications forces of its time.', 'order' => 2 ),
        array( 'number' => '4',  'label' => 'Sectors served today: commercial real estate, healthcare, human services, and non-profit.', 'order' => 3 ),
    );

    foreach ( $stats as $stat ) {
        $post_id = wp_insert_post( array(
            'post_type'   => 'rj_stat',
            'post_title'  => $stat['label'],
            'post_status' => 'publish',
            'menu_order'  => $stat['order'],
        ) );
        if ( $post_id && ! is_wp_error( $post_id ) ) {
            update_post_meta( $post_id, '_stat_number', $stat['number'] );
        }
    }
}

function rj_seed_eras() {
    if ( get_posts( array( 'post_type' => 'rj_era', 'numberposts' => 1, 'post_status' => 'any' ) ) ) return;

    $eras = array(
        array(
            'number'    => '01',
            'years'     => '1986–92',
            'nav_label' => 'Founders',
            'title'     => 'The Founders Era',
            'content'   => 'Building the agency and earning trust the old-fashioned way — entrepreneurial grit, founding relationships, traditional advertising and PR built on reputation and results.',
            'order'     => 0,
        ),
        array(
            'number'    => '02',
            'years'     => '1993–99',
            'nav_label' => 'Expansion',
            'title'     => 'Expansion & Specialization',
            'content'   => 'Healthcare, technology, and the early internet reshape the agency. The web emerges, the healthcare practice begins, and major AOR relationships take hold.',
            'order'     => 1,
        ),
        array(
            'number'    => '03',
            'years'     => '2000–04',
            'nav_label' => 'Disruption',
            'title'     => 'Digital Disruption & Reinvention',
            'content'   => 'PR becomes strategic. Search, blogs, and online media change how audiences get information. R&J Group emerges; the photo & imaging practice expands; the business model resets.',
            'order'     => 2,
        ),
        array(
            'number'    => '04',
            'years'     => '2005–12',
            'nav_label' => 'Strategic PR',
            'title'     => 'The Strategic PR Era',
            'content'   => 'Lonsdorf & Marioni open R&J Public Relations. Tiffany Miller joins in 2006. Crisis comms, healthcare advocacy, and early social media become central to the work.',
            'order'     => 3,
        ),
        array(
            'number'    => '05',
            'years'     => '2013–19',
            'nav_label' => 'Integrated',
            'title'     => 'Integrated Growth',
            'content'   => 'Fifth Room Creative joins, the agency rebrands to R&J Strategic Communications, RWJBH expands as a flagship client, and a new generation of leadership steps up.',
            'order'     => 4,
        ),
        array(
            'number'    => '06',
            'years'     => '2020–26',
            'nav_label' => 'Modern',
            'title'     => 'The Modern Era',
            'content'   => 'COVID, remote work, platform fragmentation, the rise of generative AI — and a leadership transition that keeps the founding mindset moving forward.',
            'order'     => 5,
        ),
    );

    foreach ( $eras as $era ) {
        $post_id = wp_insert_post( array(
            'post_type'    => 'rj_era',
            'post_title'   => $era['title'],
            'post_content' => $era['content'],
            'post_status'  => 'publish',
            'menu_order'   => $era['order'],
        ) );
        if ( $post_id && ! is_wp_error( $post_id ) ) {
            update_post_meta( $post_id, '_era_number',    $era['number'] );
            update_post_meta( $post_id, '_era_years',     $era['years'] );
            update_post_meta( $post_id, '_era_nav_label', $era['nav_label'] );
        }
    }
}

function rj_seed_quotes() {
    if ( get_posts( array( 'post_type' => 'rj_quote', 'numberposts' => 1, 'post_status' => 'any' ) ) ) return;

    $quotes = array(
        array(
            'name'    => 'John Lonsdorf',
            'role'    => 'Founder',
            'content' => 'From the beginning, we built this agency around one idea: help clients communicate in a way that actually connects with people. The tools and platforms have changed more than we ever could have imagined in 1986, but that principle has stayed the same. What makes me most proud is not just the work we\'ve done, but the team that has carried that mindset forward and continues to adapt as the industry evolves.',
            'order'   => 0,
        ),
        array(
            'name'    => 'Scott Marioni',
            'role'    => 'President &amp; Partner',
            'content' => 'Every major shift in communications has forced us to rethink how we help our clients reach and engage the audiences that matter most to them. From the rise of search and social to today\'s AI-driven landscape, we have made a conscious decision to evolve with purpose, not react to change. That mindset has allowed us to grow alongside our clients and position them for what\'s next, not just what\'s now.',
            'order'   => 1,
        ),
        array(
            'name'    => 'Tiffany Miller',
            'role'    => 'EVP &amp; Partner',
            'content' => 'Reaching this milestone is a reflection of the relationships that have shaped this organization — from our clients and partners to the team members who bring our work to life every day. We are grateful for the trust that has allowed us to grow over the past 40 years. As we look ahead, our responsibility is to build on that foundation, lead with purpose, and continue making a difference for our clients, our team, and the communities we serve.',
            'order'   => 2,
        ),
    );

    foreach ( $quotes as $quote ) {
        $post_id = wp_insert_post( array(
            'post_type'    => 'rj_quote',
            'post_title'   => $quote['name'],
            'post_content' => $quote['content'],
            'post_status'  => 'publish',
            'menu_order'   => $quote['order'],
        ) );
        if ( $post_id && ! is_wp_error( $post_id ) ) {
            update_post_meta( $post_id, '_quote_role', $quote['role'] );
        }
    }
}
