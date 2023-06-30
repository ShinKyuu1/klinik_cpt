<section class="content mt-3 mb-5">
    <div class="container-fluid">
        <div class="card border-transparent shadow-lg">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('user/tambah'); ?>" class="btn btn-success btn-sm float-right">Tambah Data
                    User</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Username</th>
                                <th>Nama Lengkap</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($users as $user) { ?>
                            <tr>
                                <td class="text-center"><?= $no; ?></td>
                                    <td><?= $user['username']; ?></td>
                                    <td><?= $user['nama_lengkap']; ?></td>
                                <td>
                                    <a href="<?= base_url().'user/edit/'.$user['id_user']; ?>"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url().'user/hapus/'.$user['id_user']; ?>"
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