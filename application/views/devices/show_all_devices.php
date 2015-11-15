<h2>Устройства</h2>

<table border="1">

<tr>
	<th>No</th>
	<th>Device</th>
	<th>Покажи</th>
</tr>

	<?php
		$i = 1;
		foreach ($all_devices as $key => $value) {
			echo "<tr>";
			echo "
			<td>$i</td>
			<td>$value[device]</td>
			<td><a href='update_device_form/$value[id]'>Промени</a></td></tr>";
			$i++;
		}
	?>
</table>