<?php
/* Template Name: MailChimp RSS */
header('Content-Type: '.feed_content_type('rss-http').'; charset='.get_option('blog_charset'), true);
?><?xml version="1.0" encoding="UTF-8"?><rss version="2.0"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:atom="http://www.w3.org/2005/Atom"
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
	xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
	>

<channel>
    <title><?php bloginfo_rss('name'); wp_title_rss(); ?> - Article Feed</title>
	<atom:link href="<?php self_link(); ?>" rel="self" type="application/rss+xml" />
	<link>http://provider.healthalliance.org</link>
	<description></description>
	<lastBuildDate><?php echo mysql2date('D, d M Y H:i:s +0000', get_lastpostmodified('GMT'), false); ?></lastBuildDate>
	<language>en-US</language>
	<sy:updatePeriod>hourly</sy:updatePeriod>
	<sy:updateFrequency>1</sy:updateFrequency>
       
<?php global $wp_query; $wp_query = new WP_Query( array('post_type' => $_GET['p'], 'tag' => 'email', 'nopaging' => true) ); ?>
<?php if ( $wp_query->have_posts() ) : ?>
<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

	<item>
		<title><?php the_title_rss(); ?></title>
		<link><?php the_permalink_rss(); ?></link>
		<comments><?php comments_link(); ?></comments>
		<pubDate><?php echo mysql2date('D, d M Y H:i:s +0000', get_post_time('Y-m-d H:i:s', true), false); ?></pubDate>
		<category><![CDATA[email]]></category>
		<dc:creator><?php the_author(); ?></dc:creator>
		<guid isPermaLink="false"><?php the_guid(); ?></guid>
		<description><![CDATA[<?php the_excerpt_rss() ?>]]></description>
		<content:encoded><![CDATA[<?php the_content() ?>]]></content:encoded>
	</item>
	
<?php endwhile; endif; ?>

</channel>
</rss>