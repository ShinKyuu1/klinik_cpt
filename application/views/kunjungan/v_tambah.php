<section class="content mt-3 mb-5">
    <div class="container-fluid">
        <div class="card border-transparent shadow-lg">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('kunjungan'); ?>" class="btn btn-warning float-right">Kembali</a>
            </div>
            <div class="card-body">
                <form action="<?= base_url('kunjungan/insert'); ?>" method="post">
                    <div class="form-group">
                        <label for="">Tanggal Berobat</label>
                        <input type="date" class="form-control" name="tgl_berobat" required>
                    </div>
                    <div class="form-group">
                        <label for="">Pasien</label>
                        <select name="pasien" class="form-control">
                            <option value="" selected>-- Pilih Pasien --</option>
                            <?php foreach ($pasien as $p){ ?>
                                <option value="<?= $p['id_pasien']; ?>"><?= $p['nama_pasien']; ?></option>
                          <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Dokter</label>
                        <select name="dokter" class="form-control">
                            <option value="" selected>-- Pilih Dokter --</option>
                            <?php foreach ($dokter as $d) { ?>
                                <option value="<?= $d['id_dokter']; ?>"><?= $d['nama_dokter']; ?></option>
                           <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>