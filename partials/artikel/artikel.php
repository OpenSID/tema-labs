<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php if($single_artikel["id"]) : ?>
<div class="block-content" data-toggle="slimscroll" data-height="1200px" data-color="#ef5350" data-opacity="1"
    data-always-visible="true">
    <div class="row justify-content-center pb-20">
        <div class="col-lg-12 ml-10 mr-10 text-center">
            <h2 class="h2 font-w400"><?= $single_artikel["judul"]?></h2>
            <div class="font-size-md">
                <h6 class="h5 font-w400"><?= $single_artikel['owner']?>, <?= tgl_indo2($single_artikel['tgl_upload']);?>
                </h6>
            </div>
            <hr>
            <p class="float-left"><?php if($single_artikel["isi"]!=''): ?></p>

            <?php endif; ?>
            <!-- GAMBAR TAMBAHAN -->
            <div class="row no-gutters push js-gallery img-thumb-100 js-gallery-enabled">
                <?php if($single_artikel['gambar']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar'])): ?>
                <div class="col-12 animated fadeIn">
                    <a class="img-link img-link-simple img-link-zoom-in img-lightbox"
                        href="<?= AmbilFotoArtikel($single_artikel['gambar3'],'sedang')?>">
                        <img height="300px" class="img-thumb"
                            src="<?= AmbilFotoArtikel($single_artikel['gambar'],'sedang')?>" alt="">
                    </a>
                </div>
                <?php endif; ?>
                <?php if($single_artikel['gambar1']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar1'])): ?>
                <div class="col-4 animated fadeIn">
                    <a class="img-link img-link-simple img-link-zoom-in img-lightbox"
                        href="<?= AmbilFotoArtikel($single_artikel['gambar3'],'sedang')?>">
                        <img height="160px" class="img-thumb"
                            src="<?= AmbilFotoArtikel($single_artikel['gambar1'],'sedang')?>" alt="">
                    </a>
                </div>
                <?php endif; ?>
                <?php if($single_artikel['gambar2']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar2'])): ?>
                <div class="col-4 animated fadeIn">
                    <a class="img-link img-link-simple img-link-zoom-in img-lightbox"
                        href="<?= AmbilFotoArtikel($single_artikel['gambar3'],'sedang')?>">
                        <img height="160px" class="img-thumb"
                            src="<?= AmbilFotoArtikel($single_artikel['gambar2'],'sedang')?>" alt="">
                    </a>
                </div>
                <?php endif; ?>
                <?php if($single_artikel['gambar3']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar3'])): ?>
                <div class="col-4 animated fadeIn">
                    <a class="img-link img-link-simple img-link-zoom-in img-lightbox"
                        href="<?= AmbilFotoArtikel($single_artikel['gambar3'],'sedang')?>">
                        <img height="160px" class="img-thumb"
                            src="<?= AmbilFotoArtikel($single_artikel['gambar3'],'sedang')?>" alt="">
                    </a>
                </div>
                <?php endif; ?>
            </div>
            <!-- END GAMBAR TAMBAHAN -->


            <h3 class="text-left"><?= $single_artikel["judul"]?></h3>
            <p><?= $single_artikel["isi"]?></p>
            <!-- LAMPIRAN -->
            <?php if($single_artikel['dokumen']!='' and is_file(LOKASI_DOKUMEN.$single_artikel['dokumen'])): ?>
            <div class="col-md-12 col-xl-12">
                <div class="block block-rounded ribbon ribbon-modern ribbon-primary text-center">
                    <div class="ribbon-box">LAMPIRAN</div>
                    <div class="block-content block-content-full">
                        <div class="item item-circle bg-danger text-danger-light mx-auto my-20">
                            <i class="fa fa-doc"></i>
                        </div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light">
                        <div class="font-w600 mb-5"><?= $single_artikel['link_dokumen']?></div>
                    </div>
                    <div class="block-content block-content-full">
                        <a class="btn btn-rounded btn-alt-success"
                            href="<?= base_url().LOKASI_DOKUMEN.$single_artikel['dokumen']?>">
                            <i class="fa fa-download mr-5"></i>Download Lampiran
                        </a>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <!-- END LAMPIRAN -->
            <hr>
            <h3 class="pb-20">TERIMA KASIH</h3>
        </div>
    </div>
</div>
<?php $this->load->view("$folder_themes/partials/artikel/komentar.php"); ?>
<?php else: ?>
<div class="hero bg-white">
    <div class="hero-inner">
        <div class="content content-full">
            <div class="py-30 text-center">
                <div class="display-3 text-danger">
                    <i class="fa fa-warning"></i> 404
                </div>
                <h1 class="h2 font-w700 mt-30 mb-10">Oops.. Artikel Tidak Ditemukan..</h1>
                <h2 class="h3 font-w400 text-muted0">Mohon Maaf..</h2>
                <a class="btn btn-hero btn-rounded btn-alt-danger" href="<?= site_url()."first"?>">
                    <i class="fa fa-arrow-left mr-10"></i> Kembali Ke Beranda
                </a>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>