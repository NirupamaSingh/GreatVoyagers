<?php

include('./includes/header.php');

?>
<body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo" align="center">
                  <img src="includes/logo.jpeg">
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                <form class="pt-3" action="login.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" name="user" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="pass" placeholder="Password" required>
                  </div>
                  <div align="center">
                    <input type="submit" name="login" value="Login" class="btn btn-gradient-success btn-lg">

                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <br>
                    <a href="#" class="auth-link text-black mx-auto">Forgot password?</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
  </body>
</html>