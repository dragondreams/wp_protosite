<?php if ( ! dynamic_sidebar() ) : ?> 
  
  <?php if ( is_active_sidebar( 'primary' ) ) : ?>

		<?php dynamic_sidebar( 'primary' ); ?>
		
	

	<?php else : ?>
			<ul>
				<?php wp_list_categories(); ?>
			</ul>
     <h3>Location</h3>
        <p>123 45th Avenue South<br/>
        Seattle, WA 98765</p>
        <p>(206) 555-1234</p>

      <h3>Hours</h3>
        <p>9:00 AM – 6:00 PM weekdays</p>
        <p>Magna aliquam erat volutpat malesuada ac purus.</p>
	
	
	 
<?php endif; ?>

<!--Begin Quote-->
	<?php if ( get_post_meta($post->ID, 'Quote', true)):?>
		
	
<?php endif; ?>
<!--end quote-->
	