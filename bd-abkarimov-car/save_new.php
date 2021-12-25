<?php
 $aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
 mysqli_set_charset($aCon, "utf8");
 mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");
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
?>
