<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1">
    <title>Contact</title>
    <style>

          .jumbotron {
        background-image: url(image3.jpg);
        background-size: cover;
        height: 100%;}
    </style>
  </head>
  <body>
    <?php include('templates/header.php'); ?>



        <div class="jumbotron jumbotron-fluid bg-dark">
          <div class="container">
            <h1 style="text-align:center; color:white; background-color:black;">CONTACT US</h1>
          </div>

        </div>


        <div class="container">
          <div class="row">
            <div class="col-xl-12 shadow-lg m-5 py-4">

              <small>VISIT US</small>
              <br>
              <br>
              <p style="font-size:30px">9, Avenue of the Americas, NEW YORK.</p>

              <hr class="my-5">
            </div>

              <div class="col-xl-12 shadow-lg m-5 col-lg-12 col-md-12 col-sm-12 py-4">


               <form method="post">
                   <h2 class="text-center">CONTACT FORM</h2>
                   <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
                   <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                   <div class="form-group"><textarea class="form-control" name="message" placeholder="Message" rows="6"></textarea></div>
                   <div class="form-group"><button class="btn btn-success" type="submit">SEND </button></div>
               </form>
               </div>

             </div>

            </div>




        <?php include('templates/footer.php'); ?>

  </body>
</html>
