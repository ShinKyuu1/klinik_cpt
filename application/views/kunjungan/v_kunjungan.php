<section class="content mt-3 mb-5">
    <div class="container-fluid">
        <div class="card border-transparent shadow-lg">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('kunjungan/tambah'); ?>" class="btn btn-success btn-sm float-right">Kunjungan Baru</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Tanggal</th>
                                <th>Nama Pasien</th>
                                <th>Umur</th>
                                <th>Dokter</th>
                                <th>Rekam Medis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($kunjungans as $kunjungan){ ?>
                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td><?= $kunjungan['tgl_berobat'] ?></td>
                                    <td><?= $kunjungan['nama_pasien'] ?></td>
                                    <td><?= $kunjungan['umur'] ?></td>
                                    <td><?= $kunjungan['nama_dokter'] ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>kunjungan/rekam/<?= $kunjungan['id_berobat']; ?>" class="btn btn-success btn-sm">Rekam Medis</a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url().'kunjungan/edit/'.$kunjungan['id_berobat']; ?>" class="btn btn-warning btn-sm">Edit</a>

                                        <a href="<?= base_url().'kunjungan/hapus/'.$kunjungan['id_berobat']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau menghapus data ini 😕? ')">Hapus</a>
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