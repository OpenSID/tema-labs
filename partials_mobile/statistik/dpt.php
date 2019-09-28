<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
echo "
<div class=\"block block-themed\">
<div class=\"block-header block-header-default\">
		<h2 class=\"h4 font-w400 block-title\"> <i class=\"si si-bar-chart\"></i> Daftar Calon Pemilih ( pada tgl pemilihan $tanggal_pemilihan )</h2>
	</div>
	<div class=\"block-content\">
		<table class=\"table-bordered tablesaw\" id='dpt' data-tablesaw-mode=\"swipe\">
		<thead>
		<tr>
			<th scope=\"col\" data-tablesaw-sortable-col data-tablesaw-priority=\"persist\">No</th>
			<th class=\"text-nowrap\" data-tablesaw-sortable-col data-tablesaw-priority=\"persist\">RW</th>
			<th class=\"text-nowrap\" data-tablesaw-sortable-col data-tablesaw-priority=\"persist\" >Jiwa</th>
			<th class=\"text-nowrap\">LAKI LAKI </th>
			<th class=\"text-nowrap\">PEREMPUAN </th>
		</tr>
		</thead>";
		if(count($main) > 0){
			echo "
			<tbody>";

			foreach($main as $data){
				echo "<tr>
					<td>".$data['no']."</td>
					<td>".strtoupper($data['rw'])."</td>
					<td>".$data['jumlah_warga']."</td>
					<td>".$data['jumlah_warga_l']."</td>
					<td>".$data['jumlah_warga_p']."</td>
				</tr>";
			}
			echo "
			</tbody>

			<tfooter>
			<tr>
				<th></th>
				<th class='text-right'>TOTAL</th>
				<th class='text-right'>".$total['total_warga']."</th>
				<th class='text-right'>".$total['total_warga_l']."</th>
				<th class='text-right'>".$total['total_warga_p']."</th>
			</tr>
			</tfooter>";

		} else {
			echo "<tr><td colspan=6 class='text-center'>Daftar masih kosong</td></tr>";
		}

		echo "
		</table>
	</div>

</div>";

