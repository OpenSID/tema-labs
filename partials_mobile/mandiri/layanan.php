<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="block block-themed">
    <div class="block-header block-header-default">
        <h3 class="block-title"> <i class="si si-film"></i> Rekam Layanan Cetak Surat </h3>
    </div>
    <div class="block-content" data-toggle="slimscroll" data-height="500px" data-color="#ef5350" data-opacity="1"
        data-always-visible="true">
        <?php foreach($surat_keluar as $data): ?>
        <div id="srt<?= $data['no']?>>" role="tablist" aria-multiselectable="true">
            <div class="block block-bordered block-rounded mb-5">
                <div class="block-header" role="tab" id="srt<?= $data['no']?>>_h1">
                    <a class="font-w600 text-body-color-dark collapsed" data-toggle="collapse"
                        href="#srt<?= $data['no']?>>_q1" aria-expanded="false"
                        aria-controls="srt<?= $data['no']?>>_q1">SURAT <?= $data['no_surat']?> </a>
                </div>
                <div id="srt<?= $data['no']?>>_q1" class="collapse" role="tabpanel"
                    aria-labelledby="srt<?= $data['no']?>>_h1" data-parent="#srt<?= $data['no']?>>" style="">
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
                                    <th class="text-center" scope="row">NO. SURAT</th>
                                    <td><?= $data['no_surat']?></td>
                                </tr>
                                <tr>
                                    <th class="text-center" scope="row">JENIS</th>
                                    <td> <?= $data['format']?></td>
                                </tr>
                                <tr>
                                    <th class="text-center" scope="row">NAMA STAFF</th>
                                    <td>
                                        <?= $data['pamong']?>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center" scope="row">TANGGAL</th>
                                    <td><?= tgl_indo2($data['tanggal'])?></td>
                                </tr>
                                

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>