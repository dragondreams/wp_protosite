<?php get_header()?> 
 
<!-- End Header -->

<div id="container">
			<div id="sidebar"> 
				<?php dynamic_sidebar( 'primary' ); ?> 
			</div>
 
	<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
		 <div id="main"> 
			<div id="content"><!--open #main --> 
			 <!-- Start the Loop. -->
			<?php if (have_posts()) : ?>
				 
						<h2 class="pagetitle">Search Results</h2>
						<ul>
							<?php while (have_posts()) : the_post(); ?>
							<li id="post-<?php the_ID(); ?>"><?php the_time('F jS, Y') ?> - <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile; ?>
						</ul>
						
					<?php else : ?>
						
						<h2>No Searches found! Please use the search form below to search other contents.</h2>
						<p><?php get_search_form(); ?></p>
				
				
			<?php endif; ?>
					
			<nav class="post-nav">
                            <p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
                            <p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
                        </nav>
						 
						 
						 <div id="widget">
							<?php dynamic_sidebar( 'secondary' ); ?> 
						 </div>
						 
			 
			</div>
			 
</div>		
<?php get_footer()?>