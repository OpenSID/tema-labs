<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery-ui-1.12.1.css">
<script src="<?php echo base_url()?>assets/js/jquery-ui.min.js"></script>
<script>
  function show_kartu_peserta(elem){
    var id = elem.attr('target');
    var title = elem.attr('title');
    var url = elem.attr('href');
    $('#'+id+'').remove();

    $('body').append('<div id="'+id+'" title="'+title+'" style="display:none;position:relative;overflow:scroll;"></div>');

    $('#'+id+'').dialog({
      resizable: true,
      draggable: true,
      width: 500,
      height: 'auto',
      open: function(event, ui) {
        $('#'+id+'').load(url);
      }
    });
    $('#'+id+'').dialog('open');
  }
</script>
<div class="block block-themed">
    <div class="block-header block-header-default">
        <h3 class="block-title"> Program Bantuan</h3>
    </div>
    <div class="block-content" data-toggle="slimscroll" data-height="500px" data-color="#ef5350" data-opacity="1"
        data-always-visible="true">
        <?php if(!empty($daftar_bantuan)): ?>
        <?php foreach ($daftar_bantuan as $bantuan) : ?>
        <div id="ban<?= $bantuan['nama']?>" role="tablist" aria-multiselectable="true">
            <div class="block block-bordered block-rounded mb-5">
                <div class="block-header" role="tab" id="ban<?= $bantuan['nama']?>_h1">
                    <a class="font-w600 text-body-color-dark collapsed" data-toggle="collapse" href="#ban<?= $bantuan['nama']?>_q1"
                        aria-expanded="false" aria-controls="ban<?= $bantuan['nama']?>_q1"><?= $bantuan['nama']?></a>
                </div>
                <div id="ban<?= $bantuan['nama']?>_q1" class="collapse" role="tabpanel" aria-labelledby="ban<?= $bantuan['nama']?>_h1"
                    data-parent="#ban<?= $bantuan['nama']?>" style="">
                    <div class="block-content border-t">

                        <table class="table table-bordered text-center table-vcenter">
                            <thead>
                                <tr>
                                    <th>DATA</th>
                                    <th>INFO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-center" scope="row">NAMA</th>
                                    <td><?= $bantuan['nama']?></td>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center" scope="row">AWAL</th>
                                    <td><?= tgl_indo($bantuan['sdate'])?></td>
                                </tr>
                                <tr>
                                    <th class="text-center" scope="row">AKHIR</th>
                                    <td> <?= tgl_indo($bantuan['edate'])?></td>
                                </tr>
                                <tr>
                                    <th class="text-center" scope="row">ID KARTU</th>
                                    <td>
                                        <?php if($bantuan['no_id_kartu']) : ?>
                                        <button type="button" target="kartu_peserta" title="Kartu Peserta"
                                            href="<?= site_url('first/kartu_peserta/'.$bantuan['id'])?>"
                                            onclick="show_kartu_peserta($(this));" class="uibutton special"><span
                                                class="fa fa-print">&nbsp;</span><?= $bantuan['no_id_kartu']?></button>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <p>KOSONG</p>
        <?php endif; ?>
    </div>
</div>
