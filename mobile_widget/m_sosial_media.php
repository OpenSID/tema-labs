<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="modal fade" id="msm" tabindex="-1" role="dialog" aria-labelledby="modal-top" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-top" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    SOsial Media
                    <div class="block-options">
                        <button type="button" class="btn btn-alt-danger" data-dismiss="modal">Keluar</button>
                    </div>
                </div>
                <div class="block-content bg-gray-light pb-10" data-toggle="slimscroll" data-height="500px">
                <?php foreach ($sosmed As $data): ?>
                <?php if (!empty($data["link"])): ?>
                    <a class="block block-link-shadow" href="<?= $data['link']?>">
                        <div class="block-content block-content-full clearfix">
                      
                            <div class="float-left">
                                <img class="img-avatar" src="<?= base_url().'assets/front/'.$data['gambar'] ?>" alt="<?= $data['nama'] ?>">
                            </div>

                            <div class="float-right mt-10">
                                <div class="font-size-sm text-muted">Sosial Media</div>
                                <div class="font-w600 mb-5"><?= $data['nama'];?></div>  
                            </div>
                           
                        </div>
                    </a>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

