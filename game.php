<!DOCTYPE html>
<html>
<?php  include 'head.php'; ?>
<body>
	<?php 
	include"koneksi.php";
	$db = new dbObj();
	$conn = $db->getConnstring();
	session_start();

	$sql = "SELECT * FROM data_game ORDER BY score DESC LIMIT 10";
	$query = mysqli_query($conn, $sql)
	?>
	<div class="container">
		<div class="row">
			<div class="col" style="padding-top: 2%">
				<h2>
					<?php  
					echo "Hello ".$_SESSION['nama'].", selamat datang dipermainan ini<br>";
					?>
				</h2>
				Bukan anda? <a href="index.php">klik disini</a>
				<form action="game_mulai.php" style="padding-top: 2%; padding-bottom: 2%">
					<input type="submit" name="mulai" class="btn btn-info" value="Mulai Game"><br>
				</form>
				
			</div>
		</div>

		<div class="row">
			<table class="table table-dark">
				<!-- contoh -->
				<tr>
					<td>Rank</td>
					<td>Nama</td>
					<td>Email</td>
					<td>Score</td>
				</tr>
				<?php
					$x = 1; 
					while ($row = mysqli_fetch_assoc($query)) {
						echo "<tr>";
						echo "<td>".$x;
						echo "<td>".$row['nama'];
						echo "<td>".$row['email'];
						echo "<td>".$row['score'];
						$x++;
					}
				?>
			</table>
		</div>
	</div>





</body>
</html>