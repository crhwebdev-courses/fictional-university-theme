<?php 

  //user defined function that loads a style sheet
  function university_files(){
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awsome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
  }

  //add action that runs when at a certain time (i.e. when loading in header files)
  add_action('wp_enqueue_scripts', 'university_files');

?>