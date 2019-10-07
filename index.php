<?php
  include('./includes/header.php');
  include('./includes/top-nav.php');
  include('./includes/nav.php');
?>

<div class="row">
  <div class="col-md-4 stretch-card grid-margin">
    <div class="card bg-gradient-danger card-img-holder text-white">
      <div class="card-body">
        <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
        <h4 class="font-weight-normal mb-3">Progress<i class="mdi mdi-chart-line mdi-24px float-right"></i>
        </h4>
      </div>
    </div>
  </div>
  <div class="col-md-4 stretch-card grid-margin">
    <div class="card bg-gradient-info card-img-holder text-white">
      <div class="card-body">
        <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
        <h4 class="font-weight-normal mb-3">Recents<i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
        </h4>
      </div>
    </div>
  </div>
  <div class="col-md-4 stretch-card grid-margin">
    <div class="card bg-gradient-success card-img-holder text-white">
      <div class="card-body">
        <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
        <h4 class="font-weight-normal mb-3">Activity Stats<i class="mdi mdi-diamond mdi-24px float-right"></i>
        </h4>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Recent Tickets</h4>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th> Assignee </th>
                <th> Subject </th>
                <th> Status </th>
                <th> Last Update </th>
                <th> Tracking ID </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <img src="assets/images/faces/face1.jpg" class="mr-2" alt="image"> David Grey </td>
                <td> Fund is not recieved </td>
                <td>
                  <label class="badge badge-gradient-success">DONE</label>
                </td>
                <td> Dec 5, 2017 </td>
                <td> WD-12345 </td>
              </tr>
              <tr>
                <td>
                  <img src="assets/images/faces/face2.jpg" class="mr-2" alt="image"> Stella Johnson </td>
                <td> High loading time </td>
                <td>
                  <label class="badge badge-gradient-warning">PROGRESS</label>
                </td>
                <td> Dec 12, 2017 </td>
                <td> WD-12346 </td>
              </tr>
              <tr>
                <td>
                  <img src="assets/images/faces/face3.jpg" class="mr-2" alt="image"> Marina Michel </td>
                <td> Website down for one week </td>
                <td>
                  <label class="badge badge-gradient-info">ON HOLD</label>
                </td>
                <td> Dec 16, 2017 </td>
                <td> WD-12347 </td>
              </tr>
              <tr>
                <td>
                  <img src="assets/images/faces/face4.jpg" class="mr-2" alt="image"> John Doe </td>
                <td> Loosing control on server </td>
                <td>
                  <label class="badge badge-gradient-danger">REJECTED</label>
                </td>
                <td> Dec 3, 2017 </td>
                <td> WD-12348 </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-7 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Project Status</h4>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th> # </th>
                <th> Name </th>
                <th> Due Date </th>
                <th> Progress </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> 1 </td>
                <td> Herman Beck </td>
                <td> May 15, 2015 </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
              </tr>
              <tr>
                <td> 2 </td>
                <td> Messsy Adam </td>
                <td> Jul 01, 2015 </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
              </tr>
              <tr>
                <td> 3 </td>
                <td> John Richards </td>
                <td> Apr 12, 2015 </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
              </tr>
              <tr>
                <td> 4 </td>
                <td> Peter Meggik </td>
                <td> May 15, 2015 </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
              </tr>
              <tr>
                <td> 5 </td>
                <td> Edward </td>
                <td> May 03, 2015 </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
              </tr>
              <tr>
                <td> 5 </td>
                <td> Ronald </td>
                <td> Jun 05, 2015 </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-5 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-white">Todo</h4>
        <div class="add-items d-flex">
          <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?">
          <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn" id="add-task">Add</button>
        </div>
        <div class="list-wrapper">
          <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
            <li>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox"> Meeting with Alisa </label>
              </div>
              <i class="remove mdi mdi-close-circle-outline"></i>
            </li>
            <li class="completed">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox" checked> Call John </label>
              </div>
              <i class="remove mdi mdi-close-circle-outline"></i>
            </li>
            <li>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox"> Create invoice </label>
              </div>
              <i class="remove mdi mdi-close-circle-outline"></i>
            </li>
            <li>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox"> Print Statements </label>
              </div>
              <i class="remove mdi mdi-close-circle-outline"></i>
            </li>
            <li class="completed">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
              </div>
              <i class="remove mdi mdi-close-circle-outline"></i>
            </li>
            <li>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox"> Pick up kids from school </label>
              </div>
              <i class="remove mdi mdi-close-circle-outline"></i>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</div>  

</div>
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="assets/vendors/chart.js/Chart.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/hoverable-collapse.js"></script>
<script src="assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/todolist.js"></script>
<!-- End custom js for this page -->
</body>
</html>