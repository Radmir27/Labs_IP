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
 $result=mysqli_query($aCon, "SELECT id FROM car");
 echo "ID автомобиля: <select name='idcar'>";
 while ($row=mysqli_fetch_array($result)){
 echo "<option>" . $row['id'] . "</option>";
 }
 echo "</select><br>ID автосалона: <select name='iddealer'>";
 $result=mysqli_query($aCon, "SELECT id FROM dealers");
 while ($row=mysqli_fetch_array($result)){
 echo "<option>" . $row['id'] . "</option>";
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