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
     else {
       echo "Connection successful!";
     }
     $query = "SELECT * FROM `information` WHERE id='1'";
     $result = mysqli_query($connection, $query);
     if (!$result) {
       die("Database query failed.");
     }

    while($row = mysqli_fetch_row($result)) {
      var_dump($row);
      echo "<hr>";
    }


mysqli_free_result($result);

mysqli_close($connection);
?>
