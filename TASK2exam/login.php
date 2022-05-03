<?php
   // Start the session
   session_start();
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>GibJohn Tutoring</title>
  <link rel="shortcut icon" type="image/png" href="salefavi.png"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

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


<!-- Style written in line to overwrite part of the style.css so that it doesn't affect this page -->
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
        <form class="text-center border border-light p-5" method="get">
            <!-- The date and title -->
            <span class="h4 mb-4 today" title="Today"></span>
            <p class="h4 mb-4">GibJohn Tutoring</p>

            <div class="form-label-group">

                <a class="btn btn-info btn-block my-4" style="background-color: #4723D9; border-color: #4723D9;" href="loginTeacher.php">Tutor Login</a>
				
				<a class="btn btn-info btn-block my-4" style="background-color: #4723D9; border-color: #4723D9;" href="loginStudent.php">Student Login</a>
            
            </div>

        </form>
    </div>
  </div>
</div>

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
</body>
</html>