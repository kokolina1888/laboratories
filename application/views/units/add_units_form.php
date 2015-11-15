<?php 
echo validation_errors();
$attributes = array (
	'id'	=>'units_form',
	'class'	=>'form-horizontal');

//by default CI uses post method, to use get method you should use html form
echo form_open('units/add_units', $attributes);
?>

<div class="form-group">
	<?php 	
//input type=text
	echo form_label('Въведете единици за измерване');

	$data_units = array(
		'class' => 'form-control',	
		'name' => 'unit',	
		'placeholder' => 'единици',			

		);
	echo '<p>'.form_input($data_units).'</p>';
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