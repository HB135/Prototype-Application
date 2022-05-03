<?php 

    $servername = "localhost";  // Server name where the database is stored
    $username = "114708";       // Username to log into the database
    $password2 = "saltaire";    // Password to log into the database
    $dbname = "114708";         // Database name

    // Create connection
    $conn = new mysqli($servername, $username, $password2, $dbname);

    // Check connection
    if ($conn->connect_error) {
        //If the connection fails, stop the connection and give an error message
        die("Connection failed: " . $conn->connect_error);
    }


    // // Select email and password from the database table named 'adminsexamt2'
    // $sql = "SELECT * FROM resourcesexamt2 WHERE email='" . $userid . "'AND password='" . $password . "'";
    // $result = $conn->query($sql);

    // // If there is matching credentials in the database table, the status is changed to 'loggedInStudent'
    // if ($result->num_rows == 1) {
    //     $status = "loggedInStudent";

    // // If there is no matching credentials, the status is changed to 'logedOut' and user is denied access
    // } else {
    //     echo "Error! 0 Results";
    //     $status = "loggedOut";
    // }
    // return $status;
    // $conn->close();     // Closes the database connection

?>