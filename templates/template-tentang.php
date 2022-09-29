<?php

/**
 * Template Name: Tentang
 * Template Post Type: page
 *
 */

get_header(); ?>

<div class="min-h-screen bg-[#f3f5f4] relative z-0 pt-[80px] lg:pt-[112px]">
  <div class="container mx-auto pt-6 pb-44 px-4 lg:py-12">
    <div class="flex flex-wrap gap-x-20 lg:flex-nowrap">
      <div class="w-full lg:w-1/4">
        <?php the_post_thumbnail('full') ?>
      </div>
      <div class="w-full lg:w-3/4">
        <div class="prose max-w-none lg:prose-lg">
          <?php the_content() ?>
        </div>
      </div>
    </div>
  </div>
  <div class="fixed bottom-0 left-0">
    <a href="https://wa.me/628111231700" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/call-yvonne.png" alt=""></a>
  </div>
</div>

<?php get_footer(); ?>