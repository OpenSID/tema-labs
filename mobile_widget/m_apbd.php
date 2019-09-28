
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

<div class="modal fade" id="map" tabindex="-1" role="dialog" aria-labelledby="modal-top" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-top" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    APBD Desa
                    <div class="block-options">
                        <button type="button" class="btn btn-alt-danger" data-dismiss="modal">Keluar</button>
                    </div>
                </div>
                <div class="block-content" data-toggle="slimscroll" data-height="500px" data-always-visible="true">
                    <div class="block">
                        <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#apbd1">2019</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#apbd2">2018</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#apbd3">2017</a>
                            </li>
                            
                        </ul>
                        <div class="block-content tab-content">
                            <div class="tab-pane active" id="apbd1" role="tabpanel">
                                <div class="block">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">
                                            Anggaran Tahun <b>2019</b>
                                        </h3>
                                    </div>
                                    <div class="block-content">
                                        <em>Anggaran Pendapatan TA 2019</em><br><b>Rp.
                                            <?= number_format($total19); ?></b>
                                        <hr>
                                        <em>Alokasi Dana Desa (ADD)</em><br><b>Rp. <?= number_format($add19); ?></b>
                                        <div class="progress push">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" style="width: <?= $panjangADD19; ?>%;"
                                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-bar-label"><?= $prosenADD19; ?>%</span>
                                            </div>
                                        </div>
                                        <em>Dana Desa (DD)</em><br><b>Rp. <?= number_format($add19); ?></b>
                                        <div class="progress push">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                                role="progressbar" style="width: <?= $panjangDD19; ?>%;"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-bar-label"><?= $prosenDD19; ?>%</span>
                                            </div>
                                        </div>
                                        <em>Pendapatan Asli Desa (PAD)</em><br><b>Rp. <?= number_format($pad19); ?></b>
                                        <div class="progress push">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                                role="progressbar" style="width: <?= $panjangPAD19; ?>%;"
                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-bar-label"><?= $prosenPAD19; ?>%</span>
                                            </div>
                                        </div>
                                        <em>Bagi Hasil Pajak & Retribusi Daerah (PBH)</em><br><b>Rp.
                                            <?= number_format($pad19); ?></b>
                                        <div class="progress push">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                                role="progressbar" style="width: <?= $panjangPAD19; ?>%;"
                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-bar-label"><?= $prosenPAD19; ?>%</span>
                                            </div>
                                        </div>
                                        <em> Pendapatan Lain-Lain (DLL)</em><br><b>Rp. <?= number_format($dll19); ?></b>
                                        <div class="progress push">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                                role="progressbar" style="width: <?= $panjangDLL19; ?>%;"
                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-bar-label"><?= $prosenDLL19; ?>%</span>
                                            </div>
                                        </div>
                                        <em>Bantuan Provinsi</em><br><b>Rp. <?= number_format($bp19); ?></b>
                                        <div class="progress push">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                                role="progressbar" style="width: <?= $panjangBP19; ?>%;"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-bar-label"><?= $prosenBP19; ?>%</span>
                                            </div>
                                        </div>
                                        <em>Silpa Tahun Sebelumnya</em><br><b>Rp.
                                            <?= number_format($pembiayaan19); ?></b>
                                        <div class="progress push">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                                role="progressbar" style="width: <?= $panjangPB19; ?>%;"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-bar-label"><?= $prosenPB19; ?>%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="apbd2" role="tabpanel">
                                <div class="block">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">
                                            Pendapatan Tahun <b>2018</b>
                                        </h3>
                                    </div>
                                    <div class="block-content">
                                        <em>Realisasi Pendapatan Desa TA 2018</em><br><b>Rp.
                                            <?php $persennya = number_format($total/2010851261 * 100,2); echo number_format($total); ?></b>

                                        <hr>
                                        <em>Alokasi Dana Desa (ADD)</em><br><b>Rp. <?= number_format($add); ?></b>
                                        <div class="progress push">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" style="width: <?= $panjangADD; ?>%;"
                                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-bar-label"><?= $prosenADD; ?>%</span>
                                            </div>
                                        </div>
                                        <em>Dana Desa (DD)</em><br><b>Rp. <?= number_format($add); ?></b>
                                        <div class="progress push">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                                role="progressbar" style="width: <?= $panjangDD; ?>%;"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-bar-label"><?= $prosenDD; ?>%</span>
                                            </div>
                                        </div>
                                        <em>Pendapatan Asli Desa (PAD)</em><br><b>Rp. <?= number_format($pad); ?></b>
                                        <div class="progress push">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                                role="progressbar" style="width: <?= $panjangPAD; ?>%;"
                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-bar-label"><?= $prosenPAD; ?>%</span>
                                            </div>
                                        </div>
                                        <em>Bagi Hasil Pajak & Retribusi Daerah (PBH)</em><br><b>Rp.
                                            <?= number_format($pbh); ?></b>
                                        <div class="progress push">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                                role="progressbar" style="width: <?= $panjangPBH; ?>%;"
                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-bar-label"><?= $prosenPBH; ?>%</span>
                                            </div>
                                        </div>
                                        <em> Pendapatan Lain-Lain (DLL)</em><br><b>Rp. <?= number_format($dll); ?></b>
                                        <div class="progress push">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                                role="progressbar" style="width: <?= $panjangDLL; ?>%;"
                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-bar-label"><?= $prosenDLL; ?>%</span>
                                            </div>
                                        </div>
                                        <em>Bantuan Provinsi</em><br><b>Rp. <?= number_format($bp); ?></b>
                                        <div class="progress push">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                                role="progressbar" style="width: <?= $panjangBP19; ?>%;"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-bar-label"><?= $prosenBP; ?>%</span>
                                            </div>
                                        </div>
                                        <em>Silpa Tahun Sebelumnya</em><br><b>Rp. <?= number_format($pembiayaan); ?></b>
                                        <div class="progress push">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                                role="progressbar" style="width: <?= $panjangPB; ?>%;"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-bar-label"><?= $prosenPB; ?>%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="apbd3" role="tabpanel">
                                <div class="block">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">
                                            Belanja Tahun <b>2017</b>
                                        </h3>
                                    </div>
                                    <div class="block-content">
                                        <em>Realisasi Pendapatan Desa TA 2017</em><br><b>Rp.
                                            <?php $persennya2 = number_format($total2/1814731911 * 100,2); echo number_format($total2); ?></b>

                                        <hr>
                                        <em> Penyelenggaraan Pemerintahan Desa</em><br><b>Rp.
                                            <?= number_format($satu); ?></b>
                                        <div class="progress push">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" style="width: <?= $panjangSatu; ?>%;"
                                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-bar-label"><?= $prosenSatu; ?>%</span>
                                            </div>
                                        </div>
                                        <em> Pemberdayaan Masyarakat Desa</em><br><b>Rp. <?= number_format($dua); ?></b>
                                        <div class="progress push">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" style="width: <?= $panjangDua; ?>%;"
                                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-bar-label"><?= $prosenDua; ?>%</span>
                                            </div>
                                        </div>
                                        <em> Bidang Tak Terduga</em><br><b>Rp. <?= number_format($tiga); ?></b>
                                        <div class="progress push">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" style="width: <?= $panjangTiga; ?>%;"
                                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-bar-label"><?= $prosenTiga; ?>%</span>
                                            </div>
                                        </div>
                                        <em> Pemberdayaan Masyarakat Desaa</em><br><b>Rp.
                                            <?= number_format($empat); ?></b>
                                        <div class="progress push">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" style="width: <?= $panjangEmpat; ?>%;"
                                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-bar-label"><?= $prosenEmpat; ?>%</span>
                                            </div>
                                        </div>
                                        <em> Bidang Tak Terduga</em><br><b>Rp. <?= number_format($lima); ?></b>
                                        <div class="progress push">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" style="width: <?= $panjangLima; ?>%;"
                                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-bar-label"><?= $prosenLima; ?>%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>