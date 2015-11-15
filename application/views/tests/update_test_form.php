<?php 

$attributes = array (
	'id'	=>'tests_form',
	'class'	=>'form-horizontal');

//by default CI uses post method, to use get method you should use html form
echo form_open('tests/update_test', $attributes);
?>

<div class="form-group">
	<?php 	

	echo form_hidden('test_id', $test_data['test_id']);
//input type=text
	//INSERT TEST NAME

	echo form_label('Въведете изследване');

	$data_test = array(
		'class' => 'form-control',	
		'name' => 'test',	
		'value' => $test_data['test'],	
		
		);
	echo '<p>'.form_input($data_test).'</p>';
	?>
</div>
<div class="form-group">
	<?php 	
//
	//SELECT UNITS

	
	foreach ($all_units as $key => $value) {
		$options[$value['unit_id']] = $value['unit'];
	}

			
	//TO DO
	

	echo form_dropdown('unit', $options, $test_data['unit_id']);
	?>
</div>
<div class="form-group">
	<?php 	
//
	//SELECT PROGRAMM TYPE
	echo form_label('Изберете програма');
	
	foreach ($all_programm_types as $key => $value) {
		$options_programm[$value['programm_type_id']] = $value['programm_type'];
	}
	echo form_dropdown('programm_type', $options_programm, $test_data['programm_type_id']);
	?>
</div>
<div class="form-group">
	<?php 	
//input type=text
	//INSERT d%

	echo form_label('Въведете стойност за d%');

	$data_test = array(
		'class' => 'form-control',	
		'name' => 'd_percent',	
		'value' => $test_data['d_percent'],			

		);
	echo '<p>'.form_input($data_test).'</p>';
	?>
</div>

<?php

//submit button
$test_btn = array(
	'class' => 'btn btn-info', 
	'name' => 'submit',
	'value' => 'Въведи'
	);

echo form_submit($test_btn);
?>
</div>
<?php

echo form_close();