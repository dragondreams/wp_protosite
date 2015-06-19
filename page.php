<?php get_header(); ?> 

<div id="container">
		<div id="sidebar"> 
			<!--<?php dynamic_sidebar( 'primary' ); ?> -->
			
			<div id="submenu">
				<ul>
					<?php if ($post->post_parent) { wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''))); 
					} else { wp_list_pages(array('child_of' => $post->ID, 'title_li' => __('')));} ?>
				</ul>
			</div>
		</div>
		<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<div id="main"> 
			
			<div id="content"><!--open #main -->  
				<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                    <div class="post-box">
						
						<?php the_post_thumbnail(); ?>
						<?php the_content('More &raquo;'); ?>
						<?php edit_post_link('Edit.', '<p><small>', '</small></p>'); ?>
                     </div>
                    <?php endwhile; ?>  
             </div><!-- END CONTENT --> 
						<?php else : ?> 
							<p><?php _e( 'Sorry, no page matched your criteria.' ); ?></p> 
						<?php endif; ?>
				
				<div id="widget">
					<?php dynamic_sidebar( 'secondary' ); ?>  
				</div> 
		</div>	 
</div>

<?php get_footer(); ?>
<!--<?php wp_link_pages(); ?>--/