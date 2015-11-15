<?php 
$attributes = array (
	'id'	=>'add_tests_methods_form',
	'class'	=>'form-horizontal');

//by default CI uses post method, to use get method you should use html form
echo form_open('test_methods/add_test_method', $attributes);
?>

<div class="form-group">
	<?php 	
//
	//SELECT UNITS
	echo form_label('Изберете ');

	//var_dump($all_units);
	foreach ($tests_options as $tests) {
		$t_options[$tests['test_id']] = $tests['test'];
			}
		$test_value = $this->input->post('test');
	echo '<p>'.form_error('test').'</p>';
	echo form_dropdown('test', $t_options, set_value('test', ( ( !empty($test_value) ) ? "$test_value" : 0 ) ));

	/*<?php
 
 $dd_list = array(
                  '1'   => 'Mr',
                  '2'   => 'Mrs',
                  '3'   => 'Miss',
                );
 
 $dd_name = "title";
 $sl_val = $this->input->post($dd_name);

echo form_dropdown($dd_name, $dd_list, set_value($dd_name, ( ( !empty($sl_val) ) ? "$sl_val" : 3 ) ) );  */

?>

</div>
<div class="form-group">
	<?php 	
//
	//SELECT PROGRAMM TYPE
	echo form_label('Изберете метод');

	//var_dump($all_units);
	foreach ($methods_options as $methods) {
		$m_options[$methods['method_id']] = $methods['method'];
			}

			$method_value = $this->input->post('method');
	echo '<p>'.form_error('method').'</p>';
	echo form_dropdown('method', $m_options, set_value('method', ( ( !empty($method_value) ) ? "$method_value" : 0 ) ));
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