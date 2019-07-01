  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="p-5 col-lg-5"><img class="img-background" src="<?php echo base_url()."assets/markers/nyamuk.png" ?>"></div>
              <div class="col-lg-7">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Admin! --"</h1>
                  </div>
                  <form class="user" role="form" method="post" action="<?php echo base_url()."index.php/auth/login/" ?>">
                    <div class="form-group">
                      <input type="username" class="form-control form-control-user" id="exampleInputUsername" name="username" placeholder="username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Password">
                    </div>
                    <button type="submit"   class="btn btn-info btn-user btn-block">Login</button>
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <?php echo base_url('index.php/Authen/auth')?> -->

      </div>

    </div>

  </div>