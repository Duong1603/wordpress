<?php
/*
	Template Name: Home Page
*/

get_header(); ?>

<main>
    <div class="content">
        <div class="top_content">
            <div class="top_content_left">
                <?php get_template_part('teamplate-content/home', 'show_random_post'); ?>
                <?php 
                get_template_part('teamplate-content/home', 'random_title'); 
                ?>
            </div>
            <div class="top_content_center">
                <div class="newcontet">
                <?php get_template_part('teamplate-content/home', 'show-standing'); ?>
                </div>
                <div>
                    <h2 style="border: 1px solid black; color: blue">Tin tức mới nhất</h2>
                    <div class="newupdate">
                    <?php get_template_part('teamplate-content/home', 'show-standing'); ?>
                    </div>    
                </div>

            </div>

        </div>
    </div>
    <!-- <div class="slide_post_standing">
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">Resize me!</div>
          <div class="swiper-slide">Resize me!</div>
          <div class="swiper-slide">Resize me!</div>
          <div class="swiper-slide">Resize me!</div>
          <div class="swiper-slide">Resize me!</div>
          <div class="swiper-slide">Resize me!</div>
          <div class="swiper-slide">Resize me!</div>
          <div class="swiper-slide">Resize me!</div>
          <div class="swiper-slide">Resize me!</div>
          <div class="swiper-slide">Resize me!</div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </div> -->
</main>




<!-- <?php get_footer(); ?> -->