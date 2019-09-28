<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="modal fade" id="mk" tabindex="-1" role="dialog" aria-labelledby="modal-top" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-top" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                   Komentar
                    <div class="block-options">
                        <button type="button" class="btn btn-alt-danger" data-dismiss="modal">Keluar</button>
                    </div>
                </div>
                <div class="block-content" data-toggle="slimscroll"  data-height="500px" data-always-visible="true">
                    <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="3" direction="up"
                        width="100%" height="280" align="center" behavior="”alternate”">
                        <ul class="list list-activity">
                            <?php foreach($komen As $data){?>
                            <li>
                                <i class="fa fa-comment fa-2x text-danger"></i>
                                <table class="table table-bordered table-striped nowrap">
                                    <thead class="bg-gray disabled color-palette">
                                        <tr>
                                            <th>
                                                <i class="fa fa-circle text-success"></i>
                                                <?= $data['owner']?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <font color='green'>
                                                    <small><?= tgl_indo2($data['tgl_upload'])?></small>
                                                </font>
                                                <br /><?= $data['komentar']?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                            <?php }?>

                        </ul>
                    </marquee>
                </div>
            </div>
        </div>
    </div>
</div>