<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php 
        //Anggaran Pendapatan Tahun Ini
        $add19          = 760071000;      		//Ketik Anggaran ADD
        $dd19           = 848172000;      		//Ketik Anggaran Dana Desa
        $pbh19          = 93472500+26678200;	//Ketik Anggaran PBH
        $pad19          = 9867952;				//Ketik Anggaran PAD
        $dll19          = 100000000;			//Ketik Anggaran DLL
        $bp19			= 200000000;			//Ketik Anggaran Bantuan Provinsi
        $pembiayaan19   = 329324456;			//Ketik Silpa Tahun Sebelumnya

        //Realisasi Pendapatan Tahun Sebelumnya
        $add        = 682242000;      			//Ketik Besaran ADD
        $dd         = 737089000;      			//Ketik Besaran DD
        $pbh        = 44174000+46217200;		//Ketik Besaran PBH
        $pad        = 100000000;        		//Ketik Besaran PAD
        $dll        = 8617690;        			//Ketik Besaran DLL
        $bp         = 100000000;        		//Ketik Besaran Bantuan Provinsi
        $pembiayaan = 254380746;      			//Ketik Besaran SiLPA

        //Realisasi Belanja Tahun Sebelumnya
        $satu       = 502790673;      			//Ketik Realisasi Bidang 1
        $dua        = 720427689;      			//Ketik Realisasi Bidang 2
        $tiga       = 52724000;       			//Ketik Realisasi Bidang 3
        $empat      = 167453818;      			//Ketik Realisasi Bidang 4
        $lima       = 0;              			//Ketik Realisasi Bidang 5

        // menghitung total pendapatan
        $total19 = $add19 + $dd19 + $pbh19 + $pad19 + $dll19 + $bp19 + $pembiayaan19;

        // menghitung prosentase
        $prosenADD19 = number_format($add19/$total19 * 100,2);
        $prosenDD19 = number_format($dd19/$total19 * 100,2);
        $prosenPBH19 = number_format($pbh19/$total19 * 100,2);
        $prosenPAD19 = number_format($pad19/$total19 * 100,2);
        $prosenDLL19 = number_format($dll19/$total19 * 100,2);
        $prosenBP19 = number_format($bp19/$total19 * 100,2);
        $prosenPB19 = number_format(100,2);

        // menentukan panjang grafik batang berdasarkan prosentase
        $panjangADD19 = $prosenADD19 * 100 / 100;
        $panjangDD19 = $prosenDD19 * 100 / 100;
        $panjangPBH19 = $prosenPBH19 * 100 / 100;
        $panjangPAD19 = $prosenPAD19 * 100 / 100;
        $panjangDLL19 = $prosenDLL19 * 100 / 100;
        $panjangBP19 = $prosenBP19 * 100 / 100;
        $panjangPB19 = $prosenPB19 * 100 / 100;

        // menghitung total pendapatan
        $total = $add + $dd + $pbh + $pad + $dll + $bp + $pembiayaan;

        // menghitung prosentase
        $prosenADD = number_format($add/694538200 * 100,2);		//Anggaran ADD sebagai pembagi
        $prosenDD = number_format($dd/737089000 * 100,2);		//Anggaran DD sebagai pembagi
        $prosenPBH = number_format($pbh/113052900 * 100,2);		//Anggaran PBH sebagai pembagi
        $prosenPAD = number_format($pad/100000000 * 100,2);		//Anggaran DLL sebagai pembagi
        $prosenDLL = number_format($dll/11790415 * 100,2);		//Anggaran DLL sebagai pembagi
        $prosenBP = number_format($bp/100000000 * 100,2);		//Anggaran Provinsi sebagai pembagi
        $prosenPB = number_format(100,2);

        // menentukan panjang grafik batang berdasarkan prosentase
        $panjangADD = $prosenADD * 100 / 100;
        $panjangDD = $prosenDD * 100 / 100;
        $panjangPBH = $prosenPBH * 100 / 100;
        $panjangPAD = $prosenPAD * 100 / 100;
        $panjangDLL = $prosenDLL * 100 / 100;
        $panjangBP = $prosenBP * 100 / 100;
        $panjangPB = $prosenPB * 100 / 100;

        // menghitung total pengeluaran
        $total2 = $satu + $dua + $tiga + $empat + $lima;

        // menghitung prosentase
        $prosenSatu = number_format($satu/579231390 * 100,2);
        $prosenDua = number_format($dua/928153096 * 100,2);
        $prosenTiga = number_format($tiga/55668000 * 100,2);
        $prosenEmpat = number_format($empat/249632015 * 100,2);
        $prosenLima = number_format($lima/2047410 * 100,2);

        // menentukan panjang grafik batang berdasarkan prosentase
        $panjangSatu = $prosenSatu * 100 / 100;
        $panjangDua = $prosenDua * 100 / 100;
        $panjangTiga = $prosenTiga * 100 / 100;
        $panjangEmpat = $prosenEmpat * 100 / 100;
        if ($prosenLima == 0) { $panjangLima = 0.2; }
        else { $panjangLima = $prosenLima * 100 / 100; }
        ?>
