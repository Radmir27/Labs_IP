<html>
<body>
<h2>Зарегистрированные автомобили:</h2>
<table border="1">
<tr>
 <th> ID </th> <th> Марка </th> <th> Модель </th> <th> Год выпуска </th> <th> Стоимость </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
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
 echo "<td><a href='delete.php?id=" . $row['id']
. "&name=car'>Удалить</a></td>";
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
 <th> ID автомобиля </th> <th> ID автосалона </th> <th> Стоимость (руб.) </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
 $aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
 mysqli_query($aCon, "SET NAMES 'utf8';");
 mysqli_query($aCon, "SET CHARACTER SET 'utf8';");
 mysqli_query($aCon, "SET SESSION collation_connection = 'utf8_general_ci';");
 mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");
 $result=mysqli_query($aCon, "SELECT * FROM carinstock");
while ($row=mysqli_fetch_array($result)){
 echo "<tr>";
 echo "<td>" . $row['idcar'] . "</td>";
 echo "<td>" . $row['iddealer'] . "</td>";
 echo "<td>" . $row['price'] . "</td>";
 echo "<td><a href='edit.php?id=" . $row['id']
. "&name=carinstock'>Редактировать</a></td>";
 echo "<td><a href='delete.php?id=" . $row['id']
. "&name=carinstock'>Удалить</a></td>";
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
 <th> ID </th> <th> Название </th> <th> Адрес </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
 $aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
 mysqli_query($aCon, "SET NAMES 'utf8';");
 mysqli_query($aCon, "SET CHARACTER SET 'utf8';");
 mysqli_query($aCon, "SET SESSION collation_connection = 'utf8_general_ci';");
 mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");
 $result=mysqli_query($aCon, "SELECT * FROM dealers");
while ($row=mysqli_fetch_array($result)){
 echo "<tr>";
 echo "<td>" . $row['id'] . "</td>";
 echo "<td>" . $row['name'] . "</td>";
 echo "<td>" . $row['address'] . "</td>";
 echo "<td><a href='edit.php?id=" . $row['id']
. "&name=dealer'>Редактировать</a></td>";
 echo "<td><a href='delete.php?id=" . $row['id']
. "&name=dealer'>Удалить</a></td>";
 echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result);
print("<P>Всего зарегестрированных автосалонов: $num_rows </p>");

?>
<p> <a href="new.php?name=dealer"> Добавить автосалон </a>
<p> <a href="gen_pdf.php"> Сформировать PDF </a>
<p> <a href="gen_xls.php"> Сформировать XLS </a>
</body> </html>