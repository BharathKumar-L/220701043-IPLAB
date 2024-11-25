<!DOCTYPE html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Home | Rajalakshmi Engineering College (REC)</title>
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js" async="async"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/index.css" />
  <link rel="shortcut icon" href="image/favicon.png">
  <style>
    .banner-8 {
      min-height: 500px;
    }
    
    .d-none {
      display: none;
    }

    .float-right-2 {
      background: #710071;
      text-align: center;
      color: #fff;
      font-size: 18px;
      padding: 15px 0px;
    }

    .float-right-2 a {
      padding: 5px 0px;
    }

    @media (min-width: 770px) {
      .banner-8 {
        background: url(../image/banner-9.jpg) no-repeat;
        background-size: cover;
        background-position: center;
      }

      .float-right-2 {
        float: right;
        right: 5px;
        position: fixed;
        bottom: 80px;
        padding: 20px;
      }

      .drop-sub {
        display: none;
      }

      .drop-top:hover .drop-sub {
        display: inline-block !important;
        position: absolute;
        top: 35px;
        left: 25px;
        border-radius: 0 0 0 29px;
        background: #810081;
      }

      .drop-sub:hover {
        display: inline-block !important;
        position: absolute;
        top: 35px;
        left: 25px;
        border-radius: 0 0 0 29px;
        background: #810081;
      }

      .drop-sub li {
        display: block;
        padding: 5px;
      }
    }

    @media (max-width: 770px) {
      .banner-8 {
        background: url(../image/banner-9-m.jpg) no-repeat;
        background-size: cover;
        background-position: center;
      }

      .float-right-2 {
        position: fixed;
        bottom: 70px !important;
        text-align: center;
        width: 100%;
      }
    }

    ol>li {
      margin-bottom: 0.50rem;
    }
  </style>
</head>

