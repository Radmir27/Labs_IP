<HTML>
<TITLE> Таблица умножения </TITLE>
<BODY>
<TABLE border=1>
<?php
$p=0;
for ($i=1; $i<=10; $i++) { // запускаем первый цикл
 echo ("<tr>"); // начало строки таблицы
 for ($k=1; $k<=10; $k++) { // запускаем второй цикл
 echo ("<td align=center>"); // открываем ячейку таблицы
 $p+=1;
 if ($p%2 == 0){
 print ('<font color="red">' . $p . '</font>');
 } else{
 echo ($p); // выводим его,
 }
 echo ("</td>"); // а потом закрываем ячейку
 }
 echo ("</tr>"); // конец строки таблицы
}
?>
</TABLE>
</BODY>
</HTML>