<div class="row">
    <div class="col-md-4 col-xl-4">
        <div class="block block-themed block-rounded">
            <div class="block-header bg-corporate">
                <h3 class="block-title">APARATUR DESA</h3>
            </div>
            <div class="block-content  bg-gray-light" data-toggle="slimscroll" data-height="235px" data-color="#ef5350"
                    data-opacity="1" data-always-visible="true">
               
                    <?php foreach($aparatur_desa as $data) : ?>
                    <a class="block block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix">
                            <?php if(AmbilFoto($data['foto'],"kecil") AND is_file(LOKASI_USER_PICT.$data['foto'])) : ?>
                            <div class="float-right">
                                <img class="img-avatar" src="<?= AmbilFoto($data['foto'],"kecil") ?>" alt="">
                            </div>
                            <?php endif; ?>
                            <div class="float-left mt-10">
                                <div class="font-w600 mb-5"><?= $data['nama'];?></div>
                                <div class="font-size-sm text-muted"><?= $data['jabatan'];?></div>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                
            </div>
        </div>
    </div>
    <?php if ($agenda): ?>
    <div class="col-md-4 col-xl-4">
        <div class="block">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-corporate">
                    <h3 class="block-title">AGENDA DESA</h3>
                    
                </div>
                <div class="block-content bg-gray-light" data-toggle="slimscroll" data-height="235px" data-color="#ef5350"
                    data-opacity="1" data-always-visible="true">
                    <?php 
                    foreach ($agenda as $l): ?>
                    <div id="<?= $l['judul']?>2" role="tablist" aria-multiselectable="true">
                        <div class="block block-bordered block-rounded mb-5">
                            <div class="block-header" role="tab" id="<?= $l['judul']?>2_h1">
                                <a class="font-w600 text-body-color-dark collapsed" data-toggle="collapse"
                                    href="#<?= $l['judul']?>2_q1" aria-expanded="false"
                                    aria-controls="<?= $l['judul']?>2_q1"><?= $l['judul']?></a>
                            </div>
                            <div id="<?= $l['judul']?>2_q1" class="collapse" role="tabpanel"
                                aria-labelledby="<?= $l['judul']?>2_h1" data-parent="#<?= $l['judul']?>2" style="">
                                <div class="block-content border-t">

                                    <table class="table table-bordered text-center table-vcenter">
                                        <thead>
                                            <tr>
                                                <th>DATA</th>
                                                <th>INFORMASI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="text-center" scope="row">Judul</th>
                                                <td> <a class="link-effect"
                                            href="<?= site_url("first/artikel/$l[id_artikel]")?>"><?= $l['judul']?></td>
                                            </tr>
                                            <tr>
                                                <th class="text-center" scope="row">Waktu</th>
                                                <td> <?= tgl_indo($l['tgl_agenda'])?></td>
                                            </tr>
                                            <tr>
                                                <th class="text-center" scope="row">Koordinator</th>
                                                <td> <?= $l['koordinator_kegiatan']?></td>
                                            </tr>
                                            <tr>
                                                <th class="text-center" scope="row">Lokasi </th>
                                                <td><?= $l['lokasi_kegiatan']?></td>
                                            </tr>
                                        </tbody>
                                    </table>
            
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="col-md-4 col-xl-4">
    <div class="block">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-corporate">
                    <h3 class="block-title">SINERGI PROGRAM</h3>
                    
                </div>
                <div class="block-content bg-gray-light" data-toggle="slimscroll" data-height="235px" data-color="#ef5350"
                    data-opacity="1" data-always-visible="true">
                    <?php foreach($sinergi_program as $data) : ?> 
                    <div class="col-md-12 col-xl-12">
                        <a class="block block-transparent bg-image d-flex align-items-stretch" href="<?= $data['tautan']?>"
                            style="background-image: url('<?= base_url()?>desa/upload/widget/<?= $data['gambar']?>" alt="<?= $data['judul']?>');">
                            <div class="block-content block-sticky-options pt-100 bg-black-op">
                                <div class="block-options block-options-left text-white">
                                </div>
                                <h3 class="h5 text-white-op"><?= $data['judul']?></h3>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
