<?php 
echo validation_errors();
$attributes = array (
	'id'	=>'methods_form',
	'class'	=>'form-horizontal');

//by default CI uses post method, to use get method you should use html form
echo form_open('methods/update_method', $attributes);
?>

<div class="form-group">
	<?php 	
	//input type=hidden - Lets you generate a standard text input field.
	echo form_hidden('method_id', $method_info['method_id']);

//input type=text
	echo form_label('Променете метода за изследване');

	$data = array(
		'class' => 'form-control',	
		'name' => 'method',	
		'value' => $method_info['method'],			

		);
	echo '<p>'.form_input($data).'</p>';
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