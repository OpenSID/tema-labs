<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php

	echo "
	<div class=\"block block-themed\">
	<div class=\"block-header block-header-default\">
			<h2 class=\"h4 font-w400 block-title\"> <i class=\"si si-bar-chart\"></i> Grafik Data Demografi Berdasar ". $heading."</h2>
		</div>
		<div class=\"block-content\">
			<div class=\"box-tools pull-right\">
				<div class=\"btn-group-xs\">";
					$strC = ($tipe==1)? "bbtn btn-rounded btn-noborder btn-danger min-width-125 mb-10":"btn btn-rounded btn-noborder btn-secondary min-width-125 mb-10";
					echo "<a href=\"".site_url("first/statistik/$st/1")."\" class=\"btn ".$strC." btn-xs\">Bar Graph</a>";
					$strC = ($tipe==0)? "btn btn-rounded btn-noborder btn-danger min-width-125 mb-10":"btn btn-rounded btn-noborder btn-secondary min-width-125 mb-10";
					echo "<a href=\"".site_url("first/statistik/$st/0")."\" class=\"btn ".$strC." btn-xs\">Pie Cart</a>
				</div>
			</div>
		</div>
		<div class=\"box-body\">
			<div id=\"container\"></div>
			<div id=\"contentpane\">
				<div class=\"ui-layout-north panel top\"></div>
			</div>
		</div>
	</div>

	<div class=\"block block-themed\">
		<div class=\"block-header block-header-default\">
			<h2 class=\"h4 font-w400 block-title\">Tabel ". $heading."</h2>
		</div>
		<div class=\"block-content\" data-toggle=\"slimscroll\"  data-height=\"500px\"  data-color=\"#ef5350\"  data-opacity=\"1\"  data-always-visible=\"true\" >
			<div class=\"table-responsive\">
			<table class=\"table table-striped\">
				<thead>
				<tr>
					<th rowspan=\"2\" style='text-align:center'>No</th>
					<th rowspan=\"2\" style='text-align:center;'>Kelompok</th>
					<th colspan=\"2\" style='text-align:center'>Jumlah</th>";
					if($jenis_laporan == 'penduduk'){
						echo "<th colspan=\"2\" style='text-align:center'>Laki-laki</th>
						<th colspan=\"2\" style='text-align:center'>Perempuan</th>";
          			}
					echo "
        		</tr>
				<tr>
					<th style='text-align:center'>n</th><th style='text-align:center'>%</th>";
          if($jenis_laporan == 'penduduk'){
  					echo "<th style='text-align:center'>n</th><th style='text-align:center'>%</th>
  					<th style='text-align:center'>n</th><th style='text-align:center'>%</th>";
          }
          echo "
				</tr>
				</thead>
				<tbody>";
				$i=0; $l=0; $p=0;
				$hide="";$h=0;
				$jm = count($stat);
				foreach($stat as $data){
					$h++;
					if($h > 10 AND $jm > 11)$hide="lebih";
					echo "<tr class=\"$hide\">
						<td class=\"angka\" style='text-align:center'>".$data['no']."</td>
						<td>".$data['nama']."</td>
						<td class=\"angka\" style='text-align:center'>".$data['jumlah']."</td>
						<td class=\"angka\" style='text-align:center'>".$data['persen']."</td>";
          if($jenis_laporan == 'penduduk'){
            echo "<td class=\"angka\" style='text-align:center'>".$data['laki']."</td>
            <td class=\"angka\" style='text-align:center'>".$data['persen1']."</td>
            <td class=\"angka\" style='text-align:center'>".$data['perempuan']."</td>
            <td class=\"angka\" style='text-align:center'>".$data['persen2']."</td>";
          }
					echo "</tr>";
					$i=$i+$data['jumlah'];
					$l=$l+$data['laki']; $p=$p+$data['perempuan'];
				}
				echo "
				</tbody>
			</table>";
			if($hide=="lebih"){
				echo "
				";
			}

		echo "
		</div>
		</div>
	</div>"; 
?>
	
