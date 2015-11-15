<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');
$attributes = array (
	'id'	=>'tests_form',
	'class'	=>'form-horizontal');

//by default CI uses post method, to use get method you should use html form
echo form_open('admin/update_user', $attributes);
?>

<div class="form-group">
	<?php 	
//input type=text
	//INSERT TEST NAME
	echo form_hidden('user_id', $user_data['user_id']);

	echo form_label('Въведете потребителско име');

	$data_username = array(
		'class' => 'form-control',	
		'name' => 'username',	
		'username' => set_value('username'),
		'value' => $user_data['username'],			

		);
	echo '<p>'.form_error('username').'</p>';
	echo '<p>'.form_input($data_username).'</p>';
	?>
</div>
<div class="form-group">
	<?php 	

	echo form_label('Въведете парола');

	$data_password = array(
		'class' => 'form-control',	
		'name' => 'password',
		'value' => $user_data['password'],			
		
		);
	echo '<p>'.form_error('password').'</p>';
	echo '<p>'.form_password($data_password).'</p>';
	?>
</div>
<div class="form-group">
	<?php 	
	echo form_label('Повторете паролата');

	$data_password_confirm = array(
		'class' => 'form-control',	
		'name' => 'password_confirm',
		'value' => $user_data['password'],	
		
		);
	echo '<p>'.form_error('password_confirm').'</p>';
	echo '<p>'.form_password($data_password_confirm).'</p>';
	?>
</div>
<div class="form-group">
	<?php 	

	echo form_label('Име на лабораторията');

	$data_lab_name = array(
		'class' => 'form-control',	
		'name' => 'lab_name',
		'value' => $user_data['lab_name'],	
		);
	echo '<p>'.form_error('password').'</p>';
	echo '<p>'.form_input($data_lab_name).'</p>';
	?>
</div>
<div class="form-group">
	<?php 	

	echo form_label('Адрес на лабораторията');

	$data_address = array(
		'class' => 'form-control',	
		'name' => 'address',
		'value' => $user_data['address'],	
		);
	echo '<p>'.form_error('address').'</p>';
	echo '<p>'.form_input($data_address).'</p>';
	?>
</div>
<?php

//submit button
$user_btn = array(
	'class' => 'btn btn-info', 
	'name' => 'submit',
	'value' => 'Въведи'
	);

echo form_submit($user_btn);
?>
</div>
<?php

echo form_close();
