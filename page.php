<?php 

  //pull in contents of header.php
  get_header();

  //Main loop that iterates over all posts in Wordpress website
  while(have_posts()){

    the_post(); ?>
    <h1>This is a page not a post</h1>
    <h2><?php the_title(); ?></h2>

    <?php the_content(); ?>
     
  <?php }

  //pull in contents of footer.php
  get_footer(); 
  
?>