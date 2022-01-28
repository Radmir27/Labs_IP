<?php
session_start();
if(isset($_SESSION['logged_user']) && $_SESSION['type'] == 2) :
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>

<?php
 $aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
 mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");
 $zapros="DELETE FROM users WHERE id=" . $_GET['id'];
 mysqli_query($aCon, $zapros);
 header("Location: index.php");
 exit;
?>

<?php else : ?>
Вы не являетесь администратором для этого действия
<p><a href="index.php">Вернуться к таблицам</a><br>
<?php endif; ?>