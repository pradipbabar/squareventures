<?php   
    if (isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect( $server, $username,  $password);

    // if(!$con){
    //     die("connect to database due to ".mysqli_connect_error());

    // }
    // echo "connecton successfuly";
    $name = $_POST['name'];
    $location = $_POST['location'];
    $pno = $_POST['pno'];
    
    $sql="INSERT INTO `square ventures wealth management`. `login` (`name`, `location`, `phone_no`, `date`) VALUES ( '$name', '$location', ' $pno', current_timestamp());";
 
  if ($con->query($sql)==true){
      

  }
  else{
      echo "error: $sql <br> $con->error";
  }

  $con->close();

}

?>  
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Square Ventures Wealth Management </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Square Ventures Wealth Management">
    <meta name="description" content=" A mutual fund is a type of investment vehicle consisting of a portfolio of stocks, bonds, or other securities. ">
    <meta name="keywords" content="MUTUAL FUND ,FIXED DEPOSIT,BONDS,LIFE INSURANCE,DEMAT ACCOUNT,HEALT-INSURANCE , trad">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="./img/title_logo.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img class="logohight" src="./img/Capture-removebg-preview.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.html">home</a></li>
                                            <li><a href="loan.html">How To Trade</a></li>
                                            <li><a href="about.html">about</a></li>
                                          
                                            
                                           <!-------------- <li><a href="FAQ.html">FAQ</a></li> --------->
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="phone_num d-none d-xl-block">
                                        <a href="#"> <i class="fa fa-phone"></i> +91 83083 19430</a>
                                    </div>
                                   <!------- <div class="d-none d-lg-block">
                                        <a class="boxed-btn4" href="apply.html">Apply for a Loan</a>
                                    </div>------->
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                            
                        </div>
                     
                       
                    </div>
                  
                </div>
            </div>
           
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="slider_text">
                            <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".1s">Square Ventures Wealth Management </h3>
                           <p style="color: white;font-size: 24;font-weight: 600;"> Quality In Everythink We Do</p>
                       
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="payment_form white-bg wow fadeInDown" data-wow-duration="1.2s" data-wow-delay=".2s">
                            <div class="info text-center">
                                <h4>Login Here</h4>
                                <p>Connect With Us Quickly</p>
                            </div>
                            <form  method="POST" action="./login.php">
                            <div class="form"  >
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="single_input">
                                            <input type="text" name="name" id="name" placeholder="enter your name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_input">
                                            <input type="text" name="location" id="location" placeholder="enter your location">
                                         </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_input">
                                            <input type="text" name="pno" id="pno" placeholder="enter your phone number">
                                         </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="submit_btn">
                                <button class="boxed-btn3" >Continue</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- service_area_start  -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-90">
                        <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s"></span>
                        <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">SERVICES AND PRODUCT</h3>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">We provide online instant cash loans with quick approval that suit your term</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".5s">
                        <div class="service_icon_wrap text-center">
                            <div class="service_icon " >
                               <img src="./img/svg_icon/graph.svg" >
                            </div>
                        </div>
                        <div class="info text-center">
                          
                            <h3 style="color: black;">MUTUAL FUNDS</h3>
                        </div>
                        <div class="service_content">
                          
                             <p style="color: rgb(2, 66, 241); text-align: center; font-size: 18px;">   Invest in professionally managed funds
                                    and see your money grow as you relax. 
                                </p>           
                            <div class="apply_btn">
                                <a href="./mutualfund.html">
                                <button class="boxed-btn3" type="submit">Apply Now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service wow fadeInRight" data-wow-duration="1.2s" data-wow-delay=".5s">
                        <div class="service_icon_wrap text-center">
                            <div class="service_icon ">

                                <img  src="img/svg_icon/bond.svg" alt="">
                            </div>
                        </div>
                        <div class="info text-center">
                           
                            <h3 style="color: black;">BONDS</h3>
                        </div>
                        <div class="service_content">
                            <p style="color: rgb(2, 66, 241); text-align: center; font-size: 18px;"> 
                                Companies or governments issue bonds because they need to borrow large amounts of money

                            </p>
                            <div class="apply_btn">
                                <a href="./bond.html">
                                <button class="boxed-btn3" type="submit">Apply Now</button> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="service_icon_wrap text-center">
                            <div class="service_icon ">
                                <img src="img/svg_icon/fixed-dip.png" alt="">
                            </div>
                        </div>
                        <div class="info text-center">
                           
                            <h3 style="color: black;">FIXED DEPOSIT</h3>
                        </div>
                        <div class="service_content">
                            <p style="color: rgb(2, 66, 241); text-align: center; font-size: 18px;">Calculate the maturity amount and interest earned for any Fixed Deposit.
                                 
                            </p>
            
                            <div class="apply_btn">
                                <a href="./fixed_deposit.html">
                                <button class="boxed-btn3" type="submit">Apply Now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".5s">
                        <div class="service_icon_wrap text-center">
                            <div class="service_icon ">
                                <img  src="img/svg_icon/life2.png" alt="">
                            </div>
                        </div>
                        <div class="info text-center">
                         
                            <h3 style="color: black;">LIFE INSURANCE</h3>
                        </div>
                        <div class="service_content">
                            
                                <p style="color: rgb(2, 66, 241); text-align: center; font-size: 18px;">Life insurance is a contract between an insurance policy holder and an insurer 
                                 </p>
                            
                            <div class="apply_btn">
                                <a href="./life_insurance.html">
                                <button class="boxed-btn3" type="submit">Apply Now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="service_icon_wrap text-center">
                            <div class="service_icon ">
                                <img src="img/svg_icon/img_box_psd2_dbcorporatebanking_cut.png" alt="">
                            </div>
                        </div>
                        <div class="info text-center">
                           
                            <h3 style="color: black;">DEMAT & TRADING ACCOUNT</h3>
                        </div>
                        <div class="service_content">
                            <p style="color: rgb(2, 66, 241); text-align: center; font-size: 18px;"> An account to easily convert your physical holdings into electronic
                                
                            </p>
                            <div class="apply_btn">
                                <a href="./demate_account.html">
                                <button class="boxed-btn3" type="submit">Apply Now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service wow fadeInRight" data-wow-duration="1.2s" data-wow-delay=".5s">
                        <div class="service_icon_wrap text-center">
                            <div class="service_icon ">
                                <img src="img/svg_icon/heltinsurance.png" alt="">
                            </div>
                        </div>
                        <div class="info text-center">
                          
                            <h3 style="color: black;">HEALTH-INSURANCE</h3>
                        </div>
                        <div class="service_content">
                           <p style="color: rgb(2, 66, 241); text-align: center; font-size: 18px;">Your Loved Ones Deserve The
                            Best Protection From Star Health!
                            
                            
                            </p>
                            <div class="apply_btn">
                                <a  href="./health_insurance.html">
                                <button class="boxed-btn3" type="submit">Apply Now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area_end  -->
    <!-- /testimonial_area  -->

    <!---------------------<div class="brad_area">
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brad_active owl-carousel">
                        <div class="single_brand wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                            <img src="img/brand/nsdl.jpg" alt="">
                        </div>
                        <div class="single_brand wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <img src="img/brand/MCX_logo.png" alt="">
                        
                        </div>
                        <div class="single_brand wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <img src="img/brand/ncdex.jpg" alt="">
                        </div>
                        <div class="single_brand wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <img src="img/brand/sbe.png" alt="">
                        </div>
                        <div class="single_brand wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <img src="img/brand/nse.png" alt="">
                        </div>
                        <div class="single_brand wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                            <img src="img/brand/BSE.png" alt="">
                        </div>
                       
                    </div>
                </div>
            </div>
        
        </div>
        <hr>
    </div>
   
    <!-- about_area_start  -->
    <div class="about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="about_img wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                        <img src="img/about/men-1979261_1920.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about_info pl-68">
                        <div class="section_title wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".3s">
                            <h3>Why Choose Us?</h3>
                        </div>
                        <p class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s">Esteem spirit temper too say adieus who direct esteem.It esteems luckily or picture placing drawing. Apartments frequently or motionless on reasonable.</p>
                        <div class="about_list">
                            <ul>
                                <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">Support 24/7</li>
                                <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".6s">Daily Research Reports on 230+ Stocks and 20+ sectors</li>
                                <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".7s">Personal Relationship Manager to help you with ALL your investments</li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".8s">
                                <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".9s">Our success has been recognised by NSE, BSE MCX, NCDEX, NSDL, CDSL and many more.

                                </li>
                            </ul>
                        </div>
                        <div class="about_btn wow fadeInRight" data-wow-duration="1.3s" data-wow-delay=".5s">
                            <a class="boxed-btn3" href="./about.html">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end  -->

    <div class="works_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-90">
                        <span class="wow lightSpeedIn" data-wow-duration="1s" data-wow-delay=".1s"></span>
                        <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">How To Trade</h3>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">We provide online instant cash loans with quick approval that suit your term</p>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="single_works wow fadeInUp"style="text-align:center" data-wow-duration="1s" data-wow-delay=".4s">
                        <span>
                            <img class="tradelogs" src="./trade_ing/callboyyash-removebg-preview.png">
                        </span>
                        <h3>Call and trade</h3>
                        <p>Just call up  +91 83083-19430  and place your order</p>
                        <div class="about_btn wow fadeInRight" data-wow-duration="1.3s" data-wow-delay=".5s">
                            <a class="boxed-btn3" href="tel:+91 8308319430">Call now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                <div class="single_works wow fadeInUp" data-wow-duration="1s" style="text-align:center" data-wow-delay=".5s">
                    <span>
                        <img class="tradelogs" src="./trade_ing/offices-removebg-preview.png">
                    </span>
                    <h3> Trade at our Office</h3>
                    <p>Visit any of our 100+ offices near you for a rich trading experience.</p>
                 
                    <div class="about_btn wow fadeInRight" data-wow-duration="1.3s" data-wow-delay=".5s">
                        <div class="callbtn">
                            <button  type="button" data-target="#mymodel" data-toggle="modal"  class="btn btcol  btn-primary">BRANCH LOCATOR</button>
                
                            <div class="modal fade" id="mymodel">
                              <div class="modal-dialog " style="border: solid 1px;border-radius: 5px;background-color: wheat;">
                                <div class="modal-content">
                                  <div class="modal-header text-center">
                                    <h5 class="text-center headnoti "> Branch Location</h5>
                                        <button type="button" data-dismiss="modal" class="close">&times;</button>
                                  </div>
                                  <div class="modal-body" >
                                    <div class="noification">
                                        <div class="boxnoti">
                                          <p> <i class="fa fa-address-card-o" aria-hidden="true"></i>
                                           <p> Head Office</p> <br>
                                           1696,Sadashiv peth ,
                                           <br>near khajina vihir chowk<br> Tilak road Pune 411030
                                            
                                          </p>
                                          <hr>
                                          <p>
                                          <h6>contact us</h6><br>
                                          <i class="fa fa-phone" aria-hidden="true"></i>
                                          +91 83083-19430
                                        </p>
                                        </div>
                                    </div>
                                  </div>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
               
                </div>
            </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single_works wow fadeInUp" style="text-align:center" data-wow-duration="1s" data-wow-delay=".6s">
                        <span>
                            <img class="tradelogs" src="./trade_ing/mobile2-removebg-preview.png">
                        </span>
                        <h3>Online trading</h3>
                        <p>Trade easily from anywhere through our mobile app or website.</p>
                        <div class="about_btn wow fadeInRight" data-wow-duration="1.3s" data-wow-delay=".5s">
                            <a class="boxed-btn3" href="./loan.html">online trade</a>
                        </div>
                    </div>
                </div>
                <
            </div>
        </div>
    </div>

 

    <!-- testimonial_area  ----
    <div class="testimonial_area  ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="single_testmonial d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="img/testmonial/author.png" alt="">
                                            <div class="quote_icon">
                                                <i class="Flaticon flaticon-quote"></i>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering through animal welfare when people might depend on livestock as their only source of income or food.</p>
                                            <span>- Micky Mouse</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="single_testmonial d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="img/testmonial/author.png" alt="">
                                            <div class="quote_icon">
                                                <i class=" Flaticon flaticon-quote"></i>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering through animal welfare when people might depend on livestock as their only source of income or food.</p>
                                            <span>- Micky Mouse</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="single_testmonial d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="img/testmonial/author.png" alt="">
                                            <div class="quote_icon">
                                                <i class="Flaticon flaticon-quote"></i>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering through animal welfare when people might depend on livestock as their only source of income or food.</p>
                                            <span>- Micky Mouse</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ----------->
    <div class="apply_loan overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7">
                    <div class="loan_text wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                        <h3>You’ve found a stock broker
                            who cares only for your smiles!
                            </h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="loan_btn wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s">
                        <a class="boxed-btn3" href="contact.html">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- footer start -->
  <footer class="footer "  >
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 borderfooter col-md-6 col-lg-3">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="footer_logo">
                            <a href="#">
                                <img class="logohight" src="./img/Capture-removebg-preview.png" alt="">
                            </a>
                        </div>
                        <p>
                            Squarventuresfms@gmail.com<br>
                            +91 83083-19430 <br>
                            1696,Sadashiv peth ,
                            near khajina vihir chowk<br>
                            Tilak road Pune 411030
                        </p>
                     

                    </div>
                </div>
                <div class="col-xl-2 borderfooter col-md-6 col-lg-3">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".4s">
                        <h3 class="footer_title">
                            Services
                        </h3>
                        <ul>
                            <li><a href="./mutualfund.html">MUTUAL FUNDS </a></li>
                            <li><a href="./fixed_deposit.html">FIXED DEPOSIT</a></li>
                            <li><a href="./bond.html">BONDS</a></li>
                            <li><a href="./life_insurance.html">LIFE INSURANCE</a></li>
                            <li><a href="./demate_account.html">DEMAT & TRADING ACCOUNT
                            </a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-2 borderfooter col-md-6 col-lg-2">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                        <h3 class="footer_title">
                            Useful Links
                        </h3>
                        <ul>
                            <li><a href="https://play.google.com/store/apps/details?id=com.protrade.swastikainvestmart">Mobile Trading app</a></li>
                            <li><a href="https://trading.swastika.co.in/Express5/login">Trading website</a></li>
                            <li><a href="./Justrade_64.zip">Justrade Pro</a></li>
                            <li><a href="./contact.html"> Contact</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 borderfooter col-md-6 col-lg-4">
                    
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                        <h3 class="footer_title">
                            Contact us
                        </h3>
                        <ul>
                            <li><h4 >whatsapp </h4><a href="#"> <i class="fa fa-whatsapp"></i> +91 83083-19430</a>
                                <br></li>
                                <li><h4 >email </h4><a href="#"> <i class="fa fa-envelope"></i> Squarventuresfms@gmail.com</a>
                                    <br></li>
                            
                        </ul>
                    </div>
                        <!---------<h4 style="color:rebeccapurple;">whatsapp </h4>
                        <h4 style="color:rebeccapurple;"> </h4>
                        <a href="#"> <i class="fa fa-whatsapp"></i> +91 83083 1943</a>
                        <br>
                      
                        <a href="#"> <i class="fa fa-envelope"></i> +91 83083 1943</a>--->
                       
                    
                    <div class="socail_links">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="ti-facebook" ></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="copy-right_text wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".3s">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/ footer end  -->

    <!-- link that opens popup -->
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/slick.min.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>
</body>

</html>