<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Homestate &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FREEHTML5.CO

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
    <?php wp_head();?>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body <?php body_class(); ?>>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<?php if(has_custom_logo()){
						the_custom_logo();
					}else{?>
						<h1 id="fh5co-logo"><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>

					<?} ?>

					<?php if (function_exists('quads_ad'))
			              echo quads_ad( array('location' => 'udemy_header') );
			         ?>
					 <?php if(get_theme_mod('ju_header_show_search_setting') == 'yes'){
						 ?>
							 <div class="raw" >
								 <div class="col-md-4" id="top-search"">
									  <?php  get_search_form() ?>
								 </div>
							  </div>
						 <?
					 } ?>


					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
                        <?php
                            if(has_nav_menu('primary')){
                                wp_nav_menu( [
                                	'theme_location'  => 'primary',
                                	'menu'            => '',
                                	'container'       => false,
                                	'container_class' => '',
                                	'container_id'    => '',
                                	'menu_class'      => 'sf-menu',
                                	'menu_id'         => 'fh5co-primary-menu',
                                	'echo'            => true,
                                	'fallback_cb'     => 'wp_page_menu',
                                	'before'          => '',
                                	'after'           => '',
                                	'link_before'     => '',
                                	'link_after'      => '',
                                	// 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                	'depth'           => 2,
                                	'walker'          => '',
                                ] );
                            }
                         ?>
						<!-- <ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="index.html">Home</a></li>
							<li>
								<a href="properties.html" class="fh5co-sub-ddown">Properties</a>
								<ul class="fh5co-sub-menu">
									<li><a href="#">Family</a></li>
									<li><a href="#">CSS3 &amp; HTML5</a></li>
									<li><a href="#">Angular JS</a></li>
									<li><a href="#">Node JS</a></li>
									<li><a href="#">Django &amp; Python</a></li>
								</ul>
							</li>
							<li><a href="agent.html">Agent</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul> -->
					</nav>
				</div>
			</div>
		</header>
