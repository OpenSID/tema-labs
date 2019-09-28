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
    echo'<div class="col-sm-12 pt-30">';
        $this->load->view("$folder_themes/partials_mobile/statistik/m_all_statistik.php"); 
    echo'</div>';
    echo'<div class="col-sm-12">';
    $views_partial_layout = '';
    switch($m){
        case 1 :
            $views_partial_layout = $folder_themes.'/partials_mobile/mandiri/mandiri.php';
            break;
        case 2 :
            $views_partial_layout = $folder_themes.'/partials_mobile/mandiri/layanan.php';
            break;
        case 4 :
            $views_partial_layout = $folder_themes.'/partials_mobile/mandiri/bantuan.php';
            break;
        default:
            $views_partial_layout = $folder_themes.'/partials_mobile/mandiri/lapor.php';
    }
    $this->load->view($views_partial_layout);
    echo'</div>';

    $this->load->view("$folder_themes/commons/page_end_mobile.php"); 
    }
else {

            $this->load->view("$folder_themes/commons/page_start.php");
            echo " <div class=\"content content-full\">\n";
            echo "                <div class=\"row\">\n";
            echo "                    <div class=\"col-md-8\">\n";
            echo "                        <div class=\"row\">\n";
            echo "                            <div class=\"col-sm-12\">\n";
                                       $this->load->view("$folder_themes/partials/statistik/all_statistik.php");
            echo "                            </div>\n";
            echo "                            <div class=\"col-sm-12\">\n";
            echo "                                <div class=\"block\">\n";					
                                                        $views_partial_layout = '';
                                                        switch($m){
                                                            case 1 :
                                                                $views_partial_layout = $folder_themes.'/partials/mandiri/mandiri.php';
                                                                break;
                                                            case 2 :
                                                                $views_partial_layout = $folder_themes.'/partials/mandiri/layanan.php';
                                                                break;
                                                            case 4 :
                                                                $views_partial_layout = $folder_themes.'/partials/mandiri/bantuan.php';
                                                                break;
                                                            default:
                                                                $views_partial_layout = $folder_themes.'/partials/mandiri/lapor.php';
                                                        }
                                                        $this->load->view($views_partial_layout);
          
            echo "                                </div>\n";
            echo "                            </div>\n";
            echo "                        </div>\n";
            echo "                    </div>\n";
            echo "                    <div class=\"col-md-4\">\n";
            echo "                        <div class=\"row\">\n";
            echo "                            <div class=\"col-md-12\">\n";
                                             $this->load->view("$folder_themes/layouts/widget.php");
            echo "                            </div>\n";
            echo "                        </div>\n";
            echo "                    </div>\n";
            echo "                </div>\n";
            echo "            </div>";

                                            $this->load->view("$folder_themes/commons/page_end.php");
} ?>

<?php $this->load->view("$folder_themes/commons/footer_start.php"); ?>
<?php $this->load->view("$folder_themes/commons/footer_end.php"); ?>

