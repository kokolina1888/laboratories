<?php 
echo validation_errors();
$attributes = array (
	'id'	=>'methods_form',
	'class'	=>'form-horizontal');
echo form_open('methods/add-method', $attributes);
?>

<div class="form">
<p class="pretty_form">
	<?php 	
//input type=text
	echo form_label('Въведете методи за изследване');
	?>
	</p>
	
	<?php

	$data_methods = array(
		'class' => 'form-control',	
		'name' => 'method',	
		'placeholder' => 'метод за изследване',			

		);
	echo '<p class="pretty_form">'.form_input($data_methods).'</p>';
	?>
<p class="pretty_form">

	<?php
	
//submit button
	$method_btn_enter = array(
		'class' => 'btn btn-info', 
		'name' => 'submit',
		'value' => 'Въведи'
		);

	echo form_submit($method_btn_enter);
	?>
</p>
<?php

echo form_close();
?>
</div>