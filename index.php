<?php 
include( 'includes/header.php' );

if( $page === '2014-tab' ) {
    include( '2013-14/content.php' );
} else if( $page === 'newsletter-tab' ) {
    include( 'newsletter/content.php' );
} else if( $page === '2016-tab' ) {
    include( '2015-16/content.php' );
} else if( $page === '2017-tab' ) {
    include( '2016-17/content.php' );
} else {
    include( '2017-18/content.php' );
}

include( 'includes/footer.php' ); 
