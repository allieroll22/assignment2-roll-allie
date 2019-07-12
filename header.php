<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>

    <!--Link to our style.css file -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Montserrat&display=swap" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class= "container-header">
        <h1><a href="<?php echo home_url('/');?>"><?php bloginfo('name'); ?></a></h1>
      
        <h1>The University of Florida </h1>

      </div>
    </header>
