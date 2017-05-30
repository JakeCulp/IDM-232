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
					<a href="lifters.html">Lifters</a>
					<a href="contact.html">Contact</a>
				</div>
	</header>
	<main>
		<form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			Name: <input type="text" name="name" value="<?php echo $name;?>">
  		<br><br>
  		E-mail: <input type="text" name="email" value="<?php echo $email;?>"><br>
			Comments:<br>
  		<textarea name="comment" rows="6" cols="10"><?php echo $comment;?></textarea>
  		<br><br>
			<input name="submit" type="submit" class="submitbtn" value="submit" />
    	<?php if(isset( $_POST['Submit']) && $msg=='' )
    	{?>
        <div><center><h2>Thank you for submission</h2></center></div>
    	<?php } else{?>
        <p><?php echo $msg; ?><br></p></div>
    	<?php }?>
			</form>

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
