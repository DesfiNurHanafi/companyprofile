<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <?= $judul; ?> </h1>

    <a href="" class="btn btn-sm btn-success mb-3" data-toggle="modal" data-target="#tambahkaryawanModal">Tambah Karyawan</a>

    <?= $this->session->flashdata('pesan'); ?>



    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Karyawan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Facebook</th>
                            <th>Instagram</th>
                            <th>Twitter</th>
                            <th>jabatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($karyawan as $kry) : ?>
                            <tr>
                                <td> <img class="img-thumbnail" src="<?= base_url('front-end/assets/img/karyawan/') . $kry['image'] ?>" alt="" width="150"> </td>
                                <td><?= $kry['nm_kry'] ?></td>
                                <td> <a href="<?= $kry['fb'] ?>" target="_blank" class="btn btn-sm btn-primary"> Facebook</a> </td>
                                <td> <a href="<?= $kry['ig'] ?>" target="_blank" class="btn btn-sm btn-info"> Instagram</a> </td>
                                <td> <a href="<?= $kry['tw'] ?>" targer="_blank" class="btn btn-sm btn-success">Twitter</a> </td>
                                <td><?= $kry['jbt'] ?></td>
                                <td>
                                    <a href="" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="" class="btn btn-sm btn-danger">Hapus</a>
                                    <a href="<?= base_url('admin_menu/detail_karyawan/') . $kry['id']; ?>" class="btn btn-sm btn-info">Detail</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Karyawan Modal-->
<div class="modal fade" id="tambahkaryawanModal" tabindex="-1" role="dialog" aria-labelledby="tambahkaryawanModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahkaryawanModalLabel">Tambah Karyawan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= base_url('admin_menu/karyawan'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="nm_kry" name="nm_kry" placeholder="Nama Karyawan">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="fb" name="fb" placeholder="Facebook">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="ig" name="ig" placeholder="Instagram">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="tw" name="tw" placeholder="Twitter">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="jbt" name="jbt" placeholder="Jabatan">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" placeholder="Image">
                        <label for="image" class="custom-file-label"></label>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary"> Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>