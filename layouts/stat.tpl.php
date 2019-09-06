<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php $this->load->view("$folder_themes/commons/head_start.php"); ?>
<?php $this->load->view("$folder_themes/commons/head_end.php"); ?>
<?php $this->load->view("$folder_themes/commons/page_start.php"); ?>
            <div class="content content-full">
                <!-- Dummy content -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-sm-12">
                                <?php $this->load->view("$folder_themes/partials/statistik/all_statistik.php"); ?>
                            </div>
                            <div class="col-sm-12">
                                <div class="block">
                                <?php
                                        if($tipe == 2){
                                        if($tipex==1){$this->load->view($folder_themes.'/partials/statistik/statistik_sos.php');}                   
                                        }elseif($tipe == 3){ $this->load->view($folder_themes.'/partials/statistik/wilayah.php');  
                                        }elseif($tipe == 4){   $this->load->view($folder_themes.'/partials/statistik/dpt.php');
                                        }else{ $this->load->view(Web_Controller::fallback_default($this->theme, '/partials/statistik/statistik.php'));    
                                        }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <?php $this->load->view("$folder_themes/layouts/widget.php"); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <?php $this->load->view($folder_themes.'/includes/inc_other_footer.php'); ?> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view("$folder_themes/commons/page_end.php"); ?>
            <?php $this->load->view("$folder_themes/commons/footer_start.php"); ?>
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
<?php $this->load->view("$folder_themes/commons/footer_end.php"); ?>