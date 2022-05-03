<?php
   // Start the session
   session_start();
   ?>

<?php
  if ($_SESSION["status"] != 'loggedInAdmin'){
    header("location:login.php");
    exit();
  }

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
    <p style="font-size: 30px; margin-top: 12px;">Wider Learning</p>
    <p style="margin-top: 12px;"> <a href="profileTeacher.php" style="color: black;"class="link-secondary"><strong>Hello</strong> <?php echo $_SESSION["username"]; ?>!</a></p>
</header>


<body class="index g-sidenav-show  bg-gray-200">
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

    <!-- Navigation bar -->
    <div class='l-navbar' id='nav-bar'>
        <nav class='nav'>
            <div>
              <a href='index.php' class='nav_logo'> <i class='bx bx-layer nav_logo-icon'></i> <span class='nav_logo-name'>GibJohn Tutoring</span> </a>
                <div class='nav_list'>

                  <!-- Dashboard -->
                  <a href='index.php' class='nav_link'>
                    <i class='bx bx-grid-alt nav_icon'></i> <span class='nav_name'>Dashboard</span>
                  </a>

                  <!-- Learning Resources -->
                  <a href='learningResourcesTeacher.php' class='nav_link'>
                    <i class='bx bx-book-reader nav_icon'></i> <span class='nav_name'>Learning Resources</span>
                  </a>

                  <!-- Wider Learning -->
                  <a href='widerLearningTeacher.php' class='nav_link active'>
                    <i class='bx bx-play-circle nav_icon'></i> <span class='nav_name'>Wider Learning</span>
                  </a>

                  <!-- Assessments -->
                  <a href='#' class='nav_link'>
                    <i class='bx bxs-book nav_icon'></i> <span class='nav_name'>Assessments</span>
                  </a>

                  <!-- Learning Games -->
                  <a href='learningGamesTeacher.php' class='nav_link'>
                    <i class='bx bx-joystick nav_icon'></i> <span class='nav_name'>Learning Games</span>
                  </a>

                  <!-- Student List -->
                  <a href='studentList.php' class='nav_link'>
                    <i class='bx bxs-user-detail nav_icon'></i> <span class='nav_name'>Student List</span>
                  </a>

                  <!-- Teacher List -->
                  <a href='teacherList.php' class='nav_link'>
                    <i class='bx bxs-graduation nav_icon'></i> <span class='nav_name'>Teacher List</span>
                  </a>

                  <!-- User Profile -->
                  <a href='profileTeacher.php' class='nav_link'>
                    <i class='bx  bx-user nav_icon'></i> <span class='nav_name'>Profile</span>
                  </a>

                  <!-- Log txt file of everyone that has attempted/logged into the system -->
                  <a href='log.txt' class='nav_link'>
                    <i class='bx bx-message-square-detail nav_icon'></i> <span class='nav_name'>Log</span>
                  </a>

                </div>
                <!-- Logout button which will destroy the session -->
            </div> 
            <a href='logout.php' class='nav_link'>
              <i class='bx bx-log-out nav_icon'></i> <span class='nav_name'>Sign Out</span>
            </a>
        </nav>
    </div>

    <div class="container-fluid py-4">
      <div class="row">
        <div style="padding-top: 60px;">
        </div>

        <!-- categories section -->
        <section class="categories-section spad">
          <div class="container">
            <div class="row">

              <!-- Category-->
              <div class="col-lg-4 col-md-6">
                <div class="category-item">
                  <div class="ci-text">
                    <h5>Atoms and Ions</h5>
                    <p>Subject: Chemistry</p>
                    <p>Type: Exam Prep</p>
                    <a href="https://www.youtube.com/watch?v=fN8kH9Vvqo0">
                      <button class="btn btn-info btn-block my-4" style="background-color: #4723D9; border-color: #4723D9;">Go</button>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Category -->
              <div class="col-lg-4 col-md-6">
                <div class="category-item">
                  <div class="ci-text">
                    <h5>Ionic Bonding</h5>
                    <p>Subject: Chemistry</p>
                    <p>Type: Exam Prep</p>
                    <a href="https://www.youtube.com/watch?v=6DtrrWA5nkE">
                      <button class="btn btn-info btn-block my-4" style="background-color: #4723D9; border-color: #4723D9;">Go</button>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Category-->
              <div class="col-lg-4 col-md-6">
                <div class="category-item">
                  <div class="ci-text">
                    <h5>About Molecules</h5>
                    <p>Subject: Chemistry</p>
                    <p>Type: Exam Prep</p>
                    <a href="https://www.youtube.com/watch?v=jBDr0mHyc5M&list=PLidqqIGKox7WeOKVGHxcd69kKqtwrKl8W&index=3">
                      <button class="btn btn-info btn-block my-4" style="background-color: #4723D9; border-color: #4723D9;">Go</button>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Category-->
              <div class="col-lg-4 col-md-6">
                <div class="category-item">
                  <div class="ci-text">
                    <h5>Fractional Powers</h5>
                    <p>Subject: Maths</p>
                    <p>Type: Exam Prep</p>
                    <a href="https://www.youtube.com/watch?v=DvNYkbafpIY&list=PLidqqIGKox7XPh1QacLRiKto_UlnRIEVh&index=35">
                      <button class="btn btn-info btn-block my-4" style="background-color: #4723D9; border-color: #4723D9;">Go</button>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Category-->
              <div class="col-lg-4 col-md-6">
                <div class="category-item">
                  <div class="ci-text">
                    <h5>Double Brackets</h5>
                    <p>Subject: Maths</p>
                    <p>Type: Exam Prep</p>
                    <a href="https://www.youtube.com/watch?v=Dvo1Q-yBBhk&list=PLidqqIGKox7XPh1QacLRiKto_UlnRIEVh&index=37">
                      <button class="btn btn-info btn-block my-4" style="background-color: #4723D9; border-color: #4723D9;">Go</button>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Category-->
              <div class="col-lg-4 col-md-6">
                <div class="category-item">
                  <div class="ci-text">
                    <h5>Algebraic Equations</h5>
                    <p>Subject: Maths</p>
                    <p>Type: Exam Prep</p>
                    <a href="https://www.youtube.com/watch?v=9FuR91H8EVU&list=PLidqqIGKox7XPh1QacLRiKto_UlnRIEVh&index=43">
                      <button class="btn btn-info btn-block my-4" style="background-color: #4723D9; border-color: #4723D9;">Go</button>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Category-->
              <div class="col-lg-4 col-md-6">
                <div class="category-item">
                  <div class="ci-text">
                    <h5>Binary Fission</h5>
                    <p>Subject: Biology</p>
                    <p>Type: Exam Prep</p>
                    <a href="https://www.youtube.com/watch?v=OAcz-tFGY0Y&list=PLidqqIGKox7X5UFT-expKIuR-i-BN3Q1g&index=9">
                      <button class="btn btn-info btn-block my-4" style="background-color: #4723D9; border-color: #4723D9;">Go</button>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Category -->
              <div class="col-lg-4 col-md-6">
                <div class="category-item">
                  <div class="ci-text">
                    <h5>Enzymes</h5>
                    <p>Subject: Biology</p>
                    <p>Type: Exam Prep</p>
                    <a href="https://www.youtube.com/watch?v=VNX9UQ08fZ4&list=PLidqqIGKox7X5UFT-expKIuR-i-BN3Q1g&index=15">
                      <button class="btn btn-info btn-block my-4" style="background-color: #4723D9; border-color: #4723D9;">Go</button>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Category-->
              <div class="col-lg-4 col-md-6">
                <div class="category-item">
                  <div class="ci-text">
                    <h5>The Brain</h5>
                    <p>Subject: Biology</p>
                    <p>Type: Exam Prep</p>
                    <a href="https://www.youtube.com/watch?v=jvIr7b0roYI&list=PLidqqIGKox7X5UFT-expKIuR-i-BN3Q1g&index=75">
                      <button class="btn btn-info btn-block my-4" style="background-color: #4723D9; border-color: #4723D9;">Go</button>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Category-->
              <div class="col-lg-4 col-md-6">
                <div class="category-item">
                  <div class="ci-text">
                    <h5>Infrared</h5>
                    <p>Subject: Physics</p>
                    <p>Type: Exam Prep</p>
                    <a href="https://www.youtube.com/watch?v=ow26-5UirSc&list=PLidqqIGKox7UVC-8WC9djoeBzwxPeXph7&index=67">
                      <button class="btn btn-info btn-block my-4" style="background-color: #4723D9; border-color: #4723D9;">Go</button>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Category-->
              <div class="col-lg-4 col-md-6">
                <div class="category-item">
                  <div class="ci-text">
                    <h5>Density</h5>
                    <p>Subject: Physics</p>
                    <p>Type: Exam Prep</p>
                    <a href="https://www.youtube.com/watch?v=pgGzVdau1Bw&list=PLidqqIGKox7UVC-8WC9djoeBzwxPeXph7&index=27">
                      <button class="btn btn-info btn-block my-4" style="background-color: #4723D9; border-color: #4723D9;">Go</button>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Category-->
              <div class="col-lg-4 col-md-6">
                <div class="category-item">
                  <div class="ci-text">
                    <h5>Nuclear Fusion</h5>
                    <p>Subject: Physics</p>
                    <p>Type: Exam Prep</p>
                    <a href="https://www.youtube.com/watch?v=g_BUbEIyaz8&list=PLidqqIGKox7UVC-8WC9djoeBzwxPeXph7&index=40">
                      <button class="btn btn-info btn-block my-4" style="background-color: #4723D9; border-color: #4723D9;">Go</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


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