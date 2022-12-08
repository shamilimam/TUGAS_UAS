<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>yogasana</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="<?php echo base_url() . "assets/css/bootstrap.min.css"?>">
      <!-- style css -->
      <link rel="stylesheet" href="<?php echo base_url() . "assets/css/style.css"?>">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo base_url() . "assets/css/responsive.css"?>">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo base_url() . "assets/images/fevicon.png"?>" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo base_url() . "assets/css/jquery.mCustomScrollbar.min.css"?>">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="<?php echo base_url() . "assets/images/loading.gif"?>" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header class="full_bg">
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="<?php echo base_url() . "welcome/index"?>"><img src="<?php echo base_url() . "assets/images/logo.png"?>" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="<?php echo base_url() . "welcome/index"?>">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?php echo base_url() . "welcome/about" ?>">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?php echo base_url() . "welcome/classes" ?>">classes</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?php echo base_url() . "welcome/yoga"?>">yoga</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?php echo base_url() . "welcome/pricing"?>">pricing</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?php echo base_url() . "welcome/contact"?>">Contact Us</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?php echo base_url() . "auth/login"?>">Login</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
         <!-- end header -->
         <!-- banner -->
         <section class="banner_main">
            <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="carousel-caption  banner_po">
                           <div class="row">
                              <div class="col-md-5">
                                 <div class="yo_img">
                                    <figure><img src="<?php echo base_url() . "assets/images/yo_img.png"?>" alt="#"/></figure>
                                 </div>
                              </div>
                              <div class="col-md-7">
                                 <div class="yoga_box">
                                    <span>Now started</span>
                                    <h1> <strong>Y</strong> O <strong>G</strong> A</h1>
                                    <a class="read_more yoga_btn" href="<?php echo base_url() . "welcome/contact"?>" role="button">Contact us</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption banner_po">
                           <div class="row">
                              <div class="col-md-5">
                                 <div class="yo_img">
                                    <figure><img src="<?php echo base_url() . "assets/images/yo_img.png"?>" alt="#"/></figure>
                                 </div>
                              </div>
                              <div class="col-md-7">
                                 <div class="yoga_box">
                                    <span>Now started</span>
                                    <h1> <strong>Y</strong> O <strong>G</strong> A</h1>
                                    <a class="read_more yoga_btn" href="<?php echo base_url() . "welcome/contact" ?>"role="button">Contact us</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption banner_po">
                           <div class="row">
                              <div class="col-md-5">
                                 <div class="yo_img">
                                    <figure><img src="<?php echo base_url() . "assets/images/yo_img.png"?>" alt="#"/></figure>
                                 </div>
                              </div>
                              <div class="col-md-7">
                                 <div class="yoga_box">
                                    <span>Now started</span>
                                    <h1> <strong>Y</strong> O <strong>G</strong> A</h1>
                                    <a class="read_more yoga_btn " href="<?php echo base_url() . "welcome/pricing"?>"role="button">Pricing</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <i class="fa fa-arrow-left" aria-hidden="true"></i>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
               <i class="fa fa-arrow-right" aria-hidden="true"></i>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </section>
      </header>
      <!-- end banner -->
      

      

      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <div class="newslatter">
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class=" border_top1"></div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <h3>QUICK LINKS</h3>
                     <ul class="link_menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="<?php echo base_url() . "welcome/about"?>"> About</a></li>
                        <li><a href="<?php echo base_url() . "welcome/classes"?>">Classes</a></li>
                        <li><a href="<?php echo base_url() . "welcome/yoga"?>">Yoga</a></li>
                        <li><a href="<?php echo base_url() . "welcome/pricing"?>">pricing</a></li>
                        <li><a href="<?php echo base_url() . "welcome/contact"?>">Contact Us</a></li>
                        
                     </ul>
                  </div>
                  <div class=" col-md-3">
                     <h3> Yoga </h3>
                     <p class="many">
                     kegiatan yoga itu termasuk salah satu jenis olahraga! ,meskipun dalam kegiatan ini jarang melakukan gerakan melompat maupun berlari, tetapi manfaat yang didapatkannya setara dengan olahraga pada umumnya.
                     </p>
                  </div>
                  <div class="col-lg-3 offset-mdlg-2     col-md-4 offset-md-1">
                     <h3>Contact </h3>
                     <ul class="conta">
            
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> Call : +62 8978275331</li>
                        <li><i class="fa fa-location" aria-hidden="true"></i> Bekasi Selatan</li>
                     </ul>
                     <ul class="social_icon">
                        <li><a href="https://www.instagram.com/shamil.imam10_/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="<?php echo base_url() . "assets/js/jquery.min.js"?>"></script>
      <script src="<?php echo base_url() . "assets/js/bootstrap.bundle.min.js"?>"></script>
      <script src="<?php echo base_url() . "assets/js/jquery-3.0.0.min.js"?>"></script>
      <!-- sidebar -->
      <script src="<?php echo base_url() . "assets/js/jquery.mCustomScrollbar.concat.min.js"?>"></script>
      <script src="<?php echo base_url() . "assets/js/custom.js"?>"></script>
   </body>
</html>