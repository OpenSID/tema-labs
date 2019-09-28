<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php if($single_artikel["id"]) : ?>				
<div class="bg-image" 
<?php if($single_artikel['gambar']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar'])): ?>           
style="background-image: url('<?= AmbilFotoArtikel($single_artikel['gambar'],'sedang')?>');"
<?php else: ?>
style="background-image: url('<?= base_url("$this->theme_folder/$this->theme/assets/noimage.jpg") ?>');"
<?php endif; ?>>
    <div class="bg-black-op-75">
        <div class="content content-top text-center">
            <div class="py-100">
                <h1 class="font-w700 text-white mb-10"><?= $single_artikel["judul"]?></h1>
                <div class="font-size-md text-muted">
                    <a class="text-body-bg-dark" href="be_pages_generic_profile.html"><?= $single_artikel['owner']?></a>
                    &bull; <?= tgl_indo2($single_artikel['tgl_upload']);?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content content-full nice-copy-story pb-50">
    <div class="row justify-content-center py-30">
        <div class="col-lg-8">
            <?php if($single_artikel["isi"]!=''): ?> <?php endif; ?>
            <h3><?= $single_artikel["judul"]?></h3>
            <p><?= $single_artikel["isi"]?></p>

            <!-- GAMBAR TAMBAHAN -->
            <div class="row no-gutters push js-gallery text-center img-thumb-100 js-gallery-enabled">
                
                <?php if($single_artikel['gambar1']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar1'])): ?>
                <div class="col-4 animated fadeIn">
                    <a class="img-link img-link-simple img-link-zoom-in img-lightbox"
                        href="<?= AmbilFotoArtikel($single_artikel['gambar1'],'sedang')?>">
                        <img height="160px" class="img-thumb"
                            src="<?= AmbilFotoArtikel($single_artikel['gambar1'],'sedang')?>" alt="">
                    </a>
                </div>
                <?php endif; ?>
                <?php if($single_artikel['gambar2']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar2'])): ?>
                <div class="col-4 animated fadeIn">
                    <a class="img-link img-link-simple img-link-zoom-in img-lightbox"
                        href="<?= AmbilFotoArtikel($single_artikel['gambar2'],'sedang')?>">
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
        </div>
    </div>
    <div class="row justify-content-center py-30">
        <div class="col-lg-8 clearfix">
            <button type="button" class="btn btn-rounded btn-secondary float-right dropdown-toggle"
                id="btnGroupVerticalDrop4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                    class="fa fa-share-alt text-primary mr-5 "></i> Bagikan</button>
            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                <?php $this->load->view("$folder_themes/partials_mobile/artikel/share_button.php"); ?>
            </div>
            <button type="button" data-toggle="modal" data-target="#komentar"
                class="btn btn-rounded btn-secondary mr-5">
                <i class="fa fa-heart text-danger mr-5 "></i> Komentar
            </button>
            <?php $this->load->view("$folder_themes/partials_mobile/artikel/komentar.php"); ?>
        </div>
    </div>

<!-- END Story -->
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