<HTML>
<HEAD> <TITLE>Анкета "Ваш характер"</TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 <b>Анкета "Ваш характер"</b><p>
 Введите Ваше имя <p>
 <INPUT type="text" name="a" size="20"> <p>
 <b>Ответьте да или нет на следующие вопросы</b><P>
 1. Считаете ли Вы, что у многих ваших знакомых хороший характер?<p>
 <INPUT type="radio" name="f1" value="y" checked> да
 <INPUT type="radio" name="f1" value="n"> нет<p>
 2. Раздражают ли Вас мелкие повседневные обязанности?<p>
 <INPUT type="radio" name="f2" value="y" checked> да
 <INPUT type="radio" name="f2" value="n"> нет<p>
 3. Верите ли Вы, что ваши друзья преданы Вам?<p>
 <INPUT type="radio" name="f3" value="y" checked> да
 <INPUT type="radio" name="f3" value="n"> нет<p>
 4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание?<p>
 <INPUT type="radio" name="f4" value="y" checked> да
 <INPUT type="radio" name="f4" value="n"> нет<p>
 5. Способны ли Вы ударить собаку или кошку?<p>
 <INPUT type="radio" name="f5" value="y" checked> да
 <INPUT type="radio" name="f5" value="n"> нет<p>
 6. Часто ли Вы принимаете лекарства?<p>
 <INPUT type="radio" name="f6" value="y" checked> да
 <INPUT type="radio" name="f6" value="n"> нет<p>
 7. Часто ли Вы меняете магазин, в который ходите за продуктами?<p>
 <INPUT type="radio" name="f7" value="y" checked> да
 <INPUT type="radio" name="f7" value="n"> нет<p>
 8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?<p>
 <INPUT type="radio" name="f8" value="y" checked> да
 <INPUT type="radio" name="f8" value="n"> нет<p>
 9. Тяготят ли Вас общественные обязанности?<p>
 <INPUT type="radio" name="f9" value="y" checked> да
 <INPUT type="radio" name="f9" value="n"> нет<p>
 10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства?<p>
 <INPUT type="radio" name="f10" value="y" checked> да
 <INPUT type="radio" name="f10" value="n"> нет<p>
 11. Часто ли Вам приходят в голову мысли о Вашей невезучести?<p>
 <INPUT type="radio" name="f11" value="y" checked> да
 <INPUT type="radio" name="f11" value="n"> нет<p>
 12. Сохранилась ли у Вас фигура по сравнению с прошлым?<p>
 <INPUT type="radio" name="f12" value="y" checked> да
 <INPUT type="radio" name="f12" value="n"> нет<p>
 13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей?<p>
 <INPUT type="radio" name="f13" value="y" checked> да
 <INPUT type="radio" name="f13" value="n"> нет<p>
 14. Нравится ли Вам семейная жизнь?<p>
 <INPUT type="radio" name="f14" value="y" checked> да
 <INPUT type="radio" name="f14" value="n"> нет<p>
 15. Злопамятны ли Вы?<p>
 <INPUT type="radio" name="f15" value="y" checked> да
 <INPUT type="radio" name="f15" value="n"> нет<p>
 16. Находите ли Вы, что стоит погода, типичная для данного времени года?<p>
 <INPUT type="radio" name="f16" value="y" checked> да
 <INPUT type="radio" name="f16" value="n"> нет<p>
 17. Случается ли Вам с утра быть в плохом настроении?<p>
 <INPUT type="radio" name="f17" value="y" checked> да
 <INPUT type="radio" name="f17" value="n"> нет<p>
 18. Раздражает ли Вас современная живопись?<p>
 <INPUT type="radio" name="f18" value="y" checked> да
 <INPUT type="radio" name="f18" value="n"> нет<p>
 19. Надоедает ли Вам присутствие чужих детей в доме более одного часа?<p>
 <INPUT type="radio" name="f19" value="y" checked> да
 <INPUT type="radio" name="f19" value="n"> нет<p>
 20. Надоедает ли Вам делать лабораторные по PHP?<p>
 <INPUT type="radio" name="f20" value="y" checked> да
 <INPUT type="radio" name="f20" value="n"> нет<p>
 <P> <INPUT type="submit" name="obr" value="Узнать">
 <P>
</FORM>
<?
if (isset($_POST["obr"])) {
 $n=0;
 if ($_POST['f1']=='n') {
 $n++;
 }
 if ($_POST['f2']=='n') {
 $n++;
 }
 if ($_POST['f3']=='y') {
 $n++;
 }
 if ($_POST['f4']=='n') {
 $n++;
 }
 if ($_POST['f5']=='n') {
 $n++;
 }
 if ($_POST['f6']=='n') {
 $n++;
 }
 if ($_POST['f7']=='n') {
 $n++;
 }
 if ($_POST['f8']=='n') {
 $n++;
 }
 if ($_POST['f9']=='y') {
 $n++;
 }
 if ($_POST['f10']=='y') {
 $n++;
 }
 if ($_POST['f11']=='n') {
 $n++;
 }
 if ($_POST['f12']=='n') {
 $n++;
 }
 if ($_POST['f13']=='y') {
 $n++;
 }
 if ($_POST['f14']=='y') {
 $n++;
 }
 if ($_POST['f15']=='n') {
 $n++;
 }
 if ($_POST['f16']=='n') {
 $n++;
 }
 if ($_POST['f17']=='n') {
 $n++;
 }
 if ($_POST['f18']=='n') {
 $n++;
 }
 if ($_POST['f19']=='y') {
 $n++;
 }
 if ($_POST['f20']=='n') {
 $n++;
 }
 if ($n > 15) {
 echo $_POST['a'] . ', у вас покладистый характер.';
 } elseif ($n >= 8 && $n < 15) {
 echo $_POST['a'] . ', вы не лишены недостатков, но с вами можно ладить.';
 } else {
 echo $_POST['a'] . ', вашим друзьям можно посочувствовать.';
 }
}
?>
</BODY> </HTML>