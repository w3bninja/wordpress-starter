<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<title>Home Page</title>
	<script type="text/javascript">var jslang='EN';</script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.ico" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link href="<?php bloginfo( 'template_url' ); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="nav-mobile cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left">
  <div class="search">
    <form name="catsearchform11819" method="post" action="/Default.aspx?SiteSearchID=3896&amp;PageID=16462607">
      <div class="input-group">
        <input class="form-control" type="text" name="CAT_Search" id="CAT_Search" placeholder="Search">
        <span class="input-group-addon">
        <input type="submit" value="">
        <i class="fa fa-search"></i></span> </div>
    </form>
  </div>
  <div class="nav-mobile">
    <ul class="nav-accordion">
      <li><a href="/">Home</a>
        <ul data-content>
        </ul>
      </li>
      <li><a href="">Components</a>
        <ul data-content>
          <li><a href="/pages/sidebars">Sidebars</a>
            <ul data-content>
            </ul>
          </li>
          <li><a href="/pages/headers">Banners &amp; Headers</a>
            <ul data-content>
            </ul>
          </li>
          <li><a href="/pages/tabs">Tabs &amp; Accordions</a>
            <ul data-content>
            </ul>
          </li>
          <li><a href="/pages/popups">Popups</a>
            <ul data-content>
            </ul>
          </li>
          <li><a href="/pages/search">Site Search</a>
            <ul data-content>
            </ul>
          </li>
          <li><a href="/pages/menus">Menus &amp; Navigation</a>
            <ul data-content>
              <li><a href="">Sub Item 1</a>
                <ul data-content>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="/pages/social-share">Social Share</a>
            <ul data-content>
            </ul>
          </li>
          <li><a href="/pages/maps">Maps</a>
            <ul data-content>
              <li><a href="/pages/maps/directions">Directions</a>
                <ul data-content>
                </ul>
              </li>
              <li><a href="/pages/maps/multiple-pins">Multiple Pins</a>
                <ul data-content>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="">Layouts</a>
        <ul data-content>
          <li><a href="">Modules</a>
            <ul data-content>
              <li><a href="/blogs">Blog</a>
                <ul data-content>
                </ul>
              </li>
              <li><a href="/pages/faqs">FAQs</a>
                <ul data-content>
                </ul>
              </li>
              <li><a href="/pages/gallery">Photo Galleries</a>
                <ul data-content>
                </ul>
              </li>
              <li><a href="/pages/comments">Comments</a>
                <ul data-content>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="">WebApps</a>
            <ul data-content>
              <li><a href="/pages/bios">Bios</a>
                <ul data-content>
                </ul>
              </li>
              <li><a href="">Data Manipulation</a>
                <ul data-content>
                  <li><a href="/pages/filtering">Filtering</a>
                    <ul data-content>
                    </ul>
                  </li>
                  <li><a href="/pages/grouping">Grouping</a>
                    <ul data-content>
                    </ul>
                  </li>
                  <li><a href="/pages/directory">Directory</a>
                    <ul data-content>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="/pages/location-finder">Location Finder</a>
                <ul data-content>
                </ul>
              </li>
              <li><a href="/pages/careers">Careers/Jobs</a>
                <ul data-content>
                </ul>
              </li>
              <li><a href="/pages/product-service">Product/Service</a>
                <ul data-content>
                </ul>
              </li>
              <li><a href="/pages/calendar">Events/Calendar</a>
                <ul data-content>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="">Pages</a>
            <ul data-content>
              <li><a href="/pages/contact">Contact</a>
                <ul data-content>
                </ul>
              </li>
              <li><a href="/pages/landing-page">Landing Page</a>
                <ul data-content>
                </ul>
              </li>
              <li><a href="/pages/about">About</a>
                <ul data-content>
                </ul>
              </li>
              <li><a href="/404">404</a>
                <ul data-content>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="/pages/style-guide">Style Guide</a>
        <ul data-content>
        </ul>
      </li>
      <li><a href="/pages/store">Store</a>
        <ul data-content>
        </ul>
      </li>
    </ul>
  </div>
