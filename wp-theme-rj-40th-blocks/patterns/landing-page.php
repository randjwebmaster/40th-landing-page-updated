<?php
/**
 * Title: R&J 40th Anniversary Landing Page
 * Slug: rj-40th-blocks/landing-page
 * Categories: rj-40th
 * Description: Full landing page content — hero, dateline, stats, era cards, era-scroll, founder quotes, and closing CTA. Every field is editable in the block editor.
 */

$img_dir = esc_url( get_template_directory_uri() . '/assets/images' );
?>
<!-- wp:group {"className":"page-hero","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero">

	<!-- wp:group {"className":"hero-copy","layout":{"type":"default"}} -->
	<div class="wp-block-group hero-copy">

		<!-- wp:paragraph {"className":"eyebrow"} -->
		<p class="eyebrow"><span class="dot">●</span> 1986&ndash;2026</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"className":"hero-heading"} -->
		<h1 class="wp-block-heading hero-heading">Forty years of communications built to last.</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"lede"} -->
		<p class="lede">Since 1986, R&amp;J Strategic Communications has helped clients say the right thing at the right time, through six eras of change and one steady commitment to the people we serve.</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"logo-card","layout":{"type":"default"}} -->
	<div class="wp-block-group logo-card">
		<!-- wp:group {"className":"logo-stack","layout":{"type":"default"}} -->
		<div class="wp-block-group logo-stack">

			<!-- wp:image {"className":"logo-mark","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full logo-mark"><img src="<?php echo $img_dir; ?>/rj-mark.png" alt="R&amp;J Strategic Communications, 40th anniversary, 1986 to 2026"/></figure>
			<!-- /wp:image -->

			<!-- wp:image {"className":"logo-tagline","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full logo-tagline"><img src="<?php echo $img_dir; ?>/rj-tagline.png" alt=""/></figure>
			<!-- /wp:image -->

		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"dateline","layout":{"type":"default"}} -->
<div class="wp-block-group dateline">
	<!-- wp:paragraph -->
	<p><span class="lime"></span>Anniversary Edition &middot; Vol. 40</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"className":"center","align":"center"} -->
	<p class="center has-text-align-center">R&amp;J Strategic Communications</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"right"} -->
	<p class="has-text-align-right">Somerville, NJ</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"s-cream","layout":{"type":"default"}} -->
<div class="wp-block-group s-cream">
	<!-- wp:group {"className":"s-inner","layout":{"type":"default"}} -->
	<div class="wp-block-group s-inner">

		<!-- wp:columns {"className":"stats-grid","style":{"spacing":{"blockGap":{"left":"1px"}}}} -->
		<div class="wp-block-columns stats-grid">

			<!-- wp:column {"className":"stat-cell"} -->
			<div class="wp-block-column stat-cell">
				<!-- wp:heading {"level":3,"className":"num"} -->
				<h3 class="wp-block-heading num">40</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"label"} -->
				<p class="label">Years of growth, reinvention, and trusted communications counsel &mdash; 1986&ndash;2026.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"stat-cell"} -->
			<div class="wp-block-column stat-cell">
				<!-- wp:heading {"level":3,"className":"num"} -->
				<h3 class="wp-block-heading num">3</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"label"} -->
				<p class="label">Founders &mdash; John Lonsdorf, Bob Gagauf, Bob Wille &mdash; opened the doors in Livingston, NJ.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"stat-cell"} -->
			<div class="wp-block-column stat-cell">
				<!-- wp:heading {"level":3,"className":"num"} -->
				<h3 class="wp-block-heading num">6</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"label"} -->
				<p class="label">Distinct eras, each defined by the communications forces of its time.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"stat-cell"} -->
			<div class="wp-block-column stat-cell">
				<!-- wp:heading {"level":3,"className":"num"} -->
				<h3 class="wp-block-heading num">4</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"label"} -->
				<p class="label">Sectors served today: commercial real estate, healthcare, human services, and non-profit.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"s-cream no-top","layout":{"type":"default"}} -->
