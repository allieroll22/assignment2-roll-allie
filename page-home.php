<?php /*Template Name: Home Page Template*/ ?>

<?php get_header(); ?>


<div class="container">
  <!-- Hero Image Section -->
  <div class="row">
    <div class="twelve columns">
      <?php dynamic_sidebar('hero-image'); ?>
    </div>
  </div>

  <!-- About Text Section -->
  <div class="row">
    <div class="nine columns">
      <?php dynamic_sidebar('about-us'); ?>
    </div>
    <div class="three columns">
      <?php dynamic_sidebar('about-us-image'); ?>
    </div>
  </div>

  <!-- Interior Pages Section -->
  <div class="row">
    <div class="one-third column">
      <?php dynamic_sidebar('bottom-left-home'); ?>
    </div>

    <div class="one-third column">
      <?php dynamic_sidebar('bottom-middle-home'); ?>
    </div>

    <div class="one-third column">
      <?php dynamic_sidebar('bottom-right-home'); ?>
    </div>
  </div>

  <div class="row">
    <div class="twelve columns">
      <?php
      if(have_posts()){
        while(have_posts()){
          the_post();?>
          <h2 class="post-title"><?php the_title(); ?></h2>
          <p class="post-date"><?php echo "Published: " . get_the_date(); ?></p>
          <div class="post-feature"> <?php the_post_thumbnail(); ?>
          </div>
            <?php the_content(); ?>

          <p><?php echo "This post is written by : " . get_the_author(); ?></p>
      <?php  }//end while loop
      } //end if statement

    ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>
