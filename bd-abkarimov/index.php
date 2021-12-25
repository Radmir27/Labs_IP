<html>
<head> <title> Сведения о прользователях сайта </title> </head>
<body>
<h2>Зарегистрированные пользователи:</h2>
<table border="1">
<tr> // вывод «шапки» таблицы
 <th> Имя </th> <th> E-mail </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
 $aCon = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
 mysqli_query($aCon, "SET NAMES 'utf8';");
 mysqli_query($aCon, "SET CHARACTER SET 'utf8';");
 mysqli_query($aCon, "SET SESSION collation_connection = 'utf8_general_ci';");
 // подключение к базе данных:
 mysqli_select_db($aCon, "abkarimov") or die("Нет такой таблицы!");
 $result=mysqli_query($aCon, "SELECT id_user, user_name, user_e_mail FROM user"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row['user_name'] . "</td>";
 echo "<td>" . $row['user_e_mail'] . "</td>";
 echo "<td><a href='edit.php?id=" . $row['id_user']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete.php?id=" . $row['id_user']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего пользователей: $num_rows </p>");

?>
<p> <a href="new.php"> Добавить пользователя </a>
</body> </html>