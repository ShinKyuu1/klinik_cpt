<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">

    <style>
        .table-bordered th,
        .table-bordered thead th,
        .table-bordered td{
            border: 1px solid #000;
        }

    </style>
</head>
<body>
    <div class="container">
        <h3 class="mb-0">Klinik CEPAT TANGGAP</h3>
        <small>Jl. Teluk Jambe Timur, DS Sukaluyu, Kec karawang, Kab Karawang
        </small>
        <hr>
        <h4 class="text-center">LAPORAN DATA DOKTER</h4>

        <table class="table table-bordered table-sm">
            <tr>
                <th class="text-center" width="80px">No.</th>
                <th>Nama Dokter</th>
            </tr>
            <?php $no=1; foreach($dokter as $dok) { ?>
            <tr>
                <td class="text-center"><?= $no; ?></td>
                <td><?= $dok['nama_dokter']; ?></td>
            </tr>
            <?php $no++; } ?>
        </table>
        <br>
        <table width="100%">
            <tr>
                <td></td>
                <td width="300px">
                    <p>
                        Karawang Barat, <?= date('d-m-y'); ?>
                    <br>
                    Administrator,
                    <br><br><br><br>
                    <b>......................................<b>
                    </p>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>