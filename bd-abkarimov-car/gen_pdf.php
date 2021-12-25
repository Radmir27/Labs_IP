<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "abkarimov";
    
    $conn = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
    mysqli_select_db($conn, "abkarimov") or die("Нет такой таблицы!");
    $result = mysqli_query($conn, "SELECT * FROM car");
        while($row=mysqli_fetch_assoc($result)) {
            $resultset[] = $row;
        }
    $header = mysqli_query($conn, "SELECT `COLUMN_NAME` 
    FROM `INFORMATION_SCHEMA`.`COLUMNS` 
    WHERE `TABLE_SCHEMA`='abkarimov' 
    AND `TABLE_NAME`='car'");

    define('FPDF_FONTPATH', 'font/');
    require('fpdf/fpdf.php');
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->AddFont('ArialMT', '', 'arial.php');
    $pdf->SetFont('ArialMT', '', 6);
    foreach($header as $heading) {
	foreach($heading as $column_heading)
		$pdf->Cell(28,6,$column_heading,1);
    }
    foreach($result as $row) {	
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(28,6,$column,1);
    }
    $pdf->Output();
?>