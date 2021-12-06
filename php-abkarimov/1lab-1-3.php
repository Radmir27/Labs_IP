<?php

	const NUM_E =2.71828;
 	print ('Число e равно ' . NUM_E . '<br>');
	$num_el= NUM_E;
	print ('$num_el' . ' = ' . $num_el . ' - ' . gettype($num_el) . '<br>');
	settype ($num_el, string);
	print ('$num_el' . ' = ' . $num_el . ' - ' . gettype($num_el) . '<br>');
	settype ($num_el, integer);
	print ('$num_el' . ' = ' . $num_el . ' - ' . gettype($num_el) . '<br>');
	settype ($num_el, boolean);
	print ('$num_el' . ' = ' . $num_el . ' - ' . gettype($num_el) . '<br>');
?>