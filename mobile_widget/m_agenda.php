<div class="modal fade" id="mag" tabindex="-1" role="dialog" aria-labelledby="modal-top" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Agenda Desa</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content bg-gray-light pb-10" data-toggle="slimscroll"  data-height="500px" data-always-visible="true">
                    <?php 
                    foreach ($agenda as $l): ?>
                    <div id="<?= $l['judul']?>2" role="tablist" aria-multiselectable="true">
                        <div class="block block-bordered block-rounded mb-5">
                            <div class="block-header" role="tab" id="<?= $l['judul']?>2_h1">
                                <a class="font-w600 text-body-color-dark collapsed" data-toggle="collapse"
                                    href="#<?= $l['judul']?>2_q1" aria-expanded="false"
                                    aria-controls="<?= $l['judul']?>2_q1"><?= $l['judul']?></a>
                            </div>
                            <div id="<?= $l['judul']?>2_q1" class="collapse" role="tabpanel"
                                aria-labelledby="<?= $l['judul']?>2_h1" data-parent="#<?= $l['judul']?>2" style="">
                                <div class="block-content border-t">

                                    <table class="table table-bordered text-center table-vcenter">
                                        <thead>
                                            <tr>
                                                <th>DATA</th>
                                                <th>INFORMASI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="text-center" scope="row">Judul</th>
                                                <td> <a class="link-effect"
                                            href="<?= site_url("first/artikel/$l[id_artikel]")?>"><?= $l['judul']?></td>
                                            </tr>
                                            <tr>
                                                <th class="text-center" scope="row">Waktu</th>
                                                <td> <?= tgl_indo($l['tgl_agenda'])?></td>
                                            </tr>
                                            <tr>
                                                <th class="text-center" scope="row">Koordinator</th>
                                                <td> <?= $l['koordinator_kegiatan']?></td>
                                            </tr>
                                            <tr>
                                                <th class="text-center" scope="row">Lokasi </th>
                                                <td><?= $l['lokasi_kegiatan']?></td>
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
        </div>
    </div>
</div>