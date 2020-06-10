<?php
session_start();

if($_SESSION['admin']){
	header("Location: profile.php");
	exit;
}

$admin = 'admin';
$pass = 'a029d0df84eb5549c641e04a9ef389e5';

if($_POST['submit']){
	if($admin == $_POST['user'] AND $pass == md5($_POST['pass'])){
		$_SESSION['admin'] = $admin;
		header("Location: profile.php");
		exit;
	}else echo '<p>Ћогин или пароль неверны!</p>';
}
?>
<hr />
Ёто страница авторизации.
<br />
<form method="post">
	Username: <input type="text" name="user" /><br />
	Password: <input type="password" name="pass" /><br />
	<input type="submit" name="submit" value="Login" />
</form>