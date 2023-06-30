<section class="content mt-3 mb-5">
    <div class="container-fluid">
        <div class="card border-transparent shadow-lg">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('obat'); ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
            </div>
            <div class="card-body">
                <form action="<?= base_url('obat/update'); ?>" method="post">
                    <input type="hidden" class="form-control" name="id_obat" value="<?= $obat['id_obat']; ?>">
                    <div class="form-group">
                        <label for="">Nama obat</label>
                        <input type="text" class="form-control" name="nama_obat" value="<?= $obat['nama_obat']; ?>" required>
                    </div>
                    <div class="form-group">
                        <select name="jenis_obat" class="form-control">

                            <?php if ($obat['jenis_obat'] == "T") { ?>
                                <option value="T" selected>Tablet</option>
                                <option value="S">Sirup</option>
                            <?php } else { ?>
                                <option value="S" selected>Sirup</option>
                                <option value="T">Tablet</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Merk</label>
                        <input  name="merk" class="form-control"<?= $obat['merk']; ?> >
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>