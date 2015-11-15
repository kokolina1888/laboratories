<h2>Единици за измерване</h2>

<table border="1">
	<?php 
	$i=1;
	foreach ($all_units as $units) {
		echo '<tr>';
		echo '<td>'.$i.'</td><td>'.$units['unit'].'</td><td>Промени</td><td>Изтрий</td>';

		//to do промени и изтрий като бутони и линкнати;
		$i++;
		echo '</tr>';
		
	}

	echo '</table>';