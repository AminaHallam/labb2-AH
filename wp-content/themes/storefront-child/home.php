<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

				<?php 
                
                dynamic_sidebar('widget1');
                ?>
		
			<?php while(have_posts()) :
			
					
					the_post(); 

					do_action( 'storefront_single_post_before' );

					get_template_part( 'content', 'single' );

					do_action( 'storefront_single_post_after' );
					
				
				endwhile; 

			?>

				<?php 
                
                dynamic_sidebar('widget3');
                ?>

        </main>

    </div>

<?php

get_footer();
?>