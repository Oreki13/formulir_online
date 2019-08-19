<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <h1 class="h3 mb-4 font-weight-bold text-center"><?= $title ?></h1>

        </div>
    </div>
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
            <form class="needs-validation" action="<?= base_url('daftar/index') ?>" method="post" enctype="multipart/form-data" novalidate>

                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="email" id="email" value="<?= $user['email'] ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Isi Nama Lengkap" required>
                        <div class="invalid-feedback">Shilakhan isi Nama Anda</div>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="no hp" class="col-sm-3 col-form-label">No Handphone</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Masukan no handphone" required>
                        <div class="invalid-feedback">Shilakhan isi No Handphone anda</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <div class="invalid-feedback">Shilakan pilih jenis kelamin anda</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat lahir" required>
                        <div class="invalid-feedback">Shilakhan isi Tempat lahir anda</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control tanggal" name="ttl_tanggal" id="ttl_tanggal" placeholder="Tanggal lahir" required>
                        <div class="invalid-feedback">Shilahkan isi tanggal lahir</div>
                    </div>
                </div>

                <div class=" form-group row">
                    <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="agama" id="agama" required>
                            <option value="">Pilih Agama</option>
                            <option>Islam</option>
                            <option>Kristen Protestan</option>
                            <option>Katolik</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Kong Hu Cu</option>
                        </select>
                        <div class="invalid-feedback">Silahkan pilih Agama Anda</div>
                    </div>
                </div>

                <div class=" form-group row">
                    <label for="agama" class="col-sm-3 col-form-label">Jurusan</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="jurusan" id="agama" required>
                            <option value="">Pilih Jurusan</option>
                            <option>Profesional 1 Tahun (Komputer dan Internet)</option>
                            <option>Short Chourse (Speak Out)</option>
                            <option>Program PTIK</option>
                            <option>Short Course (Desain Grafis)</option>
                            <option>Short Course (Auto Cad)</option>
                            <option>Short Course (Microsoft Ofice)</option>
                        </select>
                        <div class="invalid-feedback">Silahkan Pilih Jurusan yang Anda mau</div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3">Picture</div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/profile/') . $user['gambar'] ?>" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image" required>
                                    <label class="custom-file-label" for="image">Choose file</label>
                                    <div class="invalid-feedback">Silahkan Pilih Gambar</div>
                                    <p class="text-danger font-italic">Gambar harus berukuran 4x6</p>
                                    <p class="text-danger font-italic">Maximal berukuran 2MB</p>
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
                        <input type="text" class="form-control" name="alamat_rumah" id="alamat_rumah" placeholder="Alamat Rumah" required>
                        <div class="invalid-feedback">Silahkan Isi Alamat Rumah dengan benar</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Kelurahan</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="kelurahan" id="kelurahan" placeholder="Kelurahan" required>
                        <div class="invalid-feedback">Silahkan Pilih Kelurahan anda</div>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Kabupaten</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="kabupaten" id="kabupaten" placeholder="Kabupaten" required>
                        <div class="invalid-feedback">Silahkan Pilih Kabupaten anda</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Kecamatan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Kecamatan" required>
                        <div class="invalid-feedback">Silahkan isi Kecamatan anda</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Kode pos</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="kode_pos" id="kode_pos" placeholder="Kode Pos" required>
                        <div class="invalid-feedback">Silahkan isi Kode Pos</div>
                    </div>
                </div>


                <!-- End Alamat -->

                <!-- bagian data ortu -->
                <div class ="row justify-content-center ">
                    <div class="col-lg-4 pt-5">
                        <h4 class=" text-gray-800 text-center">Data Orang Tua
                            <hr>
                        </h4>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama_ayah" class="col-sm-3 col-form-label">Nama Orang Tuaa</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name_ortu" id="nama_ayah" placeholder="Nama Ayah atau Ibu" required>
                        <div class="invalid-feedback">Silahkan isi nama orang tua anda, Ayah atau Ibu</div>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="tempat_lahir_ortu" id="tempat_lahir" placeholder="Tempat Lahir Orang tua" required>
                        <div class="invalid-feedback">Shilahkan isi tempat lahir orang tua</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Tanggal Lahir Orang tua</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control tanggal" name="ttl_tanggal_ortu" id="ttl_tanggal_ortu" placeholder="Tanggal lahir Orang tua" required>
                        <div class="invalid-feedback">Shilahkan isi tanggal lahir orang tua</div>
                    </div>
                </div>

                <div class=" form-group row">
                    <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="agama_ortu" id="agama" required>
                            <option value="">Pilih Agama</option>
                            <option>Islam</option>
                            <option>Kristen Protestan</option>
                            <option>Katolik</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Kong Hu Cu</option>
                        </select>
                        <div class="invalid-feedback">Silahkan pilih Agama Orang Tua anda</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="no_hp" class="col-sm-3 col-form-label">No Handphone</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="no_hp_ortu" id="no_hp_ortu" placeholder="No Handphone Orang Tua" required>
                        <div class="invalid-feedback">Silahkan isi No Handphone Orang tua anda</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alamat_ortu" class="col-sm-3 col-form-label">Alamat Orang Tua</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="alamat_ortu" id="alamat_ortu" placeholder="Alamat Orang tua" required>
                        <div class="invalid-feedback">Silahkan isi Alamat orang tua anda</div>
                    </div>
                </div>
                <!-- End Ortu -->

                <div class="form-group row justify-content-end">
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Daftar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->