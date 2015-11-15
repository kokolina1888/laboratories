<h2>Списък на лабораториите, участващи в НСВОК</h2>

<table border="1">
	<?php 
	$i=1;

	echo "<tr>
	<td></td>
	<td>Име</td>
	<td>Адрес</td>
	<td>Потребителско име</td>
	<td>Парола</td>
	<td></td>
	<td></td></tr>";

foreach ($all_users as $user) {
	echo '<tr><td>'.$i.'</td>';		
	echo '<td>'.$user['lab_name'].'</td>';
	echo '<td>'.$user['address'].'</td>';
	echo '<td>'.$user['username'].'</td>';
	echo '<td>'.$user['password'].'</td>';

		//to do button промени and delete;
	$i++;
	echo '</td><td>Промени</td><td>Изтрий</td></tr>';

}

?>
</table>