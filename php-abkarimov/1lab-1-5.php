<p> Вариант 4:
<p>
<?php

 $a=rand(-20,20);
 $b=rand(-20,20);
 $c=rand(-20,20);

 print ('$a = ' . $a . '; ');
 print ('$b = ' . $b . '; ');
 print ('$c = ' . $c . '; ' . '<br>');

 if ($a == 2){
 print('ошибка');

 } else{
 $f=($c+4*$b-12)/(1-$a/2);

 if ($b < 0){
 print ('(' . $c . ' - 4*' . abs($b));

 } else{
 print ('(' . $c . ' + 4*' . $b);
 }

 if ($a < 0){
 print (' - 12)/(1 + ' . abs($a) . '/2) = ' . $f);

 } else{
 print (' - 12)/(1 - ' . $a . '/2) = ' . $f);
 }
 }
?>