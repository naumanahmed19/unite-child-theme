<?php

   /**
     *  ACF Fields
     *
     */
    require_once ('inc/acf.php');


   /**
     *  Custom Posts
     *
     */
    require_once ('inc/custom-posts.php');


   /**
     *  shortcode
     *
     */
    require_once ('inc/shortcodes.php');


   /**
     *  Helper Methods
     *
     */
    require_once ('inc/helpers.php');
    
    
    

    add_action('after_film_content', 'film_extras');
    function film_extras( $args ) {
       ?>
       
       <ul>
		<li>
		
			<?php

				_e('Genre','unite-child');
				term('genre') ;
				
			?>
		</li>
		<li>

		<?php
			
			_e('Country','unite-child');
			term('country') ;
			
		?>
		
		</li>
		<li>
			<?php
	
			_e('Year','unite-child');
			term('year') ;
				
			?>
	
		</li>
		<li>
		<?php
			_e('Actors','unite-child');
			term('actor') ;
			
		?>
		
		</li>

			<li<?php _e('Release Date','unite-child'); the_field('release_date');?></li>
			<li><?php _e('Ticket Price $','unite-child'); the_field('ticket_price');?></li>
		</ul>
       <?php

    }
