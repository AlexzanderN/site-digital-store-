<?php
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$message = filter_var(trim($_POST['message']),
FILTER_SANITIZE_STRING);


if (mb_strlen($name) < 3 || mb_strlen($name) > 90) {
	echo "Недопустимая длина имени";
	exit();
}

$mysq1 = new mysqli('localhost', 'root', '', 's4db');

$mysq1->query("INSERT INTO `feedback`(`name`,`message`) VALUES('$name','$message')");

header('Location: ../index.php');

$mysq1->close();

?>