<?php 

$attributes = array (
	'id'	=>'tests_form',
	'class'	=>'form-horizontal');

//by default CI uses post method, to use get method you should use html form
echo form_open('programm_dates/add_programm_dates', $attributes);
?>


<div class="form-group">
	<?php 	
//
	//SELECT PROGRAMM TYPE
	echo form_label('Изберете програма');
/*echo "<pre>";
var_dump($all_programm_types);
echo "</pre>";*/
	foreach ($all_programm_types as $key => $value) {
		$options[$value['programm_type_id']] = $value['programm_type'];	
			
			}
	echo '<p>'.form_error('programm_type_id').'</p>';
	echo form_dropdown('programm_type_id', $options, 0);
	?>
</div>
<div class="form-group">
	<?php 	
//input type=text
	echo form_label('Въведете цикъл');

	$data_cicle = array(
		'class' => 'form-control',	
		'name' => 'cicle',
		'value' => set_value('cicle'),	
		'placeholder' => 'цикъл',			

		);
	echo '<p>'.form_error('cicle').'</p>';
	echo '<p>'.form_input($data_cicle).'</p>';
	?>
</div>
<div class="form-group">
	<?php 	
//input type=text
	//INSERT d%

	echo form_label('Въведете номер на проба');

	$data_probe_number = array(
		'class' => 'form-control',	
		'name' => 'probe_number
',
		'value' => set_value('probe_number
'),	
		'placeholder' => 'номер на проба',			

		);
	echo '<p>'.form_error('probe_number
').'</p>';
	echo '<p>'.form_input($data_probe_number
).'</p>';
	?>
</div>
<div class="form-group">
	<?php 	
//input type=text
	//INSERT d%

	echo form_label('Дата за анализ');

	$data_date_analyse = array(
		'class' => 'form-control',	
		'name' => 'date_analyse',
		'value' => set_value('date_analyse'),	
		'placeholder' => 'yyyy-mm-dd',			

		);
	echo '<p>'.form_error('date_analyse').'</p>';
	echo '<p>'.form_input($data_date_analyse).'</p>';
	?>
</div>

<div class="form-group">
	<?php 	
//input type=text
	//INSERT d%

	echo form_label('краен срок за въвеждане');

	$data_date_final = array(
		'class' => 'form-control',	
		'name' => 'date_final',
		'value' => set_value('date_final'),	
		'placeholder' => 'yyyy-mm-dd',			

		);
	echo '<p>'.form_error('date_final').'</p>';
	echo '<p>'.form_input($data_date_final).'</p>';
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