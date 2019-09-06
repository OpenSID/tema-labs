<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
if($w_cos){
	foreach($w_cos as $data){
		if($data["jenis_widget"] == 1){
			include("$this->theme_folder/$this->theme/widgets/".trim($data['isi']));
		} elseif($data["jenis_widget"] == 2){
			include(LOKASI_WIDGET.trim($data['isi']));
		} else {
			echo "
				".html_entity_decode($data['isi'])."
			";
		}
	}
}
?>
<script>
//Jika posisi kantor desa belum ada, maka posisi peta akan menampilkan seluruh Indonesia
<?php if (!empty($data_config['lat']) && !empty($data_config['lng'])): ?>
    var posisi = [<?=$data_config['lat'].",".$data_config['lng']?>];
    var zoom = <?=$data_config['zoom'] ?: 100?>;
<?php else: ?>
    var posisi = [-1.0546279422758742,116.71875000000001];
    var zoom = 100;
<?php endif; ?>

    var lokasi_kantor = L.map('map_canvas').setView(posisi, zoom);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
        id: 'mapbox.streets'
    }).addTo(lokasi_kantor);
//Jika posisi kantor desa belum ada, maka posisi peta akan menampilkan seluruh Indonesia
<?php if (!empty($data_config['lat']) && !empty($data_config['lng'])): ?>
    var kantor_desa = L.marker(posisi).addTo(lokasi_kantor);
<?php endif; ?>
</script>
<script>
//Jika posisi kantor desa belum ada, maka posisi peta akan menampilkan seluruh Indonesia
<?php if (!empty($data_config['lat']) && !empty($data_config['lng'])): ?>
    var posisi = [<?=$data_config['lat'].",".$data_config['lng']?>];
    var zoom = <?=$data_config['zoom'] ?: 10?>;
<?php else: ?>
    var posisi = [-1.0546279422758742,116.71875000000001];
    var zoom = 10;
<?php endif; ?>
    //Style polygon
    var style_polygon = {
        stroke: true,
        color: '#555555',
        opacity: 0.5,
        weight: 2,
        fillColor: '#8888dd',
        fillOpacity: 0.05
    };
    var wilayah_desa = L.map('map_wilayah').setView(posisi, zoom);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
        id: 'wilayah_desa'
    }).addTo(wilayah_desa);
//Jika wilayah belum ada, maka posisi peta akan menampilkan seluruh Indonesia
<?php if (!empty($data_config['path'])): ?>
    var polygon_desa = <?= $data_config['path']; ?>;
    var kantor_desa = L.polygon(polygon_desa, style_polygon).bindTooltip("Wilayah Desa").addTo(wilayah_desa);
    wilayah_desa.fitBounds(kantor_desa.getBounds());
<?php endif; ?>
</script>