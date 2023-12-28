<?php

/**
 * Template Name: Menu - Menu Box Nasi
 * Template Post Type: page
 *
 */

get_header(); ?>

<div class="container mx-auto relative min-h-screen pt-20 xl:pt-36">
  <div class="relative z-10">
    <div class="bg-white sticky top-20 pt-4 z-20">
      <div class="py-4 border-t border-b border-primary/50">
        <div class="flex justify-between">
          <h1 class="font-crimson font-bold text-2xl lg:text-3xl tracking-wider lg:tracking-[1em] uppercase text-primary">Box Nasi</h1>
          <!-- <div class="relative flex items-center gap-4">
            <div class="swiper-button-prev text-primary top-0"></div>
            <div class="swiper-button-next text-primary top-0"></div>
          </div> -->
        </div>
      </div>
    </div>
    <div class="relative">
      <div id="menu-gubukan" class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3 xl:grid-cols-4 xl:gap-x-10 mt-8 relative z-10 xl:max-w-[940px] xl:pb-[220px]">
              <div class="md:col-span-1 xl:col-span-1">
                <h2 class="font-crimson font-bold text-2xl text-primary mb-4">4 Lauk</h2>
                <ul class="text-base flex flex-col gap-y-2 leading-snug">
                  <li>Nasi Putih, Ayam, Sayuran, Telur, Mie, Kerupuk, Buah Pisang, Air Mineral Gelas</li>
                </ul>
                <h2 class="font-crimson font-bold text-2xl text-primary mt-8 mb-4">4 Lauk</h2>
                <ul class="text-base flex flex-col gap-y-2 leading-snug">
                  <li>Nasi Putih, Ayam, Sayuran, Daging, Mie/ Telur, Kerupuk, Buah Pisang, Air Mineral Gelas</li>
                </ul>
                <h2 class="font-crimson font-bold text-2xl text-primary mt-8 mb-4">5 Lauk</h2>
                <ul class="text-base flex flex-col gap-y-2 leading-snug">
                  <li>Nasi Putih, Ayam, Daging, Ikan, Telur/ Sayuran, Mie, Kerupuk, Buah Jeruk, Air Mineral Gelas</li>
                </ul>
              </div>
              <div class="md:col-span-2 xl:col-span-3">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-3 gap-x-10">
                  <div>
                    <h2 class="font-crimson font-bold text-2xl text-primary mb-4">Box Nasi Kuning</h2>
                    <ul class="text-base flex flex-col gap-y-2 leading-snug">
                      <li>Nasi Kuning, Rendang Daging, Ayam Goreng Bacem, Oseng Tempe, Telur Bumbu Balado, Ikan Crispy, Sambel Bajak
                        + Timun Kemangi, Kering Kentang Pedas/Emping,
                        Buah Pisang, Air Mineral Gelas</li>
                    </ul>
                  </div>
                  <div>
                    <h2 class="font-crimson font-bold text-2xl text-primary mb-4">Box Nasi Special</h2>
                    <ul class="text-base flex flex-col gap-y-2 leading-snug">
                      <li>Nasi Yvonne’s</li>
                      <li>Nasi Kecombrang</li>
                      <li>Nasi Bali</li>
                      <li>Nasi Langgi</li>
                      <li>Nasi Jeruk</li>
                      <li>Nasi Begana</li>
                      <li>Nasi Campur</li>
                    </ul>
                  </div>
                  <div>
                    <h2 class="font-crimson font-bold text-2xl text-primary mb-4">Box Nasi Premium</h2>
                    <ul class="text-base flex flex-col gap-y-2 leading-snug">
                      <li>(Dengan packing special sesuai permintaan)</li>
                    </ul>
                  </div>
                </div>
                <div class="pb-20 xl:pb-0 mt-12 md:mt-20 text-base">
                  Free delivery di wilayah Jakarta, untuk pemesanan minimal 100 Box.<br />Menu dapat disesuaikan dengan permintaan, silahkan menghubungi staff marketing kami.<br />
                </div>
              </div>
            </div>
            <div class="hidden xl:block absolute inset-0 z-0 w-full h-full">
              <div class="max-w-[360px] w-full h-full absolute right-0 top-0">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/menu-img-14.jpg" alt="" class="object-cover w-full h-full">
              </div>
              <div class="absolute left-0 bottom-0">
                <div class="flex gap-x-10 items-center">
                  <div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/menu-img-12.jpg" alt="" class="">
                  </div>
                  <div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/menu-img-13.jpg" alt="" class="">
                  </div>
                </div>
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
  const menuBuffet = new Swiper('#menu-gubukan', {
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>

<?php get_footer(); ?>