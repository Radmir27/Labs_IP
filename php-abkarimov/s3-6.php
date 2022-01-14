<?
if (isset($_POST["obr1"])) {
 $str = $_POST["a1"];
 $arr = preg_split('/(\s)/', $str);
 $word = $_POST["a2"];
 for($i=0; $i < count($arr); $i++){
  if ($word == $arr[$i]) {
   $arr[$i] = '';
  }
  echo $arr[$i] . ' ';
 }
}
if (isset($_POST["obr2"])) {
 $str1 = $_POST["b1"];
 $str2 = $_POST["b2"];
 $str3 = $_POST["b3"];
 $str1 = iconv("UTF-8", "windows-1251", $str1);
 $str2 = iconv("UTF-8", "windows-1251", $str2);
 $str3 = iconv("UTF-8", "windows-1251", $str3);
 foreach (str_split($str1) as $index => $value) {
  if ($value == $str2) {
   $value = $str3;
  }
  $arr[] = iconv("windows-1251","UTF-8", $value);
 }
 for($i=0; $i < count($arr); $i++){
  echo $arr[$i];
 }
}
if (isset($_POST["obr3"])) {
 $n=0;
 $glas = "аоэеиыуёюя";
 $glas = iconv("UTF-8", "windows-1251", $glas);
 $str = $_POST["c1"];
 $str = iconv("UTF-8", "windows-1251", $str);
 foreach (str_split($str) as $index => $value) {
  foreach (str_split($glas) as $indexg => $valueg) {
   if ($value == $valueg) {
    $n++;
    break;
   }
  }
  $arr[] = iconv("windows-1251","UTF-8", $value);
 }
 echo ('Количество гласных букв в тексте: ' . "$n");
}
?>