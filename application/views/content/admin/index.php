<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url('admin/tambah'); ?>" class="btn btn-primary">Tambah Jadwal</a>
        </div>
    </div>

    <div class="row mt-3">
        <?php foreach ($doctor as $doct) : ?>
            <div class="col-lg-3" style="margin-left: 50px;">
                <div class="card" style="width: 18rem;">
                    <img src="https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/03/02050533/5-Rekomendasi-Dokter-Umum-Terbaik-di-Medan.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold; color: #212529;"><?= $doct['name']; ?></h5>
                        <p class="card-text"><?= $doct['specialist']; ?></p>
                        <div style="text-align: center;"><a href="<?= base_url('admin/detail/') ?><?= $doct['id']; ?>" class="btn btn-primary">Detail</a></div>
                    </div>
                </div>
            </div><?php endforeach; ?>
    </div>

</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->