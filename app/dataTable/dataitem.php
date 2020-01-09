<div class="container-fluid" id="panelForm2">
            <!-- Table -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <div class="d-md-flex align-items-center">
                            <div align="center" class="col-sm-4">
                              <button class="btn btn-circle btn-success" id="btn-add-item" title="Tambah Data Item"><i class="fa fa-plus fa-lg"></i></button>
                            </div>
                            <div align="center" class="col-sm-4">
                              <h3 class="m-0 font-weight-bold text-primary">Data Item</h3>
                            </div>
                          </div>
                        </div>
                        <div class="card-body col-sm-12">
                          <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Kode Item</th>
                      <th>Nama Item</th>
                      <th>Jumlah</th>
                      <th>Satuan</th>
                      <th>Category</th>
                      <th width="15%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $qry   = mysqli_query($conn, "SELECT * FROM data_item ORDER BY id_item DESC");
                      $check = mysqli_num_rows($qry);
                      $no    = 1;
                      if ($check > 0) {
                        while ($data = mysqli_fetch_array($qry)) {
                          $kd_item       = $data['kd_item'];
                          $ket_item       = $data['ket_item'];
                          $jmlh_item       = $data['jmlh_item'];
                          $sat_item       = $data['sat_item'];
                          $category_item       = $data['category_item'];
                          ?>
                    <tr id="row<?php echo $no; ?>">
                      <td><?php echo $no; ?></td>
                      <td><?php echo $kd_item; ?></td>
                      <td><?php echo $ket_item; ?></td>
                      <td><?php echo $jmlh_item; ?></td>
                      <td><?php echo $sat_item; ?></td>
                      <td><?php echo $category_item; ?></td>
                      <td class="action">
                        <button class="btn btn-circle btn-warning" title="Edit" onclick="editData('<?php echo $data['id_item'];?>')" id="btn-edit-item">
                          <i class="fas fa-edit fa-lg"></i>
                        </button>
                        <button class="btn btn-circle btn-danger" title="Delete" onclick="delData('<?php echo $data['id_item']; ?>','<?php echo $no;?>')">
                          <i class="fas fa-trash fa-lg"></i>
                        </button>
                      </td>
                    </tr>
                    <?php
                  $no++;
                }
              }
              ?>
                  </tbody>
                </table>
              </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>