<?php include 'includes/config_profiles.php';?>
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

		<div class="profile_container">
		<div id="profile_pic">
       <?php while ($row = mysqli_fetch_assoc($result)) { ?>
			<img src="<?php echo $row['photo'];?>">
    </div>
		<div id="bio">
			<ul>
				<li><?php echo $row['name'];?></li>
				<li><i><?php echo $row['major'];?></i></li>
				<li><strong><?php echo $row['year'];?></strong></li>
				<li><strong>Weight Class(kg):</strong><?php echo $row['weight_class'];?></li>
				<li><strong>Best Total:</strong><?php echo $row['best_total'];?></li>
				<li><strong>Favorite Lift:</strong><?php echo $row['fav_lift'];?></li>
				<li><strong>Bio:</strong></li>
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
