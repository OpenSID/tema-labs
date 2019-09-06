
<div class="js-slider slick-nav-black slick-dotted-inner slick-dotted-white" data-dots="true" data-arrows="true"
    autoplay="true">
    <?php if (count($slide_galeri)>0 OR count($slide_artikel)>0): ?>
    <?php foreach ($slider_gambar['gambar'] as $gambar) : ?>
    <?php if(is_file($slider_gambar['lokasi'].'sedang_'.$gambar['gambar'])) : ?>
    <div class="bg-image"
        style="background-image: url('<?= base_url().$slider_gambar['lokasi'].'sedang_'.$gambar['gambar']?>');">
        <div class="bg-black-op">
            <div class="content content-top text-center">
                <div class="py-50">
                    <h1 class="font-w700 text-white py-10 js-animation-object animated lightSpeedIn">
                        <?= $gambar['judul']; ?></h1>
                    <a href="<?= site_url('first/artikel/'.$gambar['id']) ?>">
                        <button class="btn btn-hero btn-noborder btn-rounded btn-alt-info py-10">
                            Lihat Artikel
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php endforeach; ?>
    <?php endif; ?>
</div>
