<?php

/**
 * Template Name: Menu - Menu Snack
 * Template Post Type: page
 *
 */

get_header(); ?>

<div class="container mx-auto relative min-h-screen pt-20 xl:pt-36">
  <div class="relative z-10">
    <div class="bg-white sticky top-20 pt-4 z-20">
      <div class="py-4 border-t border-b border-primary/50">
        <div class="flex justify-between">
          <h1 class="font-crimson font-bold text-2xl lg:text-3xl tracking-wider lg:tracking-[0.5em] uppercase text-primary">Coffee Break / Snack Box</h1>
          <!-- <div class="relative flex items-center gap-4">
            <div class="swiper-button-prev text-primary top-0"></div>
            <div class="swiper-button-next text-primary top-0"></div>
          </div> -->
        </div>
      </div>
    </div>
    <div class="relative">
      <div id="menu-snack" class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 mx-auto gap-x-10 mt-8 relative z-10 xl:max-w-[640px]">
              <div>
                <h2 class="font-crimson font-bold text-2xl uppercase text-primary mb-4">SNACK MANIS</h2>
                <div class="grid grid-cols-2 gap-x-10">
                  <ul class="text-base flex flex-col gap-y-2 leading-snug">
                    <li>Strawberry Cake</li>
                    <li>Chocolate Cake</li>
                    <li>Cheese Cake</li>
                    <li>Mocca Cake</li>
                    <li>Pandan Cake</li>
                    <li>Danish Roll</li>
                    <li>Chocolate Roll</li>
                    <li>Ananas Roll</li>
                    <li>Éclair</li>
                    <li>Lapis Jongkong</li>
                  </ul>
                  <ul class="text-base flex flex-col gap-y-2 leading-snug">
                    <li>Onde-onde</li>
                    <li>Brownies</li>
                    <li>Soes Cocktail</li>
                    <li>Kue Mangkok</li>
                    <li>Croissant</li>
                    <li>Coklat</li>
                    <li>Apple Pie</li>
                    <li>Bika Ambon</li>
                    <li>Bolu Kukus</li>
                    <li>Roti Coklat/Mexican</li>
                  </ul>
                </div>
              </div>
              <div>
                <h2 class="font-crimson font-bold text-2xl uppercase text-primary mb-4">SNACK ASIN</h2>
                <div class="grid grid-cols-2 gap-x-10">
                  <ul class="text-base flex flex-col gap-y-2 leading-snug">
                    <li>Chicken Curry Puff </li>
                    <li>Chicken Pie </li>
                    <li>Croissant Keju </li>
                    <li>Soes Ragout </li>
                    <li>Risoles Ragout </li>
                    <li>Tornado Goreng</li>
                    <li>Soesmaker</li>
                    <li>Kroket Kentang </li>
                    <li>Kroket Macaroni </li>
                    <li>Dutch Croquette</li>
                  </ul>
                  <ul class="text-base flex flex-col gap-y-2 leading-snug">
                    <li>Lemper</li>
                    <li>Sosis Solo Bitterballen </li>
                    <li>Tahu isi Goreng </li>
                    <li>Siomay</li>
                    <li>Lumpia Sayuran </li>
                    <li>Pastel Sayuran</li>
                    <li>Arem-arem</li>
                    <li>Roti Keju </li>
                    <li>Sosysbrood</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="mx-auto xl:max-w-[640px] py-[24px] xl:py-[40px] relative z-10">
              <div class="text-base">
                Minimal Pesanan :<br />
                Coffee Break : 100 Pax<br />
                (Pesanan dibawah 100 Pax, harga akan disesuaikan dan dikenakan Service Charge)<br />
                Snack Box : 50 Box
              </div>
            </div>
            <div class="hidden xl:block absolute inset-0 z-0 w-full h-full">
              <div class="max-w-[280px] w-full h-full absolute left-0 top-0">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/menu-img-15.jpg" alt="" class="object-cover w-full h-full">
              </div>
              <div class="max-w-[280px] w-full h-full absolute right-0 top-0">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/menu-img-16.jpg" alt="" class="object-contain object-bottom w-full h-full">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="swiper-button-prev text-primary -left-16"></div>
        <div class="swiper-button-next text-primary -right-16"></div>
      </div>
    </div>
  </div>
</div>

<script>
  const menuSnack = new Swiper('#menu-snack', {
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>

<?php get_footer(); ?>