<?php include "includes/_header.php"; ?>
	<main class="animated slideInLeft">
		<form method="post" action="thanks.php">
			First name:<br>
			<input type="text" name="firstname" value=""><br>
			Email:<br>
			<input type="text" name="email" value=""><br>
			Comments:<br>
			<textarea name="message" rows="10" cols="60">
			</textarea><br>
			<input type="submit" value="Submit">

		</form>
	</main>
	<?php include "includes/aside.php"; ?>

	<footer>Drexel Powerlifting 2017</footer>

</div> <!-- end of grid div -->

</body>
</html>
