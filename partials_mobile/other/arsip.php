<div class="content pb-100">
    <div class="block">
        <div class="block-header  block-header-default">
            <div class="block-options">
            </div>
            <?php if(count($farsip)>0): ?>
            <nav aria-label="Page navigation">
                <ul class="pagination pagination">
                    <?php if($paging->start_link): ?>
                    <li class="page-item">
                        <a class="page-link" href="<?= site_url("first/arsip/$paging->start_link")?>" tabindex="-1"
                            aria-label="Previous">
                            <span aria-hidden="true">
                                <i class="fa fa-angle-double-left"></i>
                            </span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if($paging->prev): ?>
                    <li class="page-item">
                        <a class="page-link" href="<?= site_url("first/arsip/$paging->prev")?>" tabindex="-1"
                            aria-label="Previous">
                            <span aria-hidden="true">
                                <i class="fa fa-angle-left"></i>
                            </span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php for ($i=$paging->start_link; $i<=$paging->end_link; $i++): ?>
                    <li class="page-item <?php ($p != $i) or print('active');?>"><a
                            href="<?=site_url('first/arsip/'.$i)?>">
                            <a class="page-link"
                                href="<?= site_url("first/".$paging_page."/$i" . $paging->suffix) ?>"><?= $i ?></a>
                    </li>
                    <?php endfor; ?>
                    <?php if ($paging->next): ?>
                    <li class="page-item">
                        <a class="page-link" href="<?= site_url("first/arsip/$paging->next")?>" aria-label="Next">
                            <span aria-hidden="true">
                                <i class="fa fa-angle-right"></i>
                            </span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if ($paging->next): ?>
                    <li class="page-item">
                        <a class="page-link" href="<?= site_url("first/arsip/$paging->end_link")?>" aria-label="Next">
                            <span aria-hidden="true">
                                <i class="fa fa-angle-double-right"></i>
                            </span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </nav>
            <?php endif; ?>
        </div>
        <div class="block-content" data-toggle="slimscroll" data-height="500px">
            <?php if(count($farsip)>0): ?>
            <?php foreach($farsip AS $data): ?>
            <a class="block block-rounded block-link-shadow bg-gd-aqua"
                href="<?= site_url('first/artikel/'.$data[id])?>">
                <div class="block-content block-content-full">
                    <p class="font-size-sm text-light float-sm-right mb-5"><em><?= tgl_indo($data["tgl_upload"])?></em>
                    </p>
                    <h4 class="font-size-default text-primary  mb-0">
                        <i class="fa fa-newspaper-o text-light mr-5"></i> <b
                            class="text-light"><?= $data["no"]?>.&nbsp;</b><span class="text-light">
                            <?= $data["judul"]?></span>
                    </h4>
                </div>
            </a>
            <?php endforeach; ?>
            <?php else: ?>

            <?php endif; ?>
        </div>
    </div>
</div>