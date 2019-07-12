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

    <h2 class="h2-title">WRITING</h2>

    <?php
      global $post;
      $args = array( 'posts_per_page' => 3 );
      $lastposts = get_posts( $args );
      foreach ( $lastposts as $post ) :
        setup_postdata( $post ); ?>

      <div class="one-third column posts">

        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php the_post_thumbnail('thumbnail'); ?>
        <p class="p-home"><?php echo "Published: " . get_the_date();?></p>
        <p class="p-home"><?php echo "Article written by: " . get_the_author();?></p>
      </div>  <!--End one-half-column div -->

      <?php endforeach;?>
      <?php wp_reset_postdata(); ?>


  </div>

</div>


<?php get_footer(); ?>
