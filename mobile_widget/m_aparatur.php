<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="modal fade" id="ma" tabindex="-1" role="dialog" aria-labelledby="modal-top" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-top" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    Aparatur Desa
                    <div class="block-options">
                        <button type="button" class="btn btn-alt-danger" data-dismiss="modal">Keluar</button>
                    </div>
                </div>
                <div class="block-content bg-gray-light pb-10" data-toggle="slimscroll" data-height="500px">
                    <?php foreach($aparatur_desa as $data) : ?>
                    <a class="block block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix">
                            <?php if(AmbilFoto($data['foto'],"kecil") AND is_file(LOKASI_USER_PICT.$data['foto'])) : ?>
                            <div class="float-right">
                                <img class="img-avatar" src="<?= AmbilFoto($data['foto'],"kecil") ?>" alt="">
                            </div>
                            <?php endif; ?>
                            <div class="float-left mt-10">
                                <div class="font-w600 mb-5"><?= $data['nama'];?></div>
                                <div class="font-size-sm text-muted"><?= $data['jabatan'];?></div>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>