hr#eight {
  background: #171515f2;
  border-bottom: 2px dashed white;
  width: 80%; margin: 0 auto;
  
  &:before {
    top: 3px;
    left: 0;
    padding-right: 2em;
  }
}
</style>
<hr id="eight" data-symbol="✂">

<div class="content">
    <div class="row py-30">
        <div class="col-xl-4">
            <!-- Progress Animated -->
            <div class="block">
                <div class="block-header bg-corporate block-header-default">
                    <h3 class="block-title text-light">
                        Anggaran Tahun <b>2019</b>
                    </h3>
                </div>
                <div class="block-content">
                <em>Anggaran Pendapatan TA 2019</em><br><b>Rp. <?= number_format($total19); ?></b>
                <hr>
                    <em>Alokasi Dana Desa (ADD)</em><br><b>Rp. <?= number_format($add19); ?></b>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            style="width: <?= $panjangADD19; ?>%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-label"><?= $prosenADD19; ?>%</span>
                        </div>
                    </div>
                     <em>Dana Desa (DD)</em><br><b>Rp. <?= number_format($add19); ?></b>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                            role="progressbar" style="width: <?= $panjangDD19; ?>%;" aria-valuenow="50" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="progress-bar-label"><?= $prosenDD19; ?>%</span>
                        </div>
                    </div>
                    <em>Pendapatan Asli Desa (PAD)</em><br><b>Rp. <?= number_format($pad19); ?></b>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                            role="progressbar" style="width: <?= $panjangPAD19; ?>%;" aria-valuenow="70" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="progress-bar-label"><?= $prosenPAD19; ?>%</span>
                        </div>
                    </div>
                     <em>Bagi Hasil Pajak & Retribusi Daerah (PBH)</em><br><b>Rp. <?= number_format($pad19); ?></b>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                            role="progressbar" style="width: <?= $panjangPAD19; ?>%;" aria-valuenow="70" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="progress-bar-label"><?= $prosenPAD19; ?>%</span>
                        </div>
                    </div>
                     <em> Pendapatan Lain-Lain (DLL)</em><br><b>Rp. <?= number_format($dll19); ?></b>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar"
                            style="width: <?= $panjangDLL19; ?>%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-label"><?= $prosenDLL19; ?>%</span>
                        </div>
                    </div>
                     <em>Bantuan Provinsi</em><br><b>Rp. <?= number_format($bp19); ?></b>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                            role="progressbar" style="width: <?= $panjangBP19; ?>%;" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="progress-bar-label"><?= $prosenBP19; ?>%</span>
                        </div>
                    </div>
                    <em>Silpa Tahun Sebelumnya</em><br><b>Rp. <?= number_format($pembiayaan19); ?></b>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                            role="progressbar" style="width: <?= $panjangPB19; ?>%;" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="progress-bar-label"><?= $prosenPB19; ?>%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Progress Animated -->
        </div>
        <div class="col-xl-4">
            <!-- Progress Animated -->
            <div class="block">
                <div class="block-header bg-corporate block-header-default">
                    <h3 class="block-title text-light">
                        Pendapatan Tahun <b>2018</b>
                    </h3>
                </div>
                <div class="block-content">
                <em>Realisasi Pendapatan Desa TA 2018</em><br><b>Rp. <?php $persennya = number_format($total/2010851261 * 100,2); echo number_format($total); ?></b>
                
                <hr>
                    <em>Alokasi Dana Desa (ADD)</em><br><b>Rp. <?= number_format($add); ?></b>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            style="width: <?= $panjangADD; ?>%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-label"><?= $prosenADD; ?>%</span>
                        </div>
                    </div>
                     <em>Dana Desa (DD)</em><br><b>Rp. <?= number_format($add); ?></b>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                            role="progressbar" style="width: <?= $panjangDD; ?>%;" aria-valuenow="50" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="progress-bar-label"><?= $prosenDD; ?>%</span>
                        </div>
                    </div>
                    <em>Pendapatan Asli Desa (PAD)</em><br><b>Rp. <?= number_format($pad); ?></b>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                            role="progressbar" style="width: <?= $panjangPAD; ?>%;" aria-valuenow="70" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="progress-bar-label"><?= $prosenPAD; ?>%</span>
                        </div>
                    </div>
                    <em>Bagi Hasil Pajak & Retribusi Daerah (PBH)</em><br><b>Rp. <?= number_format($pbh); ?></b>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                            role="progressbar" style="width: <?= $panjangPBH; ?>%;" aria-valuenow="70" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="progress-bar-label"><?= $prosenPBH; ?>%</span>
                        </div>
                    </div>
                     <em> Pendapatan Lain-Lain (DLL)</em><br><b>Rp. <?= number_format($dll); ?></b>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar"
                            style="width: <?= $panjangDLL; ?>%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-label"><?= $prosenDLL; ?>%</span>
                        </div>
                    </div>
                     <em>Bantuan Provinsi</em><br><b>Rp. <?= number_format($bp); ?></b>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                            role="progressbar" style="width: <?= $panjangBP19; ?>%;" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="progress-bar-label"><?= $prosenBP; ?>%</span>
                        </div>
                    </div>
                    <em>Silpa Tahun Sebelumnya</em><br><b>Rp. <?= number_format($pembiayaan); ?></b>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                            role="progressbar" style="width: <?= $panjangPB; ?>%;" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="progress-bar-label"><?= $prosenPB; ?>%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Progress Animated -->
        </div>
        <div class="col-xl-4">
            <!-- Progress Animated -->
            <div class="block">
                <div class="block-header bg-corporate block-header-default">
                    <h3 class="block-title text-light">
                        Belanja Tahun <b>2017</b>
                    </h3>
                </div>
                <div class="block-content">
                <em>Realisasi Pendapatan Desa TA 2017</em><br><b>Rp. <?php $persennya2 = number_format($total2/1814731911 * 100,2); echo number_format($total2); ?></b>
                
                <hr>
                    <em> Penyelenggaraan Pemerintahan Desa</em><br><b>Rp. <?= number_format($satu); ?></b>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            style="width: <?= $panjangSatu; ?>%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-label"><?= $prosenSatu; ?>%</span>
                        </div>
                    </div>
                    <em> Pemberdayaan Masyarakat Desa</em><br><b>Rp. <?= number_format($dua); ?></b>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            style="width: <?= $panjangDua; ?>%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-label"><?= $prosenDua; ?>%</span>
                        </div>
                    </div>
                    <em> Bidang Tak Terduga</em><br><b>Rp. <?= number_format($tiga); ?></b>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            style="width: <?= $panjangTiga; ?>%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-label"><?= $prosenTiga; ?>%</span>
                        </div>
                    </div>
                    <em> Pemberdayaan Masyarakat Desaa</em><br><b>Rp. <?= number_format($empat); ?></b>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            style="width: <?= $panjangEmpat; ?>%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-label"><?= $prosenEmpat; ?>%</span>
                        </div>
                    </div>
                    <em> Bidang Tak Terduga</em><br><b>Rp. <?= number_format($lima); ?></b>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            style="width: <?= $panjangLima; ?>%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-label"><?= $prosenLima; ?>%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Progress Animated -->
        </div>
    </div>
</div>