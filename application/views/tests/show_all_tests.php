<h2>Изследвания</h2>
<table border="1">
	<?php 
	

	$i=1;
	echo "<tr>";

	echo '<td></td>';

	echo '<td> Тест </td>';
	echo '<td> Мерни единици </td>';
	echo '<td> d% </td>';
	echo '<td> Програма </td><td></td><td></td>';

	echo "</tr>";
	foreach ($all_tests as $tests) {

		echo '<tr>';
		echo '<td>'.$i.'</td>';
		
		echo '<td>'.$tests['test'].'</td>';
		echo '<td>'.$tests['unit'].'</td>';
		echo '<td>'.$tests['d_percent'].'</td>';
		echo '<td>'.$tests['programm_type'].'</td>';
		
		echo '</td><td>Промени</td><td>Изтрий</tr>';
		$i++;
		
	}

	echo '</table>';