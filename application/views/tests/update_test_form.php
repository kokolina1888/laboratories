<div class="form_big">
	<?php echo anchor('tests/show-all-tests', 'назад', array('class'=>'pretty'));?>

	<?php 

	$attributes = array (
		'id'	=>'tests_form',
		'class'	=>'form-horizontal');

//by default CI uses post method, to use get method you should use html form
	echo form_open('tests/update_test/'.$test_data['test_id'], $attributes);
	?>
	<p class="pretty_form">
		<?php 	

		echo form_hidden('test_id', $test_data['test_id']);
//input type=text
	//INSERT TEST NAME

		echo form_label('Въведете изследване');
		?>
	</p>
	<?php
	$data_test = array(
		'name' => 'test',	
		'value' => $test_data['test'],	
		
		);
	echo form_error('test');
	echo '<p class="pretty_form">'.form_input($data_test).'</p>';
	?>
	<p class="pretty_form">
		<?php 	
//
	//SELECT UNITS
		echo form_label('Изберете единици за измерване');
		?>
	</p>
	<p class="pretty_form">

		<?php


		foreach ($all_units as $key => $value) {
			$options[$value['unit_id']] = $value['unit'];
		}


	//TO DO


		echo form_dropdown('unit', $options, $test_data['unit_id']);
		?>
	</p>
	<p class="pretty_form">

		<?php 	
//
	//SELECT PROGRAMM TYPE
		echo form_label('Изберете програма');
		?>
	</p>
	<p class="pretty_form">
		<?php

		foreach ($all_programm_types as $key => $value) {
			$options_programm[$value['programm_type_id']] = $value['programm_type'];
		}
		echo form_dropdown('programm_type', $options_programm, $test_data['programm_type_id']);
		?>
	</p>
	<p class="pretty_form">
		<?php 	
//input type=text
	//INSERT d%

		echo form_label('Въведете стойност за d%');
		?>
	</p>
	<?php

	$data_test = array(
		'name' => 'd_percent',	
		'value' => $test_data['d_percent'],			

		);
	echo form_error('d_percent');
	echo '<p class="pretty_form">'.form_input($data_test).'</p>';
	?>
	<p class="pretty_form">

		<?php

//submit button
		$test_btn = array(
			'class' => 'btn btn-info', 
			'name' => 'submit',
			'value' => 'Въведи'
			);

		echo form_submit($test_btn);
		?>
	</p>
	<?php

	echo form_close();
	?>
</div>