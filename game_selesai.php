<!DOCTYPE html>
<html>
<?php  include 'head.php'; ?>
<body>
	<?php  
	include"koneksi.php";
	$db = new dbObj(); 
	$conn = $db->getConnstring();
	session_start();

	$nama = $_SESSION['nama'];
	$email = $_SESSION['email'];
	$score = $_SESSION['score'];
	$sql = "INSERT INTO data_game (id, nama, email, score) VALUES ('', '$nama', '$email', '$score')";

	if ($conn->query($sql) == TRUE) {
		echo " ";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}


	?>

	<div class="container">
		<div class="row" style="padding-top: 2%">
			<div class="col">
				<?php
				echo "<h2>Hello ".$_SESSION['nama'].". Sayang permainan sudah selesai<br>";
				echo "<h4>Live : ".$_SESSION['live']."| Score : ".$_SESSION['score']."<br>";
				echo "<h5><a href='index.php'>Main lagi?</a>";
				session_destroy();
				?>
			</div>
		</div>
	</body>
	</html>
