<?php    
    session_start();
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
	<form action = "" method = "post" style="width:50%;">
	<fieldset>
	<legend>Math Game</legend>
    Hello <?php echo $_SESSION["nama"]; ?>, Selamat jawaban Anda benar.
    <p>Lives: <?php echo $_SESSION["lives"]; ?> | Score: <?php echo $_SESSION["score"]; ?></p>
    
    <a href="game.php">[Soal selanjutnya]</a>
	</fieldset>
	</form>
	</center>
</body>
</html>