<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400;0,6..96,500;0,6..96,600;0,6..96,700;0,6..96,800;1,6..96,400;1,6..96,500;1,6..96,600;1,6..96,700;1,6..96,800&family=Nunito:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&&family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet" />

  <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-black'); ?>>
  <div class="drawer drawer-end">
    <input id="my-drawer" type="checkbox" class="drawer-toggle" />
    <?php do_action('yvonne_site_before'); ?>

    <div class="drawer-content">
      <div id="page" class="min-h-screen flex flex-col">

        <?php do_action('yvonne_header'); ?>

        <header class="bg-white fixed w-full top-0 left-0 right-0 z-30">
          <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
              <div class="flex gap-x-4 items-center">
                <a href="/"><img class="h-12 xl:h-20" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="Yvonne Catering" /></a>
                <img class="h-10 lg:hidden xl:h-20" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/50th-header.png" alt="" />
              </div>
              <div class="hidden lg:flex">
                <ul class="flex">
                  <li class="px-4"><a class="text-lg text-primary hover:underline" href="<?php echo site_url(); ?>">Beranda</a></li>
                  <li class="px-4"><a class="text-lg text-primary hover:underline" href="<?php echo site_url(); ?>/tentang-kami">Tentang Kami</a></li>
                  <!-- <li class="px-4"><a class="text-lg text-primary hover:underline" href="<?php echo site_url(); ?>/layanan">Layanan</a></li> -->
                  <li class="dropdown px-4 relative">
                    <div tabindex="0" role="button" class="text-lg text-primary hover:underline">Menu</div>
                    <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow-md border border-solid border-slate-100 bg-white rounded-box">
                      <li>
                        <a class="text-lg py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-primary hover:bg-gray-100 active:!bg-primary active:!text-white" href="<?php echo site_url(); ?>/menu/paket-buffet">Paket Buffet</a>
                      </li>
                      <li>
                        <a class="text-lg py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-primary hover:bg-gray-100 active:!bg-primary active:!text-white" href="<?php echo site_url(); ?>/menu/menu-buffet">Menu Buffet</a>
                      </li>
                      <li>
                        <a class="text-lg py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-primary hover:bg-gray-100 active:!bg-primary active:!text-white" href="<?php echo site_url(); ?>/menu/menu-gubukan">Menu Gubukan</a>
                      </li>
                      <li>
                        <a class="text-lg py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-primary hover:bg-gray-100 active:!bg-primary active:!text-white" href="<?php echo site_url(); ?>/menu/box-nasi">Box Nasi</a>
                      </li>
                      <li>
                        <a class="text-lg py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-primary hover:bg-gray-100 active:!bg-primary active:!text-white" href="<?php echo site_url(); ?>/menu/coffee-break-snack-box">Coffee Break / Snack Box</a>
                      </li>
                    </ul>
                  </li>
                  <li class="px-4"><a class="text-lg text-primary hover:underline" href="<?php echo site_url(); ?>/galeri">Galeri</a></li>
                  <!-- <li class="px-4"><a class="text-lg text-primary hover:underline" href="<?php echo site_url(); ?>/testimoni">Testimoni</a></li> -->
                  <li class="dropdown px-4 relative">
                    <div tabindex="0" role="button" class="text-lg text-primary hover:underline">Hubungi Kami</div>
                    <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow-md border border-solid border-slate-100 bg-white rounded-box">
                      <li>
                        <a class="text-lg py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-primary hover:bg-gray-100 active:!bg-primary active:!text-white" href="<?php echo site_url(); ?>/kontak-kami">Kontak Kami</a>
                      </li>
                      <li>
                        <a class="text-lg py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-primary hover:bg-gray-100 active:!bg-primary active:!text-white" href="<?php echo site_url(); ?>/lokasi-kami">Lokasi Kami</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="hidden lg:block">
                <img class="h-10 xl:h-20" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/50th-header.png" alt="" />
              </div>
              <div class="lg:hidden">
                <label for="my-drawer" class="inline-block p-2 bg-white text-primary rounded hover:bg-white focus:bg-white focus:outline-none focus:ring-0 active:bg-white -ml-2 drawer-button">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 11H16V13H4V11ZM4 6H20V8H4V6ZM4 18H11.235V16H4V18Z" fill="currentColor" />
                  </svg>
                </label>

              </div>
            </div>
          </div>
        </header>

        <main>