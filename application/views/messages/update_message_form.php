<?php 
$attributes = array (
	'id'	=> 'update_message',
	'class'	=>'form-horizontal');

//by default CI uses post method, to use get method you should use html form
echo form_open('messages/update_messages', $attributes);
?>

	<?php 	
//input type=hidden - Lets you generate a standard text input field. 
	echo form_hidden('id', $message_data['id']);
	
//input type=text
	echo form_label('Променете заглавието');

	$message_title = array(
		'name' => 'message_title',	
		'value' =>  $message_data['message_title'],			

		);
	//form_hidden - Lets you generate a standard hidden input field.
	echo form_input($message_title);
		
//submit button
	$progr_btn = array(
		'name' => 'submit',
		'value' => 'Въведи'
		);

	echo form_submit($progr_btn);
echo form_close();