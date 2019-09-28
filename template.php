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
    $this->load->view("$folder_themes/layouts_mobile/home_mobile.php");
    $this->load->view("$folder_themes/commons/page_end_mobile.php"); 
}
else {
    $this->load->view("$folder_themes/commons/page_start.php");
    $this->load->view("$folder_themes/layouts/home.php");
    $this->load->view("$folder_themes/commons/page_end.php"); 
} ?>

<?php $this->load->view("$folder_themes/commons/footer_start.php"); ?>
<?php $this->load->view("$folder_themes/commons/footer_end.php"); ?>
