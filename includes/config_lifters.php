<?php
$dbhost = "localhost";
$dbuser = "jakeculp_du";
$dbpass = "dupowerlifting";
$dbname = "jakeculp_dupowerlifting";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  if (mysqli_connect_errno()) {
    die ("Database connection failed: " .
      mysqli_connect_error() .
      " (" . mysqli_connect_errno() . ")"
      );
     }
    //  else {
    //    echo "Connection successful!";
    //  }
     //  get url id


     $query = "SELECT * FROM `information`";
     $result = mysqli_query($connection, $query);
     if (!$result) {
       die("Database query failed.");
     }
?>
