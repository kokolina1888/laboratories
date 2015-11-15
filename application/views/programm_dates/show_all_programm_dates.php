<h2>Методи за изследване</h2>

<table border="1">
	<?php 
	$i=1;
	/*echo "<pre>";
	var_dump($all_programm_dates);
	echo "</pre>";*/
	echo '<tr><td></td>';		
		echo '<td>Цикъл</td>';
		echo '<td>Номер на проба</td>';
		echo '<td>Програма</td>';
		echo '<td>Дата за анализ</td>';
		echo '<td>Краен срок за въвеждане</td>';
		echo "<td></td>";
		echo "<td></td></tr>";
	foreach ($all_programm_dates as $programm_dates) {
		echo '<tr><td>'.$i.'</td>';		
		echo '<td>'.$programm_dates['cicle'].'</td>';
		echo '<td>'.$programm_dates['probe_number'].'</td>';
		echo '<td>'.$programm_dates['programm_type'].'</td>';
		echo '<td>'.$programm_dates['date_analyse'].'</td>';
		echo '<td>'.$programm_dates['date_final'].'</td>';

		
		
		
		//to do button промени and delete;
		$i++;
		echo '</td><td>Промени</td><td>Изтрий</tr>';
		
	}

	 ?>
</table>