<div class="wp-block-group s-cream no-top">
	<!-- wp:group {"className":"s-inner","layout":{"type":"default"}} -->
	<div class="wp-block-group s-inner">

		<!-- wp:group {"className":"section-head","layout":{"type":"default"}} -->
		<div class="wp-block-group section-head">
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">Moments That Made <em>a Difference.</em></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>To mark forty years, we&#8217;re walking through the six distinct eras of the agency&#8217;s history &mdash; each defined by the communications forces of its time, told through the perspectives of founders, leadership, clients, and team.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"className":"era-grid-row"} -->
		<div class="wp-block-columns era-grid-row">

			<!-- wp:column {"className":"era-card"} -->
			<div class="wp-block-column era-card">
				<!-- wp:paragraph {"className":"era-num"} -->
				<p class="era-num">&mdash; Era 01</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"era-years"} -->
				<p class="era-years">1986&ndash;92</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">The Founders Era</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Building the agency and earning trust the old-fashioned way &mdash; entrepreneurial grit, founding relationships, traditional advertising and PR built on reputation and results.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"era-card"} -->
			<div class="wp-block-column era-card">
				<!-- wp:paragraph {"className":"era-num"} -->
				<p class="era-num">&mdash; Era 02</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"era-years"} -->
				<p class="era-years">1993&ndash;99</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Expansion &amp; Specialization</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Healthcare, technology, and the early internet reshape the agency. The web emerges, the healthcare practice begins, and major AOR relationships take hold.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"era-card"} -->
			<div class="wp-block-column era-card">
				<!-- wp:paragraph {"className":"era-num"} -->
				<p class="era-num">&mdash; Era 03</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"era-years"} -->
				<p class="era-years">2000&ndash;04</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Digital Disruption &amp; Reinvention</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>PR becomes strategic. Search, blogs, and online media change how audiences get information. R&amp;J Group emerges; the photo &amp; imaging practice expands; the business model resets.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"className":"era-grid-row"} -->
		<div class="wp-block-columns era-grid-row">

			<!-- wp:column {"className":"era-card"} -->
			<div class="wp-block-column era-card">
				<!-- wp:paragraph {"className":"era-num"} -->
				<p class="era-num">&mdash; Era 04</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"era-years"} -->
				<p class="era-years">2005&ndash;12</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">The Strategic PR Era</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Lonsdorf &amp; Marioni open R&amp;J Public Relations. Tiffany Miller joins in 2006. Crisis comms, healthcare advocacy, and early social media become central to the work.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"era-card"} -->
			<div class="wp-block-column era-card">
				<!-- wp:paragraph {"className":"era-num"} -->
				<p class="era-num">&mdash; Era 05</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"era-years"} -->
				<p class="era-years">2013&ndash;19</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Integrated Growth</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Fifth Room Creative joins, the agency rebrands to R&amp;J Strategic Communications, RWJBH expands as a flagship client, and a new generation of leadership steps up.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"era-card"} -->
			<div class="wp-block-column era-card">
				<!-- wp:paragraph {"className":"era-num"} -->
				<p class="era-num">&mdash; Era 06</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"era-years"} -->
				<p class="era-years">2020&ndash;26</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">The Modern Era</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>COVID, remote work, platform fragmentation, the rise of generative AI &mdash; and a leadership transition that keeps the founding mindset moving forward.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<section class="era-scroll">
	<div class="es-intro">
		<p class="eyebrow"><span class="dot">●</span> Walk the timeline</p>
		<h2>Six eras, <em>up close.</em></h2>
		<p>Scroll through four decades &mdash; one era at a time. Each chapter reshaped how we work, and who we work for.</p>
		<div class="es-hint">Scroll to begin</div>
	</div>

	<article class="era-panel" data-era="01">
		<div class="ghost"><span>01</span></div>
		<div class="es-wrap">
			<div class="content">
				<div class="e-num reveal">Era 01</div>
				<div class="e-years reveal">1986&ndash;92</div>
				<h3 class="reveal">The Founders Era</h3>
				<p class="desc reveal">Building the agency and earning trust the old-fashioned way &mdash; entrepreneurial grit, founding relationships, traditional advertising and PR built on reputation and results.</p>
			</div>
		</div>
	</article>

	<article class="era-panel" data-era="02">
		<div class="ghost"><span>02</span></div>
		<div class="es-wrap">
			<div class="content">
				<div class="e-num reveal">Era 02</div>
				<div class="e-years reveal">1993&ndash;99</div>
				<h3 class="reveal">Expansion &amp; Specialization</h3>
				<p class="desc reveal">Healthcare, technology, and the early internet reshape the agency. The web emerges, the healthcare practice begins, and major AOR relationships take hold.</p>
			</div>
		</div>
	</article>

	<article class="era-panel" data-era="03">
		<div class="ghost"><span>03</span></div>
		<div class="es-wrap">
			<div class="content">
				<div class="e-num reveal">Era 03</div>
				<div class="e-years reveal">2000&ndash;04</div>
				<h3 class="reveal">Digital Disruption &amp; Reinvention</h3>
				<p class="desc reveal">PR becomes strategic. Search, blogs, and online media change how audiences get information. R&amp;J Group emerges; the photo &amp; imaging practice expands; the business model resets.</p>
			</div>
		</div>
	</article>

	<article class="era-panel" data-era="04">
		<div class="ghost"><span>04</span></div>
		<div class="es-wrap">
			<div class="content">
				<div class="e-num reveal">Era 04</div>
				<div class="e-years reveal">2005&ndash;12</div>
				<h3 class="reveal">The Strategic PR Era</h3>
				<p class="desc reveal">Lonsdorf &amp; Marioni open R&amp;J Public Relations. Tiffany Miller joins in 2006. Crisis comms, healthcare advocacy, and early social media become central to the work.</p>
			</div>
		</div>
	</article>

	<article class="era-panel" data-era="05">
		<div class="ghost"><span>05</span></div>
		<div class="es-wrap">
			<div class="content">
				<div class="e-num reveal">Era 05</div>
				<div class="e-years reveal">2013&ndash;19</div>
				<h3 class="reveal">Integrated Growth</h3>
				<p class="desc reveal">Fifth Room Creative joins, the agency rebrands to R&amp;J Strategic Communications, RWJBH expands as a flagship client, and a new generation of leadership steps up.</p>
			</div>
		</div>
	</article>

	<article class="era-panel" data-era="06">
		<div class="ghost"><span>06</span></div>
		<div class="es-wrap">
			<div class="content">
				<div class="e-num reveal">Era 06</div>
				<div class="e-years reveal">2020&ndash;26</div>
				<h3 class="reveal">The Modern Era</h3>
				<p class="desc reveal">COVID, remote work, platform fragmentation, the rise of generative AI &mdash; and a leadership transition that keeps the founding mindset moving forward.</p>
			</div>
		</div>
	</article>

	<nav class="era-rail" aria-label="Era navigation">
		<button type="button" data-i="0"><span class="lab">Founders</span><span class="tick"></span></button>
		<button type="button" data-i="1"><span class="lab">Expansion</span><span class="tick"></span></button>
		<button type="button" data-i="2"><span class="lab">Disruption</span><span class="tick"></span></button>
		<button type="button" data-i="3"><span class="lab">Strategic PR</span><span class="tick"></span></button>
		<button type="button" data-i="4"><span class="lab">Integrated</span><span class="tick"></span></button>
		<button type="button" data-i="5"><span class="lab">Modern</span><span class="tick"></span></button>
	</nav>
