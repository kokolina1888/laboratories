<?php 

$attributes = array (
	'id'	=>'tests_form',
	'class'	=>'form-horizontal');

//by default CI uses post method, to use get method you should use html form
echo form_open('tests/add_tests', $attributes);
?>

<div class="form-group">
	<?php 	
//input type=text
	//INSERT TEST NAME

	echo form_label('Въведете изследване');

	$data_test = array(
		'class' => 'form-control',	
		'name' => 'test',	
		'value' => set_value('test'),
		'placeholder' => 'изследване',			

		);
	echo '<p>'.form_error('test').'</p>';
	echo '<p>'.form_input($data_test).'</p>';
	?>
</div>
<div class="form-group">
	<?php 	
//
	//SELECT UNITS
	echo form_label('Изберете мерни единици');

	//var_dump($all_units);
	foreach ($all_units as $unit) {
		$unit_options[$unit['unit_id']] = $unit['unit'];
			}
	echo '<p>'.form_error('unit').'</p>';
	echo form_dropdown('unit', $unit_options, 0);
	?>
</div>
<div class="form-group">
	<?php 	
//
	//SELECT PROGRAMM TYPE
	echo form_label('Изберете програма');

	//var_dump($all_units);
	foreach ($all_programm_types as $programm_type) {
		$options[$programm_type['programm_type_id']] =$programm_type['programm_type'];
			}
	echo '<p>'.form_error('programm_type').'</p>';
	echo form_dropdown('programm_type', $options, 0);
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
		'value' => set_value('d_percent'),	
		'placeholder' => 'd%',			

		);
	echo '<p>'.form_error('d_percent').'</p>';
	echo '<p>'.form_input($data_test).'</p>';
	?>
</div>
<div class="form-group">

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