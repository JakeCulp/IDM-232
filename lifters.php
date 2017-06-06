<?php include 'includes/config_lifters.php';?>
<?php include "includes/_header.php"; ?>
			<div class="logo"><a href="aboutus.php"><img src="dupl_new.svg" alt="drexel powerlifting logo"></img></a></div>
				<div class="links">
					<a href="photos.php">Photos</a>
					<a href="aboutus.php">About Us</a>
					<a href="lifters.php">Lifters</a>
					<a href="contact.php">Contact</a>
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
