<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
/**
 * head_end.php
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
<link rel="stylesheet" id="css-main" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/labs.min.css"); ?>">

<!-- Jika Ingin Menganti Tema Silahkan Ganti Tema Dengan Kode Beriku  -->
<!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css">  -->
<?php
/**
 * 0. Defaul Di Comment Aja CSS Nya
 * 1. flat
 * 2. elegance
 * 3. earth
 * 4. pulse
 * 5. corporate
 */
?>
<link rel="stylesheet" href="<?= base_url()?>assets/css/leaflet.css" /> 
<link rel="stylesheet" id="css-theme" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/themes/flat.min.css"); ?>">
<link rel="stylesheet"  href="<?= base_url("$this->theme_folder/$this->theme/assets/js/plugins/slick/slick.min.css"); ?>">
<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/js/plugins/slick/slick-theme.min.css"); ?>">  
<link href="<?= base_url("$this->theme_folder/$this->theme/assets/js/plugins/tablesaw-master/dist/tablesaw.css"); ?>" rel="stylesheet">
<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/core/jquery.min.js"); ?>"></script>
<style type="text/css">
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #fff;
    }
    .preloader .loading {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      font: 14px arial;
    }
    </style>
<script>
    $(document).ready(function(){
      $(".preloader").fadeOut();
    })
    </script>
  </head>
</head>
<body>
<div class="preloader">
      <div class="loading">
        <img src="<?= base_url("$this->theme_folder/$this->theme/assets/preloader/preloader.gif") ?>" width="80">
       
      </div>
    </div>
