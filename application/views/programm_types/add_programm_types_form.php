<?php 
echo validation_errors();
$attributes = array (
	'id'	=>'programm_types_form',
	'class'	=>'form-horizontal');

//by default CI uses post method, to use get method you should use html form
echo form_open('programm_types/add_programm_types', $attributes);
?>

<div class="form-group">
	<?php 	
//input type=text
	echo form_label('Въведете нов тип програма');

	$data_programm_type = array(
		'class' => 'form-control',	
		'name' => 'programm_types',	
		'placeholder' => 'тип програма',			

		);
	//form_input - Lets you generate a standard text input field.
	echo '<p>'.form_input($data_programm_type).'</p>';
	?>
</div>

<div class="form-group">

	<?php
	
//submit button
	$progr_btn_enter = array(
		'class' => 'btn btn-info', 
		'name' => 'submit',
		'value' => 'Въведи'
		);

	echo form_submit($progr_btn_enter);
	?>

</div>

<?php

echo form_close();