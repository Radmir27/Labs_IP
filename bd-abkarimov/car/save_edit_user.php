<?php
session_start();
if(isset($_SESSION['logged_user']) && (($_SESSION['type']) == 2 || ($_SESSION['id']) == $_GET['id'])) :
?>

<html> <body>
<?php
 $aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
 mysqli_query($aCon, "SET NAMES 'utf8';");
 mysqli_query($aCon, "SET CHARACTER SET 'utf8';");
 mysqli_query($aCon, "SET SESSION collation_connection = 'utf8_general_ci';");
 mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");

$error = '';

$result=mysqli_query($aCon, "SELECT username, id FROM users");
while ($st = mysqli_fetch_assoc($result)) {
 if (($_GET['username'] == $st['username']) && ($_GET['id'] != $st['id'])){
	$error = 'Пользователь с таким логином существует';
 }
}

if(!empty($error)) {
	echo '<div style="color: red; ">' . $error . '</div>';
} else {
 if ($_SESSION['type'] == 2) {
 $zapros="UPDATE users SET username='".$_GET['username'].
"', password='". md5($_GET['password']) ."', type='"
.$_GET['type']."' WHERE id="
.$_GET['id'];
$_SESSION['type'] = $_GET['type'];
} else {
$zapros="UPDATE users SET username='".$_GET['username'].
"', password='". md5($_GET['password']) ."' WHERE id="
.$_GET['id'];
}
 mysqli_query($aCon, $zapros);
 echo 'Все сохранено. ';
}

echo '<a href="index.php"> Вернуться к таблицам </a>';
?>
</body> </html>

<?php else : ?>
У вас нет прав для редактирования данных о данного пользователя
<p><a href="index.php">Вернуться к таблицам</a><br>
<?php endif; ?>