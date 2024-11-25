<!DOCTYPE html>

<head>
    <title>Computer Science and Engineering | Rajalakshmi Engineering College (REC)</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js" async="async"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css//style.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="shortcut icon" href="./image//favicon.png">
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
        <div class="container">
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
            text-decoration: none;
          }
          #logo a:hover {
            color: #333;
            background-color: transparent;
          }
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
    <div class="profile-page">
        <div class="container">
            <div class="breadcrumb">Department > Computer Science and Engineering</div>
            <div class="col-md-11 page ">
                <h1 class="page-title">Department of Computer Science and Engineering</h1>
                <strong>Programmes Offered</strong>
                <br>UG - B.E. Computer Science and Engineering
                <br>PG - M.E. Computer Science and Engineering<br>
                Ph.D. - Computer Science and Engineering<br><br>
                <div class=""><img src="./image//cse.jpg" width="700px" alt="Computer Science and Engineering"></div>
                <p>
                    Since its inception in 1997, the Department of Computer Science and Engineering has been continuously making progress in teaching and R & D activities. Initially commencing with an intake of 60 students, the sanctioned intake was increased to 90 seats in 2001 and to 120 seats in 2005 and to 300 seats in 2015. The Post Graduate programme viz. M.E. - Computer Science and Engineering was introduced in the year 2004-05 and in 2006 the Department was recognized as Collaborative Research Centre by Anna University to offer M.S. (by research) and Ph.D. programmes. The Department has been maintaining an active interaction with the industries particularly with the Computer Society of India. The IT major Tata Consultancy Services has accredited the college for faculty and students development programmes, campus interview etc.
                    <br><br>
                    The Department has entered into an MoU with IBM, Infosys, TCS, Zoho, Virtusa, Pega, Oracle, Wipro, VMWare, UiPath, Dell, Cognizant, AWS, U.S. Technologies and many other renowned software companies for software training and Faculty Development Programmes, besides R&D activities.
                    <br><br>
                    The students from the Department have brought laurels by winning AICTE Smart India Hackathon three times. CII Connect awards have been presented by honourable Chief Minister of Tamilnadu to the students. The students have participated in several Hackathons and competitions and won accolades for the Department and college. Many of the students are well placed in leading software companies such as TCS, Infosys, Zoho, IBM, etc., There are quite a number of students who have taken up the ladder of Entrepreneurship.
                    <br><br><strong>Vision</strong><br><br> To promote highly ethical and innovative computer professionals through excellence in teaching, training and research.<br><br>
                    <strong>Mission</strong>
                </p>
                <ul>
                    <li>To produce globally competent professionals, motivated to learn the emerging technologies and to be innovative in solving real world problems.</li>
                    <li>To promote research activities amongst the students and the members of faculty that could benefit the society.</li>
                    <li>To impart moral and ethical values in their profession.</li>
                </ul>
                <br>

                <p></p>
            </div>
        </div>
        <div class="mobile-padder"></div>
        <span class="padder"></span>
        <div class="container-fluid topbar"></div>
        <div class="container-fluid footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
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

</body>

</html>