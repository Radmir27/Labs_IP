<HTML>
<HEAD> <TITLE> Вариант 4 (Четный) </TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 <b>Вариант 4 (Четный)</b><br><br>
 <INPUT type="text" name="a" size="3">
 <br>
 найти делители:
 <SELECT NAME="d" SIZE="1">
 <OPTION VALUE="1" SELECTED> четные
 <OPTION VALUE="2"> нечетные
 <OPTION VALUE="3"> простые
 <OPTION VALUE="4"> составные
 <OPTION VALUE="5"> все
 </SELECT>
 <P> <INPUT type="submit" name="obr" value="Вперед!">
</FORM>
<?
if (isset($_POST["obr"])) {
 if (is_numeric($_POST["a"])) {
  $s1=$_POST["a"];
  for ($i=1; $i<=$s1; $i++) {
   $n = $s1 % $i;
   if ($n == 0) {
    $arr[] = $i;
   }
  }
  for($i=0; $i < count($arr); $i++){
  switch ($_POST["d"]) {
   case 1:
   if ($arr[$i] % 2 == 0) {
    echo ' ' . $arr[$i];
   }
   break;
   case 2:
   if ($arr[$i] % 2 == 1) {
    echo ' ' . $arr[$i];
   }
   break;
   case 3:
   for ($i = 0; $i < count($arr); $i++) {
    $n = 0;
    for ($j = 2; $j <= $arr[$i]/2; $j++){
     if ($arr[$i] % $j == 0) {
      $n+=1;
     }
    }
    if ($n == 0) {
     echo ' ' . $arr[$i];
    }
   }
   break;
   case 4:
   for($i=0; $i < count($arr); $i++){
    $n = 0;
    for ($j = 2; $j <= $arr[$i]/2; $j++){
     if ($arr[$i] % $j == 0) {
      $n++;
     }
    }
    if ($n != 0) {
     echo ' ' . $arr[$i];
    }
   }
   break;
   case 5:
   for($i=0; $i < count($arr); $i++){
    echo ' ' . $arr[$i];
   }
   break;
   }
  }
 } else {
 echo '<p> Неправильно введены данные';
 }
}
?>
</BODY> </HTML>