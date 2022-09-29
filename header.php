<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda&family=Nunito:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet" />

  <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-black'); ?>>

  <?php do_action('yvonne_site_before'); ?>

  <div id="page" class="min-h-screen flex flex-col">

    <?php do_action('yvonne_header'); ?>

    <header class="bg-white fixed w-full top-0 left-0 right-0 z-20">
      <div class="container mx-auto px-4 py-4">
        <div class="flex items-center justify-between">
          <div class="xl:hidden">
            <button class="inline-block p-2.5 bg-white text-primary rounded hover:bg-white focus:bg-white focus:outline-none focus:ring-0 active:bg-white mr-4 -ml-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 11H16V13H4V11ZM4 6H20V8H4V6ZM4 18H11.235V16H4V18Z" fill="currentColor" />
              </svg>
            </button>
            <div class="offcanvas offcanvas-start fixed bottom-0 flex flex-col max-w-full bg-white invisible bg-clip-padding shadow-sm outline-none transition duration-300 ease-in-out text-gray-700 top-0 left-0 border-none w-60" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
              <div class="offcanvas-header flex items-center justify-between p-4">
                <h5 class="offcanvas-title mb-0 leading-normal font-semibold" id="offcanvasRightLabel">&nbsp;</h5>
                <button type="button" class="btn-close box-content w-4 h-4 p-2 -my-5 -mr-2 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body flex-grow p-4 overflow-y-auto">
                <ul class="menu flex flex-col">
                  <li class="py-2"><a class="text-lg text-primary hover:underline" href="<?php echo site_url(); ?>">Beranda</a></li>
                  <li class="py-2"><a class="text-lg text-primary hover:underline" href="<?php echo site_url(); ?>/tentang-kami">Tentang Kami</a></li>
                  <li class="py-2"><a class="text-lg text-primary hover:underline" href="<?php echo site_url(); ?>/layanan">Layanan</a></li>
                  <li class="py-2"><a class="text-lg text-primary hover:underline" href="<?php echo site_url(); ?>/menu">Menu</a></li>
                  <li class="py-2"><a class="text-lg text-primary hover:underline" href="<?php echo site_url(); ?>/galeri">Galeri</a></li>
                  <li class="py-2"><a class="text-lg text-primary hover:underline" href="<?php echo site_url(); ?>/testimoni">Testimoni</a></li>
                  <li class="py-2"><a class="text-lg text-primary hover:underline" href="<?php echo site_url(); ?>/kontak-kami">Kontak Kami</a></li>
                  <li class="py-2"><a class="text-lg text-primary hover:underline" href="<?php echo site_url(); ?>/lokasi-kami">Lokasi Kami</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div>
            <a href="/"><img class="h-12 xl:h-20" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="Yvonne Catering" /></a>
          </div>
          <div>
            <ul class="menu hidden xl:flex">
              <li class="px-4"><a class="text-lg text-primary hover:underline" href="<?php echo site_url(); ?>">Beranda</a></li>
              <li class="px-4"><a class="text-lg text-primary hover:underline" href="<?php echo site_url(); ?>/tentang-kami">Tentang Kami</a></li>
              <li class="px-4"><a class="text-lg text-primary hover:underline" href="<?php echo site_url(); ?>/layanan">Layanan</a></li>
              <li class="px-4"><a class="text-lg text-primary hover:underline" href="<?php echo site_url(); ?>/menu">Menu</a></li>
              <li class="px-4"><a class="text-lg text-primary hover:underline" href="<?php echo site_url(); ?>/galeri">Galeri</a></li>
              <li class="px-4"><a class="text-lg text-primary hover:underline" href="<?php echo site_url(); ?>/testimoni">Testimoni</a></li>
              <li class="px-4 relative">
                <a id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" class="text-lg text-primary hover:underline" href="#">Hubungi Kami</a>
                <ul class="dropdown-menu min-w-max absolute hidden bg-white text-lg z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 m-0 bg-clip-padding border-none" aria-labelledby="dropdownMenuButton">
                  <li>
                    <a class="dropdown-item text-lg py-2 px-5 font-normal block w-full whitespace-nowrap bg-transparent text-primary hover:bg-gray-100" href="<?php echo site_url(); ?>/kontak-kami">Kontak Kami</a>
                  </li>
                  <li>
                    <a class="dropdown-item text-lg py-2 px-5 font-normal block w-full whitespace-nowrap bg-transparent text-primary hover:bg-gray-100" href="<?php echo site_url(); ?>/lokasi-kami">Lokasi Kami</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div>
            <img class="h-10 xl:h-20" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/50th-header.png" alt="" />
          </div>
        </div>
      </div>
    </header>

    <main>