<?php 
echo validation_errors();
$attributes = array (
	'id'	=>'units_form',
	'class'	=>'form-horizontal');

//by default CI uses post method, to use get method you should use html form
echo form_open('units/update_units', $attributes);
?>

<div class="form-group">
	<?php 	
	//input type=hidden - Lets you generate a standard text input field.
	echo form_hidden('unit_id', $data_unit['id']);

//input type=text
	echo form_label('Променете единиците за измерване');

	$data = array(
		'class' => 'form-control',	
		'name' => 'unit',	
		'value' => $data_unit['unit'],			

		);
	echo '<p>'.form_input($data).'</p>';
	?>
</div>

<div class="form-group">

	<?php
	
//submit button
	$unit_btn_enter = array(
		'class' => 'btn btn-info', 
		'name' => 'submit',
		'value' => 'Въведи'
		);

	echo form_submit($unit_btn_enter);
	?>
</div>
<?php

echo form_close();