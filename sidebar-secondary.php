<?php if ( ! dynamic_sidebar() ) : ?>
	<?php if ( is_active_sidebar( 'secondary' ) ) : ?>

		<?php dynamic_sidebar( 'secondary' ); ?>

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