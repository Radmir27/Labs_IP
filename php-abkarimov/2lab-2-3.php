<?php
  echo "Массив:<br>";
  $cust["cnum"] = 2001;
  $cust["cname"] = "Hoffman";
  $cust["city"] = "London";
  $cust["snum"] = "1001";
  foreach($cust as $key => $value)
  {
     echo "$key = $value <br>";
  }
  echo "<br>Массив с добавлением rating:<br>";
  $cust["rating"] = 100;
  foreach($cust as $key => $value)
  {
     echo "$key = $value <br>";
  }
  echo "<br>Массив с сортировкой по значению:<br>";
  asort($cust);
  foreach($cust as $key => $value)
  {
     echo "$key = $value <br>";
  }
  echo "<br>Массив с сортировкой по ключу:<br>";
  ksort($cust);
  foreach($cust as $key => $value)
  {
     echo "$key = $value <br>";
  }
  echo "<br>Массив с сортировкой с помощью sort():<br>";
  sort($cust);
  foreach($cust as $key => $value)
  {
     echo "$key = $value <br>";
  }
?>