<h2>Тестове и методи за изследването им</h2>
<table border="1">
	<?php 
	

	$i=1;
	echo "<tr>";

	echo '<td></td>';

	echo '<td> Тест </td>';
	echo '<td> Метод </td>';
	
	echo "</tr>";
	foreach ($all_tests_methods as $tests) {

		echo '<tr>';
		echo '<td>'.$i.'</td>';
		
		echo '<td>'.$tests['test'].'</td>';
		echo '<td>'.$tests['method'].'</td>';
				
		echo '</td><td>Промени</td><td>Изтрий</tr>';
		$i++;
		
	}

	echo '</table>';