<html>
<body>

<?php
session_start();
if(isset($_SESSION['logged_user']) ) :
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>

<h2>Зарегистрированные автомобили:</h2>
<table border="1">
<tr>
 <th> ID </th> <th> Марка </th> <th> Модель </th> <th> Год выпуска </th> <th> Стоимость (руб.) </th>
 <th> Редактировать </th>
<?php

 if ($_SESSION['type'] == 2) {
	print "<th> Уничтожить </th> </tr>";
 } else print "</tr>";

 $aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
 mysqli_query($aCon, "SET NAMES 'utf8';");
 mysqli_query($aCon, "SET CHARACTER SET 'utf8';");
 mysqli_query($aCon, "SET SESSION collation_connection = 'utf8_general_ci';");
 mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");
 $result=mysqli_query($aCon, "SELECT id, brand, model, year, price FROM car");
while ($row=mysqli_fetch_array($result)){
 echo "<tr>";
 echo "<td>" . $row['id'] . "</td>";
 echo "<td>" . $row['brand'] . "</td>";
 echo "<td>" . $row['model'] . "</td>";
 echo "<td>" . $row['year'] . "</td>";
 echo "<td>" . $row['price'] . "</td>";
 echo "<td><a href='edit.php?id=" . $row['id']
. "&name=car'>Редактировать</a></td>";

 if ($_SESSION['type'] == 2) {
echo "<td><a href='delete.php?id=" . $row['id']
. "&name=car'>Удалить</a></td>";
 }

 echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result);
print("<P>Всего автомобилей: $num_rows </p>");

?>
<p> <a href="new.php?name=car"> Добавить автомобиль </a>


<h2>Зарегистрированные автомобили в наличии:</h2>
<table border="1">
<tr>
 <th> Автомобиль </th> <th> Автосалон </th> <th> Стоимость (руб.) </th>
 <th> Редактировать </th>
<?php

if ($_SESSION['type'] == 2) {
	print "<th> Уничтожить </th> </tr>";
 } else print "</tr>";

 $aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
 mysqli_query($aCon, "SET NAMES 'utf8';");
 mysqli_query($aCon, "SET CHARACTER SET 'utf8';");
 mysqli_query($aCon, "SET SESSION collation_connection = 'utf8_general_ci';");
 mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");
 $result=mysqli_query($aCon, "SELECT * FROM carinstock");
while ($row=mysqli_fetch_array($result)){
 $cars=mysqli_query($aCon, "SELECT brand, model FROM car WHERE id =" . $row['idcar']);
 $car=mysqli_fetch_array($cars);
 $dealers=mysqli_query($aCon, "SELECT name FROM dealers WHERE id =" . $row['iddealer']);
 $dealer=mysqli_fetch_array($dealers);
 echo "<tr>";
 echo "<td>" . $car['brand'] . " " . $car['model'] . "</td>";
 echo "<td>" . $dealer['name'] . "</td>";
 echo "<td>" . $row['price'] . "</td>";
 echo "<td><a href='edit.php?id=" . $row['id']
. "&name=carinstock'>Редактировать</a></td>";
 
 if ($_SESSION['type'] == 2) {
echo "<td><a href='delete.php?id=" . $row['id']
. "&name=carinstock'>Удалить</a></td>";
 }

 echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result);
print("<P>Всего автомобилей в наличии: $num_rows </p>");

?>
<p> <a href="new.php?name=carinstock"> Добавить автомобиль в наличии </a>


<h2>Зарегистрированные автосалоны:</h2>
<table border="1">
<tr>
 <th> Название </th> <th> Адрес </th>
 <th> Редактировать </th>
<?php

if ($_SESSION['type'] == 2) {
	print "<th> Уничтожить </th> </tr>";
 } else print "</tr>";

 $aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
 mysqli_query($aCon, "SET NAMES 'utf8';");
 mysqli_query($aCon, "SET CHARACTER SET 'utf8';");
 mysqli_query($aCon, "SET SESSION collation_connection = 'utf8_general_ci';");
 mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");
 $result=mysqli_query($aCon, "SELECT * FROM dealers");
while ($row=mysqli_fetch_array($result)){
 echo "<tr>";
 echo "<td>" . $row['name'] . "</td>";
 echo "<td>" . $row['address'] . "</td>";
 echo "<td><a href='edit.php?id=" . $row['id']
. "&name=dealer'>Редактировать</a></td>";
 
if ($_SESSION['type'] == 2) {
echo "<td><a href='delete.php?id=" . $row['id']
. "&name=dealer'>Удалить</a></td>";
 }

 echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result);
print("<P>Всего зарегестрированных автосалонов: $num_rows </p>");
print '<p> <a href="new.php?name=dealer"> Добавить автосалон </a>';

if ($_SESSION['type'] == 2) {
	print '<p> <a href="gen_pdf.php"> Сформировать PDF </a>
	<p> <a href="gen_xls.php"> Сформировать XLS </a>';
}

?>

<h2>Зарегистрированные пользователи:</h2>
<table border="1">
<tr>
 <th> Логин </th> <th> Пароль </th> <th> Тип </th>
 <th> Редактировать </th>
<?php

if ($_SESSION['type'] == 2) {
	print "<th> Уничтожить </th> </tr>";
} else print "</tr>";

 $aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
 mysqli_query($aCon, "SET NAMES 'utf8';");
 mysqli_query($aCon, "SET CHARACTER SET 'utf8';");
 mysqli_query($aCon, "SET SESSION collation_connection = 'utf8_general_ci';");
 mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");
 $result=mysqli_query($aCon, "SELECT * FROM users");
while ($row=mysqli_fetch_array($result)){
 echo "<tr>";
 echo "<td>" . $row['username'] . "</td>";
 echo "<td>" . $row['password'] . "</td>";
 echo "<td>" . $row['type'] . "</td>";

if ($_SESSION['id'] == $row['id'] || $_SESSION['type'] == 2) {
echo "<td><a href='edit_user.php?id=" . $row['id']
. "'>Редактировать</a></td>";
}

if ($_SESSION['type'] == 2) {

echo "<td><a href='delete_user.php?id=" . $row['id']
. "'>Удалить</a></td>";
}

 echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result);
print("<P>Всего пользователей: $num_rows </p>");

if ($_SESSION['type'] == 2) {

echo "<p> <a href='new_user.php'> Добавить пользователя </a>";
}

?>

<p> <a href="exit.php"> Выйти </a>

</body> </html>

<?php else : ?>
Вы не являетесь авторизованным пользователем для вывода таблиц
<p><a href="login.php">Авторизоваться</a><br>
<?php endif; ?>