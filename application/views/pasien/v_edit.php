<section class="content mt-3 mb-5">
    <div class="container-fluid">
        <div class="card border-transparent shadow-lg">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('pasien'); ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
            </div>
            <div class="card-body">
            <form action="<?= base_url('pasien/update'); ?>" method="post">
                    <input type="hidden" class="form-control" name="id_pasien" value="<?= $pasien['id_pasien']; ?>">
                    <div class="form-group">
                        <label for="">Nama Pasien</label>
                        <input type="text" class="form-control" name="nama_pasien" value="<?= $pasien['nama_pasien']; ?>" required>
                    </div>
                    <div class="form-group">
                        <select name="jenis_kelamin" class="form-control">
                        <option value="selected>-- pilih jenis kelamin --</option>
                        <?php if($pasien['jenis_kelamin'] == "L") { ?>
                            <option value="L" selected>Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        <?php } else { ?>
                            <option value="P" selected>Perempuan</option>
                            <option value="L">Laki-Laki</option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Umur</label>
                        <input name="umur" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>