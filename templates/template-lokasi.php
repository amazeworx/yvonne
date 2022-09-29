<?php

/**
 * Template Name: Lokasi
 * Template Post Type: page
 *
 */

get_header(); ?>

<div class="min-h-screen bg-[#f3f5f4] relative z-0 pt-[80px] lg:pt-[112px]">
  <div class="container mx-auto pt-6 pb-44 px-4 lg:pt-12 lg:pb-12">
    <div class="flex flex-wrap lg:flex-nowrap">
      <div class="w-full lg:w-4/12">
        <div class="max-w-[260px] mx-auto lg:max-w-none lg:mt-16">
          <?php the_post_thumbnail('full') ?>
        </div>
      </div>
      <div class="w-full lg:w-8/12">
        <div class="prose max-w-none lg:prose-lg -mt-8 prose-a:text-[#4f5cd6]">
          <?php the_content() ?>
        </div>
      </div>
    </div>
  </div>
  <div class="absolute bottom-0 left-0">
    <a href="https://wa.me/628111231700" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/call-yvonne.png" alt=""></a>
  </div>
  <div class="absolute bottom-4 right-4 lg:bottom-8 lg:left-[160px]">
    <a href="https://www.instagram.com/yvonnes.catering" target="_blank" class="flex flex-col lg:flex-row gap-x-4 items-center">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/instagram.png" alt="">
      <span class="text-lg">yvonnes.catering</span>
    </a>
  </div>
</div>

<?php get_footer(); ?>