</section>
<!-- /wp:html -->

<!-- wp:group {"className":"s-cream no-top","layout":{"type":"default"}} -->
<div class="wp-block-group s-cream no-top">
	<!-- wp:group {"className":"s-inner","layout":{"type":"default"}} -->
	<div class="wp-block-group s-inner">

		<!-- wp:group {"className":"section-head single","layout":{"type":"default"}} -->
		<div class="wp-block-group section-head single">
			<!-- wp:heading {"level":2,"className":"quotes-heading"} -->
			<h2 class="wp-block-heading quotes-heading">In their <em>own words.</em></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"founder-quote","layout":{"type":"default"}} -->
		<div class="wp-block-group founder-quote">
			<!-- wp:paragraph {"className":"who"} -->
			<p class="who">Founder<strong>John Lonsdorf</strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:quote -->
			<blockquote class="wp-block-quote"><p>From the beginning, we built this agency around one idea: help clients communicate in a way that actually connects with people. The tools and platforms have changed more than we ever could have imagined in 1986, but that principle has stayed the same. What makes me most proud is not just the work we&#8217;ve done, but the team that has carried that mindset forward and continues to adapt as the industry evolves.</p></blockquote>
			<!-- /wp:quote -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"founder-quote","layout":{"type":"default"}} -->
		<div class="wp-block-group founder-quote">
			<!-- wp:paragraph {"className":"who"} -->
			<p class="who">President &amp; Partner<strong>Scott Marioni</strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:quote -->
			<blockquote class="wp-block-quote"><p>Every major shift in communications has forced us to rethink how we help our clients reach and engage the audiences that matter most to them. From the rise of search and social to today&#8217;s AI-driven landscape, we have made a conscious decision to evolve with purpose, not react to change. That mindset has allowed us to grow alongside our clients and position them for what&#8217;s next, not just what&#8217;s now.</p></blockquote>
			<!-- /wp:quote -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"founder-quote","layout":{"type":"default"}} -->
		<div class="wp-block-group founder-quote">
			<!-- wp:paragraph {"className":"who"} -->
			<p class="who">EVP &amp; Partner<strong>Tiffany Miller</strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:quote -->
			<blockquote class="wp-block-quote"><p>Reaching this milestone is a reflection of the relationships that have shaped this organization &mdash; from our clients and partners to the team members who bring our work to life every day. We are grateful for the trust that has allowed us to grow over the past 40 years. As we look ahead, our responsibility is to build on that foundation, lead with purpose, and continue making a difference for our clients, our team, and the communities we serve.</p></blockquote>
			<!-- /wp:quote -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"cta-cream","layout":{"type":"default"}} -->
<div class="wp-block-group cta-cream">
	<!-- wp:group {"className":"inner","layout":{"type":"default"}} -->
	<div class="wp-block-group inner">

		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">Here&#8217;s to the <em>next</em> forty.</h2>
		<!-- /wp:heading -->

		<!-- wp:buttons {"className":"actions"} -->
		<div class="wp-block-buttons actions">
			<!-- wp:button {"className":"btn-primary btn-arrow"} -->
			<div class="wp-block-button btn-primary btn-arrow"><a class="wp-block-button__link wp-element-button" href="mailto:info@randjsc.com">Start a project</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"btn-ghost btn-arrow"} -->
			<div class="wp-block-button btn-ghost btn-arrow"><a class="wp-block-button__link wp-element-button" href="/">See the work</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
