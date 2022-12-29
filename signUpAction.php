<?
	$connect = mysqli_connect("127.0.0.1", "root", "", "lesson26");

	$insert = "INSERT INTO users(name, surname, phone, email, password, city, education) VALUES('{$_POST['name']}', '{$_POST['surname']}', '{$_POST['phone']}', '{$_POST['email']}', '{$_POST['password']}', '{$_POST['city']})', '{$_POST['education']}')";

   	$query = mysqli_query($connect, $insert);

   	session_start();

	$_SESSION['id'] = mysqli_insert_id($connect);

	header("Location: account.php");
?>