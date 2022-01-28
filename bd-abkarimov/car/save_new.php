<?php
session_start();
if(isset($_SESSION['logged_user']) ) :
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>

<?php
 $aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
 mysqli_set_charset($aCon, "utf8");
 mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");

 if ($_GET['name'] == 'car') {

 $sql_add = "INSERT INTO car SET brand='" . $_GET['brand']
."', model='".$_GET['model']."', year='"
.$_GET['year']."', transmission='".$_GET['transmission'].
"', prod_volume='".$_GET['prod_volume']. "', price='".$_GET['price'].
"'";
 mysqli_query($aCon, $sql_add);
 if (mysqli_affected_rows($aCon)>0)
 { print "<p>Спасибо, автомобиль зарегистрирован в базе данных.";
 print "<p><a href=\"index.php\"> Вернуться к списку
автомобилей </a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку автомобилей </a>"; }

 } elseif ($_GET['name'] == 'carinstock') {

 $sql_add = "INSERT INTO carinstock SET idcar='" . $_GET['idcar']
."', iddealer='".$_GET['iddealer']."', price='"
.$_GET['price']."'";
 mysqli_query($aCon, $sql_add);
 if (mysqli_affected_rows($aCon)>0)
 { print "<p>Спасибо, автомобиль в наличии зарегистрирован в базе данных.";
 print "<p><a href=\"index.php\"> Вернуться к списку
автомобилей </a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку автомобилей в наличии </a>"; }

 } elseif ($_GET['name'] == 'dealer') {

 $sql_add = "INSERT INTO dealers SET name='" . $_GET['name']
."', address='".$_GET['address']."'";
 mysqli_query($aCon, $sql_add);
 if (mysqli_affected_rows($aCon)>0)
 { print "<p>Автосалон зарегистрирован в базе данных.";
 print "<p><a href=\"index.php\"> Вернуться к списку
автосалонов </a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку автосалонов </a>"; }

 } else echo ' неправильно введен предмет сохранения';
?>

<?php else : ?>
Вы не являетесь авторизованным пользователем для вывода таблиц
<p><a href="login.php">Авторизоваться</a><br>
<?php endif; ?>