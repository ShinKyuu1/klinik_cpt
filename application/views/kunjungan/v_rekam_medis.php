<section class="content mt-2 mb-5">
    <div class="container-fluid">
    <div class="card-body  bg-primary text-white">
            <?= $title; ?>

            <a href="<?= base_url('kunjungan'); ?>" class="btn btn-warning float-right">Kembali</a>
        </div>
        <div class="row">
            <div class="col-md-6 mt-2">
                <div class="card border-transparent shadow-lg">
                    <div class="card-header bg-primary text-white">
                        Biodata Pasien
                    </div>
                    <div class="card-body">
                        <table class="table table-sm">
                            <tr>
                                <th>Nama Pasien</th>
                                <td>:</td>
                                <td>
                                    <?= $d['nama_pasien']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>:</td>
                                <?php if ($d['jenis_kelamin'] == 'L') { ?>
                                    <td>Laki-Laki</td>
                                <?php } else { ?>
                                    <td>Perempuan</td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <th>Umur</th>
                                <td>:</td>
                                <td>
                                    <?= $d['umur']; ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card mt-3 border-transparent shadow-lg">
                    <div class="card-header bg-success text-white">
                        Riwayat Berobat
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tgl. Berobat</th>
                                    <th>Keluhan</th>
                                    <th>Diagnosa</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($riwayat as $r) { ?>
                                    <tr>
                                        <td>
                                            <?= $no; ?>
                                        </td>
                                        <td>
                                            <?= $r['tgl_berobat']; ?>
                                        </td>
                                        <td>
                                            <?= $r['keluhan']; ?>
                                        </td>
                                        <td>
                                            <?= $r['diagnosa']; ?>
                                        </td>
                                        <td>
                                            <?= $r['tindakan']; ?>
                                        </td>
                                    </tr>
                                    <?php $no++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-2">
                <div class="card border-transparent shadow-lg">
                    <div class="card-header bg-warning text-white">
                        Catatan Rekam Medis |
                        <?= $d['tgl_berobat']; ?>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url(); ?>kunjungan/insert_rm" method="post">
                            <input type="hidden" name="id" value="<?= $d['id_berobat']; ?>">
                            <div class="form-group">
                                <label for="">Keluhan</label>
                                <textarea name="keluhan" class="form-control" cols="30" rows="2"
                                    required><?= $d['keluhan']; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="">Diagnosa</label>
                                <textarea name="diagnosa" class="form-control" cols="30" rows="2"
                                    required><?= $d['diagnosa']; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="">Tindakan</label>
                                <select name="tindakan" class="form-control" cols="30" rows="2" required>
                                    <?= $d['tindakan']; ?>
                                    <option selected value="<?= $d['tindakan']; ?>"><?= $d['tindakan']; ?></option>
                                    <option value="Rawat Jalan">Rawat Jalan</option>
                                    <option value="Rawat Inap">Rawat Inap</option>
                                    <option value="Rujuk">Rujuk</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-danger btn-sm">Simpan</button>
                        </form>
                    </div>
                </div>
                <div class="card mt-3 border-transparent shadow-lg">
                    <div class="card-header bg-danger text-white">
                        Resep Obat |
                        <?= $d['tgl_berobat']; ?>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url(); ?>kunjungan/insert_resep" method="post">
                            <input type="hidden" class="form-control" name="id" value="<?= $d['id_berobat']; ?>">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <select name="obat" class="form-control">
                                            <option value="">-- Pilih Obat --</option>
                                            <?php foreach ($obat as $o) { ?>
                                                <option value="<?= $o['id_obat']; ?>"><?= $o['nama_obat']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-success">+</button>
                                </div>
                            </div>
                    </div>
                    </form>

                    <hr>
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Obat</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($resep as $re) { ?>
                                <tr>
                                    <td>
                                        <?= $no; ?>
                                    </td>
                                    <td>
                                        <?= $re['nama_obat']; ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url() . 'kunjungan/hapus_resep/' . $re['id_resep'] . '/' . $re['id_berobat']; ?>"
                                            class="text-danger">x</a>
                                    </td>
                                </tr>
                                <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>