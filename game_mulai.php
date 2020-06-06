<!DOCTYPE html>
<html>
<?php  include 'head.php'; ?>
<body>
	<?php

	session_start();
	$num1=rand(0,20);
	$num2=rand(0,20);

	// $conn = new mysqli($servername, , $password, $dbname);

	
	// echo "Berapakah ".$num1." + ".$num2." ?<br>";

	?>

	<div class="container">
		<div class="row" style="padding-top: 2%">
			<div class="col">
				<?php 
				echo "<h2>Hello ".$_SESSION['nama'].", semangat ya, you can do the best<br>";
				echo "<h4>Live : ".$_SESSION['live']."| Score : ".$_SESSION['score']."<br>";
				?>
				<br>
				<form action="cek.php" method="post" class="form-group">
					<label>
						<?php  echo "Berapakah ".$num1." + ".$num2." ?<br>";
						$_SESSION['hasil'] = $num1 + $num2;
						?>
					</label>
					<input type="text" name="jawab" class="form-control">
					<br>
					<input type="submit" name="submit" class="btn btn-info">
				</form>
			</div>
		</div>
	</div>
<!-- 
	<div class="container">
		<div class="row">
			<div class="col">
				
			</div>
		</div>
	</div> -->



</body>
</html>