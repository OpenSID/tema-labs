<header id="page-header">
    <div class="content-header">
        <div class="content-header-section">
            <div class="content-header-item">
                <a class="link-effect font-w700 mr-5" href="<?= site_url()."first"?>">
                    <i class="fa fa-institution text-primary js-animation-object animated zoomInLeft"></i>
                    <span  class="h6 text-dual-primary-dark js-animation-object animated zoomInRight"><?php echo $desa['nama_desa']?></span>                      
                </a>
            </div>
        </div>
        <div class="content-header-section d-none d-lg-block">

            <ul class="nav-main-header">
                <li>
                    <a class="active" href="<?= site_url()."first"?>"><i class="si si-compass"></i>Beranda</a>
                </li>
               
                <li>
                    <a class="nav-submenu active " href="<?= site_url()."first/dpt" ?>"><i class="si si-home"></i>Menu
                        Desa</a>
                    <ul>
                        <li>...........................................................................................................
                        </li>
                        <?php foreach($menu_atas as $data){?>
                        <li>
                            <a class="nav-submenu"
                                <?php if(count($data['submenu'])>0) { echo "class='nav-submenu' data-toggle='nav-submenu'"; } ?>
                                href="<?= $data['link']?>"><i
                                    class="fa fa-circle text-success"></i><?= $data['nama'];?></a>

                            <?php if(count($data['submenu'])>0): ?>
                            <ul>
                                <li>.................................................................................
                                </li>
                                <?php foreach($data['submenu'] as $submenu): ?>
                                <li>
                                    <a href="<?= $submenu['link']?>"><i class="fa fa-circle text-danger"></i>
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
                    <a class="nav-submenu active" href="<?= site_url()."first/dpt" ?>"><i class="si si-layers"></i>Menu
                        Kategori</a>
                    <ul>
                        <li>...........................................................................................................
                        </li>
                        <?php foreach($menu_kiri as $data){?>
                        <li>
                            <a class="nav-submenu"
                                <?php if(count($data['submenu'])>0) { echo "class='nav-submenu' data-toggle='nav-submenu'"; } ?>
                                href="<?= site_url()."first/kategori/".$data['id']?>"> <i
                                    class="fa fa-circle text-success"></i> <?= $data['nama']; ?></a>
                            <?php if(count($data['submenu'])>0): ?>
                            <ul>
                                <li>....................................................................................
                                </li>
                                <?php foreach($data['submenu'] as $submenu): ?>
                                <li>
                                    <a href="<?= site_url()."first/kategori/".$submenu['id']."/";?>"><i
                                            class="fa fa-circle text-danger"></i> <?= $submenu['nama']?></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </li>
                        <?php }?>
                    </ul>
                </li>
                <li>
                    <a class="active" href="<?= site_url()."first/dpt" ?>"><i class="si si-badge"></i>Calon
                        Pemilih</a>
                </li>
                <li>
                    <a class="active" href="<?= site_url()."first/gallery" ?>"><i class="si si-picture"></i>gallery</a>
                </li>
                <li>
                    <a class="active" href="<?= site_url()."first/arsip" ?>"><i class="si si-notebook"></i>Arsip</a>
                </li>
            </ul>

        </div>
        <div class="content-header-section">
            <button type="button" class="btn btn-square btn-dual-secondary" data-toggle="layout"
                data-action="header_search_on">
                <i class="fa fa-search"></i><span> Cari Artikel ..</span>
            </button>
            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none" data-toggle="layout"
                data-action="sidebar_toggle">
                <i class="fa fa-navicon"></i>
            </button>
        </div>
    </div>
    <div id="page-header-search" class="overlay-header">
        <div class="content-header content-header-fullrow">
            <form method=get action="<?= site_url('first');?>">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-secondary px-15" data-toggle="layout"
                            data-action="header_search_off">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                    <input type="text" class="form-control" name="cari" value="<?= $_GET['cari']; ?>"
                        placeholder="Cari Artikel">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary px-15">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id="page-header-loader" class="overlay-header bg-primary">
        <div class="content-header content-header-fullrow text-center">
            <div class="content-header-item">
                <i class="fa fa-sun-o fa-spin text-white"></i>
            </div>
        </div>
    </div>
</header>