<?php
require_once('tcpdf/tcpdf.php');

$aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
mysqli_query($aCon, "SET NAMES 'utf8';");
mysqli_query($aCon, "SET CHARACTER SET 'utf8';");
mysqli_query($aCon, "SET SESSION collation_connection = 'utf8_general_ci';");
mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");

$pdf = new TCPDF('L', 'mm', 'A3', true, 'UTF-8', false);

$fontname = TCPDF_FONTS::addTTFfont(dejavusans, 'TrueTypeUnicode', '', 96);
$pdf->SetFont(dejavusans, '', 12, '', true);

$pdf->AddPage();

$result=mysqli_query($aCon, "SELECT idcar, iddealer, price FROM carinstock");

$rows = "";
$count= 1;
while ($row=mysqli_fetch_array($result)) {
	$rows .=  "<tr>";

	$cars = mysqli_query($aCon, "SELECT brand, model, year, transmission FROM car WHERE id =" . $row['idcar']);
	$car= mysqli_fetch_array($cars);
	$dealers = mysqli_query($aCon, "SELECT name, address FROM dealers WHERE id =". $row['iddealer']);
	$dealer = mysqli_fetch_array($dealers);

	$rows = $rows. "<td>". $count ."</td>";
	$rows = $rows. "<td>". $car['brand'] ."</td>";
	$rows = $rows. "<td>". $car['model'] ."</td>";
	$rows = $rows. "<td>". $car['year'] ."</td>";
	$rows = $rows. "<td>". $car['transmission'] ."</td>";
	$rows = $rows. "<td>". $row['price'] ."</td>";
	$rows = $rows. "<td>". $dealer['name'] ."</td>";
	$rows = $rows. "<td>". $dealer['address'] ."</td>";

	$count++;
	$rows .=  "</tr>";
};

ob_clean();
$html = "
<table border='1'>
<tr>
<th>№ п/п</th><th>Бренд</th><th>Модель</th><th>Год выпуска</th><th>Трансмиссия</th>
<th>Стоимость (руб.)</th><th>Название автосалона</th><th>Адрес салона</th>
</tr>

" .  $rows  ."</table>";
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

$pdf->Output('document.pdf', 'I');
?>