<html>
<?php

if ($_GET['name'] == 'car') {

print '

<head> <title> Добавление нового автомобиля </title> </head>
<body>
<H2>Регистрация автомобиля на сайте:</H2>
<form action="save_new.php" metod="get">
 
<input type="hidden" name="name" value="car">

 Марка: <input name="brand" size="10" type="text">
<br>Модель: <input name="model" size="20" type="text">
<br>Год выпуска: <input name="year" size="30" type="text">
<br>Трансмиссия: <input name="transmission" size="20" type="text">
<br>Объем выпуска: <input name="prod_volume" size="6" type="text">
<br>Стоимость (руб.): <input name="price" size="6" type="text">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться к списку автомобилей </a>

';

} elseif ($_GET['name'] == 'carinstock') {

print '

<head> <title> Добавление нового автомобиля в наличии </title> </head>
<body>
<H2>Регистрация автомобиля в наличии на сайте:</H2>
<form action="save_new.php" metod="get">

<input type="hidden" name="name" value="carinstock">

';

 $aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
 mysqli_query($aCon, "SET NAMES 'utf8';");
 mysqli_query($aCon, "SET CHARACTER SET 'utf8';");
 mysqli_query($aCon, "SET SESSION collation_connection = 'utf8_general_ci';");
 mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");
$cars=mysqli_query($aCon, "SELECT id, brand, model FROM car");
$dealers=mysqli_query($aCon, "SELECT id, name FROM dealers");
echo "Автомобиль: <select name='idcar'>";
while ($row = mysqli_fetch_array($cars)) {
   echo "<option value = " . $row['id'] . ">" . $row['brand'] . " " . $row['model'] . "</option>";
}
echo "</select><br>Автосалон:<select name='iddealer'>";
while ($row = mysqli_fetch_array($dealers)) {
  echo "<option value = " . $row['id'] . ">" . $row['name'] . "</option>";
}

print '

</select><br>Стоимость (руб.): <input name="price" size="6" type="text">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться к списку автомобилей в наличии </a>

';

} elseif ($_GET['name'] == 'dealer') {

print '

<head> <title> Добавление нового автосалона </title> </head>
<body>
<H2>Регистрация автосалона на сайте:</H2>
<form action="save_new.php" metod="get">

<input type="hidden" name="name" value="dealer">

 Название: <input name="brand" size="10" type="text">
<br>Адрес: <input name="model" size="20" type="text">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться к списку автосалонов </a>

';

} else {

echo ' неправильно введен предмет добавления';
header("Location: index.php");

}
?>
</body>
</html>