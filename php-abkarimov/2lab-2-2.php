<?php
  $n=rand(3,20);
  echo "Массив из " . $n . " элементов, заполненный случайными числами:";
  
  for ($i=1; $i<=$n; $i++) {
  $arr[] = rand(10,99);
  echo " " . $arr[$i-1];
  }
  echo "<br>Массив в отсортированном виде:";
  sort($arr);
  foreach ($arr as $elem) {
  echo ' ' . $elem;
  }
  echo "<br>Массив в обратном порядке:";
  array_reverse($arr);
  foreach ($arr as $elem) {
  echo ' ' . $elem;
  }
  echo "<br>Массив после удаления последнего элемента:";
  array_pop($arr);
  foreach ($arr as $elem) {
  echo ' ' . $elem;
  }
  $sum = 0;
  $nn = 0;
  foreach ($arr as $elem) {
  $sum+=$elem;
  $nn+=1;
  }
  echo "<br>Сумма элементов массива: " . $sum;
  echo "<br>Количество элементов в массиве: " . $nn;
  echo "<br>Среднее арифметическое для элементов массива: " . $sum/$nn;
  $key = 0;
  $key = array_search(50, $arr);
  if ($key != 0) {
  echo "<br>Число 50 есть в массиве";
  } else{
  echo "<br>Число 50 нет в массиве";
  }
  echo "<br>Массив из уникальных значений:";
  array_unique($arr);
  foreach ($arr as $elem) {
  echo ' ' . $elem;
  }
?>