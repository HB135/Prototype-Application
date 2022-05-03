<?php
   // Start the session
   session_start();
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>GibJohn Tutoring</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  
  <!-- JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

  <!-- mdb -->
  <link rel="stylesheet" href="mdb.min.css" />
  
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
</head>

<!-- A javascript function to get the screen details such as width and height -->
<body onload="getScreenDetails()">


<!-- Style written in line to overwrite part of the style css so that it doesn't affect this page -->
<style type="text/css">
    .box-shadow {
    -webkit-box-shadow: 0px 10px 20px 0px rgba(50, 50, 50, 0.52);
    -moz-box-shadow:    0px 10px 20px 0px rgba(50, 50, 50, 0.52);
    box-shadow:         0px 10px 20px 0px rgba(50, 50, 50, 0.52);
    }

    .today {
        text-align: right;
        color: grey;
        font-size: 20px;
    }

    .container {
        margin-top: 100px;
        border-radius:.25rem!important;
    }

    body {
        background-color: #4723D9;
    }

    #footer {
        color: white;
    }

</style>
    

<div class="container align-self-center rounded ">
  <div class="row">
   <div class="col-sm-4">
    </div>
    <div class="col-sm-4 box-shadow " style="text-align: center; background-color: white;">

        <!-- Login form -->
        <form class="text-center border border-light p-5" method="post" action="logincheckStudent.php">
            <!-- Send Screen Details -->
            <input type="hidden" id="width" name="width" value="0">
            <input type="hidden" id="height" name="height" value="0">

            <!-- The date and title -->
            <span class="h4 mb-4 today" title="Today"></span>
            <p class="h4 mb-4">GibJohn Tutoring</p>
			<p class="h4 mb-4">Student Login</p>

            <div class="form-label-group">

                <!-- Username / Email address -->
                <input type="email" name="userid" class="form-control mb-4" placeholder="Email" id="userid">

                <!-- Password -->
                <input type="password" name="password" class="form-control mb-4" placeholder="Password" id="password">
            
            </div>

            <!-- Shows the password input -->
            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" id="passcheck" onclick="showPassword()">Show Password</input>
            </div>

            <!-- Button to submit the user inputs and login -->
            <button class="btn btn-info btn-block my-4" style="background-color: #4723D9; border-color: #4723D9;" type="submit">Login</button>

        </form>
    </div>
  </div>
</div>


<!-- Error alerts  -->
<!-- This is for if an input is incorrect or an input field is empty -->
<?php 
    $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    // Incorrect input(s)
    if (strpos($fullurl, "login=failed") == true) {
        echo "<div id='errortext' class='alert alert-danger' role='alert'>";
        echo " Incorrect username/password!";   // Prints incorrect username/password to the user
        echo  "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";   // A button to close the error message
        echo "<span aria-hidden='true'>&times;</span>";
        echo "</div>";

    // An empty field
    } else if (strpos($fullurl, "login=empty") == true) {
        echo "<div id='errortext' class='alert alert-danger' role='alert'>";
        echo " Please fill in all fields";      // Prints please fill in all the fields to the user if they are missing something
        echo  "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";   // A button to close the error message
        echo "<span aria-hidden='true'>&times;</span>";
        echo "</div>";
    } 
?>


<!-- FOOTER -->
<div class="footer-copyright text-center py-3">
    <?php include 'footer.php';?>
</div>


<!-- Javascript function to get the date for above the login form -->
<script type="text/javascript">
    $(document).ready(function() {
    var today = new Date().toDateString();
    $('.today').html(today);
})
</script>


<script>
    // The function used to show the users input password
    function showPassword() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }


    // The function used above to get the screen details for the log txt file
    function getScreenDetails() {
        document.forms['form1']['width'].value = screen.width;
        document.forms['form1']['height'].value = screen.height;
    }

</script>
</body>
</html>