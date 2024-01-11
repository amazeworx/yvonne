<?php

/**
 * Template Name: Menu - Menu Gubukan 2
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
          <h1 class="font-crimson font-bold text-2xl lg:text-3xl tracking-wider lg:tracking-[1em] uppercase text-primary">Menu Gubukan</h1>
          <div class="relative flex items-center gap-4">
            <div class="swiper-button-prev text-primary top-0"></div>
            <div class="swiper-button-next text-primary top-0"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="relative">
      <div id="menu-gubukan" class="swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="grid grid-cols-2 gap-8 mt-8 lg:grid-cols-4 lg:gap-x-10 lg:max-w-[940px] 2xl:max-w-[1024px] relative z-10">
              <div class="col-span-2">
                <h2 class="font-crimson font-bold text-2xl uppercase text-primary">INDONESIA</h2>
                <div class="grid grid-cols-2 gap-x-10 mt-6">
                  <ul class="text-base flex flex-col gap-y-2 leading-snug">
                    <li>Batagor</li>
                    <li>Bubur Ayam</li>
                    <li>Empek-empek</li>
                    <li>Gado-gado</li>
                    <li>Gohiong Bogor</li>
                    <li>Ketupat Tahu Magelang</li>
                    <li>Lumpia Semarang</li>
                    <li>Martabak</li>
                    <li>Mie Salad Betawi</li>
                    <li>Nasi Pecel</li>
                    <li>Rujak Cingur</li>
                  </ul>
                  <ul class="text-base flex flex-col gap-y-2 leading-snug">
                    <li>Salad Corner</li>
                    <li>Sate Ayam dan Lontong</li>
                    <li>Sate Padang dan Ketupat</li>
                    <li>Siomay Bandung</li>
                    <li>Slada Solo</li>
                    <li>Tahu Campur Surabaya</li>
                    <li>Tahu Guling</li>
                    <li>Tahu Pong Semarang</li>
                    <li>Tempe Mendoan</li>
                    <li>Toge Goreng</li>
                  </ul>
                </div>
              </div>
              <div class="col-span-2">
                <h2 class="font-crimson font-bold text-2xl uppercase text-primary">SUP/SOTO/GULAI</h2>
                <div class="grid grid-cols-2 gap-x-10 mt-6">
                  <ul class="text-base flex flex-col gap-y-2 leading-snug">
                    <li>Bakso Tahu Kuah</li>
                    <li>Bakwan Malang</li>
                    <li>Gulai Ayam/Daging + Roti Jala</li>
                    <li>Gulai Tangkar</li>
                    <li>Hotpot Seafood</li>
                    <li>Jwan Lo</li>
                    <li>Laksa Jakarta</li>
                    <li>Shabu-shabu</li>
                    <li>Soto Ayam</li>
                    <li>Soto Bandung</li>
                    <li>Soto Banjarnegara / Soto Banjarmasin</li>
                    <li>Soto Betawi</li>
                    <li>Soto Empal Cirebon / Soto Empal Gentong</li>
                    <li>Soto Lumpia</li>
                  </ul>
                  <ul class="text-base mt-6 flex flex-col gap-y-2 leading-snug">
                    <li>Soto Makassar</li>
                    <li>Soto Mie</li>
                    <li>Soto Padang</li>
                    <li>Soto Sukaraja</li>
                    <li>Soto Sulung</li>
                    <li>Soto Triwindhu</li>
                    <li>Steamboat Sukiyaki</li>
                    <li>Sup Buntut</li>
                    <li>Sup Iga Sapi</li>
                    <li>Sup Tekwan</li>
                    <li>Tengkleng Daging</li>
                    <li>Timlo Solo</li>
                    <li>Tomyum</li>
                    <li>Tongseng Kambing</li>
                    <li>Zuppa Soup</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="hidden xl:block absolute left-0 right-0 top-0 z-0">
              <div class="container mx-auto relative">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/menu-img-05.jpg" alt="" class="absolute right-0 top-0 max-w-[360px] h-auto">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-2 lg:grid-cols-4 lg:gap-x-10 lg:max-w-[940px] 2xl:max-w-[1024px] xl:pb-[240px] relative z-10">
              <div>
                <h2 class="font-crimson font-bold text-2xl uppercase text-primary">ANEKA MIE</h2>
                <ul class="text-base mt-6 flex flex-col gap-y-2 leading-snug">
                  <li>Japchae (Soon Korea)</li>
                  <li>Mie Aceh</li>
                  <li>Mie Ayam Katsu</li>
                  <li>Mie Bebek</li>
                  <li>Mie Jawa</li>
                  <li>Mie Kangkung</li>
                  <li>Mie Kocok Bandung</li>
                  <li>Mie Kocok Medan</li>
                  <li>Mie Mangkok</li>
                  <li>Mie Siram</li>
                  <li>Pangsit Pengantin</li>
                  <li>Yaki Udon</li>
                  <li>Yamie Bakso</li>
                </ul>
              </div>
              <div>
                <h2 class="font-crimson font-bold text-2xl uppercase text-primary">AYAM/BEBEK</h2>
                <ul class="text-base mt-6 flex flex-col gap-y-2 leading-snug">
                  <li>Baked Chicken Cheese</li>
                  <li>Bebek Panggang + Nasi Hainam</li>
                  <li>Chicken Cordon Bleu</li>
                  <li>Chicken Katsu</li>
                  <li>Chicken Teriyaki</li>
                  <li>Kungpao Chicken + Mantau</li>
                </ul>
              </div>
              <div>
                <h2 class="font-crimson font-bold text-2xl uppercase text-primary">DAGING/KAMBING</h2>
                <ul class="text-base mt-6 flex flex-col gap-y-2 leading-snug">
                  <li>Barbeque Beef Ribs</li>
                  <li>Beef Royale (Import)</li>
                  <li>Beef Tepanyaki</li>
                  <li>Kambing Guling</li>
                  <li>Kambing Maroko</li>
                  <li>Korean Barbeque</li>
                  <li>Mongolian Barbeque</li>
                  <li>Swarma Kebab</li>
                </ul>
              </div>
              <div class="pb-12 xl:pb-0">
                <h2 class="font-crimson font-bold text-2xl uppercase text-primary">LAIN-LAIN</h2>
                <ul class="text-base mt-6 flex flex-col gap-y-2 leading-snug">
                  <li>Dimsum</li>
                  <li>Crepas</li>
                  <li>Tacos</li>
                  <li>Fried Selections</li>
                </ul>
              </div>
            </div>
            <div class="hidden xl:block absolute inset-0 z-0 w-full h-full">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/menu-img-06.jpg" alt="" class="absolute left-0 bottom-0 max-w-[500px]">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/menu-img-07.jpg" alt="" class="absolute right-0 top-0 h-auto -translate-y-16">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8 lg:grid-cols-4 lg:gap-x-10 xl:max-w-[900px] 2xl:max-w-[1024px] xl:pb-[40px] relative z-10">
              <div>
                <h2 class="font-crimson font-bold text-2xl uppercase text-primary">IKAN/UDANG</h2>
                <ul class="text-base mt-6 flex flex-col gap-y-2 leading-snug">
                  <li>Fish & Chips</li>
                  <li>Salmon En Croute</li>
                  <li>Baked Salmon</li>
                  <li>Baked Dori Fish</li>
                  <li>Tempura</li>
                </ul>
              </div>
              <div>
                <h2 class="font-crimson font-bold text-2xl uppercase text-primary">SPECIALITIES</h2>
                <ul class="text-base mt-6 flex flex-col gap-y-2 leading-snug">
                  <li>Italian Corner (3macam)</li>
                  <li>Sushi</li>
                  <li>Japanese Corner (5 macam)</li>
                </ul>
              </div>
              <div class="md:col-span-2">
                <h2 class="font-crimson font-bold text-2xl uppercase text-primary">BUFFET MINI</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4">
                  <ul class="text-base mt-6 flex flex-col gap-y-2 leading-snug">
                    <li>Lontong Cap Gomeh</li>
                    <li>Nasi Bakmoy</li>
                    <li>Ayam Nasi Bali</li>
                    <li>Nasi Begana</li>
                    <li>Nasi Brongkos</li>
                    <li>Nasi Gandul Khas Pati</li>
                    <li>Nasi Gudeg</li>
                    <li>Nasi Hainam</li>
                    <li>Nasi Keraton</li>
                    <li>Nasi Langgi</li>
                    <li>Nasi Liwet</li>
                    <li>Nasi Madura</li>
                  </ul>
                  <ul class="text-base mt-2 md:mt-6 flex flex-col gap-y-2 leading-snug">
                    <li>Nasi Pindang Semarang</li>
                    <li>Nasi Uduk</li>
                    <li>Nasi Yvonne’s</li>
                    <li>Rawon Komplit</li>
                    <li>Soto Bangkong</li>
                    <li>Nasi Campur</li>
                    <li>Nasi Jeruk</li>
                    <li>Nasi Kapau Lengkap</li>
                    <li>Nasi Kecombrang</li>
                    <li>Nasi Nusantara</li>
                  </ul>
                </div>
                <div class="mt-12 md:mt-16 xl:mt-20 text-sm pb-12 md:pb-0">
                  Pesanan minimal untuk menu gubuk :<br />
                  100 Porsi untuk di rumah.<br />
                  150 Porsi untuk di gedung.<br />
                  Pemesanan dibawah jumlah minimal akan dikenakan charge 15%.<br />
                </div>
              </div>
            </div>
            <div class="hidden xl:block absolute inset-0 z-0 w-full h-full">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/menu-img-08.jpg" alt="" class="absolute left-0 bottom-0 max-w-[440px]">
              <div class="max-w-[360px] w-full h-full absolute right-0 top-0">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/menu-img-09.jpg" alt="" class="object-cover w-full h-full">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="grid grid-cols-1 md:grid-cols-2 mx-auto md:gap-x-10 mt-8 relative z-10 xl:max-w-[460px]">
              <div>
                <h2 class="font-crimson font-bold text-2xl uppercase text-primary">DESSERT</h2>
                <ul class="text-base mt-6 flex flex-col gap-y-2 leading-snug">
                  <li>Aneka Juice</li>
                  <li>Banana Split</li>
                  <li>Chocolate Melt + Ice Cream</li>
                  <li>Coffee Float</li>
                  <li>Es Cendol/Es Cincau/Es Teler</li>
                  <li>Es Doger/Es Puter</li>
                  <li>Es Podeng</li>
                  <li>Ice Waffle</li>
                  <li>Poffertjes + Crepe Suzette + Ice Cream</li>
                  <li>Warung Jawa (Jajanan Pasar, Jenang, Teh Kopi)</li>
                  <li>Warung Kopi + Jajanan Pasar</li>
                </ul>
              </div>
              <div class="mt-8 md:mt-0">
                <h2 class="font-crimson font-bold text-2xl uppercase text-primary">VEGETARIAN</h2>
                <ul class="text-base mt-6 flex flex-col gap-y-2 leading-snug">
                  <li>Tersedia 5 Lauk Vegetarian (Minimal Pesanan 100 Porsi)</li>
                </ul>
              </div>
            </div>
            <div class="mx-auto py-10 xl:max-w-[460px] xl:py-[40px]">
              <div class="text-sm">
                Pesanan minimal untuk menu gubuk :<br />
                100 Porsi untuk di rumah.<br />
                150 Porsi untuk di gedung.<br />
                Pemesanan dibawah jumlah minimal akan dikenakan charge 15%.<br />
              </div>
            </div>
            <div class="hidden xl:block absolute inset-0 z-0 w-full h-full">
              <div class="max-w-[360px] w-full h-full absolute left-0 top-0">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/menu-img-10.jpg" alt="" class="object-cover w-full h-full">
              </div>
              <div class="max-w-[360px] w-full h-full absolute right-0 top-0">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/menu-img-11.jpg" alt="" class="object-cover w-full h-full">
              </div>
            </div>
          </div>


        </div>
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