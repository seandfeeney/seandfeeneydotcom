<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage seandfeeney
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>

<!-- Conditional class for older versions of IE -->
<!--[if lte IE 10 & !IEMobile]><html class="ie" lang="en"><![endif]-->
<!--[if gt IE 8 | IEMobile]><!--><html lang="en"><!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			
			
			
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</a>

		<div id="titlecont">
				
				<script>
					$(document).ready(function(){
  						$("#me").hover(function(){
    						$("#myemail").hide();
    						$("#myemail1").show();
						},
							function(){ 
        						$("#myemail1").hide();
        						$("#myemail").show();
        						
    						});
					});
					
					$(document).ready(function(){
  						$("#website").hover(function(){
    						$("#myemail").hide();
    						$("#myemail2").show();
						},
							function(){ 
        						$("#myemail2").hide();
        						$("#myemail").show();
        						
    						});
					});
					
							$(document).ready(function(){
  						$("#twitter a").hover(function(){
    						$("#myemail").hide();
    						$("#myemail3").show();
						},
							function(){ 
        						$("#myemail3").hide();
        						$("#myemail").show();
        						
    						});
					});
					
					$(document).ready(function(){
  						$("#email a").hover(function(){
    						$("#myemail").hide();
    						$("#myemail4").show();
						},
							function(){ 
        						$("#myemail4").hide();
        						$("#myemail").show();
        						
    						});
					});
				</script><div id="topwrap">
				<div id="me"><a href="<?php bloginfo( 'url' ); ?>/portfolio">me </a></div> 
				<div id="website"><a href="<?php bloginfo( 'url' ); ?>">website </a></div> </div> 
				<span id="myemail">sean@seandfeeney.com</span>
				<span id="myemail1"><span id="span1">sean</span>@seandfeeney.com</span>				
				<span id="myemail2">sean@<span id="span2">seandfeeney.com</span></span>
				<span id="myemail3">sean<span id="span3">@seandfeeney</span>.com</span>
				<span id="myemail4"><span id="span4">sean@seandfeeney.com</span></span>
				<div id="twitter"><a href="http://twitter.com/seandfeeney">twitter</a></div>				
				<div id="email"><a href="mailto:sean@seandfeeney.com">email</a></div>
			</div>
				<!--<div id="topwrap">
				<div id="me"><a href="<?php bloginfo( 'url' ); ?>/portfolio">me <div class="rotateR90" id="mebracket">{</div></a></div> 
				<div id="website"><a href="<?php bloginfo( 'url' ); ?>">website <div class="rotateR90" id="websitebracket">{</div></a></div> </div>
				<span id="myemail">sean@seandfeeney.com</span>
				<span id="myemail1"><span id="span1">sean</span>@seandfeeney.com</span>				
				<span id="myemail2">sean@<span id="span2">seandfeeney.com</span></span>
				<span id="myemail3">sean<span id="span3">@seandfeeney</span>.com</span>
				<span id="myemail4"><span id="span4">sean@seandfeeney.com</span></span>
				<div id="twitter"><a href="http://twitter.com/seandfeeney"><div class="rotateR90" id="twitterbracket">}</div>twitter</a></div>				
				<div id="email"><a href="mailto:sean@seandfeeney.com"><div class="rotateR90" id="emailbracket">}</div>email</a></div>
			</div>	-->
			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<h3 class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></h3>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<div id="main" class="site-main">