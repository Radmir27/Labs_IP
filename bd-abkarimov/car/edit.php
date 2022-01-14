<html>
<body>
<?php

 $aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
 mysqli_query($aCon, "SET NAMES 'utf8';");
 mysqli_query($aCon, "SET CHARACTER SET 'utf8';");
 mysqli_query($aCon, "SET SESSION collation_connection = 'utf8_general_ci';");
 mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");

 if ($_GET['name'] == 'car') {

 echo '<h2>Редактирование данных об автомобиле:</h2>';

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

print "<input type='hidden' name='name1' value='car'>";

print "Марка: <input name='brand' size='10' type='text'
value='".$brand."'>";
print "<br>Модель: <input name='model' size='20' type='text'
value='".$model."'>";
print "<br>Год выпуска: <input name='year' size='3' type='text'
value='".$year."'>";
print "<br>Трансмиссия: <input name='transmission' size='20' type='text'
value='".$transmission."'>";
print "<br>Объем выпуска: <input name='prod_volume' size='6' type='text'
value='".$prod_volume."'>";
print "<br>Стоимость (руб.): <input name='price' size='6' type='text'
value='".$price."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку автомобилей </a>";

} elseif ($_GET['name'] == 'carinstock') {

 echo '<h2>Редактирование данных об автомобиле в наличии:</h2>';

 $rows=mysqli_query($aCon, "SELECT idcar, iddealer, price FROM carinstock WHERE id=".$_GET['id']);
 while ($st = mysqli_fetch_array($rows)) {
 $id=$_GET['id'];
 $idcar = $st['idcar'];
 $iddealer = $st['iddealer'];
 $price = $st['price'];
 }
print "<form action='save_edit.php' metod='get'>";

print "<input type='hidden' name='name1' value='carinstock'>";

 $result=mysqli_query($aCon, "SELECT id FROM car");
 echo "ID автомобиля: <select name='idcar'>";
 while ($row=mysqli_fetch_array($result)){
 if ($row['id'] == $idcar) {
  echo "<option selected>" . $row['id'] . "</option>";
 } else {
  echo "<option>" . $row['id'] . "</option>";
 }
 }

 echo "</select><br>ID автосалона:<select name='iddealer'>";
 $result=mysqli_query($aCon, "SELECT id FROM dealers");
 while ($row=mysqli_fetch_array($result)){
 if ($row['id'] == $iddealer) {
  echo "<option selected>" . $row['id'] . "</option>";
 } else {
  echo "<option>" . $row['id'] . "</option>";
 }
 }

print "

</select><br>Стоимость (руб.): <input name='price' size='6' type='text'
value='".$price."'>";

print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку автомобилей в наличии </a>";

} elseif ($_GET['name'] == 'dealer') {

 echo '<h2>Редактирование данных о автосалонах:</h2>';

 $rows=mysqli_query($aCon, "SELECT name, address FROM dealers WHERE id=".$_GET['id']);
 while ($st = mysqli_fetch_array($rows)) {
 $id=$_GET['id'];
 $name = $st['name'];
 $address = $st['address'];
 }
print "<form action='save_edit.php' metod='get'>";

print "<input type='hidden' name='name1' value='dealer'>";

print "Название: <input name='name' size='10' type='text'
value='".$name."'>";
print "<br>Адрес: <input name='address' size='20' type='text'
value='".$address."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку автосалонов </a>";

} else echo ' неправильно введен предмет изменения';
?>
</body>
</html>