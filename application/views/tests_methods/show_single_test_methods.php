<h2><?php echo $single_test_methods[0]['test'];?> и методи за изследване</h2>
<table border="1">
	<?php 
	

	$i=1;
	echo "<tr>";

	echo '<td></td>';

	echo '<td> Тест </td>';
	echo '<td> Метод </td>';
	echo "<pre>";
	/*var_dump($single_test_methods);
	echo "</pre>";
	echo "</tr>";*/
	foreach ($single_test_methods as $tests) {

		echo '<tr>';
		echo '<td>'.$i.'</td>';
		
		echo '<td>'.$tests['test'].'</td>';
		echo '<td>'.$tests['method'].'</td>';
				
		echo '</td><td>Промени</td><td>Изтрий</tr>';
		$i++;
		
	}

	echo '</table>';