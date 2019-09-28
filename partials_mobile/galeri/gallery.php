
<div class="content pb-100">
    <div class="block">
        <div class="block-header  block-header-default">
            <div class="block-options">
                <?php echo " <small>Hal. ".$p." - ".$paging->end_link."</small> "; ?>
            </div>
            <?php             echo "	
                    <nav aria-label=\"Page navigation\">
                        <ul class=\"pagination pagination\">";
                            if($paging->start_link){
                                echo " <li class=\"page-item\">  <a class=\"page-link\"
                                href=\"".site_url("first/gallery/$paging->start_link")."\" tabindex=\"-1\" aria-label=\"Previous\">
                                <span aria-hidden=\"true\">
                                <i class=\"fa fa-angle-double-left\"></i>
                                </span>
                                <span class=\"sr-only\">Previous</span>
                                </a></li>";
                            }
                            if($paging->prev){
                                echo " <li class=\"page-item\">  <a class=\"page-link\"
                                href=\"".site_url("first/gallery/$paging->prev")."\" tabindex=\"-1\" aria-label=\"Previous\">
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
                                <a class=\"page-link\" href=\"".site_url("first/gallery/$i")."\" >".$i."</a></li>";
                            }
                            if($paging->next){
                                echo " <li class=\"page-item\">  <a class=\"page-link\"
                                href=\"".site_url("first/gallery/$paging->next")."\" tabindex=\"-1\" aria-label=\"Previous\">
                                <span aria-hidden=\"true\">
                                <i class=\"fa fa-angle-right\"></i>
                                </span>
                                <span class=\"sr-only\">Previous</span>
                                </a></li>";
                            }
                            if($paging->end_link){
                                echo " <li class=\"page-item\">  <a class=\"page-link\"
                                href=\"".site_url("first/gallery/$paging->end_link")."\" tabindex=\"-1\" aria-label=\"Previous\">
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

        </div>
        <div class="block-content" data-toggle="slimscroll" data-height="500px">
                <div
                    class="block-content block-content-full d-flex align-items-center justify-content-between bg-primary">
                    <div class="mr-5">
                        <p class="font-size-lg font-w600 text-white mb-0">
                            Galeri 
                        </p>
                        <p class="font-size-sm text-uppercase font-w600 text-white-op mb-0">
                           Desa  <?php echo $desa['nama_desa']?>
                        </p>
                    </div>
                    <div class="p-20">
                        <i class="fa fa-2x fa-image text-white-op"></i>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="row js-gallery img-fluid-100 gutters-tiny js-gallery-enabled">
                        <?php 	$i=1;
                    foreach($gallery AS $data){
                    if(is_file(LOKASI_GALERI . "sedang_" . $data['gambar'])) {
                        echo "                        <div class=\"col-6 col-lg-4 animated fadeIn\">\n";
                        echo "                            <a class=\"img-link img-link-zoom-in img-fluid img-lightbox\"\n";
                        echo "                                href=\"".AmbilGaleri($data['gambar'],'kecil')."\">\n";
                        echo "                                <img class=\"img-fluid\" src=\"".AmbilGaleri($data['gambar'],'kecil')."\" alt=\"$data[nama]\">\n";
                        echo "                            </a>\n";
                        echo "<a href=\"". site_url()."first/sub_gallery/". $data['id']."\" <button class=\"btn btn-block btn-alt-info min-width-125\"><small>$data[nama]</small></button></a>";
                        echo "                        </div>";
                        if(fmod($i,2)==0)
                        $i++; } } ?>

                    </div>
                </div>
        </div>
    </div>
</div>

