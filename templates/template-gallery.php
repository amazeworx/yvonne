<?php

/**
 * Template Name: Gallery
 * Template Post Type: page
 *
 */

get_header(); ?>

<div class="container mx-auto relative min-h-screen pt-20 pb-8 lg:pb-12 xl:pt-[92px] xl:pb-12">
  <div class="relative z-10">

    <div class="bg-white sticky top-20 pt-0 z-20 lg:pt-4 xl:pt-8 xl:top-[92px]">
      <div class="py-4 border-t border-b border-primary/50">
        <div class="flex justify-between">
          <h1 class="font-crimson font-bold text-2xl tracking-wider lg:tracking-[0.5em] xl:text-3xl xl:tracking-[1em] uppercase text-primary">Photo Gallery</h1>
        </div>
      </div>
    </div>

    <div class="relative mt-8 pb-12 lg:mt-12 lg:pb-20">
      <div class="grid grid-cols-2 gap-2 lg:grid-cols-5 lg:gap-4">
        <?php
        for ($i = 1; $i < 19; $i++) {
          echo '<a class="aspect-w-1 aspect-h-1 cursor-pointer hover:scale-105 transition" data-fancybox="gallery" data-src="' . get_stylesheet_directory_uri() . '/assets/images/gallery/yvonnecatering-gallery-' . $i . '.jpg">';
          echo '<img src="' . get_stylesheet_directory_uri() . '/assets/images/gallery/yvonnecatering-gallery-' . $i . '.jpg" alt="" class="object-cover h-full w-full">';
          echo '</a>';
        }
        ?>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
  Fancybox.bind('[data-fancybox]', {
    // Your custom options
  });
</script>


<?php get_footer(); ?>