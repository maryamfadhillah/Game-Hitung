	<!DOCTYPE html>
	<html>
	<?php  include 'head.php'; ?>
	<body>
		<?php
		session_start();


		?>

		<div class="container">
			<div class="row" style="padding-top: 2%">
				<div class="col">
					<?php
					if ($_SESSION['hasil'] == $_POST['jawab']) {
						$_SESSION["score"] += 10 ;
						echo "<h2>Hello ".$_SESSION['nama'].". Selamat jawaban Anda benar<br>";
						echo "<h4>Live : ".$_SESSION['live']."| Score : ".$_SESSION['score']."<br>";
						echo "<br>";
						echo "<a href='game_mulai.php'>Pertanyaan Selanjutnya</a>";
					} else {
						$_SESSION["score"] -= 2 ;
						$_SESSION["live"] -= 1 ;
						if ($_SESSION['live'] > 0){
							echo "<h2>Hello ".$_SESSION['nama'].". Maaf jawaban Anda salah<br>";
							echo "<h4>Live : ".$_SESSION['live']."| Score : ".$_SESSION['score']."<br>";

							echo "<h5><a href='game_mulai.php'>Pertanyaan Selanjutnya</a>";
						}else{
							header("Location:game_selesai.php");
						}

					}
					?>
				</div>
			</div>

		</body>
		</html>
