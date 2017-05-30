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
     $id = $_GET['id'];

     $query = "SELECT * FROM `information` WHERE id=$id";
     $result = mysqli_query($connection, $query);
     if (!$result) {
       die("Database query failed.");
       echo $id;
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

		<div class="profile_container">
		<div id="profile_pic">
       <?php while ($row = mysqli_fetch_assoc($result)) { ?>
			<img src="<?php echo $row['photo'];?>">
    </div>
		<div id="bio">
			<ul>
				<li><?php echo $row['name'];?></li>
				<li><?php echo $row['major'];?></li>
				<li><?php echo $row['year'];?></li>
				<li>Weight Class(kg): <?php echo $row['weight_class'];?></li>
				<li>Best Total: <?php echo $row['best_total'];?></li>
				<li>Favorite Lift: <?php echo $row['fav_lift'];?></li>
				<li>Bio:</li>
				<li><?php echo $row['bio'];?></li>
			</ul>
		</div>
    <?php } ?>
	</div>
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
<?php
  mysqli_free_result($result);
?>
<?php
  mysqli_close($connection);
?>
</body>
</html>
