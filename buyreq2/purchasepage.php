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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <title>Товар</title>
</head>
<body>

    <div class='wrapper'>

        <div class='card'>

            <img class='card-img' src='../assets/1.jpg'>

            <div class='card-title'>Span</div>

            <div class='card-sub'>
                137 BPM (beats per minute)
                <p>Key: C# Minor</p>
                <p2>Genre: HipHop</p2>

            </div>

            <div class='btn-keeper'>
                <a class='btn' href='https://t.me/imnotsore4'>Купить</a>
            </div>

        </div>

        <div class='card'>

            <img class='card-img' src='../assets/2.jpg'>

            <div class='card-title'>Nite Era</div>

            <div class='card-sub'>
                140 BPM (beats per minute)
                <p>Key: B Minor</p>
                <p2>Genre: HipHop</p2>
            </div>

            <div class='btn-keeper'>
                <a class='btn' href='https://t.me/imnotsore4'>Купить</a>
            </div>

        </div>

        <div class='card'>

            <img class='card-img' src='../assets/3.jpg'>

            <div class='card-title'>No Regrets</div>

            <div class='card-sub'>
                135 BPM (beats per minute)
                <p>Key: Bb Minor</p>
                <p2>Genre: HipHop</p2>
            </div>

            <div class='btn-keeper'>
                <a class='btn' href='https://t.me/imnotsore4'>Купить</a>
            </div>

        </div>
    </div>
        
        
        

 
</body>
</html>
