<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wigging_out
 **/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css"> <!-- Animate CSS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script> <!-- Modernizr -->
	
<!-- Included Section -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="cd-header">
		<div class="container">
			<div class="row row-logo">
				<div class="col-md-6">
					<div class="cd-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-2.png" alt="Logo"></a></div>
				</div>
				<div class="col-md-6">
					<ul class="number-email">
						<li class="number"><span>info@jalsecurity.com</span></li>
						<li class="email"><span>215-900-6217</span></li>
					</ul>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12 row-menu">
					<!-- cd-primary-nav-trigger -->
					<a class="cd-primary-nav-trigger" href="#0">
						<span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span>
					</a> 

					<ul class="primary-nav">
						<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'items_wrap'      => '<li class="site-nav-list">%3$s</li>' ) ); ?>
					</ul>
				</div>
			</div>
			
		</div>
	</header>
	
	<nav>
		<ul class="cd-primary-nav">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'items_wrap'      => '<li class="site-nav__list">%3$s</li>' ) ); ?>
			<li class="number"><span>info@jalsecurity.com</span></li>
			<li class="email"><span>215-900-6217</span></li>
		</ul>
	</nav>
	
	
	
