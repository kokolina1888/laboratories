<div class="form">
	<p class="pretty_form">
		<?php
		
		echo '<h2>'.$update_program[0]['lab_name'].'</h2>';
		echo '<h3>'.$update_program[0]['programm_type'].'</h3>';
		echo '<h3>'.$update_program[0]['cicle'].'</h3>';
		echo '<h4>Променете тестовете за изследване</h4>';


		echo form_open('admin/final_update');

		echo form_hidden('user_id', $update_program[0]['user_id']);
		echo form_hidden('programm_type_id', $update_program[0]['programm_type_id']);
		echo form_hidden('programm_date_id', $update_program[0]['programm_date_id']);


		echo "<p class='pretty_form'>";

		$count_all_tests = count($tests);
		$count = count($update_program);
//echo $count_all_tests;

		for ($i=0; $i < $count_all_tests; $i++) 
		{ 
			$label[$i] = $tests[$i]['test'];

			$data[$i]['name'] = 'test[]';

			$data[$i]['value'] = $tests[$i]['test_id'];

			foreach ($update_program as $value) 
			{

				if ($value['test_id'] === $data[$i]['value']) 
				{
					$data[$i]['checked'] = TRUE;
				}		
			}
			if (($i+1)%5 === 0) {
				echo "</p><p class='pretty_form'>";
			}


			echo $label[$i];	

			echo form_checkbox($data[$i]);

		}
		echo "</p>";


//SUBMIT THE FORM?>
<p class="pretty_form">
	<?php

	$complex_btn = array(
		'name' => 'submit',
		'value' => 'Запиши'
		);

	echo form_submit($complex_btn);


	echo form_close();
	?>
</p>
</p>
</div>