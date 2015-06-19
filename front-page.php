<?php get_header()?> 
 
<!-- End Header -->

		<section>
			
			 
			<?php echo do_shortcode("[huge_it_slider id='1']"); ?>
			
			<!--<div id="slides">	
				<img src="<?php bloginfo('template_url'); ?>/images/threeccc.jpg" alt="Chicken Coops">
				<img src="<?php bloginfo('template_url'); ?>/images/free-range-chickens.jpg" alt="Hen Chickens">
				<img src="<?php bloginfo('template_url'); ?>/images/build-coop.jpg" alt="Build Your Own">
			</div>
			<h2><span>Chicken Coop Chateaus<span class='spacer'></span><span class='spacer'></span>Limitless Possibilities!</span></h2>						
			<div class="feature-group adjustment">
				<a href="products.html"><img src="<?php bloginfo('template_url'); ?>/images/chapel_styleccc.jpg" alt="Product Line" /></a>
				<a href=""><img src="<?php bloginfo('template_url'); ?>/images/community.jpg" alt="Community" /></a>
				<a href=""><img src="<?php bloginfo('template_url'); ?>/images/free-shipping.jpg" alt="Free Shipping" /></a>
			</div>-->
		</section>
		<div id="homewidgets">
   <section class="item">
       <h3>About Chicken Coop</h3>
       <p>ajsdkajkdalsdlaksdjalsdlasdakldjakldaldkajdkladl</p> 
   </section>

<section class="item">
       <h3>Latest Posts</h3>
       <?php rewind_posts(); // stop loop one ?>
<?php query_posts('showposts=4'); // give directions to loop two ?>
<?php while (have_posts()) : the_post(); // start loop two ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; // end loop two ?> 
   </section>

<section class="item">
       <h3>Contact Us</h3>
      <p>ajsdkajkdalsdlaksdjalsdlasdakldjakldaldkajdkladl</p>
   </section>

</div>
		
		
<?php get_footer()?>