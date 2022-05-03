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

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" >

</head>

<!-- The header of the index page which will display the title of the page -->
<header class="header" id="header">
  <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <p style="font-size: 30px; margin-top: 12px;">Teacher List</p>
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
                  <a href='widerLearningTeacher.php' class='nav_link'>
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
                  <a href='teacherList.php' class='nav_link active'>
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

    <!-- Connecting to the database -->

    <?php
        // Server login details
        $host = 'localhost';
        $dbname = '114708';
        $username = '114708';
        $password = 'saltaire';
          
        $dsn = "mysql:host=$host;dbname=$dbname"; 

        // SQL Get all users
        $sql = "SELECT * FROM adminsexamt2";  // Select everything from the database table named 'adminsexamt2'
         
        // try to connect and send SQL query with details
        // if unable return error 
        try{
         $pdo = new PDO($dsn, $username, $password);
         $stmt = $pdo->query($sql);
         //If the connection fails, stop the connection and give an error message

         if($stmt === false){
          die("Error");
         }
         
        }catch (PDOException $e){
          echo $e->getMessage();
        }
      ?>

    <div class="container-fluid py-4">
      <div class="row">
        <div style="padding-top: 60px;">
        </div>

        <div class="col-sm-1">
        </div>
          <div class="col-sm-10">
          <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th class="th-sm">ID</th>
                <th class="th-sm">Name</th>
                <th class="th-sm">Email</th>
              </tr>
            </thead>
            <tbody>
            <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
            <tr>
               <td><?php echo htmlspecialchars($row['id']); ?></td>
               <td><?php echo htmlspecialchars($row['name']); ?></td>
               <td><?php echo htmlspecialchars($row['email']); ?></td>
            </tr>
            <?php endwhile; ?>
           </tbody>
          </table>
            <div class="text-center"  style="margin-top: 25px;">
              <a href="addTeacher.php"><button type="button"class="btn btn-secondary">Add Teacher</button></a>
            </div>
          </div>
          <div class="col-sm-1">
          </div>

        <!-- FOOTER -->
        <div class="footer-copyright text-center py-3">
            <?php include 'footer.php';?>
        </div>


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