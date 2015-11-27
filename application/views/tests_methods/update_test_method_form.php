<div class="form">
	<?php 
	$attributes = array (
		'id'	=>'add_tests_methods_form',
		'class'	=>'form-horizontal');

//by default CI uses post method, to use get method you should use html form
	echo form_open('test_methods/update_test_method/'.$test_method['test_method_id'], $attributes);
	?>
	<p class="pretty_form">

		<?php 
		echo form_hidden('test_method_id', $test_method['test_method_id']);
		
		echo form_label('Изберете нов метод за този тест');
		?>
	</p>

	<?php

	echo '<p class="pretty_form">'.$test_method['test'].'</p>';
	echo form_hidden('test', $test_method['test_id']);


	?>
	
	<p class="pretty_form">

		<?php 	
//
	//SELECT PROGRAMM TYPE
		echo form_label('Изберете нов метод');
		?>
	</p>
	<p class="pretty_form">
		<?php

	//var_dump($all_units);
		foreach ($all_methods as $methods) {
			$m_options[$methods['method_id']] = $methods['method'];
		}

			//$method_value = $this->input->post('method');

		echo form_dropdown('method', $m_options, $test_method['method_id']);
		?>
	</p>
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
	<?php echo anchor('methods/add-method', 'Добави нов метод', array('class'=>'add')) ?>
</div>
