<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/custom/footer.css">

    <link rel="icon" href="<?= base_url(); ?>assets/img/favicon_logo.ico" type="image/ico">
 
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    
    <style>
    
            /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

    
      main > .body {
        padding: 60px 15px 0;
      }

      body {
        flex-wrap: wrap-reverse;
        background-image: url("assets/img/hospital.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        scroll-behavior: smooth;
      }

      .footer {
        background-color: #f5f5f5;
      }

      .footer > .container {
        padding-right: 15px;
        padding-left: 15px;
      }

      code {
        font-size: 80%;
      }

      @media screen and (max-width:680px){

        #maincontent{
          width: auto;
          float: none;
        }
        #sidebar{
          width: auto;
          float: none;
        }
}

    </style>
    <title>Aplikasi Data Klinik Cepat Tanggap</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="<?= base_url(); ?>"><em>Klinik CTP</em></a>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>"> Home <span class="sr-only">(current)</span></a>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navMaster" role="button" data-toggle="dropdown" data-placement="bottom" title="Master data" aria-expanded="false">
          Master Data
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="<?= base_url('user'); ?>" data-placement="left" title="Data user">Data User</a>
          <a class="dropdown-item" href="<?= base_url('dokter'); ?>" data-placement="left" title="Data dokter">Data Dokter</a>
          <a class="dropdown-item" href="<?= base_url('pasien'); ?>" data-placement="left" title="Data pasien">Data Pasien</a>
          <a class="dropdown-item" href="<?= base_url('obat'); ?>" data-placement="left" title="Data obat">Data Obat</a>
        </div>

      </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('kunjungan'); ?>" data-placement="left" title="kunjungan/berobat">Berobat</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navLaporan" role="button" data-toggle="dropdown"  data-placement="bottom" title="Laporan" aria-expanded="false">
          Laporan
        </a>
        <div class="dropdown-menu" aria-labelledby="navLaporan">
          <a class="dropdown-item" href="<?= base_url('laporan/data_pasien'); ?>" target="_blank" data-placement="left" title="Data pasien">Data Pasien</a>
          <a class="dropdown-item" href="<?= base_url('laporan/data_dokter'); ?>" target="_blank" data-placement="left" title="Data dokter">Data Dokter</a>
          <a class="dropdown-item" href="<?= base_url('laporan/data_berobat'); ?>" target="_blank" data-placement="left" title="Data kunjungan">Data Kunjungan</a>
        </div>
      </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth/logout'); ?>" onclick="return confirm('apakah anda yakin mau keluar dari sesi ini? tekan OK Untuk keluar 😢 Tekan Cancel jika tidak 😆')">Logout</a>
        </li>
        
        </ul>
    </div>
  </nav>
