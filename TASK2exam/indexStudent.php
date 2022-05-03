<?php
   // Start the session
   session_start();
   ?>

<?php
  if ($_SESSION["status"] != 'loggedInStudent'){
    header("location:login.php");
    exit();
  }

  include 'xp.php';

?>
<!DOCTYPE html>
<html lang="en">
<head> 

  <title>GibJohn Tutoring</title>

  <!-- CSS Files for styling -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" >
  <link rel="stylesheet" type="text/css" href="css/sidebarStyle.css">
  <link rel="stylesheet" href="css/indexStyle.css" >

  <!-- Template Styling -->
  
  <!-- Template -->
  <!-- https://themewagon.com/themes/free-bootstrap-4-html5-online-courses-education-website-template-webuni/  -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link rel="stylesheet" href="css/owl.carousel.css"/>
  <link rel="stylesheet" href="css/style.css"/>

  <!-- End of template styling -->

</head>

<!-- The header of the index page which will display the title of the page -->
<header class="header" id="header">
  <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <p style="font-size: 30px; margin-top: 12px;">Dashboard</p>
    <p style="margin-top: 12px;"> <a href="profileStudent.php" style="color: black;"class="link-secondary"><strong>Hello</strong> <?php echo $_SESSION["username"]; ?>!</a></p>
</header>


