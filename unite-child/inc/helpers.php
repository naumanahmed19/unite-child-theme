

<?php

//Terms Method
function term($taxonomy) {
    $terms = get_the_terms( get_the_ID() , $taxonomy );
    if ( ! empty( $terms ) ) {
        echo '<p class="entry-meta"><span class="entry-terms">';
            foreach ( $terms as $term ) {
                $entry_terms .= $term->name . ', ';
            }
            $entry_terms = rtrim( $entry_terms, ', ' );
        echo $entry_terms . '</span></p>';
    }
}

