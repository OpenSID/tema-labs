
<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php $this->load->view("$folder_themes/commons/head_start.php"); ?>
<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/js/plugins/magnific-popup/magnific-popup.min.css"); ?>">
<?php $this->load->view("$folder_themes/commons/head_end.php"); ?>
<?php
function isMobileDevice() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
if(isMobileDevice()){
    // echo'
    // <style type="text/css">
    // html {
    // overflow:hidden;
    // }
    // </style>';
    $this->load->view("$folder_themes/commons/page_start_mobile.php");
    echo'<div class="col-sm-12 pt-30">';
        $this->load->view("$folder_themes/partials_mobile/statistik/m_all_statistik.php"); 
    echo'</div>';
    echo'<div class="col-sm-12">';
    $this->load->view("$folder_themes/partials_mobile/galeri/sub_gallery.php"); 
    echo'</div>';

    $this->load->view("$folder_themes/commons/page_end_mobile.php"); 
}
else {
    $this->load->view("$folder_themes/commons/page_start.php"); 
    echo '<div class="content content-full">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-12">';
                      $this->load->view("$folder_themes/partials/statistik/all_statistik.php"); 
                     echo '</div>
                    <div class="col-sm-12">
                        <div class="block">';
                        $this->load->view($folder_themes.'/partials/galeri/sub_gallery.php');
                        echo'</div>
                    </div>
                </div>
            </div>
        </div></div>
        <hr>';
       $this->load->view("$folder_themes/commons/page_end.php");
} ?>

<?php $this->load->view("$folder_themes/commons/footer_start.php"); ?>
<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/plugins/magnific-popup/magnific-popup.min.js"); ?>"></script>
<script>
    jQuery(function () {
        Codebase.helpers('magnific-popup');
    });
</script>
<?php $this->load->view("$folder_themes/commons/footer_end.php"); ?>
