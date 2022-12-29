<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "lesson26");

	$text_query = 'SELECT * FROM posts';

	$insert = "INSERT INTO posts(text, image, user_id) VALUES ('{$_GET['text']}', 'img/1.jpg','{$_SESSION['id']}')";

   	$result_insert = mysqli_query($connect, $insert);
   	$results = mysqli_query($connect, $select);

   	ob_start();
   	$new_url = 'account.php';
   	header('Location: '.$new_url);
   	ob_end_flush();
?>