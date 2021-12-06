<?php
  echo '$treug[] = ';
  for ($i=1; $i<=10; $i++) {
  $treug[] = $i*($i+1)/2;
  echo $treug[$i-1] . " ";
  }

  echo '<br>$kvd[] =  ';
  for ($i=1; $i<=10; $i++) {
  $kvd[] = $i*$i;
  echo $kvd[$i-1] . " ";
  }

  echo "<br>Объединенный массив: ";
  for ($i=0; $i<=9; $i++) {
  $rez[] = $treug[$i];
  $rez[] = $kvd[$i];
  }
  foreach ($rez as $elem) {
  echo $elem.' ';
  }

  echo "<br>Отсортированный массив: ";
  sort($rez);
  foreach ($rez as $elem) {
  echo $elem.' ';
  }

  echo "<br> Масссив без 1-го элемента: ";
  unset($rez[0]);
  foreach ($rez as $elem) {
  echo $elem.' ';
  }

  echo "<br>Массив без повторных элементов: ";
  $rez1 = array_unique($rez);
  foreach ($rez1 as $elem) {
  echo $elem.' ';
  }
?>