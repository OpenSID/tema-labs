<nav id="sidebar">
    <div id="sidebar-scroll">
        <div class="sidebar-content">
            <div class="content-header content-header-fullrow bg-black-op-10">
                <div class="content-header-section text-center align-parent">
                    <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r"
                        data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times text-danger"></i>
                    </button>

                    <div class="content-header-item">
                        <a class="link-effect font-w700 mr-5" href="<?= site_url()."first"?>">
                            <i class="fa fa-institution text-primary js-animation-object animated zoomInLeft"></i>
                            <span
                                class="h6 text-dual-primary-dark js-animation-object animated zoomInRight"><?php echo $desa['nama_desa']?></span>
                        </a>
                    </div>

                </div>
            </div>

            <div class="content-side content-side-full">

                <ul class="nav-main">
                    <li>
                        <a class="active" href="<?= site_url()."first"?>"><i class="si si-compass"></i>Beranda</a>
                    </li>
                    <li>
                        <a class="nav-submenu" href="" data-toggle="nav-submenu">
                            <i class="si si-home"></i>Menu
                            Desa</a>
                        <ul>

                            <?php foreach($menu_atas as $data){?>
                            <li>
                                <a href="<?= $data['link']?>"
                                    <?php if(count($data['submenu'])>0) { echo "class='nav-submenu' data-toggle='nav-submenu'"; } ?>>
                                    <span><i class="fa fa-circle text-success"></i></span> <?= $data['nama'];?></a>
                                <?php if(count($data['submenu'])>0): ?>
                                <ul>

                                    <?php foreach($data['submenu'] as $submenu): ?>
                                    <li>
                                        <a href="<?= $submenu['link']?>"><span><i
                                                    class="fa fa-circle text-danger"></i></span>
                                            <?= $submenu['nama']?></a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>
                            </li>
                            <?php }?>
                        </ul>
                    </li>

                    <li>
                        <a class="nav-submenu" href="" data-toggle="nav-submenu"><i class="si si-layers"></i>Menu
                            Kategori</a>
                        <ul>

                            <?php foreach($menu_kiri as $data){?>
                            <li>
                                <a <?php if(count($data['submenu'])>0) { echo "class='nav-submenu' data-toggle='nav-submenu'"; } ?>
                                    href="<?= site_url()."first/kategori/".$data['id']?>"><span><i
                                            class="fa fa-circle text-success"></i></span> <?= $data['nama']; ?></a>
                                <?php if(count($data['submenu'])>0): ?>
                                <ul>

                                    <?php foreach($data['submenu'] as $submenu): ?>
                                    <li>
                                        <a href="<?= site_url()."first/kategori/".$submenu['id']."/";?>"><span><i
                                                    class="fa fa-circle text-danger"></i></span>
                                            <?= $submenu['nama']?></a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>
                            </li>
                            <?php }?>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= site_url()."first/dpt" ?>"><i class="si si-badge"></i>Calon
                            Pemilih</a>
                    </li>
                    <li>
                        <a href="<?= site_url()."first/gallery" ?>"><i class="si si-picture"></i>gallery</a>
                    </li>
                    <li>
                        <a href="<?= site_url()."first/arsip" ?>"><i class="si si-notebook"></i>Arsip</a>
                    </li>
                </ul>
            </div>

        </div>

    </div>
</nav>