<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Velvet_Suite
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="navbar navbar-inverse social-bar">
		<div class="container">
				<ul class="nav navbar-nav navbar-right line">
                    <li><a href="https://www.linkedin.com/company/5056027"><span class="fa fa-linkedin-square"></span></a></li>
					<li><a href="https://www.facebook.com/VelvetSuiteInc/"><span class="fa fa-facebook"></span></a></li>
					<li><a href="https://twitter.com/VelvetSuiteInc"><span class="fa fa-twitter"></span></a></li>
					<li><a href="javascript:void(0);" id="search_content"><span class="fa fa-search"></span></a></li>
				</ul>
				<p>Stay Connected:</p>
		</div>
    <div class="search_site_content">

	<?php get_search_form(); ?>
		
		<a class="close_search_base" href="javascript:void"><i class="fa fa-times" aria-hidden="true"></i></a>
	</div>

	</div>
    <!-- Nav bar starts -->
	<div class="navbar navbar-default navbar-custom line" id="header">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php the_custom_logo(); ?></a>

			</div>

            <!-- <ul class="nav navbar-nav navbar-right custom_search">
                <li><a href="javascript:;"><span class="fa fa-search"></span></a></li>
            </ul> -->
            <?php
            wp_nav_menu( array(
                'menu' => 'top menu',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'container_class' =>'collapse navbar-collapse',
                'container_id' =>'menu',
                'menu_id'         => '',
                'walker' => new wp_bootstrap_navwalker()
            ) );
            ?>

		</div>
	</div>
	

	<script>
		jQuery(document).ready(function(){

			jQuery('#search_content').on('click', function(){
     jQuery('.search_site_content').toggle(500);

});

			jQuery('.close_search_base').on('click', function(){
            jQuery(this).parent().fadeOut(500);

    });
		});
	
	</script>
    <!-- Nav bar Ends -->