<h2>Видове програми</h2>

<table border="1">
	<?php 
	$i=1;
	
	foreach ($all_programm_types as $programm_types) {
		echo '<tr><td>'.$i.'</td>';		
		echo '<td>'.$programm_types['programm_type'].'</td>';
		
		//to do промени;
		$i++;
		echo '</td><td>Промени</td><td>Изтрий</tr>';
		
	}

	echo '</table>';