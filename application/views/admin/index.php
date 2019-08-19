<!-- <?php var_dump($user) ?> -->
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul ?></h1>
    <?= $this->session->flashdata('message'); ?>

    <div class="row">
        <div class="col-lg-5">
            <form action="<?= base_url('admin/index') ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-info" type="submit" name="submit">

                    </div>
                </div>
        </div>
        </form>
    </div>


    <div class="row">
        <div class="col-md-3 mb-1">
            Result : <?= $total_rows ?>
        </div>
    </div>

    <table class="table table-striped table-responsive-md ">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($calon as $sw) :;

                ?>


                <tr>
                    <th scope="row"><?= ++$start ?></th>
                    <td><?= $sw['name'] ?></td>
                    <td><?= $sw['email'] ?></td>
                    <td>


                        <a href="<?= base_url(); ?>admin/hapus/<?= $sw['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin');"> Hapus</a>
                        <a href="<?= base_url(); ?>admin/detail/<?= $sw['id']; ?>" class="btn  btn-primary btn-sm my-1">Detail</a>
                        <a value="<?= $sw['id'] ?>" href="<?= base_url(); ?>admin/edit/<?= $sw['id']; ?>" class="btn  btn-info btn-sm my-1">Edit</a>


                    </td>
                </tr>

            <?php endforeach; ?>


        </tbody>
    </table>
    <?= $this->pagination->create_links();  ?>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->