<div class="form">
<?php 
$attributes = array (
	'id'	=>'units_form',
	'class'	=>'form-horizontal');

//by default CI uses post method, to use get method you should use html form
echo form_open('units/add_units', $attributes);
?>

<p class="pretty_form">
	<?php 	
//input type=text
	echo form_label('Въведете единици за измерване');
	?>
	</p>
	
	<?php

	$data_units = array(
		'class' => 'form-control',	
		'name' => 'unit',	
		'placeholder' => 'единици',			

		);
	echo form_error('unit');
	echo '<p class="pretty_form">'.form_input($data_units).'</p>';
	?>

<p class="pretty_form">

	<?php
	
//submit button
	$unit_btn_enter = array(
		'class' => 'btn btn-info', 
		'name' => 'submit',
		'value' => 'Въведи'
		);

	echo form_submit($unit_btn_enter);
	?>
</p>
<?php

echo form_close();
?>
</div>