<?php
  $counter = 0;
  if (have_posts()) {
    while(have_posts()) {
      the_post();

      echo $counter;
      $counter++;
    }
  }
?>
