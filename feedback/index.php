<?php

$host 	    = "localhost";
$user 	 	= "root";
$pass 	 	= "";
$db_name 	= "s4db";
$connection = mysqli_connect($host, $user, $pass, $db_name);

if (mysqli_connect_errno()) {
	die("Data Base connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
} else {
	# echo "Connection = success!\n" . mysqli_get_host_info($connection) . "<br />";
}

mysqli_query($connection, "SET NAMES utf8");

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style1.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	<title>Обратная связь</title>
</head>
<body>
	<!-- ОБРАТНАЯ СВЯЗЬ -->

	<div class="contact">
		<div class="container">
			<div class="contact__inner">
				<form class="obratnuj-zvonok" autocomplete="off" action='svyaz.php' method='post'>
					<div class="form-zvonok"> 
  						<div>
    						<label>Имя <span>*</span></label>
    						<input type='text' name='name' id='name'>
    					</div>

  						<div>
						    <label>Сообщение</label>
						    <input type='text' name='message' id='message'>
  						</div>

  						<input class="bot-send-mail" type='submit' value='Отправить Сообщение'>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>