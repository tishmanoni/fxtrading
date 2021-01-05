<?php
session_start();
if (!isset($_SESSION['loggedin'])){

  header('Location: /mysite/admin ');
  exit;

}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Withdrawal Form</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
  </head>
  <body id="page-top">

    <?php include('templates/header.php'); ?>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-6">
          <div class="card bg-light">
            <div class="card-body">


              <h2>Withdrawal form</h2>
              <form action="/mysite/withdrawal.php" method="post">
                <div class="form-group">
                  <label for="Bank-name">Bank Name:</label>
                  <input type="text" class="form-control" id="email" placeholder="Enter bank name" name="bank_name">
                </div>
                <div class="form-group">
                  <label for="account-no">Account no:</label>
                  <input type="text" class="form-control" id="pwd" placeholder="Enter bank account number" name="account_no">
                </div>

                <button type="submit" class="btn btn-primary">Submit  </button>
              </form>
              </div>
                  </div>
                </div>
                </div>
                </div>
                </div>



    <?php include('templates/footer.php'); ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

  </body>
</html>
