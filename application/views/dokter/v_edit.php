<section class="content mt-3 mb-5">
    <div class="container-fluid">
        <div class="card border-transparent shadow-lg">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('dokter'); ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
            </div>
            <div class="card-body">
                <form action="<?= base_url('dokter/update'); ?>" method="post">
                    <input type="hidden" class="form-control" name="id_dokter" value="<?= $dokter['id_dokter']; ?>">
                    <div class="form-group">
                        <label for="">Nama Dokter</label>
                        <input type="text" class="form-control" name="nama_dokter" value="<?= $dokter['nama_dokter']; ?>" required>
                    </div>
                    <div class="form-group">
                        <select name="jenis_kelamin" class="form-control">
                        <!-- <option value="selected>-- pilih jenis kelamin --</option> -->
                        <?php if($dokter['jenis_kelamin'] == "L") { ?>
                            <option value="L" selected>Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        <?php } else { ?>
                            <option value="P" selected>Perempuan</option>
                            <option value="L">Laki-Laki</option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea class="form-control" name="alamat" cols="30" rows="10"><?= $dokter['alamat']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>