<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!-- Block Tabs With Options Default Style -->
<div class="block">
    <ul class="nav nav-pills push align-items-center" data-toggle="tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" href="#biodata">Biodata</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="#kkp">Kartu Keluarga</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#kelompok">Kelompok</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#dokumen">Dokumen</a>
        </li>
        <li class="nav-item ml-auto">
            <div class="block-options mr-15">
                <button type="button" class="btn-block-option" data-toggle="block-option"
                    data-action="fullscreen_toggle"></button>
            </div>
        </li>
    </ul>
    <div class="block-content tab-content">
        <div class="tab-pane" id="kkp" role="tabpanel">
            <a class="block block-rounded block-link-shadow" href="<?= site_url("first/cetak_kk/$penduduk[id]/1"); ?>"
                target="_blank">
                <div class="block-content block-content-full text-center">
                    <div class="item item-circle bg-warning-light text-success mx-auto my-20">
                        <i class="fa fa-print"></i>
                    </div>
                    <div class="font-size-lg"><i class="si si-docs"></i> Cetak Kartu Keluarga</div>
                </div>
            </a>
        </div>
        <div class="tab-pane active" id="biodata" role="tabpanel">
            <div class="block block-themed">
                <div class="block-header block-header-default">
                    <h3 class="block-title"> <i class="si si-layers"></i> Biodata </h3>
                    <div class="block-options">
                        <div class="block-options-item">
                            <a href="<?= site_url("first/cetak_biodata/$penduduk[id]"); ?>" target="_blank">
                                <button class="btn btn btn-rounded btn-noborder btn-dark min-width-125 mb-10 btn-xs">
                                    <i class="fa fa-print"></i> Cetak Biodata </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="block-content" data-toggle="slimscroll" data-height="500px" data-color="#ef5350"
                    data-opacity="1" data-always-visible="true">
                    <table class="table table-hover table-vcenter">
                        <thead>
                            <tr>
                                <th>Informasi</th>
                                <th style="width: 50%;">Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td><?= strtoupper(unpenetration($penduduk['nama']))?>
                                </td>
                            </tr>
                            <tr>
                                <td>NIK</td>
                                <td><?= $penduduk['nik']?></td>
                            </tr>
                            <tr>
                                <td>Akta Kelahiran</td>
                                <td><?= $penduduk['no_kk']?></td>
                            </tr>
                            <tr>
                                <td>RT/RW</td>
                                <td><?= strtoupper($penduduk['akta_lahir'])?></td>
                            </tr>
                            <tr>
                                <td><?= ucwords($this->setting->sebutan_dusun)?></td>
                                <td><?= strtoupper($penduduk['dusun'])?></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>
                                    <?= strtoupper($penduduk['rt'])?>/<?= $penduduk['rw']?></td>
                            </tr>
                            <tr>
                                <td>Tempat, Tanggal Lahir</td>
                                <td><?= strtoupper($penduduk['sex'])?></td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td><?= strtoupper($penduduk['tempatlahir'])?>,
                                    <?= strtoupper($penduduk['tanggallahir'])?></td>
                            </tr>
                            <tr>
                                <td>Pendidikan</td>
                                <td><?= strtoupper($penduduk['pendidikan_kk'])?></td>
                            </tr>
                            <tr>
                                <td>Pendidikan yang sedang ditempuh</td>
                                <td><?= strtoupper($penduduk['pendidikan_sedang'])?>
                                </td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td><?= strtoupper($penduduk['pekerjaan'])?></td>
                            </tr>
                            <tr>
                                <td>Status Perkawinan</td>
                                <td><?= strtoupper($penduduk['kawin'])?></td>
                            </tr>
                            <tr>
                                <td>Warga Negara</td>
                                <td><?= strtoupper($penduduk['warganegara'])?></td>
                            </tr>
                            <tr>
                                <td>Dokumen Paspor</td>
                                <td><?= strtoupper($penduduk['dokumen_pasport'])?></td>
                            </tr>
                            <tr>
                                <td>Dokumen Kitas</td>
                                <td><?= strtoupper($penduduk['dokumen_kitas'])?></td>
                            </tr>
                            <tr>
                                <td>Alamat Sebelumnya</td>
                                <td><?= strtoupper($penduduk['alamat_sebelumnya'])?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><?= strtoupper($penduduk['alamat'])?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Perkawinan</td>
                                <td><?= strtoupper($penduduk['tanggalperkawinan'])?></td>
                            </tr>
                            <td>Akta Perceraian</td>
                            <td><?= strtoupper($penduduk['akta_perceraian'])?></td>
                            </tr>
                            <td>Tanggal Perceraian</td>
                            <td><?= strtoupper($penduduk['tanggalperceraian'])?></td>
                            </tr>
                            </tr>
                            <td>NIK Ayah</td>
                            <td><?= strtoupper($penduduk['ayah_nik'])?></td>
                            </tr>
                            </tr>
                            <td>Nama Ayah</td>
                            <td><?= strtoupper(unpenetration($penduduk['nama_ayah']))?>
                            </td>
                            </tr>
                            </tr>
                            <td>NIK Ibu</td>
                            <td><?= strtoupper($penduduk['ibu_nik'])?></td>
                            </tr>
                            </tr>
                            <td>Nama Ibu</td>
                            <td><?= strtoupper(unpenetration($penduduk['nama_ibu']))?>
                            </td>
                            </tr>
                            </tr>
                            <td>Cacat</td>
                            <td><?= strtoupper($penduduk['cacat'])?></td>
                            </tr>
                            </tr>
                            <td>Status</td>
                            <td><?= strtoupper($penduduk['status'])?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="kelompok" role="tabpanel">
            <div class="block block-themed">
                <div class="block-header block-header-default">
                    <h3 class="block-title"> <i class="si si-users"></i> Keangotaan Kelompok </h3>
                </div>
                <div class="block-content">
                <?php $no=1; foreach($list_kelompok as $kel){?>
                    <div id="<?= $kel['nama']?>2" role="tablist" aria-multiselectable="true">
                        <div class="block block-bordered block-rounded mb-5">
                            <div class="block-header" role="tab" id="<?= $kel['nama']?>2_h1">
                                <a class="font-w600 text-body-color-dark collapsed" data-toggle="collapse"
                                    href="#<?= $kel['nama']?>2_q1" aria-expanded="false"
                                    aria-controls="<?= $kel['nama']?>2_q1"><?= $no;?>. <?= $kel['nama']?></a>
                            </div>
                            <div id="<?= $kel['nama']?>2_q1" class="collapse" role="tabpanel"
                                aria-labelledby="<?= $kel['nama']?>2_h1" data-parent="#<?= $kel['nama']?>2" style="">
                                <div class="block-content border-t">

                                    <table class="table table-bordered text-center table-vcenter">
                                        <thead>
                                            <tr>
                                                <th>DATA</th>
                                                <th>INFO</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="text-center" scope="row">NAMA KLMPK</th>
                                                <td><?= $kel['nama']?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-center" scope="row">KAT KLMPK</th>
                                                <td> <?= $kel['kategori']?></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $no++; }?>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="dokumen" role="tabpanel">
            <div class="block block-themed">
                <div class="block-header block-header-default">
                    <h3 class="block-title"> <i class="si si-notebook"></i> Dokumen </h3>
                </div>
                <div class="block-content">
                <?php foreach($list_dokumen as $data){?>
                    <div id="doc<?= $no;?>" role="tablist" aria-multiselectable="true">
                        <div class="block block-bordered block-rounded mb-5">
                            <div class="block-header" role="tab" id="doc<?= $no;?>_h1">
                                <a class="font-w600 text-body-color-dark collapsed" data-toggle="collapse"
                                    href="#doc<?= $no;?>_q1" aria-expanded="false"
                                    aria-controls="doc<?= $no;?>_q1"><?= $no;?>. <?= $kel['nama']?></a>
                            </div>
                            <div id="doc<?= $no;?>_q1" class="collapse" role="tabpanel"
                                aria-labelledby="doc<?= $no;?>_h1" data-parent="#doc<?= $no;?>" style="">
                                <div class="block-content border-t">

                                    <table class="table table-bordered text-center table-vcenter">
                                        <thead>
                                            <tr>
                                                <th>DATA</th>
                                                <th>INFO</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="text-center" scope="row">NAMA DOK</th>
                                                <td><?= $kel['nama']?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-center" scope="row">BERKAS</th>
                                                <td> <a href="<?= base_url().LOKASI_DOKUMEN?><?= urlencode($data['satuan'])?>"><?= $data['satuan']?></a></td>
                                            </tr>
                                            <tr>
                                                <th class="text-center" scope="row">TGL UPLOAD</th>
                                                <td> <?= tgl_indo2($data['tgl_upload'])?></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                   <?php $no++;
      }?>
                </div>
            </div>
        </div>
    </div>
</div>
