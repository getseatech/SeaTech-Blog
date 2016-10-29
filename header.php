<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stb_blog_Blog
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site <?php echo get_theme_mod( 'layout_setting', 'no-sidebar' ); ?>">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'stb_blog' ); ?></a>

	<?php if ( get_header_image() ) { ?>
		<header id="masthead" class="site-header" style="background-image: url(<?php header_image(); ?>)" role="banner">
	<?php } else { ?>
		<header id="masthead" class="site-header" role="banner">
	<?php } ?>
	
	<div class="header-wrapper">
	  
         <?php // Display site icon or first letter as logo ?>
		<div class="site-logo">
			<?php $site_title = get_bloginfo( 'name' ); ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<div class="screen-reader-text">
					<?php printf( esc_html__('Go to the home page of %1$s', 'popperscores'), $site_title ); ?>
				</div>
				<?php
				if ( has_site_icon() ) {
					$site_icon = esc_url( get_site_icon_url( 270 ) ); ?>
					<img class="site-icon" src="<?php echo $site_icon; ?>" alt="">
				<?php } else { ?>
					<div class="site-firstletter" aria-hidden="true">
						<?php echo substr($site_title, 0, 1); ?>
					</div>
				<?php } ?>
			</a>
		</div>
	<div class="social-icons">
                    <?php if ( false != get_theme_mod( 'stb_blog_social_website')) { ?>
                        <a class="fa fa-home" target="_blank" href="<?php echo esc_url( get_theme_mod( 'stb_blog_social_website') ); ?>">
                            <span class="hidden"><?php _e( 'Home', 'stb_blog' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'stb_blog_social_mail')) { ?>
                        <a class="fa fa-envelope" target="_blank" href="<?php echo esc_url( 'mailto:' . get_theme_mod( 'stb_blog_social_mail') ); ?>">
                            <span class="hidden"><?php _e( 'Email', 'stb_blog' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'stb_blog_social_youtube')) { ?>
                        <a class="icon-youtube" target="_blank" href="<?php echo esc_url( get_theme_mod( 'stb_blog_social_youtube') ); ?>">
                            <span class="hidden"><?php _e( 'Youtube', 'stb_blog' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'stb_blog_social_tumblr')) { ?>
                        <a class="icon-tumblr" target="_blank" href="<?php echo esc_url( get_theme_mod( 'stb_blog_social_tumblr') ); ?>">
                            <span class="hidden"><?php _e( 'Tumblr', 'stb_blog' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'stb_blog_social_instagram')) { ?>
                        <a class="icon-instagram" target="_blank" href="<?php echo esc_url( get_theme_mod( 'stb_blog_social_instagram') ); ?>">
                            <span class="hidden"><?php _e( 'Instagram', 'stb_blog' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'stb_blog_social_google')) { ?>
                        <a class="icon-google-plus" target="_blank" href="<?php echo esc_url( get_theme_mod( 'stb_blog_social_google') ); ?>">
                            <span class="hidden"><?php _e( 'Google+', 'stb_blog' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'stb_blog_social_facebook')) { ?>
                        <a class="fa fa-facebook" target="_blank" href="<?php echo esc_url( get_theme_mod( 'stb_blog_social_facebook') ); ?>">
                            <span class="hidden"><?php _e( 'Facebook', 'stb_blog' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'stb_blog_social_twitter')) { ?>
                        <a class="fa fa-twitter" target="_blank" href="<?php echo esc_url( get_theme_mod( 'stb_blog_social_twitter' ) ); ?>">
                            <span class="hidden"><?php _e( 'Twitter', 'stb_blog' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'stb_blog_social_linkedin')) { ?>
                        <a class="icon-linkedin" target="_blank" href="<?php echo esc_url( get_theme_mod( 'stb_blog_social_linkedin') ); ?>">
                            <span class="hidden"><?php _e( 'LinkedIn', 'stb_blog' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'stb_blog_social_github')) { ?>
                        <a class="icon-github-alt" target="_blank" href="<?php echo esc_url( get_theme_mod( 'stb_blog_social_github') ); ?>">
                            <span class="hidden"><?php _e( 'GitHub', 'stb_blog' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'stb_blog_social_bitbucket')) { ?>
                        <a class="icon-bitbucket" target="_blank" href="<?php echo esc_url( get_theme_mod( 'stb_blog_social_bitbucket') ); ?>">
                            <span class="hidden"><?php _e( 'Bitbucket', 'stb_blog' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'stb_blog_social_stack_overflow')) { ?>
                        <a class="icon-stack-overflow" target="_blank" href="<?php echo esc_url( get_theme_mod( 'stb_blog_social_stack_overflow') ); ?>">
                            <span class="hidden"><?php _e( 'Stack Overflow', 'stb_blog' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'stb_blog_social_dribbble')) { ?>
                        <a class="icon-dribbble" target="_blank" href="<?php echo esc_url( get_theme_mod( 'stb_blog_social_dribbble') ); ?>">
                            <span class="hidden"><?php _e( 'Dribbble', 'stb_blog' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'stb_blog_social_behance')) { ?>
                        <a class="icon-behance" target="_blank" href="<?php echo esc_url( get_theme_mod( 'stb_blog_social_behance') ); ?>">
                            <span class="hidden"><?php _e( 'Behance', 'stb_blog' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'stb_blog_social_rss')) { ?>
                        <a class="icon-feed" target="_blank" href="<?php echo esc_url( get_theme_mod( 'stb_blog_social_rss') ); ?>">
                            <span class="hidden"><?php _e( 'RSS', 'stb_blog' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'stb_blog_social_codepen')) { ?>
                        <a class="icon-codepen" target="_blank" href="<?php echo esc_url( get_theme_mod( 'stb_blog_social_codepen') ); ?>">
                            <span class="hidden"><?php _e( 'CodePen', 'stb_blog' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'stb_blog_social_deviantart')) { ?>
                        <a class="icon-deviantart" target="_blank" href="<?php echo esc_url( get_theme_mod( 'stb_blog_social_deviantart') ); ?>">
                            <span class="hidden"><?php _e( 'Deviant Art', 'stb_blog' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'stb_blog_social_flickr')) { ?>
                        <a class="icon-flickr" target="_blank" href="<?php echo esc_url( get_theme_mod( 'stb_blog_social_flickr') ); ?>">
                            <span class="hidden"><?php _e( 'Flickr', 'stb_blog' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'stb_blog_social_lastfm')) { ?>
                        <a class="icon-lastfm" target="_blank" href="<?php echo esc_url( get_theme_mod( 'stb_blog_social_lastfm') ); ?>">
                            <span class="hidden"><?php _e( 'LastFM', 'stb_blog' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'stb_blog_social_soundcloud')) { ?>
                        <a class="icon-soundcloud" target="_blank" href="<?php echo esc_url( get_theme_mod( 'stb_blog_social_soundcloud') ); ?>">
                            <span class="hidden"><?php _e( 'SoundCloud', 'stb_blog' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'stb_blog_social_spotify')) { ?>
                        <a class="icon-spotify" target="_blank" href="<?php echo esc_url( get_theme_mod( 'stb_blog_social_spotify') ); ?>">
                            <span class="hidden"><?php _e( 'Spotify', 'stb_blog' ); ?></span>
                        </a>
                    <?php } ?>
                </div>
                
		<div class="site-branding<?php if ( is_singular() ) { echo ' screen-reader-text ';} ?>">
			<?php
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
		
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'stb_blog' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
