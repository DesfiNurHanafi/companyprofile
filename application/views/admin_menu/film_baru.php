<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <?= $judul; ?> </h1>

    <a href="" class="btn btn-sm btn-success mb-3" data-toggle="modal" data-target="#tambahposterModal">Tambah Poster</a>

    <?= $this->session->flashdata('pesan'); ?>

    <!-- Basic Card Example -->
    <div class="row">
        <?php foreach ($film_baru as $fb) : ?>
            <div class="col-3">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><?= $fb['judul'] ?></h6>
                    </div>
                    <div class="card-body">
                        <img src="<?= base_url('front-end/assets/img/film-baru/') . $fb['image']; ?>" class="img-thumbnail" alt="">
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Logout Modal-->
<div class="modal fade" id="tambahposterModal" tabindex="-1" role="dialog" aria-labelledby="tambahposterModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahposterModalLabel">Tambah Poster</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= base_url('admin_menu/film_baru'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="youtube" name="youtube" placeholder="Link Youtube">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" placeholder="Image">
                        <label for="image" class="custom-file-label">Gambar</label>
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