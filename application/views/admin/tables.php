
        <!-- Begin Page Content -->
        <div class="container-fluid ">

<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 border-bottom-info ">
              <h6 class="m-0 font-weight-bold text-primary text-center">Data Peserta</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="dataTable"  cellspacing="3">

                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Keterangan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>NO</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Keterangan</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php $no=1; ?>
                     <?php foreach($calon as $c):; ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $c['name']?></td>
                      <td><?= $c['email']?></td>
                      <td><?= $c['keterangan']?></td>
                      <td>
                        <a href="<?= base_url(); ?>admin/hapus/<?= $c['id'] ?>" class="btn btn-danger btn-sm thapus" > Hapus</a>
                        <a href="<?= base_url(); ?>admin/detail/<?= $c['id']; ?>" class="btn  btn-primary btn-sm my-1">Detail</a>
                        <a value="<?= $c['id'] ?>" href="<?= base_url(); ?>admin/edit/<?= $c['id']; ?>" class="btn  btn-info btn-sm my-1">Edit</a>

                      </td>

                    </tr>
                   <?php
                   $no++;
                    endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

