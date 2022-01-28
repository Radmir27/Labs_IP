<?php

session_start();

 $aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
 mysqli_query($aCon, "SET NAMES 'utf8';");
 mysqli_query($aCon, "SET CHARACTER SET 'utf8';");
 mysqli_query($aCon, "SET SESSION collation_connection = 'utf8_general_ci';");
 mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");

$data = $_GET;

if(isset($data['do_login'])) {

$error = '';

$result=mysqli_query($aCon, "SELECT * FROM users");
$a = false;
while ($row=mysqli_fetch_array($result)){
	if ($row['username'] == $data['login']) {
		$a = true;
		if ($row['password'] == md5($data['password'])) {
			$_SESSION['logged_user'] = $row['username'];
			$_SESSION['type'] = $row['type'];
			$_SESSION['id'] = $row['id'];
			$_SESSION['login'] = $row['username'];
			
			header('Location: index.php');
		} else {
			$error = "неправильно введен логин или пароль";
		}
		break;
	}
}
if (!$a) {
	$error = "неправильно введен логин или пароль";
}

if(!empty($error)) {
	echo '<div style="color: red; ">' . $error . '</div>';
}

}
?>

<div class="container mt-4">
	<div class="row">
		<div class="col">
	<h2>Форма авторизации</h2>
	<form action="login.php" method="get">
		Введите логин: <input type="text" class="form-control" name="login" required><br>
		Введите пароль: <input type="password" class="form-control" name="password" required><br>
		<button class="btn btn-success" name="do_login" type="submit">Авторизоваться</button>
	</form>
	<br>
		</div>
	</div>
</div>