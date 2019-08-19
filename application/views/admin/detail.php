<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card text-center">
        <div class="card-header">
            <h4><?= $judul ?></h4>
        </div>
        <div class="card-body">

            <img class="img-card img-fluid img-thumbnail" src="<?= base_url('assets/img/profile/') . $detail['gambar']; ?>">

            <div class="row">
                <div class="col-sm-12">
                    <h5 class="card-title mt-3"><?= $detail['name'] ?></h5>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <hr>
                </div>
            </div>

            <!-- container 2  -->
            <div class="continer">
                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <p class="float-left font-weight-bold">Email</p>
                    </div>
                    <div class="col-sm-3">
                        <p class="float-left"><?= $detail['email'] ?></p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <p class="float-left font-weight-bold">No Handphone</p>
                    </div>
                    <div class="col-sm-3">
                        <p class="float-left"><?= $detail['no_hp'] ?></p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <p class="float-left font-weight-bold">Agama</p>
                    </div>
                    <div class="col-sm-3">
                        <p class="float-left"><?= $detail['agama'] ?></p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <p class="float-left font-weight-bold">Jenis Kelamin</p>
                    </div>
                    <div class="col-sm-3 md-3">
                        <p class="float-left"><?= $detail['jenis_kelamin'] ?></p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <p class="float-left font-weight-bold">Tempat Tanggal lahir</p>
                    </div>
                    <div class="col-sm-3 float-left">
                        <p class="float-left"><?= $detail['tempat_lahir']; ?>,
                            <?= date('d F Y', strtotime($detail['ttl_tanggal'])); ?></p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <p class="float-left font-weight-bold">Jurusan yang di ambil</p>
                    </div>
                    <div class="col-sm-3 md-3">
                        <p class="float-left"><?= $detail['jurusan'] ?></p>
                    </div>
                </div>

                <div class="row pt-4">
                    <div class="col-lg-12">
                        <h5 class="card-title mt-3">Alamat</h5>
                    </div>

                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <hr>
                    </div>
                </div>
                
                 <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <p class="float-left font-weight-bold">Alamat Rumah</p>
                    </div>
                    <div class="col-sm-3 md-3">
                        <p class="float-left"><?= $detail['alamat_rumah'] ?></p>
                    </div>
                </div>
                
                 <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <p class="float-left font-weight-bold">Kelurahan</p>
                    </div>
                    <div class="col-sm-3 md-3">
                        <p class="float-left"><?= $detail['kelurahan'] ?></p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <p class="float-left font-weight-bold">Kabupaten</p>
                    </div>
                    <div class="col-sm-3 md-3">
                        <p class="float-left"><?= $detail['kabupaten'] ?></p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <p class="float-left font-weight-bold">Kecamatan</p>
                    </div>
                    <div class="col-sm-3 md-3">
                        <p class="float-left"><?= $detail['kecamatan'] ?></p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <p class="float-left font-weight-bold">Kode pos</p>
                    </div>
                    <div class="col-sm-3 md-3">
                        <p class="float-left"><?= $detail['kode_pos'] ?></p>
                    </div>
                </div>

               

                <div class="row pt-4">
                    <div class="col-lg-12">
                        <h5 class="card-title mt-3">Data Orang Tua</h5>
                    </div>

                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <hr>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <p class="float-left font-weight-bold">Nama Orang Tua</p>
                    </div>
                    <div class="col-sm-3 md-3">
                        <p class="float-left"><?= $detail['name_ortu'] ?></p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <p class="float-left font-weight-bold">Tempat Tanggal lahir</p>
                    </div>
                    <div class="col-sm-3 float-left">
                        <p class="float-left"><?= $detail['tempat_lahir_ortu']; ?>,
                            <?= date('d F Y', strtotime($detail['ttl_tanggal_ortu'])); ?>
                            </p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <p class="float-left font-weight-bold">Agama</p>
                    </div>
                    <div class="col-sm-3 md-3">
                        <p class="float-left"><?= $detail['agama_ortu'] ?></p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <p class="float-left font-weight-bold">Alamat Orang tua</p>
                    </div>
                    <div class="col-sm-3 md-3">
                        <p class="float-left"><?= $detail['alamat_ortu'] ?></p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <p class="float-left font-weight-bold">No HP Orang Tua</p>
                    </div>
                    <div class="col-sm-3 md-3">
                        <p class="float-left"><?= $detail['no_hp_ortu'] ?></p>
                    </div>
                </div>

            </div>
            <!-- End container 2 -->

        </div>
        <div class="card-footer text-muted">
            Tanggal Mendaftar <?= date('d F Y', $detail['date_created']) ?>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->