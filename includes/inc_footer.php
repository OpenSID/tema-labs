<?php
/**
 * backend/views/inc_footer.php
 *
 * Author: pixelcave
 *
 * The footer of each page (Backend pages)
 *
 */
?>

<!-- Footer -->
<footer class="footer">
    <!-- <div class="container">
        <div class="row">
            <div class="col-3 ">
                <div class="block-content">
                    <img class="img-avatar pt-20" src="<?= LogoDesa($desa['logo']);?>" alt="<?= $desa['nama_desa']?>" />
                    <address>
                        <strong><?= ucwords($this->setting->sebutan_desa." ")?>
                            <?= ucwords($desa['nama_desa'])?></strong><br>
                        <?= $desa['alamat_kantor']?><br>
                        <?= ucwords($this->setting->sebutan_kecamatan." ".$desa['nama_kecamatan'])?>,
                        <?= $desa['kode_pos']?><br>
                        <abbr title="Phone">Telp:</abbr> <?= $desa['telepon']?>
                    </address>
                    <address>
                        <strong>Email</strong><br>
                        <a href="mailto:<?= $desa['email_desa']?>"> <?= $desa['email_desa']?></a>
                    </address>
                </div>
            </div>
            <div class="col-3">
                <div class="row">
                    <div class="block-content">
                        <h3>Menu Desa</h3>
                        <ul>
                            <?php foreach($menu_atas as $data){?>
                            <li>
                                <a <?php if(count($data['submenu'])>0) { echo "class='nav-submenu' data-toggle='nav-submenu'"; } ?>
                                    href="<?= $data['link']?>"><?= $data['nama'];?></a>

                            </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="row">
                    <div class="block-content">
                        <h3>Menu Desa</h3>
                        <ul>
                            <?php foreach($menu_atas as $data){?>
                            <li>
                                <a <?php if(count($data['submenu'])>0) { echo "class='nav-submenu' data-toggle='nav-submenu'"; } ?>
                                    href="<?= $data['link']?>"><?= $data['nama'];?></a>

                            </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-3">


            </div>
        </div>
    </div> -->
    <div class=" bg-corporate-dark ">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="mt-30 text-light">
                        <h6 class="text-light">© 2019
                            <a class="link-effect" href="https://github.com/OpenSID/tema-labs">tema-labs OPENSID</a>. All rights reserved. Created by
                            <a class="link-effect" href="http://labkoding.id">Labkoding.id / Nazrul</a>
                            </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END Footer -->