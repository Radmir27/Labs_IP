<?php
session_start();
if(isset($_SESSION['logged_user']) && $_SESSION['type'] == 2) :
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>

<html>
<?php

print '

<head> <title> Добавление нового пользователя </title> </head>
<body>
<H2>Регистрация пользователя на сайте:</H2>
<form action="save_new_user.php" metod="get">

Логин: <input name="username" size="10" type="text">
<br>Пароль: <input name="password" size="20" type="text">
<br>Тип: <select name="type">
	<option> 1 </option>
	<option> 2 </option>
</select>
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться к таблицам </a>

';

?>
</body>
</html>

<?php else : ?>
Вы не являетесь администратором для этого действия
<p><a href="index.php">Вернуться к таблицам</a><br>
<?php endif; ?>