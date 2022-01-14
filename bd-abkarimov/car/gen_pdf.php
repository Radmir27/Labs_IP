<?php
define('FPDF_FONTPATH',"fpdf/font/");
require('fpdf/fpdf.php');

$pdf = new FPDF('L', 'mm', 'A4', true, 'UTF-8', false);

$pdf-> AddFont('ArialMT','','arial.php');
$pdf-> SetFont('ArialMT','',10);

$pdf->AddPage();

$w=array(10,20,40,25,45,30,40,50);

$header = array("№ п/п","Бренд","Модель","Год выпуска","Трансмиссия","Стоимость (руб.)","Название автосалона","Адрес салона");

for($i=0;$i<count($header);$i++) {
	$text = iconv('utf-8', 'windows-1251', $header[$i]);
	$pdf->Cell($w[$i],7,$text,1,0,'C');
}
$pdf->Ln();

$aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
mysqli_query($aCon, "SET NAMES 'utf8';");
mysqli_query($aCon, "SET CHARACTER SET 'utf8';");
mysqli_query($aCon, "SET SESSION collation_connection = 'utf8_general_ci';");
mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");
$result=mysqli_query($aCon, "SELECT idcar, iddealer, price FROM carinstock");

$count=1;
while ($row=mysqli_fetch_array($result)) {
	$cars = mysqli_query($aCon, "SELECT brand, model, year, transmission FROM car WHERE id =" . $row['idcar']);
	$car= mysqli_fetch_array($cars);
	$dealers = mysqli_query($aCon, "SELECT name, address FROM dealers WHERE id =". $row['iddealer']);
	$dealer = mysqli_fetch_array($dealers);

	$text = iconv('utf-8', 'windows-1251', $count);
	$pdf->Cell($w[0],6,$text,'LRB',0,'C');
	$text = iconv('utf-8', 'windows-1251', $car['brand']);
	$pdf->Cell($w[1],6,$text,'LRB',0,'R');
	$text = iconv('utf-8', 'windows-1251', $car['model']);
	$pdf->Cell($w[2],6,$text,'LRB',0,'R');
	$text = iconv('utf-8', 'windows-1251', $car['year']);
	$pdf->Cell($w[3],6,$text,'LRB',0,'R');
	$text = iconv('utf-8', 'windows-1251', $car['transmission']);
	$pdf->Cell($w[4],6,$text,'LRB',0,'R');
	$text = iconv('utf-8', 'windows-1251', $row['price']);
	$pdf->Cell($w[5],6,$text,'LRB',0,'R');
	$text = iconv('utf-8', 'windows-1251', $dealer['name']);
	$pdf->Cell($w[6],6,$text,'LRB',0,'R');
	$text = iconv('utf-8', 'windows-1251', $dealer['address']);
	$pdf->Cell($w[7],6,$text,'LRB',0,'R');

	$pdf->Ln();

	$count++;
};

$pdf->Output('document.pdf', 'I');
?>

