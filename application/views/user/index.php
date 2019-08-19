<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <div class="row">
        <div class="col-sm-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <div class="row">
        <div class="card mb-3 col-md-10">
            <div class="row no-gutters">
                <div class="col-md-4 my-2">
                    <img src="<?= base_url('assets/img/profile/') . $peserta['gambar']; ?>" class="card-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $peserta['name'] ?></h5>
                        <p class="card-text">Email : <?= $peserta['email'] ?></p>
                        <p class="card-text">No Hp : <?= $peserta['no_hp'] ?></p>
                        <p class="card-text">Agama : <?= $peserta['agama'] ?></p>
                        <p class="card-text"><small class="text-muted">Tanggal Dibuat <?= date('d F Y', $user['date_created']) ?></small> </p>

                    </div>
                    <a href="<?= base_url(); ?>user/detail/<?= $peserta['id']; ?>" class="btn btn-outline-primary float-right ">Detail</a>
                </div>
            </div>
        </div>


    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->