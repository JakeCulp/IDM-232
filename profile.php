<?php include 'includes/config.php';?>
<?php include "includes/_header.php"; ?>
<?php
     $id = $_GET['id'];

     $query = "SELECT * FROM `information` WHERE id=$id";
     $result = mysqli_query($connection, $query);
     if (!$result) {
       die("Database query failed.");
       echo $id;
     }
?>
	<main class="animated slideInLeft">

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
	<?php include "includes/aside.php"; ?>

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
