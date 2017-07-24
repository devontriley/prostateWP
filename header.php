<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<script src="https://use.fontawesome.com/0dbaf3b830.js"></script>
	
	<?php wp_head(); ?>

	<script>
	/*
  conditionizr.config({
      assets: '<?php echo get_template_directory_uri(); ?>',
      tests: {}
  });
	*/
  </script>

</head>

<body <?php body_class(); ?>>

	<div id="paneWrapper" data-active-color="blue">

		<div id="mainMenuContainer">
				<div id="mainMenu">
						<ul class="top">
							<li class="closeMenu"><a href="#"><i class="fa fa-close"></i></a></li>
								<li>
									<a href="#"><span>Your Prostate Health</span></a>
										<ul>
											<li><a href="#" data-target-group="1" data-target-num="1">What is Prostate Cancer?</a></li>
												<li><a href="#" data-target-group="1" data-target-num="2">How common is prostate cancer?</a></li>
												<li><a href="#" data-target-group="1" data-target-num="3">Fast and slow-growing cancers</a></li>
												<li><a href="#" data-target-group="1" data-target-num="4">Prostate cancer symptoms</a></li>
										</ul>
								</li>
								<li>
									<a href="#"><span>PSA Test Pros & Cons</span></a>
										<ul>
											<li><a href="#" data-target-group="2" data-target-num="1">About the PSA Test</a></li>
												<li><a href="#" data-target-group="2" data-target-num="2">What doctors think</a></li>
												<li><a href="#" data-target-group="2" data-target-num="3">Blood Test Risks</a></li>
										</ul>
								</li>
								<li>
									<a href="#" data-target-group="3" data-target-num="1"><span>Facts & Numbers</span></a>
										<ul>
											<li><a href="#" data-target-group="3" data-target-num="1">Risks</a></li>
												<li><a href="#" data-target-group="3" data-target-num="2">Unclear answers</a></li>
												<li><a href="#" data-target-group="3" data-target-num="3">What increases your risk?</a></li>
										</ul>
								</li>
								<li>
									<a href="#" data-target-group="4" data-target-num="1"><span>Questions to Consider</span></a>
										<ul>
											<li><a href="#" data-target-group="4" data-target-num="1">Do you need the PSA test?</a></li>
												<li><a href="#" data-target-group="4" data-target-num="2">Question 1</a></li>
												<li><a href="#" data-target-group="4" data-target-num="3">Question 2</a></li>
												<li><a href="#" data-target-group="4" data-target-num="4">Question 3</a></li>
												<li><a href="#" data-target-group="4" data-target-num="5">Question 4</a></li>
												<li><a href="#" data-target-group="4" data-target-num="6">Question 5</a></li>
												<li><a href="#" data-target-group="4" data-target-num="7">View all questions</a></li>
										</ul>
								</li>
								<li>
									<a href="#" data-target-group="5" data-target-num="1"><span>Make Your Decision</span></a>
										<ul>
											<li><a href="#" data-target-group="5" data-target-num="1">Real stories</a></li>
												<li><a href="#" data-target-group="5" data-target-num="2">Questions to ask your doctor</a></li>
										</ul>
								</li>
						</ul><!-- #mainNav -->
				</div><!-- #mainMenu -->
		</div><!-- .mainMenuContainer -->

    <div id="massgov">
        <a href="http://www.mass.gov/eohhs/gov/departments/dph/programs/community-health/cancer-prev-and-control/prostate-cancer-and-shared-decision-making.html" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/massgov.png" /></a>
				<ul>
					<li class="home"><a href="#" data-target-group="0" data-target-num="1"><i class="fa fa-home"></i>Home</a></li>
	      	<li class="menu"><a href="#"><i class="fa fa-bars"></i>Menu</a></li>
				</ul>
    </div>

		<header id="main-header">
	    <div id="logo">
	    	<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" />
	    	<span><strong>Men:</strong> You have a choice to make about your prostate health.</span>
	    </div>

	    <div class="intro">
	    	<p>The PSA blood test <em>may</em> help find prostate cancer, but it's not a test every man should get. Find out why.</p>
	      <p><strong>Get the facts to help you talk with your doctor and make the right choice for you.</strong></p>
	    </div>
    </header>

		<ul id="main-nav">
				<li><a href="#" data-target-group="1" data-target-num="1"><span>Your Prostate Health</span></a></li>
				<li><a href="#" data-target-group="2" data-target-num="1"><span>PSA Test Pros & Cons</span></a></li>
				<li><a href="#" data-target-group="3" data-target-num="1"><span>Facts & Numbers</span></a></li>
				<li><a href="#" data-target-group="4" data-target-num="1"><span>Questions to Consider</span></a></li>
				<li><a href="#" data-target-group="5" data-target-num="1"><span>Make Your Decision</span></a></li>
		</ul><!-- #mainNav -->

		<!--
		<div class="footerNotice">
			<span>The development of this publication was supported by the Centers for Disease Control and Prevention (CDC) Cooperative Agreement Number U58DP003920-03.</span>
		</div>
		-->
