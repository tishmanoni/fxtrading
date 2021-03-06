<?php

session_start()



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hover.css">
      <!-- <link rel="stylesheet" href="css/background.css"> -->
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/loader.css">
    <link href="css/our-service.css" rel="stylesheet" type="text/css">
    <!-- testimonial css -->
    <link href="mycss/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <style>

        *{
          margin: 0;
          padding: 0;
        }
        .load{
          animation: slide 10s;

        }
        .slider{
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center;
          width:100%;
          height: 100vh;
          animation: slide 20s infinite;

        }

        .content{
          color:#fff;
          width: 100%;
          height: 100vh;
          background-image: url('pexels-lorenzo-241544.jpg');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center;




        }
        .principal{
          left: 50%;
          top: 50%;
          transform: translate(-50%, -50%);
          position: relative;
          letter-spacing: 2px;
          text-align: center;
          background-color: rgba(0, 0, 0, 0.5);

        }
        .principal h1{
            font-size: 50px;
            margin-bottom: 20px;
        }
        .principal p{
            font-size: 20px;
            padding: 10px 90px;
        }

        @keyframes slide {

          0%{
            background-image: url('pexels-lorenzo-241544.jpg');
          }

          25%{
            background-image: url('pexels-lorenzo-241544.jpg');
          }

          50%{
            background-image: url('pexels-pixabay-534216.jpg');

          }
          100%{
            background-image: url('pexels-pixabay-534216.jpg');
          }

        }
        @media screen and (max-width:800px) {
          .principal{
            left: 50%;
            top: 55%;
            transform: translate(-50%, -50%);
            position: relative;

            letter-spacing: 2px;
            text-align: center;
          }
          .principal h1{
              font-size: 40px;
              margin-bottom: 20px;
          }
          .principal p{
              font-size: 15px;
          }


        }
        @media screen and (max-width:992px) {
          .principal{
            left: 50%;
            top: 55%;
            transform: translate(-50%, -50%);
            position: relative;

            letter-spacing: 2px;
            text-align: center;

          }
          .principal h1{
              font-size: 40px;
              margin-bottom: 20px;
          }
          .principal p{
              font-size: 15px;
          }


        }
        @media screen and (max-width:303px) {
          .principal{
            left: 50%;
            top: 55%;
            transform: translate(-50%, -50%);
            position: relative;
            letter-spacing: 1px;
            text-align: center;
          }
          .principal h1{
              font-size: 30px;
              margin-bottom: 10px;
          }
          .principal p{
              font-size: 14px;
          }



        }

        @media screen and (max-width:282px) {
          .principal{
            left: 50%;
            top: 55%;
            transform: translate(-50%, -50%);
            position: relative;
            letter-spacing: 1px;
            text-align: center;
          }
          .principal h1{
              font-size: 20px;
              margin-bottom: 10px;

          }
          .principal p{
              font-size: 14px;
              padding: 10px;
          }



        }





      </style>
  </head>
  <body onload="myFunction()" style="margin:0;">




            <?php include('templates/header.php'); ?>

              <div class="slider">
                  <div class="load">

                  </div>
                  <div class="content">
                    <div class="principal">
                      <h1>TRADE WITH PASSION</h1>
                      <p>Trade Binary/Forex, all our advanced,<br>
                         web-based trading platform designed and dedicated for with you.<br>
                        With our Forex/CFD platform, you can trade on the largest list of assets.</p>
                      <?php if(!isset($_SESSION['loggedin'])): ?>
                      <a href="registers.php" class="btn btn-warning btn-lg btn-edit hvr-pulse" style="font-size:18px">Open Account</a>
                      <a href="registration.php" class="btn btn-success btn-lg btn-edit hvr-pulse" style="font-size:18px">Login</a>
                      <?php endif; ?>
                    </div>

                  </div>
              </div>

        <div class="row2" style="background-color:#f0f0f0">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-6 col-md-6 col-xl-3 col-12">
                        <div class="card shadow-sm mt-3 cards">

                          <div class="card-body ">
                            <h3 class="pb-4">Quality Services</h3>
                            <p class="pt-2">Our platform is built with multiple inflow streams in mind to allow for investors seamless transactions. Our method of deposit is cryptocurrency andcash deposit.</p>
                        </div>
                      </div>
                  </div>

                  <div class="col-sm-6 col-md-6 col-xl-3 col-12">
                    <div class="card shadow-sm mt-3 cards" style="">


                      <div class="card-body ">
                        <h3 class="">Advice You Can Trust</h3>
                        <p class="pt-4">We believe in our corporate mission of helping our investors manage their most priced assets and we’re always glad to offer the much needed assistance.</p>
                      </div>
                      </div>
                  </div>

                  <div class="col-sm-6 col-md-6 col-xl-3 col-">
                    <div class="card shadow-sm mt-3 cards">


                      <div class="card-body ">
                        <h3 class="">Satisfaction Guarenteed</h3>
                        <p class="pt-4">Our passion is your investing experience. If you ever feel we’ve missed the mark, let us know. We’ll do everything we can to make it right. We are trusted Broker company.</p>
                      </div>
                      </div>
                  </div>

                  <div class="col-sm-6 col-md-6 col-xl-3 col-12">
                    <div class="card shadow-sm mt-3 cards">


                      <div class="card-body ">
                        <h3 class="">24/7 Customer Support</h3>
                        <p class="pt-4">Our in-house, expert team is always on hand to help answer your questions, get you started, and grow your presence online. You can call, chat or email us any time!</p>
                      </div>
                      </div>
                  </div>


                </div>







                  <div class="row">
                      <div class="col-xl-6">

                      </div>
                    <div class="col-xl-6 align-self-end mt-5 mb-5 ">
                          <div class="card shadow-sm bg-primary p-3 c">
                            <div class="card-body my-4" style="color:#e8e8e8">
                                    <h6>WHO WE ARE</h6>
                                    <h4 class="my-3" style="color:white; font-weight:bold; ">Our Mission, Values and Motto</h3>
                                    <p class="">WE ARE ALWAYS THINKING GLOBAL.</p>
                                     <p>Our mission is to maximize the value our clients derive from their most precious commodity.</p>
                                    <p class="">As a fiduciary to our client, it is our responsibility to ensure that clients are provided with the utmost benefit …peace of mind!</p>

                            </div>
                          </div>
                    </div>
                  </div>
              </div>


            </div>

                <div class="row3" style="background-color:#f0f4f7">


                      <div class="container">
                        <div class="row">
                          <div class="col-12">
                            <h3 class="mt-4 mb-5 adjustment-h">OUR SERVICES</h3>

                          </div>

                          <div class="flex-container">
                              <div class="our-services">

                              <span><i class="fas fa-umbrella fa-2x mt-2 text-warning"></i></span>
                                <h4 class="p-3">Forex Trading</h4>
                              <p class="p-3">Forex or ( Foreign Exchange) , is the largest and most liquid market in the world, with daily trades.</p>
                            </div>

                            <div class="our-services">
                              <span><i class="fas fa-gem fa-2x mt-2 text-warning"></i></span>
                              <h4 class="p-3">Binary Trading</h4>
                            <p class="p-3">As well as all these great products, you can also trade on over 10 million Digital Options.</p>
                          </div>

                          <div class="our-services">
                            <span><i class="fas fa-signal fa-2x mt-2 text-warning"></i></span>
                            <h4 class="p-3">ETFs Trading</h4>

                          <p class="p-3">ETF is another new addition to the platform that offers an excellent way to diversify your investment portfolio with less risk and high return.</p>
                        </div>
                      </div>

                      <div class="flex-container">
                          <div class="our-services">
                            <span><i class="fas fa-hand-holding-usd fa-2x mt-2 text-warning"></i></span>
                            <h4 class="p-3">Stocks/Indies</h4>
                          <p class="p-3">Stocks/Indies trading is one of our newest products, and with Poseidon Tradings you can buy shares and trade on over 7485 stocks.</p>
                        </div>

                        <div class="our-services">
                          <span><i class="fas fa-coins fa-2x mt-2 text-warning"></i></span>
                          <h4 class="p-3">Crypto</h4>
                        <p class="p-3">Cryptocurrency pairs including Bitcoin, Ethereum, and Litecoin.Cryptocurrency pairs including Bitcoin, Ethereum, and Litecoin.</p>
                      </div>

                      <div class="our-services">
                        <span><i class="fas fa-parachute-box fa-2x mt-2 text-warning"></i></span>
                        <h4 class="p-3">Metals</h4>
                      <p class="p-3">Precious metal pairs including gold and platinum.</p>
                    </div>
                  </div>


                  </div>

                </div>

              </div>


                <div class="container-fluid bg-primary">
                  <div class="row">
                    <div class="col-xl-3 mt-5 ml-5">
                      <h3 class="mt-5 mb-2" style="color:white;">Request a Free Call Back</h3>
                      <p style="color:white;">Provide discussion information and we’ll get back to you as soon as possible</p>

                    </div>
                    <div class="col-xl-2">

                    </div>

                    <div class="col-xl-6 mt-2 mb-5 ">
                      <form action="callback.php" method="post">
                        <div class="form-row mt-5">
                          <div class="form-group col-md-6">

                            <input type="text" class="form-control" name="myname" placeholder="Enter Name">
                          </div>
                          <div class="form-group col-md-6">

                              <select id="inputState" name="myselectbox" class="form-control">
                              <option selected name="option1">Audit Assurance</option>
                              <option name="option2">Financial Consulting</option>
                              <option name="option3">Trades and stock</option>
                              <option name="option4">Strategic planning</option>
                            </select>
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-6">

                            <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
                          </div>
                          <div class="form-group col-md-6">

                            <input type="tel" class="form-control" id="inputPassword4" name="mynumber" placeholder="Enter phone number">
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-12">

                            <button type="submit" class="btn btn-success btn-lg" name="submit">Submit</button>

                          </div>

                        </div>

                      </form>
                    </div>
                  </div>
                </div>

                <div class="container">
                  <div class="row mb-4 mt-4">
                    <div class="col-xl-6">
                      <div class="card border">
                        <div class="card-body bg-primary">
                          <h2 class="card-title text-center">$202,159.48</h5>
                          <h5 class="text-center">Total Deposited</h5>


                        </div>
                      </div>
                    </div>

                    <div class="col-xl-6">
                      <div class="card border">
                        <div class="card-body bg-primary">
                          <h2 class="card-title text-center">$30,400</h5>
                          <h5 class="text-center">Total Withdraw</h5>


                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="row mb-4 mt-4">

                    <div class="col-xl-6">
                      <h2 class="text-center">Last Deposits</h2>
                      <div class="card border">
                        <div class="card-body bg-primary">
                          <marquee direction = "down">
                          <h4 class="card-title bg-info p-2">Arnold Robert: <span>$47,000</span> </h4>
                          <h4 class="card-title bg-info p-2">Siphiwe Khumalo: <span>$40,000</span></h4>
                          <h4 class="card-title bg-info p-2">Maama Lerotholi: <span>$3888</span></h4>
                          <h4 class="card-title bg-info p-2">Mor'o Lethoko: <span>$127,000</span></h4>
                          <h4 class="card-title bg-info p-2">Run muller:  <span>$50,000</span></h4>


                          </marquee>



                        </div>
                      </div>
                    </div>

                    <div class="col-xl-6">
                      <h2 class="text-center">Last Withdrawals</h2>
                      <div class="card border">
                        <div class="card-body bg-primary">
                          <marquee direction = "down">
                          <h4 class="card-title bg-info p-2">Joseph Chongwe: <span>$100</span> </h4>
                          <h4 class="card-title bg-info p-2">Morris chuake: <span>$400</span></h4>
                          <h4 class="card-title bg-info p-2">Petrus Eiseb: <span>$300</span></h4>
                          <h4 class="card-title bg-info p-2">Michael Nkosi: <span>$400</span></h4>
                          <h4 class="card-title bg-info p-2">Peggy Mazabane:  <span>$200</span></h4>
                          <!-- <h4 class="card-title bg-info p-2">Afred Seliane:  <span>$60000</span></h4>
                          <h4 class="card-title bg-info p-2">Mavela Nkosi:  <span>$40000</span></h4>
                          <h4 class="card-title bg-info p-2">Siba Hove:  <span>$150000</span></h4> -->


                          </marquee>



                        </div>
                      </div>
                    </div>

                  </div>

                </div>


                <div class="demo" style="background:#f0f0f0">
                       <div class="container">
                           <div class="row">
                             <div class="col-md-12">
                                <h1 style="text-align:center; color:black;" class="mb-4"> Testimonials </h1>
                             </div>

                           </div>

                           <div class="row">
                               <div class="col-md-12">
                                   <div id="testimonial-slider" class="owl-carousel">
                                       <div class="testimonial">
                                           <p class="description">
                                               I Withdraw succesfully after trading directly to my local bank account, so happy.
                                           </p>
                                           <div class="pic">
                                               <img src="images/Affluent-Women-Mailing-Lists.jpg" alt=""/>
                                           </div>
                                           <div class="testimonial-prof">
                                               <h4>williamson</h4>
                                               <small>From Manchester</small>
                                           </div>
                                       </div>

                                       <div class="testimonial">
                                           <p class="description">
                                             Trading with stockfxtrading as changed my life. I had lost countless times before, ever since i met them my trading a been perfect.
                                           </p>
                                           <div class="pic">
                                               <img src="images/person-2.jpg" alt=""/>
                                           </div>
                                           <div class="testimonial-prof">
                                               <h4>kristiana</h4>
                                               <small>From London</small>
                                           </div>
                                       </div>

                                       <div class="testimonial">
                                           <p class="description">
                                              My business as yielded so much and kept my business afloat. I am well pleased while trading here.
                                           </p>
                                           <div class="pic">
                                               <img src="images/Sam-Revilter.jpg" alt=""/>
                                           </div>
                                           <div class="testimonial-prof">
                                               <h4>Stev Thomas</h4>
                                               <small>From Atlanta</small>
                                           </div>
                                       </div>

                                       <div class="testimonial">
                                           <p class="description">
                                              They have got the best brokers out there. Try them today and always smile to bank
                                           </p>
                                           <div class="pic">
                                               <img src="images/team4-large.jpg" alt=""/>
                                           </div>
                                           <div class="testimonial-prof">
                                               <h4>miranda joy</h4>
                                               <small>From chicago</small>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>



              <?php include('templates/footer.php'); ?>









<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script src="js/myjs.js"></script>

 <script>
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:3,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[1000,2],
        itemsTablet:[767,1],
        pagination: false,
        navigation:true,
        navigationText:["",""],
        autoPlay:false
    });
});
</script>

<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

</body>
</html>
