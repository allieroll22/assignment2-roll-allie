<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width-device-width, intial-scale-1.0">
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>

    <!--Link to our style.css file -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Montserrat&display=swap" rel="stylesheet">
  </head>

  <body>

    <header>
      <a href="<?php echo bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a>
      <div class="container">
      <div class= "container-header">
        <button class="header-h2"><a href="index.php">Homepage</a></button>
        <h1>The University of Florida </h1>

      </div>
    </div>
    </header>
