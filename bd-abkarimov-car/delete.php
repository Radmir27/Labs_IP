<?php
 $aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
 mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");
 $zapros="DELETE FROM car WHERE id=" . $_GET['id'];
 mysqli_query($aCon, $zapros);
 header("Location: index.php");
 exit;
?>