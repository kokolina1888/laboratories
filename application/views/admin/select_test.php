<?php 

//select tests after selected user, programm type and date

//SELECT THE TESTS TO BE PERFORMED BY THE USER, CHECKBOX
echo form_open();

echo form_label('Изберете тестове, с които ще участва лабораторията');
echo "<p>";

$count_all_tests = count($additional_complex_info);
echo $count_all_tests;

for ($i=0; $i < $count_all_tests; $i++) { 

	$data[$i]['name'] = 'test';
	$data[$i]['label'] = $additional_complex_info[$i]['test'];
	$data[$i]['value'] = $additional_complex_info[$i]['test_id'];

	echo $data[$i]['label'];
	echo form_checkbox($data[$i]);

}
echo "</p>";
//SUBMIT THE FORM

$complex_btn = array(
	'name' => 'submit',
	'value' => 'Въведи'
	);

echo form_submit($complex_btn);

echo form_close();

