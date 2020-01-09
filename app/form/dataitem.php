<div class="container-fluid" id="panelForm">
    <!-- Table -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <div class="d-md-flex align-items-center">
                    <div align="center" class="col-sm-12">
                      <h3 class="m-0 font-weight-bold text-primary">Form Data Item</h3>
                    </div>
                  </div>
                </div>
                <div class="card-body col-sm-12">
                    <!-- Form -->
                    <form action="dataitem.php" enctype="multipart/form-data" id="bookform_input" method="post" name="bookform_input" autocomplete="off">
                      <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="text-danger text-lg">*</label>
                            <label>Kode Item :</label>
                            <input class="form-control" id="kd_item" name="kd_item" type="text" style="text-transform:uppercase">
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="text-danger text-lg">*</label>
                            <label>Nama Item :</label>
                            <input class="form-control" id="ket_item" name="ket_item" type="text" style="text-transform:uppercase">
                        </div>
                        <div class="form-group col-sm-4">
                            <label class="text-danger text-lg">*</label>
                            <label>Jumlah Item :</label>
                            <input class="form-control" id="jmlh_item" name="jmlh_item" type="text">
                        </div>
                        <div class="form-group col-md-4">
                          <label><font color="red" size="4">*</font> Satuan</label> <select class="form-control" id="sat_item" name="sat_item">
                             <option disabled selected>
                                Pilih Satuan
                             </option>
                             <option value="ST">
                                Set
                             </option>
                             <option value="PC">
                                Pieces
                             </option>
                             <option value="KG">
                                Kilogram
                             </option>
                             <option value="LT">
                                Liter
                             </option>
                             <option value="M3">
                                M3
                             </option>
                          </select>
                       </div>
                       <div class="form-group col-md-4">
                          <label><font color="red" size="4">*</font> Category</label> <select class="form-control" id="category_item" name="category_item">
                             <option disabled selected>
                                Pilih Satuan
                             </option>
                             <option value="CO">
                                Component
                             </option>
                             <option value="FG">
                                Finish Goods
                             </option>
                             <option value="RW">
                                Raw Materials
                             </option>
                          </select>
                       </div>
                       <div class="form-group col-sm-12">
                            <input class="form-control" id="created_by" name="created_by" readonly="" value="<?php echo $_SESSION['username'] ?>">
                            <input class="form-control" id="created_on" name="created_on" readonly="" value="<?php echo date('D d-m-yy | h:m:s') ?>">
                            <input class="form-control" id="edited_by" name="edited_by" readonly="">
                            <input class="form-control" id="edited_on" name="edited_on" readonly="">
                            <input class="form-control" id="act" name="act" readonly="">
                            <input class="form-control" id="id" name="id" readonly="">
                        </div>
                    </div>
                        <div class="row">
                        <div align="right" class="form-group col-sm-12">
                            <button class="btn btn-circle btn-success" onclick="adddataitem()" type="submit" title="Simpan"><i class="fa fa-save fa-lg"></i></button>
                            <button class="btn btn-circle btn-danger" id="btn-cancel" type="button" title="Batal"><i class="fa fa-times"></i></button>
                        </div></div>
                    </form>
                    <!-- End Form -->
                </div>
            </div>
        </div>
    </div>
</div>