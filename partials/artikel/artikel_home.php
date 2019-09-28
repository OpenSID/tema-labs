<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php $title = (!empty($judul_kategori))? $judul_kategori : "Artikel Terkini" ?>
<?php if (is_array($title)): ?>
<?php foreach ($title as $item): ?>
<?php $title= $item ?>
<?php endforeach; ?>
<?php endif; ?>
<div class="row row-deck gutters-tiny js-appear-enabled animated fadeIn">
    <?php if ($headline): ?>
    <?php $abstrak_headline = potong_teks($headline['isi'], 150) ?>
    <div class="col-xl-12">
        <a class="block block-transparent bg-image d-flex align-items-stretch"
            href="<?= site_url('first/artikel/'.$headline['thn'].'/'.$headline['bln'].'/'.$headline['hri'].'/'.$headline['slug']) ?>"
            <?php if ($headline["gambar"] != ""): ?>
            <?php if (is_file(LOKASI_FOTO_ARTIKEL."sedang_".$headline['gambar'])): ?>
            style="background-image: url('<?= AmbilFotoArtikel($headline['gambar'], 'sedang') ?>');" <?php else: ?>
            style="background-image: url('<?= base_url("$this->theme_folder/$this->theme/assets/noimage.jpg") ?>');"
            <?php endif; ?> <?php endif; ?>>
            <div class="block-content block-sticky-options pt-100 bg-black-op">
                <div class="block-options block-options-left text-white">
                    <div class="block-options-item">
                        <i class="si si-tag"></i> <?= $headline['kategori']?>
                    </div>
                </div>
                <div class="block-options text-white">
                    <div class="block-options-item">
                        <i class="si si-user"></i> <?= $headline['owner'] ?>
                    </div>
                </div>
                <h2 class="h3 font-w700 text-white mb-5"> <?= $headline['judul'] ?></h2>
                <h3 class="h5 text-white-op"><?= $abstrak_headline ?> ...</h3>
            </div>
        </a>
    </div>
    <?php endif; ?>
    <?php if ($artikel): ?>
    <?php foreach ($artikel as $data): ?>
    <?php $abstrak = potong_teks($data['isi'], 50) ?>
    <div class="col-sm-6 col-xl-6">
        <a class="block block-transparent bg-image d-flex align-items-stretch"
            href="<?= site_url('first/artikel/'.$data['thn'].'/'.$data['bln'].'/'.$data['hri'].'/'.$data['slug']) ?>"
            <?php if ($data['gambar']!=''): ?> <?php if (is_file(LOKASI_FOTO_ARTIKEL."sedang_".$data['gambar'])): ?>
            style="background-image: url('<?= AmbilFotoArtikel($data['gambar'],'sedang') ?>');" <?php else: ?>
            style="background-image: url('<?= base_url("$this->theme_folder/$this->theme/assets/noimage.jpg") ?>');"
            <?php endif; ?>
            style="background-image: url('<?= base_url("$this->theme_folder/$this->theme/assets/noimage.jpg") ?>');"
            <?php endif; ?>>
            <div class="block-content block-sticky-options pt-100 bg-primary-dark-op">
                <div class="block-options block-options-left text-white">
                    <div class="block-options-item">
                        <i class="si si-book-open text-white-op"></i> <?= $data['kategori']?>
                    </div>
                </div>
                <div class="block-options text-white">
                    <div class="block-options-item">
                        <i class="si si-user"></i> <?= $data['owner'] ?>
                    </div>
                </div>
                <h2 class="h6 font-w700 text-white mb-5"><?= $data['judul'] ?></h2>
                <h3 class="h6 text-white-op"><?= tgl_indo2($data['tgl_upload'])?></h3>
            </div>
        </a>
    </div>
    <?php endforeach; ?>
    <?php else: ?>
    <div class="col-xl-12">
        <a class="block block-transparent bg-image d-flex align-items-stretch" href="javascript:void(0)"
            style="background-image: url('assets/img/photos/photo24@2x.jpg');">
            <div class="block-content block-sticky-options pt-100 bg-black-op">
                <div class="block-options block-options-left text-white">
                </div>
                <h2 class="h3 font-w700 text-white mb-5">NOTFOUND</h2>
                <h3 class="h5 text-white-op"></h3>
            </div>
        </a>
    </div>
    <?php endif; ?>
</div>
<div class="block">
    <div class="row justify-content-center">
        <div class="block-content">
            <div class="col-md-8">
                <div class="block">
                    <div class="block-content">
                        <?php if ($artikel): ?>
                        <nav aria-label="Page navigation">
                            <ul class="pagination pagination">
                                <?php if ($paging->start_link): ?>
                                <li class="page-item">
                                    <a class="page-link"
                                        href="<?= site_url("first/".$paging_page."/$paging->start_link" . $paging->suffix) ?>"
                                        tabindex="-1" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <i class="fa fa-angle-double-left"></i>
                                        </span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php foreach ($pages as $i): ?>
                                <li class="page-item <?php ($p != $i) or print('active');?>">
                                    <a class="page-link"
                                        href="<?= site_url("first/".$paging_page."/$i" . $paging->suffix) ?>"><?= $i ?></a>
                                </li>
                                <?php endforeach; ?>
                                <?php if ($i != $paging->end_link): ?>
                                <li class="page-item disabled">
                                    <a>....</a>
                                </li>
                                <li class="page-item disabled">
                                    <a class="page-link"
                                        href="<?= site_url("first/".$paging_page."/$paging->end_link" . $paging->suffix) ?>"><?= $paging->end_link ?></a>
                                </li>
                                <?php endif; ?>
                                <?php if ($paging->next): ?>
                                <li class="page-item">
                                    <a class="page-link"
                                        href="<?= site_url("first/".$paging_page."/$paging->next" . $paging->suffix) ?>"
                                        aria-label="Next">
                                        <span aria-hidden="true">
                                            <i class="fa fa-angle-double-right"></i>
                                        </span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </nav>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>