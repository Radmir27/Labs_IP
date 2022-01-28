<?php
session_start();
if(isset($_SESSION['logged_user']) && $_SESSION['type'] == 2) :
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>

<?php
$filename = "otchet_" . date('Ymd') . ".xls";

header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");

$aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
mysqli_query($aCon, "SET NAMES 'utf8';");
mysqli_query($aCon, "SET CHARACTER SET 'utf8';");
mysqli_query($aCon, "SET SESSION collation_connection = 'utf8_general_ci';");
mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");
?>

<meta http-equiv="content-type" content="text/html; charset=utf-8">

<table>
<tr>
<th>№ п/п</th><th>Марка</th><th>Модель</th><th>Год выпуска</th><th>Трансмиссия</th>
<th>Стоимость (руб.)</th><th>Название автосалона</th><th>Адрес</th>
</tr>

<?php
$result=mysqli_query($aCon, "SELECT idcar, iddealer, price FROM carinstock");

$count= 0;
while ($row=mysqli_fetch_array($result)) {
	$cars = mysqli_query($aCon, "SELECT brand, model, year, transmission FROM car WHERE id =" . $row['idcar']);
	$car= mysqli_fetch_array($cars);
	$dealers = mysqli_query($aCon, "SELECT name, address FROM dealers WHERE id =". $row['iddealer']);
	$dealer = mysqli_fetch_array($dealers);

	$count++;

	echo "<tr>";
	echo "<td>". $count ."</td>";
	echo "<td>". $car['brand'] ."</td>";
	echo "<td>". $car['model'] ."</td>";
	echo "<td>". $car['year'] ."</td>";
	echo "<td>". $car['transmission'] ."</td>";
	echo "<td>". $row['price'] ."</td>";
	echo "<td>". $dealer['name'] ."</td>";
	echo "<td>". $dealer['address'] ."</td>";
	echo "</tr>";
};
?>
</table>

<?php else : ?>
Вы не являетесь администратором для этого действия
<p><a href="index.php">Вернуться к таблицам</a><br>
<?php endif; ?>