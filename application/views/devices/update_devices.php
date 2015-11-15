<?php
$attributes = array('id' => 'update_device');

echo form_open('devices/update_devices', $attributes);

echo form_hidden('id', $device_info['id']);

echo form_label('Променете апарат');
$data_device = array(
	'name' => 'device',
	'placeholder' =>  $device_info['device']
	);
echo form_input($data_device);

$progr_btn = array(
		'name' => 'submit',
		'value' => 'Въведи'
		);

echo form_submit($progr_btn);
echo form_close();
?>