<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php $this->load->view("$folder_themes/commons/head_start.php"); ?>
<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/js/plugins/magnific-popup/magnific-popup.min.css"); ?>"> 
<?php $this->load->view("$folder_themes/commons/head_end.php"); ?>
<?php $this->load->view("$folder_themes/commons/page_start.php"); ?>
<div class="content content-full">
    <!-- Dummy content -->
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-12">
                    <?php $this->load->view("$folder_themes/partials/statistik/all_statistik.php"); ?>
                </div>
                <div class="col-sm-12">
                    <div class="block">
                        <?php $this->load->view($folder_themes.'/partials/galeri/sub_gallery.php');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Dummy content -->
</div>
<?php $this->load->view("$folder_themes/commons/page_end.php"); ?>
<?php $this->load->view("$folder_themes/commons/footer_start.php"); ?>
<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/plugins/magnific-popup/magnific-popup.min.js"); ?>"></script>
<script>
    jQuery(function () {
        Codebase.helpers('magnific-popup');
    });
</script>
