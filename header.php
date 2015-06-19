<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name') ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php if(is_404() || is_search() || is_archive()) { ?>
	<meta name="googlebot" content="noindex,noarchive,follow,noodp" />
    <meta name="robots" content="noindex,follow" />
    <meta name="msnbot" content="noindex,follow" />
<?php }?>
<title>

<?php
// Titles for different page types

if ( is_home() || is_front_page() ) : // Home or Front Page
	bloginfo('name');
	global $page, $paged; // Pagenating - Thanks Automatic for this idea - taken from the TwentyTen theme
		if ( $paged >= 2 || $page >= 2 ):
			echo ' | ' . sprintf('Page %s', max( $paged, $page ) );
		 endif;
	echo ' | ';
	bloginfo('description');
	elseif (is_search()): // For Search Pages
		echo 'Search Results for: '; the_search_query(); echo ' | '; bloginfo('name');
	elseif (is_tag()): // For Tag Archives
		echo 'Tag Archive for: '; single_tag_title();  echo ' | '; bloginfo('name');
	elseif (is_category()): // For Category Archives
		echo 'Category Archive for: '; single_cat_title(); echo ' | '; bloginfo('name');
	elseif (is_day()): // For Day, Month, Year Archives
		echo 'Archive for: '; the_time('F jS, Y'); echo ' | '; bloginfo('name');
	elseif (is_month()): // Month, Year Archives
		echo 'Archive for: '; the_time('F, Y'); echo ' | '; bloginfo('name');
	elseif (is_year()): // Year Archives
		echo 'Archive for: '; the_time('Y');   echo ' | '; bloginfo('name');
	else : // Every other sort of archive
		wp_title('', TRUE, 'right'); echo ' | '; bloginfo('name');
	endif;
?>
</title>

<!-- Begin Meta
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
				<?php
				  $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
				  if ($children) { ?>
				  <ul>
				  <?php echo $children; ?>
				  </ul>
				  <?php } ?>
			</ul>
		 
			 
		</header>
<!-- End Header -->
 