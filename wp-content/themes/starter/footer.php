<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'starter' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'starter' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'starter' ), 'starter', '<a href="http://underscores.me/">Underscores.me</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

  </div>
</div>


<div class="footer">
  <div class="footer-top">
    <div class="container clearfix">
      	<div class="pull-left"> 
      		<div class="copyright">© 2016, <a href="/">Company Name</a> | <a href="http://envoc.com" target="_blank" title="Envoc is an award-winning, full-service digital agency with services ranging from custom software and mobile app development to web design and branding.">Website Design</a> by Envoc.</div>
		</div>
      
      <div class="nav-footer pull-right clearfix hidden-xs hidden-sm">
        <div class="navigation col-md-12 hidden-xs">
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
  <div class="footer-bottom">
  	<div class="container">
  	<div class="row">
		<div class="col-sm-4">
			<h5>Our Location</h5>
			<div class="contact-info">
				<address>
				12345 Address Blvd.<br>
				Baton Rouge, La. 70710
				</address>

				Call Us Today!<br>
				<h5>555-555-5555</h5>
				<hr>
				<div class="sm">
					<a href=""><i class="fa fa-facebook-square"></i></a>
					<a href=""><i class="fa fa-twitter-square"></i></a>
					<a href=""><i class="fa fa-youtube-square"></i></a>
					<a href=""><i class="fa fa-linkedin-square"></i></a>
					<a href=""><i class="fa fa-instagram"></i></a>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<h5>From the Blog</h5>
			<div class="blog-list">
				<article>
					<div class="date">09/25/2017</div>
					<a href="">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</a>
				</article>
				<article>
					<div class="date">09/25/2017</div>
					<a href="">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</a>
				</article>
				<article>
					<div class="date">09/25/2017</div>
					<a href="">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</a>
				</article>
			</div>
			<a href="" class="btn btn-primary">Read More</a>
		</div>
		<div class="col-sm-4">
			<h5>Contact Us</h5>
			<form class="contact-form">
				<div class="form-group">
					<input class="form-control" type="text" placeholder="Name">
				</div>
				<div class="form-group">
					<input class="form-control" type="text" placeholder="Phone">
				</div>
				<div class="form-group">
					<input class="form-control" type="text" placeholder="Email">
				</div>
				<input class="btn btn-primary" type="submit" value="Send">
			</form>
		</div>
	</div>
	</div>
  </div>
</div>

</div>
<a href="#" class="btn btn-default back-to-top"><i class="fa fa-chevron-up"></i></a>


<link href="<?php bloginfo( 'template_url' ); ?>/assets/css/styles.css" rel="stylesheet">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- ADD JPUSHMENU -->
<link href="<?php bloginfo( 'template_url' ); ?>/assets/css/jPushMenu.css" rel="stylesheet">
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/assets/js/jPushMenu.js"></script>

<!-- ADD CYCLE -->
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/assets/js/jquery.cycle2.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/assets/js/jquery.cycle2.carousel.min.js"></script>

<!-- ADD FANCYBOX -->
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/assets/js/fancy/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/assets/js/fancy/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- PARALLAX -->
<script src="<?php bloginfo( 'template_url' ); ?>/assets/js/parallax.min.js"></script>

<!-- GRID -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.1.5/masonry.pkgd.min.js"></script>
<script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/assets/js/javascript.js"></script>
</body>
</html>