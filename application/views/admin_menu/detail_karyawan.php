<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <?= $judul; ?> </h1>



    <a href="<?= base_url('admin_menu/karyawan'); ?>" class="btn btn-sm btn-warning">Kembali</a>

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> <?= $karyawan['nm_kry']; ?></h6>
        </div>
        <div class="card-body">
            <img src="<?= base_url('front-end/assets/img/karyawan/') . $karyawan['image']; ?>" class="img-thumbnail" alt="">

            <p><?= $karyawan['fb']; ?></p>
            <p><?= $karyawan['ig']; ?></p>
            <p><?= $karyawan['tw']; ?></p>
            <p><?= $karyawan['jbt']; ?></p>
        </div>
    </div>





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->