<?php
	session_start();
	$_SESSION["score"] = 0;
	$_SESSION["lives"] = 5;
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
<?php
	if (isset($_SESSION["email"])) {
?>
<form action = "" method = "post" style="width:50%;">
	<fieldset>
		<legend>Math Game</legend>
			<div class="form-group">
				Hallo <?php echo $_SESSION["nama"]; ?> , selamat datang kembali di permainan ini!!! <br><br>
				<a href="game.php">[Start Game]</a> <br> <br>
				Bukan Anda? <a href="reset.php">(klik di sini)</a> 
			</div>
	</fieldset>	
</form>				
<?php

	} else {

?>

<form action = "game.php" method = "post" style="width:50%;">
				<fieldset>
					<legend>Math Game</legend>
                        <div class="form-group">
                            <input class="form-control"  name="nama" placeholder="Masukkan Nama" type="text" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="email" placeholder="Masukkan Email" type="email" required>
                        </div>
                        <div class="form-group">
                            <p><input id="start" class="btn btn-info" name="start" type="submit" value="START!"></p>
                        </div>
				</fieldset>
            </form>

<?php

	}
?>

</center>
</body>
</html>