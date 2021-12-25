<html>
<head> <title> Добавление нового автомобиля </title> </head>
<body>
<H2>Регистрация автомобиля на сайте:</H2>
<form action="save_new.php" metod="get">
 Марка: <input name="brand" size="50" type="text">
<br>Модель: <input name="model" size="100" type="text">
<br>Год выпуска: <input name="year" size="20" type="text">
<br>Трансмиссия: <input name="transmission" size="100" type="text">
<br>Объем выпуска: <input name="prod_volume" size="50" type="text">
<br>Стоимость: <input name="price" size="50" type="text">
</textarea>
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться к списку автомобилей </a>
</body>
</html>