<?php
echo validation_errors();
$attributes = array ('id' => 'devices_form');

echo form_open('devices/add_devices', $attributes);

// New Divice
echo form_label('Въведете нов апарат');
$data_device = array(
	'name' => 'device',
	'placeholder' => 'Device'
	);
echo form_input($data_device);


// Send
$device_btn_send = array(
	'name' => 'submit',
	'value' => 'Изпрати'
	);
echo form_submit($device_btn_send);

// Close
echo form_close();
?>