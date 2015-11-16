<?php 
$attributes = array (
	'id'	=>'login_form',
	'class'	=>'form-horizontal');

//by default CI uses post method, to use get method you should use html form
echo form_open('verifylogin', $attributes);
?>

<div class="form-group">
	<?php 	

	echo form_label('Потребител');

	$data_username = array(
		'class' => 'form-control',	
		'name' => 'username',	
		'value' => set_value('username'),
		'placeholder' => 'потребител',			

		);
	echo '<p>'.form_error('username').'</p>';
	echo '<p>'.form_input($data_username).'</p>';
	?>

</div>
<div class="form-group">
	<?php 	
	echo form_label('Парола');

	$data_password = array(
		'class' => 'form-control',	
		'name' => 'password',	
		'value' => set_value('password'),
		'placeholder' => 'парола',			

		);
	echo '<p>'.form_error('password').'</p>';
	echo '<p>'.form_input($data_password).'</p>';
	?>

</div>
<div class="form-group">
<?php

//submit button
$test_btn = array(
	'class' => 'btn btn-info', 
	'name' => 'submit',
	'value' => 'Влез'
	);

echo form_submit($test_btn);
?>
</div>
<?php

echo form_close();