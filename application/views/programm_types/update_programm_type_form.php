<?php 
echo validation_errors();
$attributes = array (
	'id'	=> 'update_programm_types_form',
	);

//by default CI uses post method, to use get method you should use html form
echo form_open('programm_types/update_programm_types', $attributes);
?>

	<?php 	
//input type=hidden - Lets you generate a standard text input field.
	echo form_hidden('id', $programm_type['id']);
	
//input type=text
	echo form_label('Променете типа на програмата');

	$programm_type_name = array(
		'name' => 'programm_types',	
		'value' => $programm_type['programm_type'],			

		);
	//form_hidden - Lets you generate a standard hidden input field.
	echo form_input($programm_type_name);
		
//submit button
	$progr_btn = array(
		'name' => 'submit',
		'value' => 'Въведи'
		);

	echo form_submit($progr_btn);
	

echo form_close();