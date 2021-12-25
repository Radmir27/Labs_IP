<html>
<head
<title> Редактирование данных об автомобиле </title>
</head>
<body>
<?php
 $aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
 mysqli_query($aCon, "SET NAMES 'utf8';");
 mysqli_query($aCon, "SET CHARACTER SET 'utf8';");
 mysqli_query($aCon, "SET SESSION collation_connection = 'utf8_general_ci';");
 mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");
 $rows=mysqli_query($aCon, "SELECT brand, model, year, transmission, prod_volume, price FROM car WHERE id=".$_GET['id']);
 while ($st = mysqli_fetch_array($rows)) {
 $id=$_GET['id'];
 $brand = $st['brand'];
 $model = $st['model'];
 $year = $st['year'];
 $transmission = $st['transmission'];
 $prod_volume = $st['prod_volume'];
 $price = $st['price'];
 }
print "<form action='save_edit.php' metod='get'>";
print "Марка: <input name='brand' size='50' type='text'
value='".$brand."'>";
print "<br>Модель: <input name='model' size='100' type='text'
value='".$model."'>";
print "<br>Год выпуска: <input name='year' size='11' type='text'
value='".$year."'>";
print "<br>Трансмиссия: <input name='transmission' size='100' type='text'
value='".$transmission."'>";
print "<br>Объем выпуска: <input name='prod_volume' size='50' type='text'
value='".$prod_volume."'>";
print "<br>Стоимость: <input name='price' size='50' type='text'
value='".$price."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку автомобилей </a>";
?>
</body>
</html>