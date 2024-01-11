<?php

/**
 * Template Name: Menu - Paket Buffet 2
 * Template Post Type: page
 *
 */

get_header(); ?>

<div class="min-h-screen bg-white">
  <div class="relative z-10 pt-32 xl:pt-48">
    <div class="container mx-auto">
      <div class="xl:pl-72">
        <h1 class="font-crimson font-bold text-3xl tracking-wider lg:tracking-[1em] uppercase text-primary">Paket Buffet</h1>
        <div class="grid grid-cols-1 gap-16 mt-12 md:grid-cols-3 md:gap-x-10">
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
    </div>
  </div>
  <div class="relative z-10 xl:absolute xl:bottom-12 xl:left-0 xl:right-0 xl:bg-gradient-to-r xl:from-transparent xl:via-white">
    <div class="container mx-auto px-4">
      <div class="text-left pt-12 pb-36 text-base xl:py-12 xl:text-center xl:text-lg">
        *) Seluruh type sudah termasuk Nasi Putih, Nasi Goreng, Kerupuk, Aneka Snack, Aneka Pudding, Buah Segar, Juice, dan Air Es.<br />Minimal Pesanan : 100 Pax untuk di rumah (Pesanan dibawah 100 pax harga akan disesuaikan dan dikenakan service charge).<br />300 Pax untuk di gedung (Harga dan Charge disesuaikan dengan ketentuan pengelola gedung).
      </div>
    </div>
  </div>

  <div class="fixed inset-0 z-0 bg-white">
    <img class="object-cover object-bottom h-full w-full hidden lg:block" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/menu-bg-01.jpg" alt="" />
    <img class="object-contain object-bottom h-full w-full lg:hidden" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/menu-bg-01.jpg" alt="" />
  </div>


</div>

<?php get_footer(); ?>