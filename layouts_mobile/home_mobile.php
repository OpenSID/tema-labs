
<div class="js-slider slick-dotted-inner slick-dotted-white" data-dots="true" 
    autoplay="true">
    <?php if (count($slide_galeri)>0 OR count($slide_artikel)>0): ?>
    <?php foreach ($slider_gambar['gambar'] as $gambar) : ?>
    <?php if(is_file($slider_gambar['lokasi'].'sedang_'.$gambar['gambar'])) : ?>
    <div class="block block-rounded block-transparent bg-image bg-image-bottom" style="background-image: url('<?= base_url().$slider_gambar['lokasi'].'kecil_'.$gambar['gambar']?>');">
                        <div class="block-content bg-primary-dark-op">
                            <div class="py-20 text-center">
                            <a href="<?= site_url('first/artikel/'.$gambar['id']) ?>">
                                <h2 class="h4 font-w400 text-white-op"><?= $gambar['judul']; ?></h2>
                            </a>
                            </div>
                        </div>
                    </div>
   
    <?php endif; ?>
    <?php endforeach; ?>
    <?php endif; ?>
</div>
<div class="content content-full">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-sm-12 ">
                <?php $this->load->view("$folder_themes/partials_mobile/statistik/m_all_statistik.php"); ?>   
                </div>
                <div class="col-xs-12">
                    <?php if (!empty($teks_berjalan)): ?>
                    <marquee onmouseover="this.stop()" onmouseout="this.start()">
                        <?php $this->load->view($folder_themes.'/includes/inc_marquee.php'); ?>
                    </marquee>
                    <?php endif; ?>
                </div>
                <div class="col-sm-12 pb-30">
                    <?php $this->load->view("$folder_themes/partials_mobile/artikel/artikel_home.php"); ?>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view("$folder_themes/includes/inc_footer_mobile.php"); ?>
    
   