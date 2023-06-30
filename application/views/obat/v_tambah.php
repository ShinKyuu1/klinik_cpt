<section class="content mt-3 mb-5">
    <div class="container-fluid">
        <div class="card border-transparent shadow-lg">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('obat'); ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
            </div>
            <div class="card-body">
                <form action="<?= base_url('obat/insert'); ?>" method="post">
                    <div class="form-group">
                        <label for="">Nama obat</label>
                        <input type="text" class="form-control" name="nama_obat" required>
                    </div>
                    <div class="form-group">
                        <select name="jenis_obat" class="form-control">
                            <option value="" selected>-- Pilih jenis Obat --</option>
                            <option value="T">Tablet</option>
                            <option value="S">Sirup</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Merk</label>
                        <input name="merk" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>