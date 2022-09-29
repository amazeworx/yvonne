<?php

/**
 * Template Name: Homepage
 * Template Post Type: page
 *
 */

get_header(); ?>

<div class="h-screen">
  <div class="absolute inset-0 z-0 bg-[#edecea]">
    <img class="object-cover h-full w-full hidden lg:block" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-celebrate.jpg" alt="" />
    <img class="object-contain object-top h-full w-full lg:hidden" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-celebrate-mobile.jpg" alt="" />
  </div>
  <div class="absolute bottom-0 left-0 right-0">
    <div class="container mx-auto px-4">
      <div class="text-center py-20 text-sm font-bodoni uppercase">
        Didirikan pada tahun 1972, Yvonne’s Catering merayakan 50 tahun
        eksistensinya sebagai salah satu katering independen di
        Indonesia.<br />
        Selama 50 tahun, Yvonne’s Catering selalu memberikan komitmen yang
        tinggi untuk memberikan pelayanan dan kualitas yang terbaik.
      </div>
    </div>
    <div class="border-t border-solid border-[#c2992f] text-center mb-8">
      <a href="https://wa.me/628111231700" target="_blank" class="inline-block text-center -mt-[36px]"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contact-wa-home.png" alt="" /></a>
    </div>
  </div>
</div>

<?php get_footer(); ?>