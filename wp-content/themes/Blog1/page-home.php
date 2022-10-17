<?php
/*
	Template Name: Home Page
*/

get_header(); ?>

<main>
  <div class="content">
    <div class="top_content">
      <div class="top_content_left">
        <?php get_template_part('teamplate-content/home', 'show_post'); ?>
        <?php get_template_part('teamplate-content/home', 'title'); ?>
      </div>
      <div class="top_content_right">

        <?php get_template_part('teamplate-content/home', 'show-standing'); ?>

        <?php get_template_part('teamplate-content/home', 'show-standing _right'); ?>
      </div>

    </div>

  </div>
  <?php 
    $request = wp_remote_get(`https://63466a7d9eb7f8c0f87b0187.mockapi.io/wordpress`);
    $data = json_decode( wp_remote_retrieve_body( $request ) );
  ?>
</main>

<?php get_footer(); ?>