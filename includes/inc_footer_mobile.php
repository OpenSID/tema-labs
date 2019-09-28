<hr class="pb-50">
<footer id="page-footer" class="bg-corporate-dark fixed-bottom">
    <div class="row justify-content-center text-center">
        <div class="content font-size-xs clearfix">
            <div class="push">
                <div class="js-slider slick-nav-black slick-nav-hover" data-slides-to-show="3" data-center-mode="true"
                    data-autoplay-speed="3000">
                    <button type="button" class="btn btn-sm btn-noborder bg-gd-earth mr-5 mb-5" data-toggle="modal" data-target="#ms">
                        <i class="si si-chart   mr-5 text-dark"></i>Statistik
                    </button>
                    <button type="button" class="btn btn-sm btn-noborder bg-gd-sun mr-5 mb-5" data-toggle="modal" data-target="#map">
                        <i class="si si-graph mr-5 text-dark"></i>APBD Desa
                    </button>
                    <button type="button" class="btn btn-sm btn-noborder bg-gd-lake mr-5 mb-5" data-toggle="modal" data-target="#ma">
                        <i class="si si-users mr-5 text-dark"></i>Aparatur
                    </button>
                    <button type="button" class="btn btn-sm btn-noborder bg-gd-leaf mr-5 mb-5" data-toggle="modal" data-target="#mlm">
                        <i class="si si-key mr-5 text-dark"></i>Mandiri
                    </button>
                    <button type="button" class="btn btn-sm btn-noborder bg-gd-sea mr-5 mb-5" data-toggle="modal" data-target="#mag">
                        <i class="si si-event mr-5 text-dark"></i>Agenda
                    </button>
                    <button type="button" class="btn btn-sm btn-noborder bg-gd-emerald mr-5 mb-5" data-toggle="modal" data-target="#mk">
                        <i class="si si-bubbles mr-5 text-dark"></i>Komentar
                    </button>
                    <button
                        onclick="javascript:location.href='https://www.openstreetmap.org/#map=15/<?=$data_config['lat']." /".$data_config['lng']?>'"
                        type="button" class="btn btn-sm btn-noborder bg-gd-dusk mr-5 mb-5">
                        <i class="si si-pointer mr-5 text-dark"></i>Lokasi Desa
                    </button>
                    <button type="button" class="btn btn-sm btn-noborder bg-gd-cherry mr-5 mb-5" data-toggle="modal" data-target="#mplk">
                        <i class="si si-flag mr-5 text-dark"></i>Lokasi Kantor
                    </button>
                    <button type="button" class="btn  btn-sm btn-noborder bg-gd-aqua mr-5 mb-5" data-toggle="modal" data-target="#msm">
                        <i class="si si-feed  mr-5 text-dark"></i>Media Sosial
                    </button>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php $this->load->view("$folder_themes/layouts_mobile/widget_mobile.php"); ?>