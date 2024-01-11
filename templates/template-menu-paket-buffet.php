<?php

/**
 * Template Name: Menu - Paket Buffet
 * Template Post Type: page
 *
 */

get_header(); ?>

<div class="relative min-h-screen pt-20 xl:pt-[92px]">

  <div class="relative">

    <div class="bg-white sticky top-20 pt-0 z-20 lg:pt-4 xl:pt-8 xl:top-[92px]">
      <div class="container mx-auto">
        <div class="py-4 border-t border-b border-primary/50">
          <div class="flex justify-between">
            <h1 class="font-crimson font-bold text-2xl tracking-wider lg:tracking-[0.5em] xl:text-3xl xl:tracking-[1em] uppercase text-primary">Paket Buffet</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="relative z-10 pt-12 bg-[position:right_-50px] bg-[length:300%] bg-no-repeat md:bg-[length:150%] lg:bg-[position:50%_-50px] lg:bg-cover" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/paket-buffet-bg-01.jpg);">
      <div class="container mx-auto">
        <div class="max-w-screen-lg mx-auto">
          <div class="grid grid-cols-1 gap-16 md:grid-cols-3 md:gap-x-10">
            <div>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/buffet-a.png" alt="">
              <ul class="text-lg xl:text-xl mt-4 lg:mt-8 flex flex-col gap-y-1">
                <li>Soup</li>
                <li>Salad</li>
                <li>Daging / Ayam</li>
                <li>Ikan</li>
                <li>Mie / Pasta</li>
                <li>Schotel / Sayuran</li>
              </ul>
            </div>
            <div>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/buffet-b.png" alt="">
              <ul class="text-lg xl:text-xl mt-4 lg:mt-8 flex flex-col gap-y-1">
                <li>Soup</li>
                <li>Salad</li>
                <li>Daging</li>
                <li>Ayam</li>
                <li>Ikan</li>
                <li>Mie / Pasta</li>
                <li>Schotel / Sayuran</li>
              </ul>
            </div>
            <div>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/buffet-c.png" alt="">
              <ul class="text-lg xl:text-xl mt-4 lg:mt-8 flex flex-col gap-y-1">
                <li>Soup</li>
                <li>Salad</li>
                <li>Daging</li>
                <li>Ayam</li>
                <li>Ikan / Udang</li>
                <li>Mie / Pasta</li>
                <li>Schotel</li>
                <li>Sayuran</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="text-left pt-12 pb-20 text-base xl:text-center lg:py-12 xl:text-lg">
          *) Seluruh type sudah termasuk Nasi Putih, Nasi Goreng, Kerupuk, Aneka Snack, Aneka Pudding, Buah Segar, Juice, dan Air Es.<br />Minimal Pesanan : 100 Pax untuk di rumah (Pesanan dibawah 100 pax harga akan disesuaikan dan dikenakan service charge).<br />300 Pax untuk di gedung (Harga dan Charge disesuaikan dengan ketentuan pengelola gedung).
        </div>
      </div>
    </div>
    <div class="relative z-0 -mt-16">
      <img class="object-contain object-bottom h-full w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/paket-buffet-bg-02.jpg" alt="" />
    </div>
  </div>
</div>
<!-- <div class="fixed inset-0 z-0 bg-white">
    <img class="object-contain object-bottom h-full w-full hidden lg:block" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/paket-buffet-bg-02.jpg" alt="" />
    <img class="object-contain object-bottom h-full w-full lg:hidden" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/menu-bg-01.jpg" alt="" />
  </div> -->



<?php get_footer(); ?>