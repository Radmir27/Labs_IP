<html> <body>
<?php
 $aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
 mysqli_query($aCon, "SET NAMES 'utf8';");
 mysqli_query($aCon, "SET CHARACTER SET 'utf8';");
 mysqli_query($aCon, "SET SESSION collation_connection = 'utf8_general_ci';");
 mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");
 $zapros="UPDATE car SET brand='".$_GET['brand'].
"', model='".$_GET['model']."', year='"
.$_GET['year']."', transmission='".$_GET['transmission'].
"', prod_volume='".$_GET['prod_volume'].
"', price='".$_GET['price']."' WHERE id="
.$_GET['id'];
 mysqli_query($aCon, $zapros);
 if (mysqli_affected_rows($aCon)>0) {
 echo 'Все сохранено. <a href="index.php"> Вернуться к списку автомобилей </a>'; }
 else { echo 'Ошибка сохранения. <a href="index.php">
Вернуться к списку автомобилей</a> '; }
?>
</body> </html>