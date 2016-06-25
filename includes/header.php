<?php 
include( 'includes/functions.php' ); 

if( isset ( $_POST[ 'current-page' ] ) ) {
    $page = $_POST[ 'current-page' ];
} else {
    $page = '2015-tab';
}
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPA Yearbook</title>
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>
  <body>
      <form id="this-page" name="page" action="" method="POST">
        <input id="current-page" name="current-page" type="hidden" value="<?php echo $page; ?>">
      </form>
      
      <?php include( 'top-menu.php' ); ?>
      <?php include( 'banner-tabs.php' ); ?>
