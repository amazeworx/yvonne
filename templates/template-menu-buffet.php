<?php

/**
 * Template Name: Menu - Menu Buffet
 * Template Post Type: page
 *
 */

get_header(); ?>

<div class="container mx-auto relative min-h-screen pt-20 pb-8 lg:pb-12 xl:pt-[92px] xl:pb-12">
  <div class="relative z-10">

    <div class="bg-white sticky top-20 pt-0 z-20 lg:pt-4 xl:pt-8 xl:top-[92px]">
      <div class="py-4 border-t border-b border-primary/50">
        <div class="flex justify-between">
          <h1 class="font-crimson font-bold text-2xl tracking-wider lg:tracking-[0.5em] xl:text-3xl xl:tracking-[1em] uppercase text-primary">Menu Buffet</h1>
        </div>
      </div>
    </div>

    <div class="relative">

      <div class="flex flex-col pb-0 pt-8 lg:flex-row lg:py-8 lg:gap-x-8 xl:gap-x-12 2xl:gap-x-16 xl:py-8">
        <div class="order-2 lg:w-2/3 lg:order-1 xl:w-3/4">
          <div class="py-6 lg:py-8 xl:py-12">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3 md:gap-x-8 xl:gap-x-12 2xl:gap-x-16 relative z-10">
              <div>
                <h2 class="font-crimson font-bold text-2xl lg:text-xl xl:text-2xl uppercase text-primary mb-4">SUP</h2>
                <ul class="text-base leading-snug [&>li]:py-1">
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
                <h2 class="font-crimson font-bold text-2xl lg:text-xl xl:text-2xl uppercase text-primary mb-4">SALAD</h2>
                <ul class="text-base leading-snug [&>li]:py-1">
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
                <h2 class="font-crimson font-bold text-2xl lg:text-xl xl:text-2xl uppercase text-primary mb-4">DAGING</h2>
                <ul class="text-base leading-snug [&>li]:py-1">
                  <li>Beef & Mushroom</li>
                  <li>Beef Barbeque</li>
                  <li>Beef Broccoli/Mixed Vegetables</li>
                  <li>Beef Bulgogi</li>
                  <li>Beef Cubes & Mashed Potato</li>
                  <li>Beef Steak</li>
                  <li>Beef Teriyaki</li>
                  <li>Black Pepper Beef</li>
                  <li>Cantonese Style Beef</li>
                  <li>Korean Style Beef</li>
                  <li>Meatballs</li>
                  <li>Rendang</li>
                  <li>Empal</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="order-1 lg:w-1/3 lg:order-2 xl:w-1/4">
          <div class="aspect-w-16 aspect-h-8 lg:aspect-none lg:w-full lg:h-full rounded-xl overflow-hidden">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/dekor-caping-4_5.jpg" alt="" class="hidden lg:block object-cover !w-full !h-full">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/dekor-caping-16_9.jpg" alt="" class="lg:hidden object-cover !w-full !h-full">
          </div>
        </div>
      </div>

      <div class="flex flex-col pb-0 pt-8 lg:flex-row lg:py-8 lg:gap-x-8 xl:gap-x-12 2xl:gap-x-16 xl:py-8">
        <div class="order-2 lg:w-2/3 lg:order-2 xl:w-3/4">
          <div class="py-6 lg:py-8 xl:py-12">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3 md:gap-x-8 xl:gap-x-12 2xl:gap-x-16 relative z-10">
              <div>
                <h2 class="font-crimson font-bold text-2xl lg:text-xl xl:text-2xl uppercase text-primary mb-4">AYAM</h2>
                <ul class="text-base leading-snug [&>li]:py-1">
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
              <div>
                <h2 class="font-crimson font-bold text-2xl lg:text-xl xl:text-2xl uppercase text-primary mb-4">IKAN</h2>
                <ul class="text-base leading-snug [&>li]:py-1">
                  <li>Dori Tartar Sauce / Thai Sauce</li>
                  <li>Dori Tim</li>
                  <li>Fish Balls Balado</li>
                  <li>Gindara Chili Sauce / Tartar Sauce</li>
                  <li>Gindara Panggang</li>
                  <li>Ikan Bakar Manado</li>
                  <li>Kakap Finger Chili Sauce</li>
                  <li>Kakap Meuniere</li>
                  <li>Kakap Rica-rica / Woku</li>
                  <li>Kakap Tahu Paprika</li>
                </ul>
              </div>
              <div>
                <div class="pb-8">
                  <h2 class="font-crimson font-bold text-2xl lg:text-xl xl:text-2xl uppercase text-primary mb-4">UDANG</h2>
                  <ul class="text-base leading-snug [&>li]:py-1">
                    <li>Udang Goreng Tepung</li>
                    <li>Sambal Goreng Udang</li>
                  </ul>
                </div>
                <div>
                  <h2 class="font-crimson font-bold text-2xl lg:text-xl xl:text-2xl uppercase text-primary mb-4">PASTA</h2>
                  <ul class="text-base leading-snug [&>li]:py-1">
                    <li>Spaghetti Bolognese</li>
                    <li>Fettucine Carbonara</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="order-1 lg:w-1/3 lg:order-1 xl:w-1/4">
          <div class="aspect-w-16 aspect-h-8 lg:aspect-none lg:w-full lg:h-full rounded-xl overflow-hidden">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/ayam-woku-4_5.jpg" alt="" class="hidden lg:block object-cover !w-full !h-full">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/ayam-woku-16_9.jpg" alt="" class="lg:hidden object-cover !w-full !h-full">
          </div>
        </div>
      </div>

      <div class="flex flex-col pb-0 pt-8 lg:flex-row lg:py-8 lg:gap-x-8 xl:gap-x-12 2xl:gap-x-16 xl:py-8">
        <div class="order-2 lg:w-2/3 lg:order-1 xl:w-3/4">
          <div class="py-6 lg:py-8 xl:py-12">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3 md:gap-x-8 xl:gap-x-12 2xl:gap-x-16 relative z-10">
              <div>
                <h2 class="font-crimson font-bold text-2xl lg:text-xl xl:text-2xl uppercase text-primary mb-4">MIE</h2>
                <ul class="text-base leading-snug [&>li]:py-1">
                  <li>Bakmi Goreng Aceh</li>
                  <li>Bakmie/Bihun Goreng</li>
                  <li>Kwetiau Goreng</li>
                  <li>Mie Hijau</li>
                  <li>Soun Cha Yaki Udon</li>
                </ul>
              </div>
              <div>
                <h2 class="font-crimson font-bold text-2xl lg:text-xl xl:text-2xl uppercase text-primary mb-4">SCHOTEL</h2>
                <ul class="text-base leading-snug [&>li]:py-1">
                  <li>Chicken Souffle</li>
                  <li>Lasagna</li>
                  <li>Macaroni Schotel</li>
                  <li>Pastel Panggang</li>
                  <li>Tuna Casserole</li>
                </ul>
              </div>
              <div>
                <h2 class="font-crimson font-bold text-2xl lg:text-xl xl:text-2xl uppercase text-primary mb-4">SAYURAN / LAIN-LAIN</h2>
                <ul class="text-base leading-snug [&>li]:py-1">
                  <li>Baby Buncis + Minced Beef</li>
                  <li>Cah Sayuran</li>
                  <li>Cakwee isi</li>
                  <li>Capcay</li>
                  <li>Sambal Goreng Sapo Tahu</li>
                  <li>Sawi Pokcay & Jamur</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="order-1 lg:w-1/3 lg:order-2 xl:w-1/4">
          <div class="aspect-w-16 aspect-h-8 lg:aspect-none lg:w-full lg:h-full rounded-xl overflow-hidden">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/pastel-panggang-4_5.jpg" alt="" class="hidden lg:block object-cover !w-full !h-full">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/pastel-panggang-16_9.jpg" alt="" class="lg:hidden object-cover !w-full !h-full">
          </div>
        </div>
      </div>

    </div>

  </div>
</div>

<?php get_footer(); ?>