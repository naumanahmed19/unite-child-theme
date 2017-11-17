<?php


// Add Shortcode
function film_shortcode( $atts ) {
    
        // Attributes
        $atts = shortcode_atts(
            array(
                'post_per_page' => '5',
            ),
            $atts
        );

        query_posts(array('post_type'=>'film','posts_per_page' => $post_per_page)); 
        if (have_posts()) : while (have_posts()) : the_post(); 
            
            $term_list = wp_get_post_terms($post->ID, 'album-categories', array("fields" => "names"));
            $output .= '<div class="media">';

            if ( has_post_thumbnail() ) 
                $output .= '<div>'. get_the_post_thumbnail() .'</div>';

        
            $output .= '<div class="media-body"><a href="'.get_the_permalink().'"><h4 class="media-heading">'.get_the_title().'</h4></a></div>';
                    
         
          $output .= '<span> Ticket Price'. get_field('ticket_price'). '</span>';
          $output .= '<span> Release Date'. get_field ('release_date'). '</span>';

  
            $output .= '</div>';
        endwhile; endif; 
            wp_reset_query();

      $output .=  '</ul>';

      return $output;
    
    }
    add_shortcode( 'films', 'film_shortcode' );