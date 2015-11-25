<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');
$attributes = array (
	'id'	=>'tests_form');

//by default CI uses post method, to use get method you should use html form
?>
<div class="form">
<?php 
echo form_open('admin/update-user/'.$user_data['user_id'], $attributes);
?>

<p class="pretty_form">
	<?php 	
	echo form_label('Потребителско име');

	$data_username = array(
		'name' => 'username',	
		'value' => $user_data['username']	

		);

	echo form_error('username');
	echo '<p class="pretty_form">'.form_input($data_username).'</p>';
	?>
</p>
<p class="pretty_form">
	<?php 	

	echo form_label('Парола');

	$data_password = array(
		'name' => 'password',
		'value' => $user_data['password'],	
		
		);
	echo form_error('password');
	echo '<p class="pretty_form">'.form_password($data_password).'</p>';
	?>
</p>
<p class="pretty_form">
	<?php 	
	echo form_label('Повторете паролата');

	$data_password_confirm = array(
		'name' => 'password_confirm',
		'value' => $user_data['password'],	
		);

	echo form_error('password_confirm');
	echo '<p class="pretty_form">'.form_password($data_password_confirm).'</p>';
	?>
</p>
<p class="pretty_form">
	<?php 	
	echo form_label('Име на лабораторията');

	$data_lab_name = array(
		'name' => 'lab_name',
		'value' => $user_data['lab_name'],	
		);
	echo form_error('lab_name');
	echo '<p class="pretty_form">'.form_input($data_lab_name).'</p>';
	?>
</p>
<p class="pretty_form">
	<?php 	

	echo form_label('Адрес на лабораторията');

	$data_address = array(
		'name' => 'address',
		'value' => $user_data['address'],	
		);
	echo form_error('address');
	echo '<p class="pretty_form">'.form_input($data_address).'</p>';
	?>
</p>
<p class="pretty_form">
	<?php

//submit button
	$user_btn = array(
		'name' => 'submit',
		'value' => 'Промени/запиши'
		);

	echo form_submit($user_btn);
	?>
</p>
<?php

echo form_close();
?>
</div>
