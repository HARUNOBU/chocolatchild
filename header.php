<?php
/**
 * The Header template
 * @package   Chocolat
 * @copyright Copyright (c) 2014 Mignon Style
 * @license   GNU General Public License v2.0
 * @since     Chocolat 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php get_template_part('header_ogp');?>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php chocolat_sp_icon(); ?>
<link rel="shortcut icon" href="http://○○○/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="icon" href="http://○○○/favicon.ico" type="image/vnd.microsoft.icon" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); echo '?' . filemtime(get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen" />
</head>

<body id="top" <?php body_class(); ?>>
<!-- wrapper -->
<div id="wrapper" class="container">
<!-- header -->
<header class="header">
<!-- header-inner -->
<div class="header-inner">
    <div class="header-top clearfix">
        <div class="header-logo">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title"><?php chocolat_site_title(); ?></h1>
				<?php chocolat_site_description(); ?>
			</a>
        </div>
		<div class="header-links">
			<?php
			chocolat_contactlink( 'contactlink-top' );?>
		</div>
        <div class="header-title">
            <div class="tel"><a href="09078606152"><strong>Tel 0564-●●-●●●●</strong></a></div>
            <div class="inquiry"><img src="http://mishie2/wp-content/uploads/2016/10/inquiry2.png" alt="inquiry"></div>
            <div class="eigyo"><strong>営業時間：10：00～20:00　定休日火曜日</strong></div>			
        </div>
	</div><!-- /header-top -->

    <div class="header-center clearfix">
        <div class="header-image">
		<?php chocolat_header_image(); ?>
        </div>
		<!-- globalnav -->
		<div id="nav-control" class="close">
			<span class="icon-menu"></span>
		</div>
		<?php wp_nav_menu( array(
			'theme_location'  => 'globalnav',
			'container_class' => 'globalnav clearfix',
			'menu_class'      => 'globalnav clearfix',
		) ); ?>
	</div><!-- /header-center -->

	<div id="header-bottom" class="clearfix">
		<?php chocolat_breadcrumb(); ?>
	</div><!-- /header-bottom -->
</div><!-- /header-inner -->
</header><!-- /header -->

<!-- contents -->
<div id="contents" class="clearfix">