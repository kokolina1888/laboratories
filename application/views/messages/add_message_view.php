<h2>Add Message</h2>

<?php echo validation_errors(); ?>

<form action="add_message" method="post">
	<input type="text" name="title" placeholder="Title">
	<input type="text" name="text" placeholder="Message">
	<input type="text" name="publisher" placeholder="Publisher">
	<input type="hidden" name="date" value"<?php echo date('Y-m-d')?>">
	<input type="submit" value="Изпрати">
</form>