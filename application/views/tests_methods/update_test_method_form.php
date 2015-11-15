<?php 
$attributes = array (
	'id'	=>'add_tests_methods_form',
	'class'	=>'form-horizontal');

//by default CI uses post method, to use get method you should use html form
echo form_open('test_methods/update_test_method', $attributes);
?>

<div class="form-group">
	<?php 
	echo form_hidden('test_method_id', $test_method['test_method_id']);
	
	echo form_label('Изберете нов метод за този тест');

	echo '<p>'.$test_method['test'].'</p>';
	echo form_hidden('test', $test_method['test_id']);

//echo "<pre>";
//var_dump($test_method);
//echo "</pre>";
	
	
	?>
	
</div>
<div class="form-group">

	<?php 	
//
	//SELECT PROGRAMM TYPE
	echo form_label('Изберете нов метод');

	//var_dump($all_units);
	foreach ($all_methods as $methods) {
		$m_options[$methods['method_id']] = $methods['method'];
	}

			//$method_value = $this->input->post('method');

	echo '<p>'.form_error('method').'</p>';
	echo form_dropdown('method', $m_options, $test_method['method_id']);
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