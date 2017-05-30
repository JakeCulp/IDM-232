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
<html>
<head>
	<title>Drexel Powerlifting</title>
	<link rel="stylesheet" href="style.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0, width=device-width">
	<link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
<div class="grid">
	<header>
			<div class="logo"><a href="aboutus.html"><img src="dupl_new.svg" alt="drexel powerlifting logo"></img></a></div>
				<div class="links">
					<a href="photos.html">Photos</a>
					<a href="aboutus.html">About Us</a>
					<a href="lifters.php">Lifters</a>
					<a href="contact.html">Contact</a>
				</div>
	</header>
	<main>
		<ul>
				<?php while ($row = mysqli_fetch_assoc($result)) { ?>
				<li>
				<a href="profile.php?id=<?php echo $row["id"];?>"><img src="<?php echo $row["photo"];?>"></a>
				<strong><?php echo $row["name"];?></strong>
				</li>
				<?php } ?>
		</ul>

	</main>
	<aside>
		<a href="https://www.facebook.com/groups/DUPowerlifting"><button class="btn">Facebook Page</button></a>
		<a href="https://drive.google.com/drive/folders/0B0Vyec-yHY6DYmNiMkg1dlZIelU?usp=sharing"><button class="btn">Resources</button></a>
		<div id="other_res">
		<h2>Other Channels/Resources</h2>
		<a href="https://www.youtube.com/supertraining06"><button class="btn-black">Mark Bell</button></a>
		<a href="https://www.youtube.com/user/CWSmith52"><button class="btn-black">Chad Wesley Smith</button></a>
		<a href="https://www.youtube.com/user/CampbellFitnessTV"><button class="btn-black">Brandon Campbell</button></a>
		<a href="https://www.youtube.com/user/bartkwan"><button class="btn-black">Barbell Brigade</button></a></div>
	</aside>
	<footer>Drexel Powerlifting 2017</footer>
</div> <!-- end of grid div -->
</body>
</html>