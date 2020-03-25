<!DOCTYPE html>
<html>
<head itemscope itemtype="http://schema.org/WebSite">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->

<title>
<?php wp_title(''); ?>
<?php if(wp_title('', false)) { echo ' :'; } ?>
<?php bloginfo('name'); ?>
</title>

<link rel="stylesheet" href="/wp-content/themes/hapro/style.css'" />

<!-- Link RSS -->
<?php if(strpos($_SERVER[HTTP_HOST], "group.healthalliance.org") !== false){ ?>
<?php $gaCode = 'UA-92345360-1'?>
<link rel="alternate" type="application/rss+xml" title="Group Flashes" href="/feed/?post_type=flash" />
<link rel="alternate" type="application/rss+xml" title="Group Announcements" href="/feed/?post_type=announcement" /> 
<?php	} ?>

<?php if(strpos($_SERVER[HTTP_HOST], "provider.healthalliance.org") !== false){ ?>
<link rel="alternate" type="application/rss+xml" title="Coding Counts Posts" href="/feed/?post_type=coding-counts-post" />
<link rel="alternate" type="application/rss+xml" title="InforMED Posts" href="/feed/?post_type=informed-post" />
<link rel="alternate" type="application/rss+xml" title="Provider Announcements" href="/feed/?post_type=announcement" /> 
<?php	} ?>

<?php if(strpos($_SERVER[HTTP_HOST], "broker.healthalliance.org") !== false){ ?>
<link rel="alternate" type="application/rss+xml" title="Broker Flashes" href="/feed/?post_type=flash" />
<link rel="alternate" type="application/rss+xml" title="Broker Medicare Flashes" href="/feed/?post_type=medicare-flash" />
<link rel="alternate" type="application/rss+xml" title="Broker Announcements" href="/feed/?post_type=announcement" /> 
<?php	} ?>

<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="icon" href="//www.healthalliance.org/media/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="//www.healthalliance.org/favicon.ico" type="image/x-icon" sizes="16x16" />
<?php wp_head(); ?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NWP95X4');</script>
<!-- End Google Tag Manager -->

</head>
<body <?php body_class(); ?>>

<a href="#skip-nav" class="skip-nav" id="top">Skip Navigation</a> 
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NWP95X4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



<div class="page-container">
<!-- nav start -->
		<div class="slide-out">
			<div class="container">
				<i class="icon-align-center"></i>
					<ul id="15" class="menu">
						<li><a href="/">Home</a></li>
					</ul>
					<?php wp_nav_menu( array('menu' => 'main' ) ); ?>
			</div>
		</div>
		<div class="faded-layer"></div>
		<nav>
			<div class="wrapper">
				<div class="inner-container">
					<a href="/"><img alt="Health Alliance" src="https://www.healthalliance.org/images/logo-generic.png" height="90">
</a>
					<div class="right browser">
						<?php wp_nav_menu( array('menu' => 'main' ) ); ?>
						<?php if(strpos($_SERVER[HTTP_HOST], "news.healthalliance.org") === false){ ?>
						<a href="https://login.healthalliance.org/Account/Login"><button class="purple">Sign In</button></a>
						<?php	} ?>
					</div>
					<div class="right mobile">
						<i class="icon-align-right"></i>
					</div>
				</div>
			</div>
		</nav>
<!-- end nav -->

		<div class="wrapper main">
