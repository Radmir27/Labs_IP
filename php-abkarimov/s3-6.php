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
 $str1 = mb_strtolower($str1);
 $arr = str_split($str1);
 for($i=0; $i < count($arr); $i++){
  if ($str2 == $arr[$i]) {
   $arr[$i] = $str3;
  }
  echo $arr[$i];
 }
}
if (isset($_POST["obr3"])) {
 $text= $_POST["c1"];
 $count = preg_match_all('/[aeiouy]/i', $text, $m);
 echo ('Количество гласных английских букв в тексте: ' . "$count");
}
?>