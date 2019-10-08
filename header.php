<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

		<!-- JQUERY -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/thirds/jquery-3.4.1/jquery.min.js"></script>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/thirds/bootstrap-4.1.3/css/bootstrap.min.css" />

		<!-- ANIMATE -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/thirds/animate/css/animate.css" />

		<!-- SCROLLIFY		 -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/thirds/scrollify/jquery.scrollify.js" type="text/javascript" charset="utf-8"></script>

		<!-- FONT AWESOME -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/thirds/font-awesome-4.7.0/css/font-awesome.min.css">

		<!-- SLICK SLIDER -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/thirds/slick-1.8.1/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/thirds/slick-1.8.1/slick-theme.css"/>

    <!-- CUSTOM STYLESHEETS **************************************************** -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/screen.css" />

		<script>
      // conditionizr.com
      // configure environment tests
      conditionizr.config({
          assets: '<?php echo get_template_directory_uri(); ?>',
          tests: {}
      });
    </script>

		<script>
			$(function() {
				$.scrollify({
					section : ".scrollifyAnim",
					offset : 0,
    				setHeights: false
				});
			});
		</script>

	</head>
	<body <?php body_class(); ?>>

  	<header>
  		<nav class="navbar navbar-expand-lg fixed-top">
  		  <div class="container">

  		    <a class="navbar-brand" href="/">
            <img src="" alt="">
          </a>
  		    <div class="navbar-side-content">
            <a class="btn text-right contact-btn tab1BG text-light d-lg-none" href="/contact">CONTACT</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
  		    </div>

          <div class="collapse navbar-collapse" id="navbarContent">

            <?php html5blank_nav(); ?>

          </div>
  		  </div>
  		</nav>
  	</header>
