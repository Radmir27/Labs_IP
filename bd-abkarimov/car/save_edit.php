<?php
session_start();
if(isset($_SESSION['logged_user']) ) :
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>

<html> <body>
<?php
 $aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
 mysqli_query($aCon, "SET NAMES 'utf8';");
 mysqli_query($aCon, "SET CHARACTER SET 'utf8';");
 mysqli_query($aCon, "SET SESSION collation_connection = 'utf8_general_ci';");
 mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");
 
 if ($_GET['name1'] == 'car') {
 
 $zapros="UPDATE car SET brand='".$_GET['brand'].
"', model='".$_GET['model']."', year='"
.$_GET['year']."', transmission='".$_GET['transmission'].
"', prod_volume='".$_GET['prod_volume'].
"', price='".$_GET['price']."' WHERE id="
.$_GET['id'];
 mysqli_query($aCon, $zapros);
 echo 'Все сохранено. <a href="index.php"> Вернуться к списку автомобилей </a>';

 } elseif ($_GET['name1'] == 'carinstock') {

 $zapros="UPDATE carinstock SET idcar='".$_GET['idcar'].
"', iddealer='".$_GET['iddealer']."', price='"
.$_GET['price']."' WHERE id="
.$_GET['id'];
 mysqli_query($aCon, $zapros);
 echo 'Все сохранено. <a href="index.php"> Вернуться к списку автомобилей в наличии </a>';
 
 } elseif ($_GET['name1'] == 'dealer') {

 $zapros="UPDATE dealers SET name='".$_GET['name'].
"', address='".$_GET['address']."' WHERE id="
.$_GET['id'];
 mysqli_query($aCon, $zapros);
 echo 'Все сохранено. <a href="index.php"> Вернуться к списку автосалонов </a>';

 } else echo 'Ошибка сохранения. <a href="index.php">Вернуться к списку автомобилей</a> ';
?>
</body> </html>

<?php else : ?>
Вы не являетесь авторизованным пользователем для этого действия
<p><a href="login.php">Авторизоваться</a><br>
<?php endif; ?>