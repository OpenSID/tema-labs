<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php foreach ($teks_berjalan AS $teks): ?>
<div class="alert alert-danger bg-gd-cherry alert-dismissable" role="alert">
    <a href="<?= site_url('first/artikel/'.$teks['tautan']) ?>"><p class="mb-0 text-light"><i class="fa fa-info-circle mr-5"></i> 
    <?= $teks['teks']?></p></a>
</div>
<?php endforeach; ?>