<body>
  <div class="container-fluid topbar">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6"></div>
        <div class="col-md-6 col-sm-6 col-xs-6"></div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="col-md-12 d-flex align-items-center justify-content-center">
      <nav class="navbar">
        <style>
          .navbar {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px 0;
            width: 100%;
          }

          .navbar-nav {
            display: flex;
            align-items: center;
            justify-content: center;
          }

          .navbar-nav>li {
            display: flex;
            align-items: center;
          }

          #logo a {
            color: #333;
            /* Set default color */
            text-decoration: none;
            /* No underline */
          }

          #logo a:hover {
            color: #333;
            /* Prevent color change on hover */
            background-color: transparent;
            /* Prevent background color change */
          }

          /* Custom styling for dropdown links */
          .customdesign {
            margin-left: 0;
            padding: 0;
          }

          .customdesign a {
            text-decoration: none;
            color: #333;
          }

          .customdesign a:hover {
            color: #333 !important;
            background-color: #fff !important;
          }
        </style>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li id="logo"> <a href="./index.php">
                <img width="150px" src="./image//logo2.png" alt="Rajalakshmi Engineering College" class="logo" title="Rajalakshmi Engineering College (REC), Chennai" />
              </a></li>
            <li class="dropdown "> <a class="dropdown-toggle" href="about.php">About </a>
            </li>
            <li class="dropdown "> <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" href="#">Department </a>
              <ul role="menu" class="dropdown-menu">
                <li><a href="#">Automobile Engineering</a></li>
                <li><a href="#">Civil Engineering</a></li>
                <li><a href="./dept-cse.php">Computer Science &amp; Engineering</a>
                  <ul class="customdesign">
                    <li><a style="color: #333 !important; font-weight: lighter !important;" href="./dept-cse.php">Computer Science &amp; Engineering</a></li>
                    <li><a style="color: #333 !important; font-weight: lighter !important;" href="#">Computer Science &amp; Engineering (Cyber Security)</a></li>
                    <li><a style="color: #333 !important; font-weight: lighter !important;" href="#">Computer Science &amp; Business Systems</a></li>
                    <li><a style="color: #333 !important; font-weight: lighter !important;" href="#">Computer Science &amp; Design</a></li>
                  </ul>
                </li>
                <li><a href="#">Electrical &amp; Electronics Engineering</a></li>
                <li><a href="#">Electronics &amp; Communication Engineering</a></li>
                <li><a href="#">Information Technology</a>
                  <ul class="customdesign">
                    <li><a style="color: #333 !important; font-weight: lighter !important;" href="#">Information Technology</a></li>
                    <li><a style="color: #333 !important; font-weight: lighter !important;" href="#">Artificial Intelligence & Machine Learning</a></li>
                    <li><a style="color: #333 !important; font-weight: lighter !important;" href="#">Artificial Intelligence & Data Science</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown "> <a href="#">COE</a></li>
            <li class="dropdown "> <a class="dropdown-toggle" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#">Academics</a>

              <ul class="dropdown-menu">
                <li><a href="#">Regulations</a></li>
                <li><a href="#">Curriculum and Syllabus</a></li>
                <li><a href="#">Academic Schedule</a></li>
                <li><a href="#">Course Materials</a></li>
                <li><a href="#">Students Handbook</a></li>


              </ul>
            </li>
            <li class="dropdown "><a class="dropdown-toggle" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#">Admissions</a>
              <ul class="dropdown-menu">
                <li><a href="#">Programmes Offered</a></li>
                <li><a href="#">Eligibility</a></li>
                <li><a href="#">Cutoff Marks</a></li>
                <li><a href="#">Application Forms</a></li>
              </ul>
            </li>
            <li class="dropdown "><a class="dropdown-toggle" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#">Facilities</a>
              <ul class="dropdown-menu">
                <li><a href="#">Administration Services</a></li>
                <li><a href="#">Library</a></li>
                <li><a href="#">Canteen</a></li>
                <li><a href="#">Hostel</a></li>
                <li><a href="#">Transport</a></li>
                <li><a href="#">IT Infrastructure</a></li>
                <li><a href="#">Health Centre</a></li>
                <li><a href="#">Security</a></li>
                <li><a href="#">Lecture Capturing System</a></li>
                <li><a href="#">Green Campus</a></li>
                <li><a href="#">Energy Conservation</a></li>
                <li><a href="#">Water Conservation</a></li>
                <li><a href="#">Infrastructure</a></li>
                <li><a href="#">Maintenance</a></li>
              </ul>
            </li>

            <li class="dropdown "><a class="dropdown-toggle" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#">Placements</a>
              <ul class="dropdown-menu">
                <li><a href="#">Placement Cell</a></li>
                <li><a href="#">Why Rajalakshmi?</a></li>
                <li><a href="#">Procedure</a></li>
                <li><a href="#">Training Programs</a></li>
                <li><a href="#">Placement Report</a></li>
                <li><a href="#">Recruiters</a></li>
                <li><a href="#">Employability Training Camp</a></li>
                <li><a href="#">Placement Contact</a></li>
                <li><a href="#">Downloads</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Capacity Development and Skills Enhancement</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </nav>
    </div>
  </div>
  <style>
    .modal-content {
      background: #fff !important;
    }

    .modal-header {
      background: rgba(71, 0, 71, .8);
      color: #fff;
    }

    .modal-body {
      padding: 0;
    }

    .close {
      color: #fff;
      font-size: 30px;
    }
  </style>

  <style>
    @media only screen and (min-width: 800px) {
      .web-view {
        display: block !important;
      }

      .mobile-view {
        display: none !important;
      }
    }

    @media only screen and (max-width: 799px) {
      .web-view {
        display: none !important;
      }

      .mobile-view {
        display: block !important;
      }
    }
  </style>

  <div class="container-fluid">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner carousel " role="listbox">
        <div class="item active banner-2">
          <img src="./image//image1.jpeg" alt="First"/>
        </div>

        <div class="item banner-3">
          <img src="./image//image2.jpg" alt="Second"/>
        </div>
        <div class="item banner-4">
          <img src="./image//images.jpeg" alt="Third"/>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
    </div>
  </div>
  <span class="padder"></span>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="container-test">
          <iframe class="responsive-iframe" src="https://www.youtube-nocookie.com/embed/ek6h-WNRR1Y?autoplay=1&controls=0" title="REC" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-md-4"> <span class="mobile-padder"></span>
        <div class="new-scroll-heading">Announcements</div>
        <marquee direction="up" class="scroll" onmouseover="this.stop();" onmouseout="this.start();" scrolldelay="200">
          ﻿<ul>
            <li>
            <li>



              <strong>CIRCULAR - REVALUATION AND SUPPLEMENTARY EXAM</strong><img src="image/new.gif"><br>
              Circular for the revaluation and conduct of supplementary examination - End Semester Exam. Apr./May 2024 - UG & PG<a href="#" target="_blank"> Click here</strong></a> to VIEW/DOWNLOAD the CIRCULAR </p>
              <a href="#" target="_blank"> Click here</strong></a> to VIEW/DOWNLOAD the REVALUATION APPLICATION FORM</p>
              </p>
              <a href="#" target="_blank"> Click here</strong></a> to VIEW/DOWNLOAD the APPLICATION FORM FOR PHOTOCOPY</p>
              </p>
              </p>.
            </li>

            <li>
              <strong>NIRF 2022</strong>
              <p>REC is ranked 86th in the country under Engineering category.</p>
            </li>

            <li>
              <strong>NIRF 2021</strong>
              <p>REC is Ranked 95th in the country under Engineering category.
              </p>
            </li>


            <li>
              <strong>NIRF 2020</strong>
              <p>REC is Ranked Top 10% amongst Technical Institutions India under NIRF.
              </p>
            </li>
            <li>
              <strong>Dataquest T-School Survey Rankings 2019</strong>
              <p>REC is ranked 15 in India's Top T-Schools (Private) by Dataquest T-School Survey 2019.
              </p>
            </li>

            <li>
              <strong>REC in Top 20 Engineering Colleges in India</strong>
              <p>REC is ranked 20th in Top 100 Private Engineering Colleges in India & 6th in Top 20 Engineering Colleges with Excellent Industry Exposure by Higher Education Review Magazine. Thank you Students, Parents, Faculty & Staff!.
              </p>
            </li>

            <li>
              <font color="purple" size="2"><strong>TOP 100 PRIVATE Engineering Colleges - HER</strong><img src="image/new.gif">
                <p>REC is ranked 21st in Top 100 Private Engineering Colleges in India & 13th in Top 20 Engineering Colleges in India in Placements in the Top 100 PRIVATE ENGINEERING COLLEGES SURVEY 2016 by Higher Education Review.
                </p>
            </li>
            <li>
              <strong>TOP ENGINEERING INSTITUTE</strong><img src="image/new.gif">
              <p>REC is listed as ONE of the TOP PRIVATE ENGINEERING INSTITUTE in the TIMES ENGINEERING INSTITUTE RANKING SURVEY 2016.
                <br><a href="#" target="_blank"><strong>Click here</strong></a> for details.
              </p>
            </li>
            <li>
              <strong>INTERNSHIP</strong>
              <p>We provide opportunities to the students interested in doing internship on "MEMS & Microfluidics". If you are interested in doing an internshiip, please email your profile to head.cemm@rajalakshmi.edu.in.
                <br><a href="#" target="_blank"><strong>Click here</strong></a> for details.
              </p>
            </li>
            <li>
          </ul>
        </marquee>
      </div>
    </div>
  </div>
  <span class="padder"></span><br />
  <span class="padder"></span>

  <span class="padder"></span><br />
  <span class="padder"></span>
  <style>
    .container-test {
      position: relative;
      width: 100%;
      overflow: hidden;
      padding-top: 56.25%;
      /* 16:9 Aspect Ratio */
    }

    .responsive-iframe {
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      width: 100%;
      height: 100%;
      border: none;
    }
  </style>
  <div class="container">
    <div class="row">
      <div class="col-12" style="padding:10px;">
        <div class="col-md-6 info-box info-placement" data-aos="fade-right"><span class="info-title">Placement</span><span class="info-text"><a href="placement-record-2021-2022.php"><span class="heading">2058+</span> offers - current batch (2022 passing out)<br />
              RECEIVED till 15.06.2022.<br /></a>
            <div class="line"></div>
            <a href="placement-record-2020-2021.php"><span class="heading">1508</span> offers - previous batch(2021 passed)<br />
              RECEIVED till 23.12.2021
          </span></a></div>
        <div class="col-md-6 info-box info-result" data-aos="fade-right"><span class="info-title">University Ranks</span><span class="info-text">REC has produced <span class="heading">85</span> University Ranks in 2018 batch.<br />
            <div class="line"></div>
            REC has secured <span class="heading">5<sup>th</sup></span> position in Apr/May 2018 University Exams
          </span></div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content" id="video_modal" style="background: transparent !important;">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="position: absolute;z-index: 99999999; background: white; right: 10px; top: 10px; color: #000; opacity: .5; padding: 1px 5px;">×</button>
        <video id="video_player" controls muted autoplay style="width: 100%; height: auto;">
          <source src="https://www.youtube.com/watch?v=ek6h-WNRR1Y" type="video/youtube">
          Your browser does not support the video tag.
        </video>
      </div>
    </div>
  </div>


  <span class="padder"></span>
  <div class="container-fluid topbar"></div>
  <div class="container-fluid ">
    <div class="container">
      <div class="row">
        <div class="col-md-3 ">
          <ul class="footer-menu">
            <li class="footer-title">Contact Us</li>
            <li>Rajalakshmi Engineering College,<br>
              Rajalakshmi Nagar
              Thandalam, Chennai - 602 105.<br>
              Phone : +91-44-67181111, 67181112<br>
              <a href="http://www.facebook.com/myrecchennai" class="fa fa-facebook"></a>&nbsp; <a href="http://www.twitter.com/myrecchennai" class="fa fa-twitter"></a>&nbsp; <a href="https://www.instagram.com/rec_chennai" class="fa fa-instagram"></a>
            </li>
        </div>
      </div>
    </div>
  </div>
  <div class="float-right  d-none ">Admissions Open: <a href="#" target="_blank">UG</a> | <a href="#" target="_blank">PG</a></div>
  <style>
    #myModal {
      text-align: center;
    }

    #myModal img {
      width: 900px;
      text-align: center;
    }

    .modal-content {
      background: transparent;
    }

    .modal-header {
      border: 0px !important;
    }

    #myModal .close {
      float: right;
      font-size: 62px;
      font-weight: 700;
      line-height: 1;
      color: #fff;
      text-shadow: 0 1px 0 #fff;
      filter: alpha(opacity=20);
      opacity: 3.2;
    }

    @media (max-width: 768px) {
      #myModal img {
        width: 100%;
      }
    }
  </style>

</body>

</html>