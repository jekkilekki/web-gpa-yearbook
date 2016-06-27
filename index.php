<?php 
include( 'includes/header.php' );

if( $page === '2013-tab' ) {
    include( '2013-14/content.php' );
} else if( $page === 'newsletter-tab' ) {
    include( 'newsletter/content.php' );
} else {
    include( '2015-16/content.php' );
}

include( 'includes/footer.php' ); 
