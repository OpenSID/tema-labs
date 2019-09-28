<div class="modal" id="komentar" tabindex="-1" role="dialog" aria-labelledby="modal-large" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-content ">
                    <?php if($single_artikel['boleh_komentar']): ?>
                    <div class="fb-comments" data-href="<?= site_url().'first/artikel/'.$single_artikel['id']?>"
                        width="100%" data-numposts="5"></div>
                    <?php endif; ?>
                    <?php if(is_array($komentar)): ?>
                    <?php foreach($komentar AS $data): ?>
                    <?php if($data['enabled']==1): ?>
                    <div class="media mb-20">
                        <img class="img-avatar img-avatar32 d-flex mr-20" src="assets/img/avatars/avatar13.jpg" alt="">
                        <div class="media-body">
                            <p class="mb-5"><?= $data['owner']?></p>
                            <p><?= $data['komentar']?></p>
                            <div class="font-size-sm text-muted"><?= tgl_indo2($data['tgl_upload'])?></div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    <?php elseif($single_artikel['boleh_komentar']): ?>
                    <?php endif; ?>
                    <?php if($single_artikel['boleh_komentar']): ?>
                    <?php $label = !empty($_SESSION['validation_error']) ? 'label-danger' : 'label-info'; ?>
                    <?php if ($flash_message): ?>
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h3 class="alert-heading font-size-h4 font-w400">EROR</h3>
                        <p class="mb-0"><?= $flash_message?> </p>
                    </div>
                    <?php endif; ?>
                    <div class="content content-full">
                        <div class="row justify-content-center py-20">
                            <div class="col-lg-10 col-xl-10">
                                <form class="js-validation-be-contact" id="form-komentar" name="form"
                                    action="<?= site_url('first/add_comment/'.$single_artikel['id'])?>" method="POST"
                                    onSubmit="return validasi(this);">
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <label>Nama</label>
                                            <input class="form-control form-control-lg" type="text" name="no_hp"
                                                maxlength="15" placeholder="ketik di sini"
                                                value="<?= $_SESSION['post']['no_hp'] ?>">
                                        </div>
                                        <div class="col-6">
                                            <label>Nama</label>
                                            <input class="form-control form-control-lg" type="text" name="owner"
                                                maxlength="100" placeholder="ketik di sini"
                                                value="<?= !empty($_SESSION['post']['owner']) ? $_SESSION['post']['owner'] : $_SESSION['nama'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12" for="be-contact-message">Komentar</label>
                                        <div class="col-12">
                                            <textarea class="form-control form-control-lg" name="komentar" rows="5"
                                                placeholder="Masukan Pesan Anda"><?= $_SESSION['post']['komentar']?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <div class="block">
                                                <div class="block-content">
                                                    <img id="captcha"
                                                        src="<?= base_url().'securimage/securimage_show.php'?>"
                                                        alt="CAPTCHA Image" />
                                                    <br>
                                                    <button class="btn btn-alt-danger"
                                                        onclick="document.getElementById('captcha').src = '<?= base_url()."securimage/securimage_show.php?"?>' + Math.random(); return false">Ganti
                                                        gambar </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 captha_code">
                                            <label class="col-12" for="be-contact-message">Kode CAPTHA</label>
                                            <div class="input-group">
                                                <input class="form-control" type="text" name="captcha_code"
                                                    maxlength="6" value="<?= $_SESSION['post']['captcha_code']?>" />
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12 text-center">
                                            <button type="submit" value="Kirim"
                                                class="btn btn-hero btn-alt-primary min-width-175">
                                                <i class="fa fa-send mr-5"></i> Kirim Komentar
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php else: ?>
                    <span class='info'></span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>