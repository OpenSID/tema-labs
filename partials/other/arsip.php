<div class="content">
    <h2 class="content-heading">Table Arsip</h2>
    <div class="block-content" data-toggle="slimscroll" data-height="900px" data-color="#ef5350" data-opacity="1"
        data-always-visible="true">
        <?php if(count($farsip)>0): ?>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-vcenter">
                <thead>
                    <tr>
                        <td width="3%"><b>No.</b></td>
                        <td width="25%"><b>Tanggal Artikel</b></td>
                        <td><b>Judul Artikel</b></td>
                        <td width="20%"><b>Penulis</b></td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($farsip AS $data): ?>
                    <tr>
                        <td style="text-align:center;">
                            <?= $data["no"]?>
                        </td>
                        <td>
                            <?= tgl_indo($data["tgl_upload"])?>
                        </td>
                        <td>
                            <a href="<?= site_url('first/artikel/'.$data[id])?>"><?= $data["judul"]?></a>
                        </td>
                        <td style="text-align:center;">
                            <?= $data["owner"]?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php else: ?>
        Belum ada arsip konten web.
        <?php endif; ?>
    </div>
</div>
<div class="block">
    <div class="row justify-content-center">
        <div class="block-content">
            <div class="col-md-8">
                <div class="block">
                    <div class="block-content">
                        <?php if(count($farsip)>0): ?>
                        <nav aria-label="Page navigation">
                            <ul class="pagination pagination-lg">
                                <?php if($paging->start_link): ?>
                                <li class="page-item">
                                    <a class="page-link" href="<?= site_url("first/arsip/$paging->start_link")?>"
                                        tabindex="-1" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <i class="fa fa-angle-double-left"></i>
                                        </span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if($paging->prev): ?>
                                <li class="page-item">
                                    <a class="page-link" href="<?= site_url("first/arsip/$paging->prev")?>"
                                        tabindex="-1" aria-label="Previous">
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
                                    <a class="page-link" href="<?= site_url("first/arsip/$paging->next")?>"
                                        aria-label="Next">
                                        <span aria-hidden="true">
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if ($paging->next): ?>
                                <li class="page-item">
                                    <a class="page-link" href="<?= site_url("first/arsip/$paging->end_link")?>"
                                        aria-label="Next">
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
                </div>
            </div>
        </div>
    </div>
</div>