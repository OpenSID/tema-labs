<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php


	echo "
	<div class=\"block block-themed pb-50\">
	<div class=\"block-header block-header-default\">
			<h2 class=\"h4 font-w400 block-title\"> <i class=\"si si-bar-chart\"></i> Grafik Data Demografi Berdasar ". $heading."</h2>
		</div>
		<div class=\"block-content\">
			<div class=\"box-tools pull-right\">
				<div class=\"btn-group-xs\">";
					$strC = ($tipe==1)? "bbtn btn-rounded btn-noborder btn-danger min-width-125 mb-10":"btn btn-rounded btn-noborder btn-secondary min-width-125 mb-10";
					echo "<a href=\"".site_url("first/statistik/$st/1")."\" class=\"btn ".$strC." btn-xs\"><i class=\"si si-bar-chart mr-5\"></i>Bar Graph</a>";
					$strC = ($tipe==0)? "btn btn-rounded btn-noborder btn-danger min-width-125 mb-10":"btn btn-rounded btn-noborder btn-secondary min-width-125 mb-10"; 
					echo "<a href=\"".site_url("first/statistik/$st/0")."\" class=\"btn ".$strC." btn-xs\"><i class=\"si si-pie-chart mr-5\"></i>Pie Cart</a>
					<button data-toggle=\"modal\" data-target=\"#table\" type=\"button\" class=\"btn btn-rounded btn-noborder btn-success min-width-125 mb-10 \"><i class=\"si si-list mr-5\"></i>Tabel</button>
				</div>
			</div>
		</div>
		<div class=\"box-body\">
			<div id=\"container\"></div>
			<div id=\"contentpane\">
				<div class=\"ui-layout-north panel top\"></div>
			</div>
		</div>
	 ";
	echo "<div class=\"modal\" id=\"table\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-large\" aria-hidden=\"true\">\n";
	echo "<div class=\"modal-dialog modal-lg\" role=\"document\">\n";
	echo "	<div class=\"modal-content\">\n";
	echo "		<div class=\"block block-themed block-transparent mb-0\">\n";
	echo "			<div class=\"block-header bg-primary-dark\">\n";
	echo "				<h3 class=\"block-title\">Tabel ". $heading."</h3>\n";
	echo "				<div class=\"block-options\">\n";
	echo "					<button type=\"button\" class=\"btn-block-option\" data-dismiss=\"modal\" aria-label=\"Close\">\n";
	echo "						<i class=\"si si-close\"></i>\n";
	echo "					</button>\n";
	// echo "					<button type=\"button\" class=\"btn-block-option\" data-toggle=\"block-option\" data-action=\"fullscreen_toggle\"><i class=\"si si-size-fullscreen\"></i></button>\n";
	echo "				</div>\n";
	echo "			</div>\n";
	echo "			<div class=\"block-content\" data-toggle=\"slimscroll\" data-height=\"500px\">\n";
	echo "
					<table class=\"table-bordered tablesaw\" data-tablesaw-mode=\"swipe\">
						<thead>
						<tr>
							<th class=\"text-nowrap\" data-tablesaw-sortable-col data-tablesaw-priority=\"persist\">No</th>
							<th data-tablesaw-sortable-col data-tablesaw-priority=\"persist\">KLOMPOK</th>
							<th>JML TOTAL</th>";
						if($jenis_laporan == 'penduduk'){
					  echo "<th data-tablesaw-sortable-col data-tablesaw-priority=\"1\" class=\"text-nowrap\">Laki-laki</th>
							<th data-tablesaw-sortable-col data-tablesaw-priority=\"2\" class=\"text-nowrap\">Perempuan</th>"; }
						
					  echo "
						</tr>
						</thead>
						<tbody>"; 	$i=0; $l=0; $p=0; $hide="";$h=0;$jm = count($stat); foreach($stat as $data){ $h++; 	if($h > 10 AND $jm > 11)$hide="lebih";
					  echo "<tr class=\"$hide\">
							 	<td>".$data['no']."</td>
							 	<td><small>".$data['nama']."</small></td>
								<td><b>".$data['jumlah']." : </b>".$data['persen']."</td>";
								if($jenis_laporan == 'penduduk'){
									echo "
									<td><b>".$data['laki']."</b> : ".$data['persen1']."</td>
									<td><b>".$data['perempuan']."</b> : ".$data['persen2']."</td>
								";}
							echo "</tr>";
								$i=$i+$data['jumlah'];
								$l=$l+$data['laki']; $p=$p+$data['perempuan'];}
										
				   echo "</tbody>
					</table> 
			</div>";

	echo "		</div>\n";
	echo "	</div>\n";
	echo "</div>\n";
	echo "</div>";

?>
