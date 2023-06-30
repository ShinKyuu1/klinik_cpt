<section class="content mt-3 mb-5">
    <div class="container-fluid">
        <div class="card border-transparent shadow-lg">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('kunjungan'); ?>" class="btn btn-warning float-right">Kembali</a>
            </div>
        <div class="card-body">
            <form action="<?= base_url('kunjungan/update'); ?>" method="post">
                <input type="hidden" class="form-control" name="id_kunjungan" value="<?= $kunjungan['id_berobat']; ?>">
                    <div class="form-group">
                        <label for="">Tanggal Berobat</label>
                        <input type="date" name="tgl_berobat" class="form-control" value="<?= $kunjungan['tgl_berobat']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Pasien</label>
                        <select name="pasien" class="form-control">
                            <?php foreach ($pasien as $p) {
                                if($kunjungan['id_pasien']==$p['id_pasien']){
                            ?>
                                <option selected value="<?= $p['id_pasien']; ?>"><?= $p['nama_pasien']; ?></option>
                            <?php }else{ ?>
                                <option value="<?= $p['id_pasien']; ?>"><?= $p['nama_pasien']; ?></option>
                        <?php } }?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Dokter</label>
                        <select name="dokter" class="form-control">
                            <?php foreach ($dokter as $d) {
                                if($kunjungan['id_dokter']==$d['id_dokter']){
                            ?>
                                <option selected value="<?= $d['id_dokter']; ?>"><?= $d['nama_dokter']; ?></option>
                            <?php }else{ ?>
                                <option value="<?= $d['id_dokter']; ?>"><?= $d['nama_dokter']; ?></option>
                        <?php } }?>

                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </div>
                </form>
            </div>    
        </div>
    </div>
</section>