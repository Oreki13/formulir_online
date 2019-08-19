<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <?= $this->session->flashdata('message'); ?>

    <div class="row justify-content-center ">


        <div class="col-lg-2 pt-4">

            <h4 class=" text-gray-800">Data Pribadi</h4>

        </div>
    </div>
    <div class="row mb-3 justify-content-center">
        <div class="col-lg-8">
            <hr>

        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <form class="needs-validation" action="" method="post" enctype="multipart/form-data" novalidate>

                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="email" id="email" value="<?= $data['email'] ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="name" value="<?= $data['name'] ?>" required>
                        <div class="invalid-feedback">Silahkan isi</div>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="no hp" class="col-sm-3 col-form-label">No Handphone</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="no_hp" id="no_hp" value="<?= $data['no_hp'] ?>" required>
                        <div class="invalid-feedback">Shilakhan isi No Handphone</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                            <?php foreach ($jenis_kelamin as $k) : ?>
                                <?php if ($k == $data['jenis_kelamin']) : ?>
                                    <option value="<?= $k; ?>" selected><?= $k; ?></option>
                                <?php else : ?>
                                    <option value="<?= $k; ?>"><?= $k; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback">Shilakan pilih jenis kelamin</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="<?= $data['tempat_lahir'] ?>" required>
                        <div class="invalid-feedback">Shilakhan isi Tempat lahir</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control tanggal" name="ttl_tanggal" id="ttl_tanggal" value="<?= date('d-m-Y', strtotime($data['ttl_tanggal'])) ?>" required>
                        <div class="invalid-feedback">Shilahkan isi tanggal lahir</div>
                    </div>
                </div>

                <div class=" form-group row">
                    <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="agama" id="agama" required>
                            <?php foreach ($agama as $a) : ?>
                                <?php if ($a == $data['agama']) : ?>
                                    <option value="<?= $a; ?>" selected><?= $a; ?></option>
                                <?php else : ?>
                                    <option value="<?= $a; ?>"><?= $a; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback">Silahkan pilih Agama Anda</div>
                    </div>
                </div>

                <div class=" form-group row">
                    <label for="agama" class="col-sm-3 col-form-label">Jurusan</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="jurusan" id="agama" required>
                            <?php foreach ($jurusan as $j) : ?>
                                <?php if ($j == $data['jurusan']) : ?>
                                    <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                <?php else : ?>
                                    <option value="<?= $j; ?>"><?= $j; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback">Silahkan Pilih Jurusan yang Anda mau</div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3">Picture</div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/profile/') . $data['gambar'] ?>" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                    <div class="invalid-feedback">Silahkan Pilih Gambar</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- bagian Alamat -->
                <div class="row justify-content-center ">
                    <div class="col-lg-2 pt-5">

                        <h4 class=" text-gray-800">Alamat</h4>
                    </div>
                </div>

                <div class="row mb-3 justify-content-center">
                    <div class="col-lg-8">
                        <hr>
                    </div>
                </div>
                
                 <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Alamat Rumah</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="alamat_rumah" id="alamat_rumah" value="<?= $data['alamat_rumah'] ?>" required>
                        <div class="invalid-feedback">Silahkan Isi Alamat Rumah dengan benar</div>
                    </div>
                </div>
                
                 <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Kelurahan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="kel" id="alamat_rumah" value="<?= $data['kelurahan'] ?>" required>
                        <div class="invalid-feedback">Silahkan Isi Kelurahan dengan benar</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Kabupaten</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="kabupaten" id="kabupaten" value="<?= $data['kabupaten'] ?>" required>
                        <div class="invalid-feedback">Silahkan Pilih Kabupaten anda</div>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Kecamatan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="kecamatan" id="kecamatan" value="<?= $data['kecamatan'] ?>" required>
                        <div class="invalid-feedback">Silahkan isi Kecamatan anda</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Kode pos</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="kode_pos" id="kode_pos" value="<?= $data['kode_pos'] ?>" required>
                        <div class="invalid-feedback">Silahkan isi Kode Pos</div>
                    </div>
                </div>
               
                <!-- End Alamat -->

                <!-- bagian data ortu -->
                <div class="row justify-content-center ">
                    <div class="col-lg-4 pt-5">
                        <h4 class=" text-gray-800 text-center">Data Orang Tua
                            <hr>
                        </h4>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama_ayah" class="col-sm-3 col-form-label">Nama Orang Tuaa</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name_ortu" id="nama_ayah" value="<?= $data['name_ortu'] ?>" required>
                        <div class="invalid-feedback">Silahkan isi nama orang tua anda, Ayah atau Ibu</div>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="tempat_lahir_ortu" id="tempat_lahir" value="<?= $data['tempat_lahir_ortu'] ?>" required>
                        <div class="invalid-feedback">Shilahkan isi tempat lahir orang tua</div>
                    </div>
                </div>

               <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Tanggal Lahir Orang tua</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control tanggal" name="ttl_tanggal_ortu" id="ttl_tanggal_ortu" value="<?= date('d-m-Y', strtotime($data['ttl_tanggal_ortu'])) ?>" required>
                        <div class="invalid-feedback">Shilahkan isi tanggal lahir orang tua</div>
                    </div>
                </div>

                <div class=" form-group row">
                    <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="agama_ortu" id="agama" required>
                            <?php foreach ($agama as $a) : ?>
                                <?php if ($a == $data['agama_ortu']) : ?>
                                    <option value="<?= $a; ?>" selected><?= $a; ?></option>
                                <?php else : ?>
                                    <option value="<?= $a; ?>"><?= $a; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback">Silahkan pilih Agama Orang Tua anda</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="no_hp" class="col-sm-3 col-form-label">No Handphone</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="no_hp_ortu" id="no_hp_ortu" value="<?= $data['no_hp_ortu'] ?>" required>
                        <div class="invalid-feedback">Silahkan isi No Handphone Orang tua anda</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alamat_ortu" class="col-sm-3 col-form-label">Alamat Orang Tua</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="alamat_ortu" id="alamat_ortu" value="<?= $data['alamat_ortu'] ?>" required>
                        <div class="invalid-feedback">Silahkan isi Alamat orang tua anda</div>
                    </div>
                </div>
                <!-- End Ortu -->

                <div class="form-group row justify-content-end">
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Edit</button>
                    </div>
                </div>




            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->