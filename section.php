<?php

include('./includes/header.php');

?>
<body>
<div class="container-scroller">
  <!-- partial top nav-bar-->
  <?php

    include('./includes/nav.php');

  ?>
  <!-- partial -->

  <div class="container-fluid page-body-wrapper">

    <!-- partial:partials/_sidebar.html -->
    <?php

      include('./includes/sidebar.php');

    ?>    
    <!-- partial -->

    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
              <i class="mdi mdi-table-large"></i>
            </span> Section Reporting </h3>
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                <span></span>Overview<i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
              </li>
            </ul>
          </nav>
        </div>
        <div class="row">
          <div class="col-md-6 stretch-card grid-margin">
            <div class="card bg-gradient-info card-img-holder text-white">
              <div class="card-body">
                <a href="#" class="upcoming-link">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  </a>
                <h4 class="font-weight-normal mb-3">Upcoming<i class="mdi mdi-chart-line mdi-24px float-right"></i>
                </h4>
              </div>
            </div>
          </div>
          <div class="col-md-6 stretch-card grid-margin">
            <div class="card bg-gradient-dark card-img-holder text-white">
              <div class="card-body">
                <a href="#" class="close-link">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  </a>
                <h4 class="font-weight-normal mb-3">close<i class="mdi mdi-diamond mdi-24px float-right"></i>
                </h4>
              </div>
            </div>
          </div>
        </div>
        <div class="row tables">
          
        </div>
      </div>
      <!-- content-wrapper ends -->

      <!-- partial:partials/_footer.html -->
      <?php

        include('./includes/footer.php');

      ?>
      <!-- partial -->

    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
  <?php
    include('./includes/script.php');
  ?>
  <!-- Script for employee forms -->
  <script type="text/javascript">
    $(document).ready(function(){
        $(".upcoming-link").click(function(){
            $("div.tables").load("includes/section/upcoming.php");
        });
    });
  </script>  
  <script type="text/javascript">
    $(document).ready(function(){
        $(".close-link").click(function(){
            $("div.tables").load("includes/section/close.php");
        });
    });
  </script>  
  <!-- script ends -->
</body>
</html>