<div class="form">
	<h2 class="login-header">Изберете тест/метод</h2>
	<?php 
	$attributes = array (
		'id'	=>'add_tests_methods_form',
		);

//by default CI uses post method, to use get method you should use html form
	echo form_open('test_methods/add_test_method', $attributes);
	?>
<p class="pretty-form">

	<?php 	

	echo form_label('Изберете тест');

	//var_dump($all_units);
	foreach ($tests_options as $tests) {
		$t_options[$tests['test_id']] = $tests['test'];
	}
	$test_value = $this->input->post('test');
	echo form_dropdown('test', $t_options, set_value('test', ( ( !empty($test_value) ) ? "$test_value" : 0 ) ));

	?>

</p>
<p class="pretty-form">
	<?php 	
//
	//SELECT PROGRAMM TYPE
	echo form_label('Изберете метод');

	//var_dump($all_units);
	foreach ($methods_options as $methods) {
		$m_options[$methods['method_id']] = $methods['method'];
	}

	$method_value = $this->input->post('method');
	echo form_dropdown('method', $m_options, set_value('method', ( ( !empty($method_value) ) ? "$method_value" : 0 ) ));
	?>
</p>
<p class="pretty-form">
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
