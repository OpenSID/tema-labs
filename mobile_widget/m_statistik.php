<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="modal fade" id="ms" tabindex="-1" role="dialog" aria-labelledby="modal-top" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-top" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <?="Statistik ".ucwords($this->setting->sebutan_desa)?>
                    <div class="block-options">
                        <button type="button" class="btn btn-alt-danger" data-dismiss="modal">Keluar</button>
                    </div>
                </div>
                <div class="block-content">
                    <?php
      $cowok1 = $this->db->query('SELECT sex FROM tweb_penduduk WHERE sex = 1');
      $cewek1 = $this->db->query('SELECT sex FROM tweb_penduduk WHERE sex = 2');
      $kk1 = $this->db->query('SELECT * FROM tweb_keluarga WHERE id_cluster != 0');
      
      $cowok = $cowok1->num_rows();
      $cewek = $cewek1->num_rows();
      $dua = $cowok+$cewek;
      $kk = $kk1->num_rows(); ?>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            style="width: <?= $cowok/$dua*100; ?>%" aria-valuenow="30" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="progress-bar-label">Laki - Laki
                                <?= number_format($cowok);?>
                                Jiwa</span>
                        </div>
                    </div>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                            role="progressbar" style="width:  <?= $cewek/$dua*100; ?>%" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-label">Perempuan
                                <?= number_format($cewek);?>
                                Jiwa</span>
                        </div>
                    </div>
                    <hr>
                    <div class="col-sm-3">
                        <div class="block block-bordered block-rounded">
                            <div class="block-content block-content-full bg-gd-earth">
                                <div class="pb-15 text-center">
                                    <h6 class="font-w700 text-white mb-0">Jumlah Jiwa
                                    </h6>
                                    <div class="h4 font-w700 text-white mb-0" data-toggle="countTo"
                                        data-to="<?= number_format($dua);?>"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="block block-bordered block-rounded">
                            <div class="block-content block-content-full bg-gd-corporate">
                                <div class="pb-15 text-center">
                                    <h6 class="font-w700 text-white mb-0">Jumlah KK</h6>
                                    <div class="h4 font-w700 text-white mb-0" data-toggle="countTo"
                                        data-to="<?= number_format($kk);?>"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>