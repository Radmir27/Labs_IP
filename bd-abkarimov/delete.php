<?php
 $aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
 mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");
 $zapros="DELETE FROM user WHERE id_user=" . $_GET['id'];
 mysqli_query($aCon, $zapros);
 header("Location: index.php");
 exit;
?>