<div class="container-fluid" id="panelForm">
    <!-- Table -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <div class="d-md-flex align-items-center">
                    <div align="center" class="col-sm-12">
                      <h3 class="m-0 font-weight-bold text-primary">Form User</h3>
                    </div>
                  </div>
                </div>
                <div class="card-body col-sm-12">
                    <!-- Form -->
                    <form action="usermanage.php" enctype="multipart/form-data" id="bookform_input" method="post" name="bookform_input">
                      <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Username :</label>
                            <input class="form-control" id="username" name="username" type="text">
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="text-danger text-lg">*</label>
                            <label>Category :</label>
                            <select class="form-control" id="category_user" name="category_user" type="text">
                            <option value="" disabled selected>Pilih Category</option>
                            <option value="Admin">Admin</option>
                            <option value="Operator">Operator</option>
                          </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="text-danger text-lg">*</label>
                            <label>Password :</label>
                            <input class="form-control" id="password" name="password" type="password">
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="text-danger text-lg">*</label>
                            <label>Konfirmasi Password :</label>
                            <input class="form-control" id="pass" name="pass" type="password">
                        </div>
                       <div class="form-group col-sm-12">
                            <input class="form-control" id="act" name="act" readonly="">
                            <input class="form-control" id="id" name="id" readonly="">
                        </div>
                    </div>
                        <div class="row">
                        <div align="right" class="form-group col-sm-12">
                            <button class="btn btn-circle btn-success" onclick="addusermanage()" type="submit" title="Simpan"><i class="fa fa-save fa-lg"></i></button>
                            <button class="btn btn-circle btn-danger" id="btn-cancel" type="button" title="Batal"><i class="fa fa-times"></i></button>
                        </div></div>
                    </form>
                    <!-- End Form -->
                </div>
            </div>
        </div>
    </div>
</div>