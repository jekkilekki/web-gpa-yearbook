<?php 
include( 'includes/header.php' );

if( $page === '2013-tab' ) {
    include( '2013-14/content.php' );
} else if( $page === 'newsletter-tab' ) {
    include( 'newsletter/content.php' );
} else if( $page === '2015-tab' ) {
    include( '2015-16/content.php' );
} else {
    include( '2016-17/content.php' );
}

include( 'includes/footer.php' ); 
