<?php
session_start();
if(isset($_SESSION['logged_user']) && (($_SESSION['type']) == 2 || ($_SESSION['id']) == $_GET['id'])) :
?>

<html>
<body>
<?php

 $aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
 mysqli_query($aCon, "SET NAMES 'utf8';");
 mysqli_query($aCon, "SET CHARACTER SET 'utf8';");
 mysqli_query($aCon, "SET SESSION collation_connection = 'utf8_general_ci';");
 mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");

 echo '<h2>Редактирование данных об пользователе:</h2>';

 $rows=mysqli_query($aCon, "SELECT * FROM users WHERE id=".$_GET['id']);
 while ($st = mysqli_fetch_array($rows)) {
 $id=$_GET['id'];
 $username = $st['username'];
 $password = $st['password'];
 $type = $st['type'];
 }
print "<form action='save_edit_user.php' metod='get'>";

print "Логин: <input name='username' size='10' type='text'
value='".$username."'>";

print "<br>Пароль: <input type='password' name='password' placeholder='".$password."' required><br>";

if ($_SESSION['type'] == 2) {
echo "<br>Тип: <select name='type'>";
if ( $type == 1) {
   echo "<option selected> 1 </option>";
   echo "<option> 2 </option>";
  } else {
   echo "<option> 1 </option>";
   echo "<option selected> 2 </option>";
  }
echo "</select>";
}

echo "<br>";

print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку </a>";

?>
</body>
</html>

<?php else : ?>
У вас нет прав для редактирования данных о данного пользователя
<p><a href="index.php">Вернуться к таблицам</a><br>
<?php endif; ?>