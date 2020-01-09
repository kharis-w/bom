<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-4 col-sm-12 col-md-9">

        <div class="card o-hidden border-0 shadow-sm my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-sm-12">
                <div class="p-5">
                  <div class="text-center">
                    <img src="../assets/img/logo.png" width="125" height="125">
                  </div>
                  <div class="text-center">
                    <h2 class="h3 text-gray-900">Bill Of Materials</h2>
                  </div>
                  <form action="login.php" enctype="multipart/form-data" id="bookform" method="POST" name="bookform" autocomplete="off">
                    <div class="form-group">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control form-control-user" id="pass" name="pass" placeholder="Password">
                      </div>
                    </div>
                    <hr>
                    <button type="button" class="btn btn-primary btn-user btn-block" onclick="login();">Login</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>