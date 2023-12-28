<?php

/**
 * Template Name: Gallery
 * Template Post Type: page
 *
 */

get_header(); ?>

<div class="container mx-auto relative min-h-screen pt-24 xl:pt-36">
  <div class="relative z-10">
    <div class="py-4 border-t border-b border-primary/50">
      <h1 class="font-crimson font-bold text-3xl tracking-wider lg:tracking-[1em] uppercase text-primary">Photo Gallery</h1>
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