<div class="container-fluid" id="panelForm2">
            <!-- Table -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <div class="d-md-flex align-items-center">
                            <div align="center" class="col-sm-4">
                              <button class="btn btn-circle btn-success" id="btn-add-user" title="Tambah User"><i class="fa fa-plus fa-lg"></i></button>
                            </div>
                            <div align="center" class="col-sm-4">
                              <h3 class="m-0 font-weight-bold text-primary">Data User</h3>
                            </div>
                          </div>
                        </div>
                        <div class="card-body col-sm-12">
                          <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Username</th>
                      <th>Category</th>
                      <th width="15%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $qry   = mysqli_query($conn, "SELECT * FROM user ORDER BY id_user DESC");
                      $check = mysqli_num_rows($qry);
                      $no    = 1;
                      if ($check > 0) {
                        while ($data = mysqli_fetch_array($qry)) {
                          $id_user       = $data['id_user'];
                          $username       = $data['username'];
                          $password       = $data['password'];
                          $category_user       = $data['category_user'];
                          ?>
                    <tr id="row<?php echo $no; ?>">
                      <td><?php echo $no; ?></td>
                      <td><?php echo $username; ?></td>
                      <td><?php echo $category_user; ?></td>
                      <td class="action">
                        <button class="btn btn-circle btn-warning" title="Edit" onclick="editData('<?php echo $data['id_user'];?>')">
                          <i class="fas fa-edit fa-lg"></i>
                        </button>
                        <button class="btn btn-circle btn-danger" title="Delete" onclick="delData('<?php echo $data['id_user']; ?>','<?php echo $no;?>')">
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