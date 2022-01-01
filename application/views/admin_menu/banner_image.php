<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <?= $judul; ?> </h1>

    <a href="" class="btn btn-sm btn-success mb-3" data-toggle="modal" data-target="#tambahbannerModal">Tambah Banner</a>

    <?= $this->session->flashdata('pesan'); ?>

    <!-- Basic Card Example -->
    <?php foreach ($banner_img as $bi) : ?>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><?= $bi['text'] ?></h6>
            </div>
            <div class="card-body">
                <img src="<?= base_url('front-end/assets/img/banner/') . $bi['image'] ?>" class="img-thumbnail" alt="">
            </div>
        </div>
    <?php endforeach; ?>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Logout Modal-->
<div class="modal fade" id="tambahbannerModal" tabindex="-1" role="dialog" aria-labelledby="tambahbannerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahbannerModalLabel">Tambah Banner</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= base_url('admin_menu/banner_image'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="text" name="text" placeholder="Banner Text">
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