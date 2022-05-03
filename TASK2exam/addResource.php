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

  <style>
  .error {color: #FF0000;}
  </style>

</head>


<!-- The header of the index page which will display the title of the page -->
<header class="header" id="header">
  <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <p style="font-size: 30px; margin-top: 12px;">Add Resource</p>
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
                  <a href='learningResourcesTeacher.php' class='nav_link active'>
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


  <?php
  // define variables and set to empty values
  $resourceErr = "";
  $resource = "";


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Error message for if the field hasn't been filled in or has the wrong format
    if (empty($_POST["resource"])) {
      $nameErr = "Resource name is required";
    } else {
      $resource = test_input($_POST["resource"]);
      // Checks if resource name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$resource)) {
        $resourceErr = "Only letters and white space allowed";
      }
    }

    // Error message for if the field hasn't been filled in or has the wrong format
    if (empty($_POST["dateUpload"])) {
      $dateErr = "Date of upload is required";
    } else {
      $dateUpload = test_input($_POST["dateUpload"]);
      // Checks if resource name only contains numbers and dashes
      if (!preg_match("/^[0-9-]*$/",$resource)) {
        $dateErr = "Only numbers and dashes '-' space allowed";
      }
    }

  }


  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    // Using this function sanitises all the inputs the user has done which stops any malicious inputs being put into the database
    return $data;
  }
  ?>


    <h2>Add Resource</h2>
    <p><span class="error">* required field</span></p>

    <!-- Sanitising the input form -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

      <!-- Resource Name -->
      Resource Name: <input type="text" name="resourceName">
      <!-- If there is an error, display the error message -->
      <span class="error">* <?php echo $resourceErr;?></span>

      <br><br>

      <!-- Date of Upload -->
      Date of Upload: <input type="text" name="dateUpload">
      <!-- If there is an error, display the error message -->
      <span class="error">* <?php echo $resourceErr;?></span> (In the format YYYY-MM-DD)

      <br><br>

      <!-- Subject -->
      Subject: <input type="text" name="resourceSubject">
      <!-- If there is an error, display the error message -->
      <span class="error">* <?php echo $resourceErr;?></span>

      <br><br>

      <!-- Type of Resource -->
      Type of Resource: <input type="text" name="resourceType">
      <!-- If there is an error, display the error message -->
      <span class="error">* <?php echo $resourceErr;?></span>

      <br><br>

      <!-- Resource Link -->
      Resource Link: <input type="text" name="linkToResource">
      <!-- If there is an error, display the error message -->
      <span class="error">* <?php echo $resourceErr;?></span>

      <input type="submit" name="submit" value="Submit">  

    </form>

  <?php

  $servername = "localhost";
  $username = "114708";
  $password = "saltaire";
  $dbname = "114708";


  // if(isset($_POST['submit'])) {
  //   $resourceName = $_POST['resourceName'];
  //   $dateOfUpload = $_POST['dateUpload'];
  //   $subject = $_POST['resourceSubject'];
  //   $typeOfResource = $_POST['resourceType'];
  //   $resourceLink = $_POST['linkToResource'];


  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO resourcesexamt2  (name, dateOfUpload, subject, typeOfResource, resourceLink) VALUES ('$resourceName', '$dateUpload', '$resourceSubject', '$resourceType', '$linkToResource')";

    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $sql = "INSERT INTO resourcesexamt2 (name, dateOfUpload, subject, typeOfResource, resourceLink) VALUES ('Maths video', '2022-03-18', 'Maths', 'Video', 'Link');";

    // Using exec() because there are no results are returned
    $conn->exec($sql);

    // Display message when adding a new user was successful
    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }

  $conn = null;
  // Closes the database connection so that there aren't connections continuing to run when they are not needed

  ?>

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


  </div>
</main>

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