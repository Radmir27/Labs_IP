<HTML>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 Введите логин: 
 <INPUT type="text" name="a" size="3">
 <P> <INPUT type="submit" name="obr" value="Вперед!">
</FORM>
<?
if (isset($_POST["obr"])) {
 $login =array(
  "arm" => "Абкаримов Радмир Маратович",
  "ivanov28" => "Иванов Иван Иванович",
  "Pretty" => "Чекаива Алена Михайловна",
  "HWoo" => "Сушкина Маша Борисовна"
 );
 $n=0;
 foreach($login as $key => $value)
  {
     if ($_POST["a"] == $key) {
     $n=1;
     echo '<P>Здравствуйте, ' . $value;
     }
  }
 if ($n == 0) {
  echo '<P>Такой логин не зарегестрирован';
 }
}
?>
</BODY> </HTML>