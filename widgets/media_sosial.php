<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="block block-themed block-mode-hidden">
    <div class="block-header bg-gd-sea">
        <h3 class="block-title"><i class="si si-feed"></i>  Media Sosial</h3>
        <div class="block-options mr-15">
        <button
                type="button"
                class="btn-block-option"
                data-toggle="block-option"
                data-action="fullscreen_toggle">
                <i class="si si-size-fullscreen"></i>
            </button>
            <button
                type="button"
                class="btn-block-option"
                data-toggle="block-option"
                data-action="content_toggle">
                <i class="si si-arrow-up"></i>
            </button>
        </div>
    </div>
    <div class="block-content tab-content bg-gray-light pb-10" >
       <div data-toggle="slimscroll"  data-height="150px" data-always-visible="true">
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