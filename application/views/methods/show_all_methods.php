<h2>Методи за изследване</h2>

<table border="1">
	<?php 
	$i=1;
	
	foreach ($all_methods as $methods) {
		echo '<tr><td>'.$i.'</td>';		
		echo '<td>'.$methods['method'].'</td>';
		
		//to do button промени and delete;
		$i++;
		echo '</td><td>Промени</td><td>Изтрий</td></tr>';
		
	}

	 ?>
</table>