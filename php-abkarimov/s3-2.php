<HTML>
<HEAD> <TITLE> Калькулятор </TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 <b>Калькулятор</b><br><br>
 <INPUT type="text" name="a" size="3">
 <INPUT type="text" name="b" size="3">
 <br>
 действие:
 <SELECT NAME="d" SIZE="1">
 <OPTION VALUE="1" SELECTED> сложить
 <OPTION VALUE="2"> вычеслить
 <OPTION VALUE="3"> умножить
 <OPTION VALUE="4"> разделить
 </SELECT>
 <P> <INPUT type="submit" name="obr" value="Вперед!">
</FORM>
<?
if (isset($_POST["obr"])) {
 if (is_numeric($_POST["a"]) && is_numeric($_POST["b"])) {
  $s1=$_POST["a"];
  $s2=$_POST["b"];
  switch ($_POST["d"]) {
   case 1:
   $s3=$s1+$s2;
   break;
   case 2:
   $s3=$s1-$s2;
   break;
   case 3:
   $s3=$s1*$s2;
   break;
   case 4:
   $s3=$s1/$s2;
   break;
  }
 echo '<p>' . $s3;
 } else {
 echo '<p> Неправильно введены данные';
 }
}
?>
</BODY> </HTML>