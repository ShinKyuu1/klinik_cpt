<section class="content mt-3 mb-5">
    <div class="container-fluid">
        <div class="card border-transparent shadow-lg">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('obat/tambah'); ?>" class="btn btn-success btn-sm float-right">Tambah Data
                    Obat</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Nama Obat</th>
                                <th>Jenis Obat</th>
                                <th>Merk</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($obats as $obat) { ?>
                            <tr>
                                <td class="text-center"><?= $no; ?></td>
                                    <td><?= $obat['nama_obat']; ?></td>
                                    <?php if ($obat['jenis_obat'] == "T"){ ?>
                                            <td>Tablet</td>
                                    <?php } else {?>
                                            <td>Sirup</td>
                                    <?php }?>
                                <td><?= $obat['merk']; ?></td>
                                <td>
                                    <a href="<?= base_url().'obat/edit/'.$obat['id_obat']; ?>"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url().'obat/hapus/'.$obat['id_obat']; ?>"
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