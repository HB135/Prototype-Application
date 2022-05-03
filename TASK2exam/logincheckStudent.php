<?php
   // Start the session
   session_start();
   
   
   	$userid   = $_POST['userid'];
   	$password = $_POST['password'];
   	// checks if entry is empty, redirects if empty 
   	if (empty($userid) || empty($password)) {
   		header("location:loginStudent.php?login=empty");
   		exit();
   	}
   
   ?>
<!--- no time for when press log out, can use == 0 to not print to file --->
<!DOCTYPE html>
<HTML>
   <head>
      <title>GibJohn Tutoring</title>
      <link rel="stylesheet" type="text/css" href="css/loginStyle.css">
   </head>
   <body>
      <?php
         $file = 'log.txt';	// Log file
         
         $userid             = htmlspecialchars($_POST['userid']);	// User ID
         $password           = htmlspecialchars($_POST['password']);	// Password
         $ip                 = $_SERVER["REMOTE_ADDR"];	// IP address
         $port 			    = $_SERVER['REMOTE_PORT'];	// Port number
         $screenheight       = $_POST['height'];	// Screen height
         $screenwidth        = $_POST['width'];		// Screen width
         $date               = date('d-m-Y H:i:s');	// Date (Day-Month-Year)
         $dateFormat         = "$date";		// Changing Date to string to print into the log file
         $ipFormat           = " $ip";		// Changing IP format to string to print into the log file
         $portFormat         = " $port ";	// Changing Port format to string to print into the log file
         $requestedurl       = $_SERVER['HTTP_REFERER'];	// Requested URL
         $timeTaken          = $_POST['durationspeed'];		// Duration
         $timeTakenFormat    = " $timeTaken";		// Changing Duration format to string
         $screenwidthFormat  = "$screenwidth ";	// Changing Screen width format to string
         $screenheightFormat  = "$screenheight";	// Changing Screen height format to string
         
         $attempt  = False;
         $status   = False;
         $userid   = $_POST['userid'];
         $password = $_POST['password'];


         
         $attemptFormat  = "$attempt Login attempt from ";
         $current = file_get_contents($file);
		 
		   // Log file login attempt line formatting
         $newLine= "Date: " . $date . " " . "==" . " " . "IP: " . $ipFormat . " " . "==" . " " . "Screen Width: " . " " . $screenwidthFormat . " " . "==" . " " . "Screen Height: " . " " . $screenheightFormat . " " . "==" . " " . "Port: " . $portFormat . " " . "==" . " " . "From Teacher Login" . " " . "==" . $attemptFormat . $userid . "\r\n";
         $current = $current . $newLine;
         file_put_contents($file, $current);


         // Try and login
         $status = checkCreds($userid, $password);
         if ($status == "loggedInStudent") {
            processGoodLogin($status, $userid);    // process good login
         } else {
            processBadLogin($status);     // process bad login
         }


         // Test function to see if login works
         // function loginDB($userid, $password) {
         //    $servername = "localhost";
         //    $username = "114708";
         //    $password = "saltaire";
         //    $dbname = "114708";

         //    // Create connection
         //    $conn = new mysqli($servername, $username, $password, $dbname);

         //    // Check connection
         //    if ($conn->connect_error) {
         //        die("Connection failed: " . $conn->connect_error);
         //    }
         //    return $conn;
         // }


         // function loginMock($userid, $password) {
         //    $DEFAULT_USERID   = '114708@gmail.com';
         //    $DEFAULT_PASSWORD = '123';

         //    if (($userid == $DEFAULT_USERID)  && ($password == $DEFAULT_PASSWORD)) {
         //       $status = "loggedInStudent";
         //    } else {
         //       $status = "loggedOut";
         //    }
         //    return $status;
         // }



		 // Connecting to the database
         // Check if the user inputs passed are in the database
         function checkCreds($userid, $password) {
            $servername = "localhost";	// Server name where the database is stored
            $username = "114708";		// Username to log into the database
            $password2 = "saltaire";	// Password to log into the database
            $dbname = "114708";			// Database name

            // Create connection
            $conn = new mysqli($servername, $username, $password2, $dbname);
            // Check connection
            if ($conn->connect_error) {
				//If the connection fails, stop the connection and give an error message
                die("Connection failed: " . $conn->connect_error);
            }


			// Select email and password from the database table named 'adminsexamt2'
            $sql = "SELECT * FROM studentsexamt2 WHERE email='" . $userid . "'AND password='" . $password . "'";
            $result = $conn->query($sql);

			// If there is matching credentials in the database table, the status is changed to 'loggedInStudent'
            if ($result->num_rows == 1) {
               $status = "loggedInStudent";

			// If there is no matching credentials, the status is changed to 'logedOut' and user is denied access
            } else {
                echo "Error! 0 Results";
                $status = "loggedOut";
            }
            return $status;
            $conn->close();		// Closes the database connection
         }


         // Process good login
         function processGoodLogin($status, $userid) {
            $_SESSION["status"] = $status;
            $_SESSION["username"] = $userid;
            //$test = log($status);
            $_SESSION['login_error_msg'] = "";
            echo "good";
            header("Location: indexStudent.php");	// If the login is successful, the user is sent to the index page
            exit();		// Ends the function
         }


         // Process bad login
         function processBadLogin($status, $userid) {
            $_SESSION["status"] = $status;
            $_SESSION["username"] = $userid;
            //$test = log($status);
			// If the login is unsuccessful, an error message is shown and user is sent back to the login page
            $_SESSION['login_error_msg'] = "Sorry, that user name or password is incorrect. Please try again.";
            header("Location: loginStudent.php?login=failed");
            exit();     
         }

         ?>
      

      <?php echo 'Current status is : ' . $status; ?>
      <form name='form1' id='form1' method="post" style="text-align: center; margin-top: 100px;">
         <?php
            if ($_SESSION["status"] == 'loggedInStudent') {
            header("location:indexStudent.php");
            } else {
            header("location:loginStudent.php?login=failed");
            }
            ?>
      </form>
   </body>
</HTML>