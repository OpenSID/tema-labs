<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php $this->load->view("$folder_themes/commons/head_start.php"); ?>
<?php $this->load->view("$folder_themes/commons/head_end.php"); ?>
<?php
function isMobileDevice() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
if(isMobileDevice()){
   
    $this->load->view("$folder_themes/commons/page_start_mobile.php");
    echo'<div class="col-sm-12 pt-30">';
        $this->load->view("$folder_themes/partials_mobile/statistik/m_all_statistik.php"); 
    echo'</div>';
    if($tipe == 2){
    if($tipex==1){$this->load->view($folder_themes.'/partials_mobile/statistik/statistik_sos.php');}                   
    }elseif($tipe == 3){ $this->load->view($folder_themes.'/partials_mobile/statistik/wilayah.php');  
    }elseif($tipe == 4){   $this->load->view($folder_themes.'/partials_mobile/statistik/dpt.php');
    }else{ $this->load->view(Web_Controller::fallback_default($this->theme, '/partials_mobile/statistik/statistik.php'));    
    }

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
                     echo '</div>
                    <div class="col-sm-12">
                        <div class="block">';
                        if($tipe == 2){
                            if($tipex==1){$this->load->view($folder_themes.'/partial/statistik/statistik_sos.php');}                   
                            }elseif($tipe == 3){ $this->load->view($folder_themes.'/partials/statistik/wilayah.php');  
                            }elseif($tipe == 4){   $this->load->view($folder_themes.'/partials/statistik/dpt.php');
                            }else{ $this->load->view(Web_Controller::fallback_default($this->theme, '/partials/statistik/statistik.php'));    
                            }
                        
                             echo '  </div>
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
        </div>
        <hr>';
       $this->load->view("$folder_themes/commons/page_end.php");
} ?>

<?php $this->load->view("$folder_themes/commons/footer_start.php"); ?>
<?php $this->load->view("$folder_themes/commons/footer_end.php"); ?>