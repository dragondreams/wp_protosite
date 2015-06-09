<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name') ?></title>
<!-- Begin Meta -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow, noarchive"/>
<!-- End Meta -->
	
<!-- Begin Styles -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/slider.css" />
<!-- End Styles -->
	<?php wp_head(); ?> 
</head>
<body>

<!-- Begin Header -->
	<div id="wrapper">
		<header>
			<a href="index.html">
				<img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" alt="Chicken Coop Logo" />
			</a>
			<div id="utility">
				<ul>
					<li><a href="">Login</a></li>
					<li><a href="">My Account</a></li>
					<li><a href="shopping_cart.html">Shopping Cart</a></li>	
				</ul>
			</div>
			<div class="company-name">
				Chicken Coop Chateaus test
			</div>
			
		 
			<ul class="topnav left">
				<?php wp_nav_menu( array('main-menu' => 'Main Menu' )); ?>
			</ul>
		 
			 
		</header>
<!-- End Header -->
 