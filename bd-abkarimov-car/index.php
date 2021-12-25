<html>
<head> <title> Сведения о автомобилях сайта </title> </head>
<body>
<h2>Зарегистрированные автомобили:</h2>
<table border="1">
<tr>
 <th> Марка </th> <th> Модель </th> <th> Год выпуска </th> <th> Стоимость </th>
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
 echo "<td>" . $row['brand'] . "</td>";
 echo "<td>" . $row['model'] . "</td>";
 echo "<td>" . $row['year'] . "</td>";
 echo "<td>" . $row['price'] . "</td>";
 echo "<td><a href='edit.php?id=" . $row['id']
. "'>Редактировать</a></td>";
 echo "<td><a href='delete.php?id=" . $row['id']
. "'>Удалить</a></td>";
 echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result);
print("<P>Всего автомобилей: $num_rows </p>");

?>
<p> <a href="new.php"> Добавить автомобиль </a>
<p> <a href="gen_pdf.php"> Сформировать PDF </a>
<p> <a href="gen_xls.php"> Сформировать XLS </a>
</body> </html>