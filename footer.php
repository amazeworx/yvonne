</main>

<?php do_action('yvonne_content_after'); ?>

</div>

</div>
<div class="drawer-side z-50 lg:hidden">
  <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
  <div class="menu p-4 w-80 min-h-full bg-white">
    <label for="my-drawer" aria-label="close sidebar" class="absolute top-4 right-4 inline-flex items-center justify-center text-center w-8 h-8 text-2xl rounded-lg bg-primary/60 text-white active:bg-primary">&times;</label>
    <div class="pt-10">
      <ul class="flex flex-col">
        <li class="py-0"><a class="text-lg font-semibold text-primary active:!bg-primary active:!text-white" href="<?php echo site_url(); ?>">Beranda</a></li>
        <li class="py-0"><a class="text-lg font-semibold text-primary active:!bg-primary active:!text-white" href="<?php echo site_url(); ?>/tentang-kami">Tentang Kami</a></li>
        <!-- <li class="py-0"><a class="text-lg font-semibold text-primary active:!bg-primary active:!text-white" href="<?php echo site_url(); ?>/layanan">Layanan</a></li> -->
        <li class="py-0"><a class="text-lg font-semibold text-primary active:!bg-primary active:!text-white" href="<?php echo site_url(); ?>/menu/paket-buffet">Menu</a>
          <ul class="pl-2">
            <li class="py-0"><a class="text-lg font-semibold text-primary active:!bg-primary active:!text-white" href="<?php echo site_url(); ?>/menu/paket-buffet">Paket Buffet</a></li>
            <li class="py-0"><a class="text-lg font-semibold text-primary active:!bg-primary active:!text-white" href="<?php echo site_url(); ?>/menu/menu-buffet">Menu Buffet</a></li>
            <li class="py-0"><a class="text-lg font-semibold text-primary active:!bg-primary active:!text-white" href="<?php echo site_url(); ?>/menu/menu-gubukan">Menu Gubukan</a></li>
            <li class="py-0"><a class="text-lg font-semibold text-primary active:!bg-primary active:!text-white" href="<?php echo site_url(); ?>/menu/box-nasi">Box Nasi</a></li>
            <li class="py-0"><a class="text-lg font-semibold text-primary active:!bg-primary active:!text-white" href="<?php echo site_url(); ?>/menu/coffee-break-snack-box">Coffee Break / Snack Box</a></li>
          </ul>
        </li>
        <li class="py-0"><a class="text-lg font-semibold text-primary active:!bg-primary active:!text-white" href="<?php echo site_url(); ?>/galeri">Galeri</a></li>
        <!-- <li class="py-0"><a class="text-lg font-semibold text-primary active:!bg-primary active:!text-white" href="<?php echo site_url(); ?>/testimoni">Testimoni</a></li> -->
        <li class="py-0"><a class="text-lg font-semibold text-primary active:!bg-primary active:!text-white" href="<?php echo site_url(); ?>/kontak-kami">Kontak Kami</a></li>
        <li class="py-0"><a class="text-lg font-semibold text-primary active:!bg-primary active:!text-white" href="<?php echo site_url(); ?>/lokasi-kami">Lokasi Kami</a></li>
      </ul>
    </div>
  </div>
</div>
</div>
<?php wp_footer(); ?>

</body>

</html>