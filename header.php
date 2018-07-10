<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <tile>Awsome Theme</title>
<?php wp_head(); ?>


  </head>

<?php

  if ( is_front_page() ):
    $awsome_classes = array('awsome-class', 'my-class');
  else:
    $awsome_classes = array('not-awsome-class');
  endif;

 ?>


  <body <?php body_class( $awsome_classes );?> >

      <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
