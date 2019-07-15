<?php 

  //user defined function that loads a style sheet
  function university_files(){
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
  }

  //add action that runs when at a certain time (i.e. when loading in header files)
  add_action('wp_enqueue_scripts', 'university_files');

?>