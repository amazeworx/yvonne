<?php

/**
 * Template Name: Menu - Menu Snack
 * Template Post Type: page
 *
 */

get_header(); ?>

<div class="container mx-auto relative min-h-screen pt-20 pb-28 lg:pb-20 xl:pt-[92px] xl:pb-24">
  <div class="relative z-10">

    <div class="bg-white sticky top-20 pt-0 z-20 lg:pt-4 xl:pt-8 xl:top-[92px]">
      <div class="py-4 border-t border-b border-primary/50">
        <div class="flex justify-between">
          <h1 class="font-crimson font-bold text-2xl tracking-wider lg:tracking-[0.5em] xl:text-3xl xl:tracking-[1em] uppercase text-primary">Coffee Break / Snack Box</h1>
        </div>
      </div>
    </div>

    <div class="relative">

      <div class="flex flex-col pb-0 pt-8 lg:flex-row lg:py-8 lg:gap-x-8 xl:gap-x-12 2xl:gap-x-16 xl:py-8">
        <div class="order-2 lg:w-2/3 lg:order-1 xl:w-1/2">
          <div class="py-6 lg:py-8 xl:py-12">
            <h2 class="font-crimson font-bold text-2xl lg:text-xl xl:text-2xl uppercase text-primary mb-4">SNACK MANIS</h2>
            <ul class="text-base leading-snug columns-2 md:gap-x-8 xl:gap-x-12 2xl:gap-x-16 [&>li]:py-1">
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
        <div class="order-1 lg:w-1/3 lg:order-2 xl:w-1/2">
          <div class="aspect-w-16 aspect-h-8 lg:aspect-none lg:w-full lg:h-full rounded-xl overflow-hidden">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/snack-1-16_9.jpg" alt="" class="object-cover !w-full !h-full">
          </div>
        </div>
      </div>

      <div class="flex flex-col pb-0 pt-8 lg:flex-row lg:py-8 lg:gap-x-8 xl:gap-x-12 2xl:gap-x-16 xl:py-8">
        <div class="order-2 lg:w-2/3 lg:order-2 xl:w-1/2">
          <div class="py-6 lg:py-8 xl:py-12">
            <div>
              <h2 class="font-crimson font-bold text-2xl lg:text-xl xl:text-2xl uppercase text-primary mb-4">SNACK ASIN</h2>
              <ul class="text-base leading-snug columns-2 md:gap-x-8 xl:gap-x-12 2xl:gap-x-16 [&>li]:py-1">
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
        <div class="order-1 lg:w-1/3 lg:order-1 xl:w-1/2">
          <div class="aspect-w-16 aspect-h-8 lg:aspect-none lg:w-full lg:h-full rounded-xl overflow-hidden">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/snack-2-16_9.jpg" alt="" class="object-cover !w-full !h-full">
          </div>
        </div>
      </div>

    </div>

  </div>
</div>

<div class="fixed bottom-0 left-0 right-0 z-20">
  <div class="bg-white/90 border-t border-primary/50 z-20 shadow-[0_-30px_30px_0px_rgb(255,255,255,0.8)] lg:shadow-[0_-40px_40px_0px_rgb(255,255,255,0.8)]">
    <div class="container mx-auto py-4">
      <div class="text-xs md:text-sm text-center">
        [Minimal Pesanan]
        Coffee Break : 100 Pax (Pesanan dibawah 100 Pax, harga akan disesuaikan dan dikenakan Service Charge).
        Snack Box : 50 Box.
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>