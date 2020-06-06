<!DOCTYPE html>
<html>
<head>
	<title>Game Hitung</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col" style="padding-top: 2%">
				<h1>Game Hitung</h1>
				<h5>Silahkan login</h5>
			</div>
		</div>		

		<div class="row">
			<div class="col">
				<form action="" method="post">
					<div class="form-group">
						<label>Nama</label> 
						<input type="text" name="nama" class="form-control"><br>
						<label>Email</label> 
						<input type="email" name="email" class="form-control"><br>
						<input type="submit" name="submit" class="btn btn-info">
					</div>

				</form>
			</div>
		</div>
	</div>


	<?php
	session_start();
	$_SESSION['live']=5;
	$_SESSION['score']=0;
	if(isset($_POST['submit'])){
		if (isset($_POST['nama'])) {
			$_SESSION['nama'] = $_POST['nama'];
			$_SESSION['email'] = $_POST['email'];
			header("Location:game.php");
		}else{
			header("Location:index.php");
		}
	}
	?>
</body>
</html>