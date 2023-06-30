<section class="content mt-3 mb-5">
    <div class="container-fluid">
        <div class="card border-transparent shadow-lg">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('dokter/tambah'); ?>" class="btn btn-success btn-sm float-right">Tambah Data
                    Dokter</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Nama Dokter</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($dokters as $dokter) { ?>
                            <tr>
                                <td class="text-center"><?= $no; ?></td>
                                    <td><?= $dokter['nama_dokter']; ?></td>
                                    <?php if ($dokter['jenis_kelamin'] == "L"){ ?>
                                            <td>Laki-Laki</td>
                                    <?php } else {?>
                                            <td>Perempuan</td>
                                    <?php }?>
                                <td><?= $dokter['alamat']; ?></td>
                                <td>
                                    <a href="<?= base_url().'dokter/edit/'.$dokter['id_dokter']; ?>"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url().'dokter/hapus/'.$dokter['id_dokter']; ?>"
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