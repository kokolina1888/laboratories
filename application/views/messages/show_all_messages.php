<!DOCTYPE html>
<html>
<head>
	<title>Show Messages</title>
</head>
<body>

<h2>All Messages</h2>
<table border="1">
<tr>
	<th>No</th>
	<th>Title</th>
	<th>Message</th>
	<th>Publisher</th>
	<th>Date Published</th>
	<th>Show single</th>
</tr>
	<?php	
		foreach ($all_messages as $key => $value) {
			$key += 1;
			echo "
			<tr>
				<td>$key</td>
				<td>$value[message_title]</td>
				<td>$value[message_text]</td>
				<td>$value[publisher]</td>
				<td>$value[date_published]</td>
				<td><a href='show_single_message/$value[id]'>Show single message</a></td>
				<td><a href='update_messages_form/$value[id]'>Update</a></td>
				<td><a href='/delete_message/$value[id]'>Delete</a></td></tr>";
		}

		// End of file show_all_messages.php
		// Location: ./application/views/messages/show_all_messages

	?>
</table>

</body>
</html>