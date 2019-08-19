<?php 
$query = "SELECT `id`, `nama`,`email` FROM user WHERE `role_id` = 1";
$menu = $this->db->query($query)->result_array();



?>
        <!-- Begin Page Content -->
        <div class="container-fluid ">

<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 border-bottom-info ">
              <h6 class="m-0 font-weight-bold text-primary text-center">Data Admin</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table" id="dataTable"  cellspacing="3">

                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>NO</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php $no=1; ?>
                     <?php foreach ($menu as $c): ; ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $c['nama']?></td>
                      <td><?= $c['email']?></td>
                      
                      <td>
                        <a href="<?= base_url(); ?>admin/hapus2/<?= $c['id'] ?>" class="btn btn-danger btn-sm thapus" > Hapus</a>

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

