<div class="form">
 <?php echo anchor('tests/show-all-tests', 'назад', array('class'=>'pretty'));?>

	<?php 

	$attributes = array (
		'id'	=>'tests_form',
		'class'	=>'form-horizontal');

//by default CI uses post method, to use get method you should use html form
	echo form_open('tests/add_tests', $attributes);
	?>
	<p class="pretty_form">
		<?php 	
//input type=text
	//INSERT TEST NAME

		echo form_label('Въведете изследване');
		?>
	</p>
	<?php

	$data_test = array(
		
		'name' => 'test',	
		'value' => set_value('test'),
		'placeholder' => 'изследване',			

		);
	echo form_error('test');
	echo '<p class="pretty_form">'.form_input($data_test).'</p>';
	?>
	<p class="pretty_form">
		<?php 	
//
	//SELECT UNITS
		echo form_label('Изберете мерни единици');
		?>
	</p>
	<p class="pretty_form">
		<?php

	//var_dump($all_units);
		foreach ($all_units as $unit) {
			$unit_options[$unit['unit_id']] = $unit['unit'];
		}
		echo form_dropdown('unit', $unit_options, 0);
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

	//var_dump($all_units);
		foreach ($all_programm_types as $programm_type) {
			$options[$programm_type['programm_type_id']] =$programm_type['programm_type'];
		}
		echo form_dropdown('programm_type', $options, 0);
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
		'class' => 'form-control',	
		'name' => 'd_percent',
		'value' => set_value('d_percent'),	
		'placeholder' => 'd%',			

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