<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!-- Page Content -->
<div class="content">
    <h2 class="content-heading">Gallery Desa <small><?php echo $desa['nama_desa']?></small></h2>
    <div class="row items-push js-gallery">
	<?php 	$i=1;
			foreach($gallery AS $data){
				if(is_file(LOKASI_GALERI . "sedang_" . $data['gambar'])) {
		echo "
        <div class='col-sm-3 col-lg-3 col-xl-3 animated fadeIn'>
            <div class='options-container fx-item-zoom-in fx-overlay-slide-down'>
                <img class='img-fluid options-item' src=\"".AmbilGaleri($data['gambar'],'sedang')."\" alt=''>
                <div class='options-overlay bg-black-op-75'>
                    <div class='options-overlay-content'>
                        <a class='btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox'
                            href=\"".AmbilGaleri($data['gambar'],'sedang')."\">
                            <i class='fa fa-search-plus'></i> Pratinjau
                        </a>
                    </div>
				</div>
			</div>
        </div>";
        if(fmod($i,2)==0)
		$i++; } } ?>
        </div>
    </div>
    <!-- END Advanced Gallery -->
</div>
<!-- END Page Content -->
<?php
echo "	
        <nav aria-label=\"Page navigation\">
			<p>Halaman ".$p." dari ".$paging->end_link."</p>
            <ul class=\"pagination pagination-lg\">";
				if($paging->start_link){
                    echo " <li class=\"page-item\">  <a class=\"page-link\"
                    href=\"".site_url("first/sub_gallery/$parrent[id]/$paging->start_link")."\" tabindex=\"-1\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">
                     <i class=\"fa fa-angle-double-left\"></i>
                    </span>
                     <span class=\"sr-only\">Previous</span>
                    </a></li>";
				}
				if($paging->prev){
                    echo " <li class=\"page-item\">  <a class=\"page-link\"
                    href=\"".site_url("first/sub_gallery/$parrent[id]/$paging->prev")."\" tabindex=\"-1\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">\
                     <i class=\"fa fa-angle-left\"></i>
                    </span>
                     <span class=\"sr-only\">Previous</span>
                    </a></li>";
				}
				foreach($pages as $i) {
                    $strC = ($p == $i)? "class=\"page-item active\"":"";
                    echo "
                    <li ".$strC.">
                    <a class=\"page-link\"href=\"".site_url("first/sub_gallery/$parrent[id]/$i")."\">".$i."</a></li>";
				}
				if($paging->next){
                    echo " <li class=\"page-item\">  <a class=\"page-link\"
                    href=\"".site_url("first/sub_gallery/$parrent[id]/$paging->next")."\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">
                     <i class=\"fa fa-angle-right\"></i>
                    </span>
                     <span class=\"sr-only\">Previous</span>
                    </a></li>";
				}
				if($paging->end_link){
                    echo " <li class=\"page-item\">  <a class=\"page-link\"
                    href=\"".site_url("first/sub_gallery/$parrent[id]/$paging->end_link")."\" tabindex=\"-1\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">
                     <i class=\"fa fa-angle-double-right\"></i>
                    </span>
                     <span class=\"sr-only\">Previous</span>
                    </a></li>";
				}
					echo "";
				echo "
			</ul>
	    </nav>";	
?>


































