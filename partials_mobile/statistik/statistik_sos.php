<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php

	echo "
	<div class=\"single_page_area\">
		<div class=\"box-header with-border\">
			<h2 class=\"post_titile\">  <i class=\"si si-bar-chart\"></i> Grafik Statistik Kependudukan berdasarkan Indeks Kemiskinan</h2>
		</div>
		<div class=\"box-body\">
			<div id=\"container\"></div>
			<div id=\"contentpane\">
				<div class=\"ui-layout-north panel top\"></div>
				<div class=\"ui-layout-center\" id=\"chart\" style=\"padding: 5px;\"></div>
			</div>
		</div>
	</div>

	<div class=\"single_page_area\">
		<div class=\"box-header with-border\">
			<h3 class=\"box-title\">Tabel</h3>
		</div>
		<div class=\"box-body\">
		<table class=\"table-bordered tablesaw\" data-tablesaw-mode=\"swipe\">
				<thead>
				<tr>
					<th data-tablesaw-sortable-col data-tablesaw-priority=\"1\">#</th>
					<th>Kelompok</th>
					<th>Jumlah</th>
					</tr>
				</thead>
				<tbody>";
				$i=0;
				foreach($main as $data){
					echo "<tr>
						<td class=\"angka\">".$data['id']."</td>
						<td>".$data['nama']."</td>
						<td class=\"angka\">".$data['jumlah']."</td>
					</tr>";
					$i=$i+$data['jumlah'];
				}
				echo "
				</tbody>
				<tfooter><tr><th colspan=\"2\" class=\"angka\">JUMLAH</th><th>".$i."</th></tr></tfooter>
			</table>";

		echo "
		</div>
	</div>";
?>