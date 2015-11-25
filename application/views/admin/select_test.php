<div class="form">
<?php 
echo "<h1> лаборатория ".$username."</h1>";
echo "<h3> програма " .$programm_type. "</h3>";
echo "<h4>".$programm_date['cicle']."</h4>";


//select tests after selected user, programm type and date

//SELECT THE TESTS TO BE PERFORMED BY THE USER, CHECKBOX
echo form_open('admin/final_complex_info');

echo form_hidden('user_id', $user_id);
echo form_hidden('programm_type_id', $programm_type_id);
echo form_hidden('programm_date_id', $programm_date['programm_date_id']);


echo form_label('Изберете тестове, с които ще участва лабораторията');
echo "<p class='pretty_form'>";

$count_all_tests = count($tests);
//echo $count_all_tests;

for ($i=0; $i < $count_all_tests; $i++) { 

	$data[$i]['name'] = 'test[]';
	$label[$i] = $tests[$i]['test'];
	$data[$i]['value'] = $tests[$i]['test_id'];

	echo $label[$i];
	echo form_checkbox($data[$i]);

}
echo "</p>";
//SUBMIT THE FORM

$complex_btn = array(
	'name' => 'submit',
	'value' => 'Запиши'
	);

echo form_submit($complex_btn);

echo form_close();

?>
</div>