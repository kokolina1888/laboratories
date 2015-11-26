<div class="form">
	<p class="pretty">
		<?php 

		echo "<h2> лаборатория ".$username."</h2>";
		echo "<h3> програма " .$programm_type. "</h3>";
		?>
	</p>
	<p class="pretty">
		<?php
		echo "<h4>".$programm_date['cicle']."</h4>";
		?>
	</p>
	<?php


//select tests after selected user, programm type and date

//SELECT THE TESTS TO BE PERFORMED BY THE USER, CHECKBOX
	echo form_open('admin/final-complex-info/'.$programm_type_id.'/'.$programm_date['programm_date_id'].'/'.$user_id);

	echo form_hidden('user_id', $user_id);
	echo form_hidden('programm_type_id', $programm_type_id);
	echo form_hidden('programm_date_id', $programm_date['programm_date_id']);

	?>
	<p class="beauty">
	<?php
		echo form_label('Изберете тестове, с които ще участва лабораторията');
		?>
	</p>
	<?php

	echo "<p class='pretty_form'>";

	$count_all_tests = count($tests);
	//echo $count_all_tests;

	echo form_error('test[]');

	for ($i=0; $i < $count_all_tests; $i++) { 

	$data[$i]['name'] = 'test[]';
	$label[$i] = $tests[$i]['test'];
	$data[$i]['value'] = $tests[$i]['test_id'];

	echo '<span class="beauty">'.$label[$i].'</span>';

	echo form_checkbox($data[$i]);

}
?>
<p class="pretty">
<?php
//SUBMIT THE FORM

$complex_btn = array(
'name' => 'submit',
'value' => 'Запиши'
);

echo form_submit($complex_btn);
?>
</p>
<?php
echo form_close();

?>
</div>