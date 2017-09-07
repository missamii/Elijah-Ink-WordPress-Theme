<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>
<?php wp_title(' - ', true, 'right'); ?>
<?php bloginfo('name'); ?>
</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--Uncomment this to use a favicon.ico in the theme directory: -->
<!--<link rel="SHORTCUT ICON" href="<?php bloginfo('template_directory'); ?>/favicon.ico"/>-->
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body>

  <?php body_class(); ?>>
  <!-- Navigation -->
  <div class="w3-top">
    <ul class="w3-navbar w3-black w3-xlarge">
      <li><a href="http://elijahink.com">Home</a></li>
      <li><a href="#About">About</a></li>
      <li><a href="#Blog">Blog</a></li>
      <li><a href="#Contact">Contact</a></li>
    </ul>
  </div> <!-- End Navigation -->

  <div class="siteimage">
    <div class="site-title">
        ELIJAH INK RECORDS
    </div>
  </div>
