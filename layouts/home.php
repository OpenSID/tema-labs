<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="content content-full">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-sm-12">
                    <?php $this->load->view("$folder_themes/partials/statistik/all_statistik.php"); ?>
                </div>
                <div class="col-sm-12">
                    <?php if (!empty($teks_berjalan)): ?>
                    <marquee onmouseover="this.stop()" onmouseout="this.start()">
                        <?php $this->load->view($folder_themes.'/includes/inc_marquee.php'); ?>
                    </marquee>
                    <?php endif; ?>
                </div>
                <div class="col-sm-12">
                    <?php $this->load->view("$folder_themes/partials/artikel/artikel_home.php"); ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <?php $this->load->view("$folder_themes/layouts/widget.php"); ?>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <?php $this->load->view($folder_themes.'/includes/inc_other_footer.php'); ?> 
                </div>
            </div>
        </div>
    </div>
</div>
<hr>