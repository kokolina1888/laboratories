<?php 
echo validation_errors();
$attributes = array (
	'id'	=>'methods_form',
	'class'	=>'form-horizontal');
echo form_open('methods/add_method', $attributes);
?>

<div class="form-group">
	<?php 	
//input type=text
	echo form_label('Въведете методи за изследване');

	$data_methods = array(
		'class' => 'form-control',	
		'name' => 'method',	
		'placeholder' => 'метод за изследване',			

		);
	echo '<p>'.form_input($data_methods).'</p>';
	?>
</div>

<div class="form-group">

	<?php
	
//submit button
	$method_btn_enter = array(
		'class' => 'btn btn-info', 
		'name' => 'submit',
		'value' => 'Въведи'
		);

	echo form_submit($method_btn_enter);
	?>
</div>
<?php

echo form_close();