<?PHP
function cleanData(&$str)
{
$str = preg_replace("/\t/", "\\t", $str);
$str = preg_replace("/\r?\n/", "\\n", $str);
if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
}
$filename = "otchet_" . date('Ymd') . ".xls";

header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");

$aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
 mysqli_query($aCon, "SET NAMES 'utf8';");
 mysqli_query($aCon, "SET CHARACTER SET 'utf8';");
 mysqli_query($aCon, "SET SESSION collation_connection = 'utf8_general_ci';");
 mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");
 $result=mysqli_query($aCon, "SELECT id, brand, model, year, price FROM car");

//запрос и вывод данных
$flag = false;
 while($row = mysqli_fetch_assoc($result)) {
   if(!$flag) {
     // Вывод заголовков
     echo implode("\t", array_keys($row)) . "\r\n";
     $flag = true;
    }
    //Вывод данных столбцов    
     array_walk($row, 'cleanData');
     echo implode("\t", array_values($row)) . "\r\n";
  }
  exit;
?>
