<?php include 'includes/config.php';?>
<?php include "includes/_header.php"; ?>
<?php
     $query = "SELECT * FROM `information`";
     $result = mysqli_query($connection, $query);
     if (!$result) {
       die("Database query failed.");
     }
?>
	<main class="animated slideInLeft">
		<ul>
				<?php while ($row = mysqli_fetch_assoc($result)) { ?>
				<li>
				<a href="profile.php?id=<?php echo $row["id"];?>"><img src="<?php echo $row["photo"];?>"></a>
				<strong><?php echo $row["name"];?></strong>
				</li>
				<?php } ?>
		</ul>

	</main>
	<?php include "includes/aside.php"; ?>
	<footer>Drexel Powerlifting 2017</footer>
</div> <!-- end of grid div -->
</body>
</html>