</div>
<div class="bg">
  <div class="header">
    <div class="header-top">
      <div class="clearfix">
        <div class="pull-right hidden-xs text-right">
          <div class="pull-left mini-nav">
            <div class="phone pull-left">nav</div>
            <div class="pull-left"> <a href="#login" class="signin-box btn btn-primary">Login</a>  
            </div>
          </div>
          <div class="pull-right">
            <div class="search">
              <div class="site-search">
                <form name="seach" method="GET" action="/search">
                  <div class="input-group">
                    <input class="form-control site-search" type="text" name="CAT_Search" id="CAT_Search" placeholder="Search">
                    <span class="input-group-addon">
                    <input type="submit" value="">
                    <i class="fa fa-search"></i> </span> </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-bottom sticky">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-3">
            <div class="row">
            	<div class="col-xs-2 hidden-sm hidden-md hidden-lg">
            		<div class="mobile-navigation pull-left"> <a class="nav-mobile-control btn btn-primary toggle-menu menu-left push-body"><i class="fa fa-bars"></i></a> </div>
            	</div>
            	<div class="col-xs-8 col-sm-12">
            		<div class="logo">
					  <h1 title="Company Name"> <a href="/" title="Company Name"> <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/logo.png" class="img-responsive"> </a> </h1>
					</div>
            	</div>
            	<div class="col-xs-2 hidden-sm hidden-md hidden-lg">
            		<a href="tel:(800) 401–4277" class="btn btn-primary pull-right"><i class="fa fa-phone"></i></a>
            	</div>
            </div>
            
            
          </div>
          <div class="col-xs-7 col-sm-9 hidden-xs">
            <div class="row">
              <div class="col-sm-12">
                
                <div class="navigation col-md-12">
                  <div class="navigation-inner main-nav clearfix">
                    <div id="Menu">
                      <ul id="MenuList" class="nav nav-pills nav-justified">
                        <li  ><a href="/">Home</a></li>
                        <li  ><a href="">Components</a>
                          <ul id="MenuList" class="nav nav-pills nav-justified">
                            <li  ><a href="/pages/sidebars">Sidebars</a></li>
                            <li  ><a href="/pages/headers">Banners &amp; Headers</a></li>
                            <li  ><a href="/pages/tabs">Tabs &amp; Accordions</a></li>
                            <li  ><a href="/pages/popups">Popups</a></li>
                            <li  ><a href="/pages/search">Site Search</a></li>
                            <li  ><a href="/pages/menus">Menus &amp; Navigation</a>
                              <ul id="MenuList" class="nav nav-pills nav-justified">
                                <li  ><a href="">Sub Item 1</a></li>
                              </ul>
                            </li>
                            <li  ><a href="/pages/social-share">Social Share</a></li>
                            <li  ><a href="/pages/maps">Maps</a>
                              <ul id="MenuList" class="nav nav-pills nav-justified">
                                <li  ><a href="/pages/maps/directions">Directions</a></li>
                                <li  ><a href="/pages/maps/multiple-pins">Multiple Pins</a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li  ><a href="">Layouts</a>
                          <ul id="MenuList" class="nav nav-pills nav-justified">
                            <li  ><a href="">Modules</a>
                              <ul id="MenuList" class="nav nav-pills nav-justified">
                                <li  ><a href="/blogs">Blog</a></li>
                                <li  ><a href="/pages/faqs">FAQs</a></li>
                                <li  ><a href="/pages/gallery">Photo Galleries</a></li>
                                <li  ><a href="/pages/comments">Comments</a></li>
                              </ul>
                            </li>
                            <li  ><a href="">WebApps</a>
                              <ul id="MenuList" class="nav nav-pills nav-justified">
                                <li  ><a href="/pages/bios">Bios</a></li>
                                <li  ><a href="">Data Manipulation</a>
                                  <ul id="MenuList" class="nav nav-pills nav-justified">
                                    <li  ><a href="/pages/filtering">Filtering</a></li>
                                    <li  ><a href="/pages/grouping">Grouping</a></li>
                                    <li  ><a href="/pages/directory">Directory</a></li>
                                  </ul>
                                </li>
                                <li  ><a href="/pages/location-finder">Location Finder</a></li>
                                <li  ><a href="/pages/careers">Careers/Jobs</a></li>
                                <li  ><a href="/pages/product-service">Product/Service</a></li>
                                <li  ><a href="/pages/calendar">Events/Calendar</a></li>
                              </ul>
                            </li>
                            <li  ><a href="">Pages</a>
                              <ul id="MenuList" class="nav nav-pills nav-justified">
                                <li  ><a href="/pages/contact">Contact</a></li>
                                <li  ><a href="/pages/landing-page">Landing Page</a></li>
                                <li  ><a href="/pages/about">About</a></li>
                                <li  ><a href="/404">404</a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li  ><a href="/pages/style-guide">Style Guide</a></li>
                        <li  ><a href="/pages/store">Store</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="banner">
    <div class="banner-inner">
      <div class="cycle-slideshow" data-cycle-fx="fadeout" data-cycle-log="true" data-cycle-timeout="5000" data-cycle-pause-on-hover="true" data-cycle-slides="> div" data-cycle-pager="#pager" data-cycle-pager-template="<a href='#' class='slide{{slideNum}}'> {{slideNum}} </a>" data-cycle-prev="#prev" data-cycle-next="#next" data-cycle-log="false" data-cycle-auto-height="container">
      <div class="slide" id="slide1" style="background:url(<?php bloginfo( 'template_url' ); ?>/stock-photos/photo-1437651025703-2858c944e3eb.jpg) no-repeat top center; background-size:cover;">
        <div class="slide-overlay"></div>
        <div class="slide-inner">
          <div class="container">
            <div class="col-md-7">
              <h3>home banner 2<span>test</span></h3>
              <div class="text">
                <p>text goes here</p>
                <a href="amazon.com" class="btn btn-primary btn-lg"> Read More </a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slide" id="slide2" style="background:url(<?php bloginfo( 'template_url' ); ?>/stock-photos/photo-1441154283565-f88df169765a.jpg) no-repeat top center; background-size:cover;">
      	<div class="slide-overlay"></div>
        <div class="slide-inner">
          <div class="container">
            <div class="col-md-7">
              <h3>This is a test Banner<span>Some text</span></h3>
              <div class="text">
                <p>Other things go here</p>
                <a href="google.com" class="btn btn-primary btn-lg"> Read More </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="pager" class="pager controls"></div>
  <div class="pager-arrows"> <a href="#" class="prev" id="prev"><i class="fa fa-angle-left"></i></a> <a href="#" class="next" id="next"><i class="fa fa-angle-right"></i></a> </div>
</div>
<div class="content-inner container">
	<div class="content">


<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starter' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'starter' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
