<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

echo form_open('admin/add_comlex_info');

//SELECT USER

foreach ($all_users as $key => $value) {
		$options[$value['user_id']] = $value['user'];	
			
			}

			//ERROR TO BE DISPLAYED??
	echo form_error('');

	//VALUE TO BE SET???
	echo form_dropdown('user_id', $options, ?);


//SELECT PROGRAMM DATE

	foreach ($all_programm_dates as $key => $value) {
		$options[$value['?']] = $value['?'];	
			
			}

			//ERROR TO BE DISPLAYED??
	echo form_error('');

	//VALUE TO BE SET???
	echo form_dropdown('programm_date', $options, ?);

//SELECT PROBE NUMBER THAT HAS BEEN SENT TO THE USER

	foreach ($all_probe_numbers as $key => $value) {
		$options[$value['?']] = $value['?'];	
			
			}

			//ERROR TO BE DISPLAYED??
	echo form_error('');

	//VALUE TO BE SET???
	echo form_dropdown('?', $options, ?);

//SELECT THE TESTS TO BE PERFORMED BY THE USER, CHECKBOX

	/*$data = array(
    'name'        => 'newsletter',
    'id'          => 'newsletter',
    'value'       => 'accept',
    'checked'     => TRUE,
    'style'       => 'margin:10px',
    );

echo form_checkbox($data);

// Would produce:

<input type="checkbox" name="newsletter" id="newsletter" value="accept" checked="checked" style="margin:10px" />*/

записа в базата данни ще става с масив?, защото от чекбокса ще имам няколко стойност за тестовете



//SUBMIT THE FORM

$complex_btn = array(
	'name' => 'submit',
	'value' => 'Въведи'
	);

echo form_submit($test_btn);

echo form_close();