<body class="index g-sidenav-show  bg-gray-200">
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

    <!-- Navigation bar -->
    <div class='l-navbar' id='nav-bar'>
        <nav class='nav'>
            <div>
              <a href='indexStudent.php' class='nav_logo'> <i class='bx bx-layer nav_logo-icon'></i> <span class='nav_logo-name'>GibJohn Tutoring</span> </a>
                <div class='nav_list'>

                  <!-- Dashboard -->
                  <a href='indexStudent.php' class='nav_link active'> <i class='bx bx-grid-alt nav_icon'></i> <span class='nav_name'>Dashboard</span> </a>

                  <!-- Learning Resources -->
                  <a href='learningResourcesStudent.php' class='nav_link'> <i class='bx bx-book-reader nav_icon'></i> <span class='nav_name'>Learning Resources</span> </a>

                  <!-- Wider Learning -->
                  <a href='widerLearningStudent.php' class='nav_link'> <i class='bx bx-play-circle nav_icon'></i> <span class='nav_name'>Wider Learning</span> </a>

                  <!-- Assessments -->
                  <a href='#' class='nav_link'> <i class='bx bxs-book nav_icon'></i> <span class='nav_name'>Assessments</span> </a>

                  <!-- Learning Games -->
                  <a href='learningGamesStudent.php' class='nav_link'> <i class='bx bx-joystick nav_icon'></i> <span class='nav_name'>Learning Games</span> </a>

                  <!-- User Profile -->
                  <a href='profileStudent.php' class='nav_link'> <i class='bx  bx-user nav_icon'></i> <span class='nav_name'>Profile</span> </a>
                </div>
                <!-- Logout button which will destroy the session -->
            </div> <a href='logout.php' class='nav_link'> <i class='bx bx-log-out nav_icon'></i> <span class='nav_name'>Sign Out</span> </a>
        </nav>
    </div>

    <div class="container-fluid py-4">
      <div class="row">
        <div style="padding-top: 60px;">
        </div>

        <!-- Resources -->
        <section class="categories-section spad">
          <div class="container">

            <h4>XP: <?php echo $xp;?></h4>

            <br><br>

            <div class="row">
              <!-- Chemistry Resources-->
              <div class="col-lg-4 col-md-6">
                <div class="category-item">
                  <div class="ci-thumb set-bg" data-setbg="img/courses/3.jpg"></div>
                  <div class="ci-text">
                    <h5>Study Material</h5>
                    <p>Subject: Chemistry</p>
                    <p>Type: Exam Prep</p>
                    <a href="learningResourcesStudent.php">
                      <button class="btn btn-info btn-block my-4" style="background-color: #4723D9; border-color: #4723D9;">Go</button>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Maths Resources -->
              <div class="col-lg-4 col-md-6">
                <div class="category-item">
                  <div class="ci-thumb set-bg" data-setbg="img/courses/4.jpg"></div>
                  <div class="ci-text">
                    <h5>Learning Activity</h5>
                    <p>Subject: Maths</p>
                    <p>Type: Activity</p>
                    <a href="learningResourcesStudent.php">
                      <button class="btn btn-info btn-block my-4" style="background-color: #4723D9; border-color: #4723D9;">Go</button>
                    </a>
                  </div>
                </div>
              </div>

              <!-- English Resources-->
              <div class="col-lg-4 col-md-6">
                <div class="category-item">
                  <div class="ci-thumb set-bg" data-setbg="img/courses/5.jpg"></div>
                  <div class="ci-text">
                    <h5>Group Activity</h5>
                    <p>Subject: English</p>
                    <p>Type: Activity</p>
                    <a href="learningResourcesStudent.php">
                      <button class="btn btn-info btn-block my-4" style="background-color: #4723D9; border-color: #4723D9;">Go</button>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Biology Resources-->
              <div class="col-lg-4 col-md-6">
                <div class="category-item">
                  <div class="ci-thumb set-bg" data-setbg="img/courses/6.jpg"></div>
                  <div class="ci-text">
                    <h5>Self Study</h5>
                    <p>Subject: Biology</p>
                    <p>Type: Video</p>
                    <a href="learningResourcesStudent.php">
                      <button class="btn btn-info btn-block my-4" style="background-color: #4723D9; border-color: #4723D9;">Go</button>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Computer Science Resources-->
              <div class="col-lg-4 col-md-6">
                <div class="category-item">
                  <div class="ci-thumb set-bg" data-setbg="img/courses/8.jpg"></div>
                  <div class="ci-text">
                    <h5>Coding Practice</h5>
                    <p>Subject: Computer Science</p>
                    <p>Type: Practical</p>
                    <a href="learningResourcesStudent.php">
                      <button class="btn btn-info btn-block my-4" style="background-color: #4723D9; border-color: #4723D9;">Go</button>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Art Resources-->
              <div class="col-lg-4 col-md-6">
                <div class="category-item">
                  <div class="ci-thumb set-bg" data-setbg="img/courses/1.jpg"></div>
                  <div class="ci-text">
                    <h5>Portfolio Additions</h5>
                    <p>Subject: Art</p>
                    <p>Type: Practical</p>
                    <a href="learningResourcesStudent.php">
                      <button class="btn btn-info btn-block my-4" style="background-color: #4723D9; border-color: #4723D9;">Go</button>
                    </a>

                  </div>
                </div>
              </div>
            </div>

            <!-- FOOTER -->
            <footer>
              <div class="footer-bottom">
                <div class="footer-warp">
                  <div class="copyright">

                    <!-- My copyright -->
                    Copyright &copy;
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    Brooke H

                    <!-- The template's copyright -->

                    <p>

                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    All rights reserved | This template is made with
                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                    by
                    <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                    </p>

                  </div>
                </div>
              </div>
            </footer> 
            <!-- footer section end -->

          </div>
        </section>

      <script type="text/javascript">
      document.addEventListener("DOMContentLoaded", function(event) {

        const showNavbar = (toggleId, navId, bodyId, headerId) =>{
          const toggle = document.getElementById(toggleId),
          nav = document.getElementById(navId),
          bodypd = document.getElementById(bodyId),
          headerpd = document.getElementById(headerId)

          // Validate that all variables exist
          if(toggle && nav && bodypd && headerpd){
            toggle.addEventListener('click', ()=>{
              // Shows navbar
              nav.classList.toggle('show')
              // Changes icon
              toggle.classList.toggle('bx-x')
              // Add padding to body
              bodypd.classList.toggle('body-pd')
              // Add padding to header
              headerpd.classList.toggle('body-pd')
            })
          }
        }

        showNavbar('header-toggle','nav-bar','body-pd','header')

        // The link is active
        const linkColor = document.querySelectorAll('.nav_link')

        function colorLink(){
        if(linkColor){
          linkColor.forEach(l=> l.classList.remove('active'))
          this.classList.add('active')
          }
        }
        linkColor.forEach(l=> l.addEventListener('click', colorLink))
      });
      </script>

      
      <!-- Closes the database connection so that there aren't connections continuing to run when they are not needed -->
      <?php $conn->close(); ?>


    </div>
  </main>

  <!--====== Javascripts & Jquery ======-->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/mixitup.min.js"></script>
  <script src="js/circle-progress.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>


  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>