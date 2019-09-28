<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
/**
 * footer_start.php
 *
 * Author: Labkoding.id tema-labs
 *
 * Silahkan Berdonasi Apabila
 * Berkemauan ,kami Membantu Opensid Dengan Segenap hati tanpa Bayaran
 * Apabila Agan Pengguna Tema Labs Sukarela Bedonasi  Silahkan langsung Saja Berdonasi
 *
 *
 */
?>

<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/core/bootstrap.bundle.min.js"); ?>"></script>
<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/core/jquery.slimscroll.min.js"); ?>"></script>
<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/core/jquery.scrollLock.min.js"); ?>"></script>
<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/core/jquery.appear.min.js"); ?>"></script>
<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/core/jquery.countTo.min.js"); ?>"></script>
<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/core/js.cookie.min.js"); ?>"></script>
<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/labs.js"); ?>"></script>
<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/plugins/tablesaw-master/dist/tablesaw.js"); ?>"></script>
<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/plugins/tablesaw-master/dist/tablesaw-init.js"); ?>"></script>
<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/plugins/slick/slick.min.js"); ?>"> </script>
 <script>
jQuery(function() {
    Codebase.helpers('slick');
});
 </script>
 <!-- SRIPTS STATISTIK -->
 <script type="text/javascript">
                    var chart;
                    $(document).ready(function() {
                        chart = new Highcharts.Chart({
                            chart: {
                                renderTo: 'container',
                                defaultSeriesType: 'column'
                            },
                            title: {
                                text: 'Statistik Kelas Sosial'
                            },
                            xAxis: {
                                title: {
                                    text: 'Kelas Sosial'
                                },
                                categories: [
                                <?php  $i=0;foreach($main as $data){$i++;?>
                                <?= "'$data[nama]',";?>
                                <?php }?>
                                ]
                            },
                            yAxis: {
                                title: {
                                    text: 'Populasi'
                                }
                            },
                            legend: {
                                layout: 'vertical',
                                backgroundColor: '#FFFFFF',
                                align: 'left',
                                verticalAlign: 'top',
                                x: 100,
                                y: 70,
                                floating: true,
                                shadow: true,
                                enabled:false
                            },
                            tooltip: {
                                formatter: function() {
                                    return ''+
                                        this.x +': '+ this.y +'';
                                }
                            },
                            plotOptions: {
                                series: {
                                    colorByPoint: true
                                },
                                column: {
                                    pointPadding: 0.2,
                                    borderWidth: 0
                                }
                            },
                                series: [{
                                name: 'Populasi',
                                data: [
                                <?php  foreach($main as $data){?>
                                <?= $data['jumlah'].",";?>
                                <?php }?>]

                            }]
                        });


                    });
                </script>
            <!-- END SRIPTS STATISTIK SOS -->

            <!-- SRIPTS STATISTIK -->
            <?php if($tipe==1){?>
                <script type="text/javascript">
                    $(function () {
                        var chart;
                        $(document).ready(function () {

                            chart = new Highcharts.Chart({
                                chart: { renderTo: 'container'},
                                title:0,
                                        xAxis: {
                                            categories: [
                                            <?php  $i=0;foreach($stat as $data){$i++;?>
                                            <?php if($data['jumlah'] != "-" AND $data['nama']!= "TOTAL" AND $data['nama']!= "JUMLAH"){echo "'$i',";}?>
                                            <?php }?>
                                            ]
                                        },
                                    plotOptions: {
                                        series: {
                                            colorByPoint: true
                                        },
                                        column: {
                                            pointPadding: -0.1,
                                            borderWidth: 0
                                        }
                                    },
                                        legend: {
                                            enabled:false
                                        },
                                series: [{
                                    type: 'column',
                                    name: 'Jumlah Populasi',
                                    shadow:1,
                                    border:1,
                                    data: [
                                            <?php  foreach($stat as $data){?>
                                                <?php if($data['jumlah'] != "-" AND $data['nama']!= "TOTAL" AND $data['nama']!= "JUMLAH"){?>
                                                    ['<?= $data['nama']?>',<?= $data['jumlah']?>],
                                                <?php }?>
                                            <?php }?>
                                    ]
                                }]
                            });
                        });

                    });
                    </script>
                    <?php }else{?>

                    <script type="text/javascript">
                    $(function () {
                        var chart;

                        $(document).ready(function () {

                            // Build the chart
                            chart = new Highcharts.Chart({
                                chart: {
                                    renderTo: 'container'
                                },
                                title:0,
                                plotOptions: {
                                    pie: {
                                        allowPointSelect: true,
                                        cursor: 'pointer',
                                        showInLegend: true
                                    }
                                },
                                series: [{
                                    type: 'pie',
                                    name: 'Jumlah Populasi',
                                    shadow:1,
                                    border:1,
                                    data: [
                                            <?php  foreach($stat as $data){?>
                                                <?php if($data['jumlah'] != "-" AND $data['nama']!= "TOTAL" AND $data['nama']!= "JUMLAH"){?>
                                                    ['<?= $data['nama']?>',<?= $data['jumlah']?>],
                                                <?php }?>
                                            <?php }?>
                                    ]
                                }]
                            });
                        });

                    });
                </script>
            <?php }?>
            <!-- END SRIPTS STATISTIK  -->
            <script src="<?= base_url()?>assets/js/highcharts/highcharts.js"></script>
            <script src="<?= base_url()?>assets/js/highcharts/highcharts-more.js"></script>
            <script src="<?= base_url()?>assets/js/highcharts/exporting.js"></script>