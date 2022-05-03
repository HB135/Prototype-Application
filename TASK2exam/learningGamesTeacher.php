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
  <link rel="stylesheet" href="css/rockStyle.css">
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
    <p style="font-size: 30px; margin-top: 12px;">Learning Games</p>
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
                  <a href='learningGamesTeacher.php' class='nav_link active'>
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

<!-- Original source code: https://github.com/hkennandya/paperocks -->

<body>
    <h5>Rock Paper Scissors!</h5>
    <form method="post">
        <!-- Scissors -->
        <button type="submit" value="Scissors" name="user">&#9996;&#127995;</button>
        <!-- Rock -->
        <button type="submit" value="Rock" name="user">&#9994;&#127995;</button>
        <!-- Paper -->
        <button type="submit" value="Paper" name="user">&#9995;&#127995;</button>
    </form>

    <div class="sizing">
        
        <?php 

        //Declare bot
        $bot = array("Scissors", "Rock", "Paper");
        $rand_bot = array_rand($bot);
        $bot_input  = $bot[$rand_bot];

        //Process Output
        if(isset($_POST["user"])){

            //Process user 
            $user_input = $_POST["user"];
            if($user_input=="Scissors"){
                $user_output = "&#9996;&#127995;";
            }else if($user_input=="Rock"){
                $user_output = "&#9994;&#127995;";
            }else if($user_input=="Paper"){
                $user_output = "&#9995;&#127995;";
            }

            //Process bot 
            if($bot_input=="Scissors"){
                $bot_output = "&#9996;&#127995;";
            }else if($bot_input=="Rock"){
                $bot_output = "&#9994;&#127995;";
            }else if($bot_input=="Paper"){
                $bot_output = "&#9995;&#127995;";
            }
            echo "<div class='all_output'>";
            echo "<div class='user_output'>" . $user_output . "</div>";
            echo "<span class='vs'> <b>&#9747;</b> </span>";
            echo "<div class='bot_output'>" . $bot_output . "</div></div>";

            $output = $user_input . " " . $bot_input;
            echo "<div class='result'>";
            if($output == "Scissors Scissors" || $output == "Rock Rock" || $output == "Paper Paper"){
                echo "Draw";
            } else if($output == "Scissors Rock" || $output == "Rock Paper" || $output == "Paper Scissors"){
                echo "You Lose";
            } else if($output == "Scissors Paper" || $output == "Rock Scissors" || $output == "Paper Rock"){
                echo "You Win";
            }
            echo "</div>";


        } else {
            ?> 
            <form method="post">
            <button class="howto" value="how" name="howto">How to play</button>
            </form>
            <?php
            if(isset($_POST["howto"])){
                echo "<div class='vs'>Really? Just choose</br>&#9996;&#127995; or &#9994;&#127995; or &#9995;&#127995;</div>";
            }
        }
        ?>

        <!-- FOOTER -->
        <div class="footer-copyright text-center py-3" style="font-size: 20px !important;">
           <?php include 'footer.php';?>

           <p>Game originally made by:</p>

           <p class='credit'>

           <a href='mailto:keqingcu@gmail.com'>keqingcu@gmail.com</a>

           </br>

           <a href='https://twitter.com/keqingcu'>@keqingcu (twitter)</a>

           </p>

           <!-- https://github.com/hkennandya/paperocks  -->

        </div>

    </div>
</body>
</html>