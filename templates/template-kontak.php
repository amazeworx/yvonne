<?php

/**
 * Template Name: Kontak
 * Template Post Type: page
 *
 */

get_header(); ?>

<div class="min-h-screen bg-[#f3f5f4] relative z-0 pt-[80px] lg:pt-[112px]">
  <div class="container mx-auto pt-6 pb-44 px-4 lg:pt-12 lg:pb-6">
    <div class="relative">
      <div class="absolute top-0 right-0 hidden lg:block">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/frame-tr.jpg" alt="">
      </div>
      <div class="absolute bottom-0 left-0 hidden lg:block">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/frame-bl.jpg" alt="">
      </div>
      <div class="relative min-h-[500px] pt-8 pb-0 xl:pl-48 xl:pr-40 lg:pb-16">
        <h2 class="text-primary font-semibold text-2xl uppercase tracking-widest mb-6">Kontak Kami</h2>
        <div class="mb-12">
          <div class="w-full lg:w-1/2 flex gap-x-4">
            <div class="w-1/3">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/kontak.png" alt="">
            </div>
            <div class="w-2/3">
              <h4 class="font-bodoni text-2xl small-caps mb-2 mt-2">Call Kantor</h4>
              <p><a href="tel:62218198883" class="text-[#4f5cd6] underline text-xl">+62 21 8198883</a></p>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap gap-x-16 lg:flex-nowrap">
          <div class="w-full flex gap-x-4 lg:block lg:w-1/3 mb-4 lg:mb-0">
            <div class="w-1/3 lg:w-full"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team-marketing.png" alt=""></div>
            <div class="w-2/3 lg:w-full">
              <h4 class="font-bodoni text-2xl small-caps mb-2 mt-2">Call Team Marketing</h4>
              <p><a href="https://wa.me/628111231700" target="_blank" class="text-[#4f5cd6] underline text-xl">+62 811 1231 700</a></p>
            </div>
          </div>
          <div class="w-full lg:w-2/3">
            <div>
              <h4 class="font-bodoni text-2xl small-caps mb-2 mt-2">WhatsApp</h4>
              <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
                <div class="pl-6 pt-3 relative">
                  <div class="absolute w-12 h-12 top-0 left-0"><img class="border border-white border-solid rounded-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team-1.png" alt=""></div>
                  <div class="border rounded-2xl border-gray-600 pl-8 pr-4 py-2">
                    <h5 class="font-bodoni text-2xl small-caps mb-1">Dewi</h5>
                    <p><a href="https://wa.me/6281314692131" target="_blank" class="text-[#4f5cd6] underline text-xl">+62 813 1469 2131</a></p>
                  </div>
                </div>
                <div class="pl-6 pt-3 relative">
                  <div class="absolute w-12 h-12 top-0 left-0"><img class="border border-white border-solid rounded-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team-2.png" alt=""></div>
                  <div class="border rounded-2xl border-gray-600 pl-8 pr-4 py-2">
                    <h5 class="font-bodoni text-2xl small-caps mb-1">Wani</h5>
                    <p><a href="https://wa.me/6281310867385" target="_blank" class="text-[#4f5cd6] underline text-xl">+62 813 1086 7385</a></p>
                  </div>
                </div>
                <div class="pl-6 pt-3 relative">
                  <div class="absolute w-12 h-12 top-0 left-0"><img class="border border-white border-solid rounded-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team-3.png" alt=""></div>
                  <div class="border rounded-2xl border-gray-600 pl-8 pr-4 py-2">
                    <h5 class="font-bodoni text-2xl small-caps mb-1">Supriatna</h5>
                    <p><a href="https://wa.me/628161462592" target="_blank" class="text-[#4f5cd6] underline text-xl">+62 816 1462 592</a></p>
                  </div>
                </div>
                <div class="pl-6 pt-3 relative">
                  <div class="absolute w-12 h-12 top-0 left-0"><img class="border border-white border-solid rounded-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team-4.png" alt=""></div>
                  <div class="border rounded-2xl border-gray-600 pl-8 pr-4 py-2">
                    <h5 class="font-bodoni text-2xl small-caps mb-1">Yana</h5>
                    <p><a href="https://wa.me/6281398721693" target="_blank" class="text-[#4f5cd6] underline text-xl">+62 813 9872 1693</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="fixed bottom-0 left-0">
    <a href="https://wa.me/628111231700" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/call-yvonne.png" alt=""></a>
  </div>
</div>

<?php get_footer(); ?>