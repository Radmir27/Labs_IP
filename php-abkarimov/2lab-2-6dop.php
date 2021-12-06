<?php
  function usl() {
  echo 'Вариант 4.<br>
  Дана матрица А(m,n). Найти вектор В(n), каждый<br> 
  элемент которого равен сумме элементов соответствующего<br>
  столбца матрицы А. Исходный и скорректированный массивы<br>
  вывести на экран';
  }

  function zarr($arr) {
  $m=rand(2,10);
  $n=rand(2,10);
  for ($i=0; $i<=$m; $i++) {
    for ($j=0; $j<=$n; $j++) {
     $arr[$i][$j] = rand(1,99);
    }
  }
  return $arr;
  }

  function view($arr) {
  echo "<table>";
  for($i=0; $i < count($arr); $i++){
    echo "<tr>";
    for($j=0; $j < count($arr[$i]); $j++){
      echo '<td>' . $arr[$i][$j] . '</td>';
    }
    echo "</tr>";
  }
  echo "</table>";
  echo '<br><br>';
  }

  function obr($arr) {
  $v=rand(0,count($arr));
  for ($i=0; $i< count($arr[0]); $i++) {
    $sum=0;
    for ($j=0; $j< count($arr); $j++) {
     $sum+=$arr[$j][$i];
    }
    $sum-=$arr[$v][$i];
    $arr[$v][$i]=$sum;
  }
  return $arr;
  }
?>