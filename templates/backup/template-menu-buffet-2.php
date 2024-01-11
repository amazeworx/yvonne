<?php

/**
 * Template Name: Menu - Menu Buffet 2
 * Template Post Type: page
 *
 */

get_header(); ?>

<style>
  :root {
    --swiper-navigation-size: 24px;
  }

  .swiper-button-next,
  .swiper-button-prev {
    position: relative;
    left: auto;
    right: auto;
    top: auto;
    bottom: auto;
    margin-top: 0;
  }
</style>

<div class="container mx-auto relative min-h-screen pt-20 xl:pt-36">
  <div class="relative z-10">
    <div class="bg-white sticky top-20 pt-4 z-20">
      <div class="py-4 border-t border-b border-primary/50">
        <div class="flex justify-between">
          <h1 class="font-crimson font-bold text-2xl lg:text-3xl tracking-wider lg:tracking-[1em] uppercase text-primary">Menu Buffet</h1>
          <div class="relative flex items-center gap-4">
            <div class="swiper-button-prev text-primary top-0"></div>
            <div class="swiper-button-next text-primary top-0"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="relative">
      <div id="menu-buffet" class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="grid grid-cols-1 gap-12 mt-8 md:grid-cols-2 lg:grid-cols-4 md:gap-x-10 md:max-w-[960px] 2xl:max-w-[1024px] relative z-10">
              <div>
                <h2 class="font-crimson font-bold text-2xl uppercase text-primary">SUP</h2>
                <ul class="text-base mt-6 flex flex-col gap-y-2 leading-snug">
                  <li>Ayam Tahu Champignon</li>
                  <li>Bakso Tahu Kuah</li>
                  <li>Chicken & Smoked Beef</li>
                  <li>Cream of Chicken</li>
                  <li>Kepiting</li>
                  <li>Asparagus</li>
                  <li>Kimlo</li>
                  <li>Pangsit Pengantin</li>
                  <li>Sweet Corn</li>
                  <li>Tekwan</li>
                  <li>Yvonne Special</li>
                </ul>
              </div>
              <div>
                <h2 class="font-crimson font-bold text-2xl uppercase text-primary">SALAD</h2>
                <ul class="text-base mt-6 flex flex-col gap-y-2 leading-snug">
                  <li>Asinan Jakarta</li>
                  <li>Fruit Salad</li>
                  <li>Huzarensla</li>
                  <li>Macaroni Salad</li>
                  <li>Mie Salad Betawi</li>
                  <li>Mixed Salad</li>
                  <li>Oriental Salad</li>
                  <li>Potato Salad</li>
                  <li>Rujak Pengantin</li>
                  <li>Slada Bangkok</li>
                  <li>Yvonne’s Salad</li>
                </ul>
              </div>
              <div>
                <h2 class="font-crimson font-bold text-2xl uppercase text-primary">DAGING</h2>
                <ul class="text-base mt-6 flex flex-col gap-y-2 leading-snug">
                  <li>Beef & Mushroom Beef Barbeque</li>
                  <li>Beef Broccoli/Mixed Vegetables</li>
                  <li>Beef Bulgogi</li>
                  <li>Beef Cubes & Mashed Potato</li>
                  <li>Beef Steak</li>
                  <li>Beef Teriyaki</li>
                  <li>Black Pepper Beef</li>
                  <li>Cantonese Style Beef</li>
                  <li>Korean Style Beef Meatballs</li>
                  <li>Rendang</li>
                  <li>Empal</li>
                </ul>
              </div>
              <div class="pb-20 lg:pb-40 2xl:pb-44">
                <h2 class="font-crimson font-bold text-2xl uppercase text-primary">AYAM</h2>
                <ul class="text-base mt-6 flex flex-col gap-y-2 leading-snug">
                  <li>Ayam Panggang Kecap/ Pedas</li>
                  <li>Ayam Woku / Sambel Matah</li>
                  <li>Black Pepper Chicken</li>
                  <li>Chicken Cordon Bleu</li>
                  <li>Chicken Green Curry</li>
                  <li>Chicken Steak</li>
                  <li>Chicken Teriyaki</li>
                  <li>Galantine & Mixed Vegetables</li>
                  <li>Korean Chicken Garlic</li>
                  <li>Kung Pao Chicken</li>
                  <li>Orange Chicken</li>
                  <li>Thai Barbeque</li>
                </ul>
              </div>
            </div>
            <div class="hidden xl:block absolute left-0 right-0 bottom-0 z-0">
              <div class="container mx-auto relative">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/menu-img-01.jpg" alt="" class="absolute left-0 bottom-0">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/menu-img-02.jpg" alt="" class="absolute right-0 bottom-0 max-w-[320px] h-auto">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="grid grid-cols-1 mt-8 md:grid-cols-2 lg:grid-cols-4 md:gap-10 md:max-w-[940px] lg:max-w-[1024px] relative z-10">
              <div>
                <h2 class="font-crimson font-bold text-2xl uppercase text-primary">IKAN</h2>
                <ul class="text-base mt-6 flex flex-col gap-y-2 leading-snug">
                  <li>Dori Tartar Sauce / Thai Sauce</li>
                  <li>Dori Tim</li>
                  <li>Fish Balls Balado</li>
                  <li>Gindara Chili Sauce / Tartar Sauce</li>
                </ul>
              </div>
              <div>
                <h2 class="hidden md:block font-crimson font-bold text-2xl uppercase text-primary">&nbsp;</h2>
                <ul class="text-base mt-2 md:mt-6 flex flex-col gap-y-2 leading-snug">
                  <li>Gindara Panggang</li>
                  <li>Ikan Bakar Manado</li>
                  <li>Kakap Finger Chili Sauce</li>
                  <li>Kakap Meuniere</li>
                  <li>Kakap Rica-rica/Woku</li>
                  <li>Kakap Tahu Paprika</li>
                </ul>
                <h2 class="font-crimson font-bold text-2xl uppercase text-primary mt-6">UDANG</h2>
                <ul class="text-base mt-6 flex flex-col gap-y-2 leading-snug">
                  <li>Udang Goreng Tepung</li>
                  <li>Sambal Goreng Udang</li>
                </ul>
              </div>
              <div class="mt-6 md:mt-0">
                <h2 class="font-crimson font-bold text-2xl uppercase text-primary">MIE</h2>
                <ul class="text-base mt-6 flex flex-col gap-y-2 leading-snug">
                  <li>Bakmi Goreng Aceh</li>
                  <li>Bakmie/Bihun Goreng</li>
                  <li>Kwetiau Goreng</li>
                  <li>Mie Hijau</li>
                  <li>Soun Cha Yaki Udon</li>
                </ul>
                <h2 class="font-crimson font-bold text-2xl uppercase text-primary mt-6">PASTA</h2>
                <ul class="text-base mt-6 flex flex-col gap-y-2 leading-snug">
                  <li>Spaghetti Bolognese</li>
                  <li>Fettucine Carbonara</li>
                </ul>
              </div>
              <div class="mt-6 md:mt-0 md:pb-40">
                <h2 class="font-crimson font-bold text-2xl uppercase text-primary">SCHOTEL</h2>
                <ul class="text-base mt-6 flex flex-col gap-y-2 leading-snug">
                  <li>Chicken Souffle</li>
                  <li>Lasagna</li>
                  <li>Macaroni Schotel</li>
                  <li>Pastel Panggang</li>
                  <li>Tuna Casserole</li>
                </ul>
                <h2 class="font-crimson font-bold text-2xl uppercase text-primary mt-6">SAYURAN/ LAIN-LAIN</h2>
                <ul class="text-base mt-6 flex flex-col gap-y-2 leading-snug">
                  <li>Baby Buncis + Minced Beef</li>
                  <li>Cah Sayuran</li>
                  <li>Cakwee isi</li>
                  <li>Capcay</li>
                  <li>Sambal Goreng Sapo Tahu</li>
                  <li>Sawi Pokcay & Jamur</li>
                </ul>
              </div>
            </div>
            <div class="hidden xl:block absolute left-0 right-0 bottom-0 z-0">
              <div class="container mx-auto relative">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/menu-img-03.jpg" alt="" class="absolute left-0 bottom-0">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/menu-img-04.jpg" alt="" class="absolute right-0 bottom-0 max-w-[340px] h-auto">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<script>
  const menuBuffet = new Swiper('#menu-buffet', {
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>

<?php get_footer(); ?>