<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');
$attributes = array (
	'id'	=>'tests_form');

//by default CI uses post method, to use get method you should use html form
echo form_open('admin/add_new_user', $attributes);
?>

<div>
	<?php 	
	echo form_label('Въведете потребителско име');

	$data_username = array(
		'name' => 'username',	
		'value' => set_value('username'),
		'placeholder' => 'потребителско име',			

		);
	echo form_error('username');
	echo '<p>'.form_input($data_username).'</p>';
	?>
</div>
<div>
	<?php 	

	echo form_label('Въведете парола');

	$data_password = array(
		'name' => 'password',
		'value' => set_value('password'),	
		'placeholder' => 'парола',			

		);
	echo form_error('password');
	echo '<p>'.form_password($data_password).'</p>';
	?>
</div>
<div>
	<?php 	
	echo form_label('Повторете паролата');

	$data_password_confirm = array(
		'name' => 'password_confirm',
		'value' => set_value('password_confirm'),	
		'placeholder' => 'повторете паролата',			

		);
	echo form_error('password_confirm');
	echo '<p>'.form_password($data_password_confirm).'</p>';
	?>
</div>
<div>
	<?php 	

	echo form_label('Име на лабораторията');

	$data_lab_name = array(
		'name' => 'lab_name',
		'value' => set_value('lab_name'),	
		'placeholder' => 'Име на лабораторията',			

		);
	echo form_error('password');
	echo '<p>'.form_input($data_lab_name).'</p>';
	?>
</div>
<div>
	<?php 	

	echo form_label('Адрес на лабораторията');

	$data_address = array(
		'name' => 'address',
		'value' => set_value('address'),	
		'placeholder' => 'Адрес на лабораторията',			

		);
	echo form_error('address');
	echo '<p>'.form_input($data_address).'</p>';
	?>
</div>
<?php

//submit button
$user_btn = array(
	'name' => 'submit',
	'value' => 'Въведи'
	);

echo form_submit($user_btn);
?>
</div>
<?php

echo form_close();
