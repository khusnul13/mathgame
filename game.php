<?php

	session_start();

	if (isset($_SESSION["email"])) {
		
	} else {
		$_SESSION["nama"] = $_POST["nama"];
		$_SESSION["email"] = $_POST["email"];
	}

	if ($_SESSION["lives"] == 0) {
		//	Nyawa Habis
		header('Location: gameover.php');
	}

	$bilSatu = rand(0,20);
	$bilDua = rand(0,20);
	$hasil = $bilSatu + $bilDua;
	$_SESSION["hasil"] = $hasil;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Math Game</title>
</head>
<body align="center">
	<center>
	<form action="cekjawaban.php" method="post" style="width:50%;">
		<fieldset>
		<legend>Math Game</legend>
		Hello <?php echo $_SESSION["nama"]; ?>, tetap semangat ya… you can do the best!! <br>
		Lives: <?php echo $_SESSION["lives"]; ?> | Score: <?php echo $_SESSION["score"]; ?> <br> <br>
		Berapakah <?php echo $bilSatu; ?> + <?php echo $bilDua; ?> =  <br>
		<input type="number" name="hasil">
		<input type="submit" value="Kirim">
		</fieldset>
	</form>
</center>
</body>
</html>