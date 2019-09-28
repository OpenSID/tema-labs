<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php $this->load->view("$folder_themes/commons/head_start.php"); ?>
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
    $this->load->view("$folder_themes/partials_mobile/artikel/artikel.php");
    $this->load->view("$folder_themes/commons/page_end_mobile.php"); 
}
else {
    $this->load->view("$folder_themes/commons/page_start.php"); 
    echo '<div class="content content-full">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-sm-12">';
                      $this->load->view("$folder_themes/partials/statistik/all_statistik.php"); 
                echo ' </div>
                    <div class="col-sm-12">' ;
                     $this->load->view("$folder_themes/partials/artikel/share_button.php"); 
                     echo '   </div>
                    <div class="col-sm-12">
                        <div class="block">';
                             $this->load->view("$folder_themes/partials/artikel/artikel.php"); 
                             echo '   </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">';
                        $this->load->view("$folder_themes/layouts/widget.php"); 
                        echo '   </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">';
                        $this->load->view($folder_themes.'/includes/inc_other_footer.php'); 
                   echo '</div>
                </div>
            </div>
        </div></div>
        <hr>';
       $this->load->view("$folder_themes/commons/page_end.php");
} ?>

<?php $this->load->view("$folder_themes/commons/footer_start.php"); ?>
<?php $this->load->view("$folder_themes/commons/footer_end.php"); ?>

