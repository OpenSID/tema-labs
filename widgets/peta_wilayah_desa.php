<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<script src="<?php echo base_url()?>assets/js/leaflet.js"></script>
<div class="block block-themed">
    <div class="block-header bg-flat">
        <h3 class="block-title">
            <i class="si si-globe-alt"></i>
            <?="Wilayah ".ucwords($this->setting->sebutan_desa)?>
        </h3>
        <div class="block-options">
            <a href="https://www.openstreetmap.org/#map=15/<?=$data_config['lat']."
            /".$data_config['lng']?>">
                <button type="submit" class="btn btn-sm btn-alt-primary">
                    <i class="fa fa-check"></i> Buka Peta
                </button>
            </a>
        </div>
    </div>
    <div id="map_wilayah" style="height:200px;"></div>
</div>