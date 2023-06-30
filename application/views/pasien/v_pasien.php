<section class="content mt-3 mb-5">
    <div class="container-fluid">
        <div class="card border-transparent shadow-lg">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('pasien/tambah'); ?>" class="btn btn-success btn-sm float-right">Tambah Data
                    Pasien</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Nama Pasien</th>
                                <th>Jenis Kelamin</th>
                                <th>Umur</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($pasiens as $pasien) { ?>
                            <tr>
                                <td class="text-center"><?= $no; ?></td>
                                    <td><?= $pasien['nama_pasien']; ?></td>
                                    <?php if ($pasien['jenis_kelamin'] == "L"){ ?>
                                            <td>Laki-Laki</td>
                                    <?php } else {?>
                                            <td>Perempuan</td>
                                    <?php }?>
                                <td><?= $pasien['umur']; ?></td>
                                <td>
                                    <a href="<?= base_url().'pasien/edit/'.$pasien['id_pasien']; ?>"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url().'pasien/hapus/'.$pasien['id_pasien']; ?>"
                                        class="btn btn-danger btn-sm"
                                        onClick="return confirm('Yakin Mau menghapus data ini?')">Hapus</a>
                                </td>
                            </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>