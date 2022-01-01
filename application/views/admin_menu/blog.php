<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <?= $judul; ?> </h1>

    <a href="" class="btn btn-sm btn-success mb-3" data-toggle="modal" data-target="#tambahblogModal">Tambah Blog</a>

    <?= $this->session->flashdata('pesan'); ?>

    <!-- Basic Card Example -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">blog</h6>
        </div>
        <div class="card-body">
            <img src="" class="img-thumbnail" alt="">
        </div>
    </div>





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Blog Modal-->
<div class="modal fade" id="tambahblogModal" tabindex="-1" role="dialog" aria-labelledby="tambahblogModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahblogModalLabel">Tambah Blog</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= base_url('admin_menu/blog'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="created_by" name="created_by" placeholder="Created By">
                    </div>
                    <div class="form-group mb-3">
                        <textarea name="isi_blog" id="editor" class="from-control" cols="30" rows="10"></textarea>
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