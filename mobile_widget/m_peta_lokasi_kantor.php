<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="modal fade" id="mplk" tabindex="-1" role="dialog" aria-labelledby="modal-top" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-top" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <?="Lokasi Kantor ".ucwords($this->setting->sebutan_desa)?>
                    <div class="block-options">
                    <button type="button" class="btn btn-alt-danger" data-dismiss="modal">Keluar</button>
                    </div>
                </div>
                <div class="block-content">
                    <table width="100%">
                        <tr style="border-bottom: 1px solid #ddd;">
                            <td class="label-info-desa" width="25%" height="30px">Alamat</td>
                            <td class="isi-info-desa" width="70%"><?= $desa['alamat_kantor']?></td>
                        </tr>
                        <tr style="border-bottom: 1px solid #ddd;">
                            <td class="label-info-desa" width="25%" height="30px">
                                <?= ucwords($this->setting->sebutan_desa)." "?></td>
                            <td class="isi-info-desa" width="70%" height="30px"><?= $desa['nama_desa']?></td>
                        </tr>
                        <tr style="border-bottom: 1px solid #ddd;">
                            <td class="label-info-desa" width="25%" height="30px">
                                <?= ucwords($this->setting->sebutan_kecamatan)?></td>
                            <td class="isi-info-desa" width="70%" height="30px"><?= $desa['nama_kecamatan']?></td>
                        </tr>
                        <tr style="border-bottom: 1px solid #ddd;">
                            <td class="label-info-desa" width="25%" height="30px">
                                <?= ucwords($this->setting->sebutan_kabupaten)?></td>
                            <td class="isi-info-desa" width="70%" height="30px"><?= $desa['nama_kabupaten']?></td>
                        </tr>
                        <tr style="border-bottom: 1px solid #ddd;">
                            <td class="label-info-desa" width="25%" height="30px">Kodepos</td>
                            <td class="isi-info-desa" width="70%" height="30px"><?= $desa['kode_pos']?></td>
                        </tr>
                        <tr style="border-bottom: 1px solid #ddd;">
                            <td class="label-info-desa" width="25%" height="30px">Telepon</td>
                            <td class="isi-info-desa" width="70%" height="30px"><?= $desa['telepon']?></td>
                        </tr>
                        <tr>
                            <td class="label-info-desa" width="25%" height="40px">Email</td>
                            <td class="isi-info-desa" width="70%" height="40px"><?= $desa['email_desa']?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>