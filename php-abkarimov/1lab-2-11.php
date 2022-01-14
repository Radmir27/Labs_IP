<p>Вариант 1</p>
<?php
$n1 = rand(1,100);
echo '$n = ' . $n1;
echo '<br>Делители: ';
for ($i=1; $i<=$n1; $i++) {
 if ($n1 % $i == 0) {
  $x = false;
  echo $i . ' ';
 }
}
echo '<p>Вариант 4</p>';
$n=rand(1,100);
$m=rand(100,200);
print ('Мин= ' . $n . '; Макс=' . $m . ';<br>');
$s=0;
for ($i=$n; $i<=$m; ++$i) {
 $x=$i;
  while ($x>=1){
  $s+= $x % 10;
  $x/=10;
  }
  if ($i % $s == 0) {
  echo($i . " ");
  }
 $s=0;
}
?>