<?php
session_start();
if(isset($_SESSION['logged_user']) && $_SESSION['type'] == 2) :
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>

<?php
 $aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
 mysqli_set_charset($aCon, "utf8");
 mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");

 $sql_add = "INSERT INTO users SET username='".$_GET['username'].
"', password='". md5($_GET['password']) ."', type='"
.$_GET['type']."'";
 mysqli_query($aCon, $sql_add);
 if (mysqli_affected_rows($aCon)>0)
 { print "<p>Спасибо, пользователь зарегистрирован в базе данных.";
 print "<p><a href=\"index.php\"> Вернуться к таблицам </a>";
 }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к таблицам </a>"; }
?>

<?php else : ?>
Вы не являетесь администратором для этого действия
<p><a href="index.php">Вернуться к таблицам</a><br>
<?php endif; ?>