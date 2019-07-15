<?php
  //pull in contents of header.php
  get_header();

  //Main loop that iterates over all posts in Wordpress website
  while(have_posts()){

    the_post(); ?>

    <h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>

    <?php the_content(); ?>
    <hr>    
    
  <?php }

    //pull in contents of footer.php
    get_footer();

?>


