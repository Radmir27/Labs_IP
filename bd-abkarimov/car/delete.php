<?php
session_start();
if(isset($_SESSION['logged_user']) && $_SESSION['type'] == 2) :
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>

<?php

 $aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
 mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");
 if ($_GET['name'] == 'car') {
  $zapros="DELETE FROM car WHERE id=" . $_GET['id'];
  mysqli_query($aCon, $zapros);
 } elseif ($_GET['name'] == 'carinstock') {
  $zapros="DELETE FROM carinstock WHERE id=" . $_GET['id'];
  mysqli_query($aCon, $zapros);
 } elseif ($_GET['name'] == 'dealer') {
  $zapros="DELETE FROM dealers WHERE id=" . $_GET['id'];
  mysqli_query($aCon, $zapros);
 } else echo ' неправильно введен предмет удаления';
 header("Location: index.php");
 exit;
?>

<?php else : ?>
Вы не являетесь администратором для этого действия
<p><a href="index.php">Вернуться к таблицам</a><br>
<?php endif; ?>