

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FiberCops</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
 <?php include('nav.php'); ?>
        <!-- partial -->
        <div class="main-panel">
   
        <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Recent Tickets</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                          <th> Cost_id</th>
                            <th> SEED</th>
                            <th> WATER </th>
                            <th> ELECTRICITY</th>
                            <th> CHEMICAL </th>
                            <th> EQUIPMENT</th>
                            <th> TRANSPORT </th>
                            <th> OTHER COST</th>
                            <th> TOTAL COST </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            
                          </tr>
                        </tbody>

                        <?php
$con = mysqli_connect("localhost","root","","fiber_cops");
if(mysqli_connect_errno())
{
    echo "connection error";
}
$query = mysqli_query($con,"SELECT * FROM cost");
$row = mysqli_num_rows($query);
if($row!=0)
{
    while($data=mysqli_fetch_assoc($query))
    {
        echo"<TR><TD>".$data['cost_id']."</td><td>".$data['seed']."</td><td>".$data['water']."</td><TD>".$data['electricity']."</td><td>".$data['chemical']."</td><TD>".$data['equipments']."</td><td>".$data['transport']."</td><td>".$data['othercost']."</td><td>".$data['totalcost'];

    }
}

?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
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