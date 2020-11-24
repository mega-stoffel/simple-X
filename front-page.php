<?php
/**
 * Front-Page file for my simple-X WordPress theme.
 */

get_header();

?>

<h1>Front-Page.php</h1>
<?php

if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        print "Post " .++$i . ": ";
        the_title(); // Display post title
        print "<br>";
        if ( is_user_logged_in() ):
            echo 'hier abstimmen!<br>';
        endif;
    endwhile; 
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif; 
//if ( have_posts() ) :
    //while ( have_posts() ) :
        the_post();
?>

<?php
get_search_form();
?>

<?php
get_sidebar();
?>

<?php
get_footer();
?>