<!---FINAL STEP OF USER ADDING DATA TO DB-->
<div class="form">

	<h2><?php echo $username;?><p>Променете стойностите по програма <?php echo $program_info[0]['programm_type']; ?></p> </h2>

	<?php echo '<p class="pretty_form"> Цикъл '.$program_info[0]['cicle'].'</p>';
	echo '<p class="pretty_form"> Дата на въвеждане ' . date('d-m-Y').'</p>';


	?>
	

	<p class="pretty_form">
		<img src="<?php echo base_url('assets/img/heading_sep.png');?>" alt="Separator">
	</p>
	
	
	<?php 

	//-------MAKE THE POSSIBLE VALUES OF TEST-------------------
	$count_methods = count($test_methods);
	
	
	//--------START OF THE UPDATE FORM ------------------------------------

	echo form_open('user/update_program_test_records/'.$program_info[0]['programm_type_id'].'/'.$program_info[0]['programm_date_id']);



	$date = date('Y-m-d');
	$number = 0;

	echo form_hidden('programm_type_id', $program_info[0]['programm_type_id']);
	echo form_hidden('programm_date_id', $program_info[0]['programm_date_id']);
	echo form_hidden('date_value_added', $date);

	echo '<table class="pretty_table">';




	foreach ($program_info as $test) {

		$number++;
		echo '<tr><td class="pretty_table">'.$number.'</td>';

		echo '<td class="pretty_table">'.$test['test'].'</td>';
		echo form_hidden('test_id[]', $test['test_id']);

//---------------------RETRIEVES THE UNIT----------------------

		foreach ($units as $value) {
			if ($value['unit_id'] === $test['unit_id']) {
				echo '<td class="pretty_table">'.$value['unit'].'</td>';
			}
					}//end of retrieving units



//-------------------VALUES OF TESTS --------------------------

					echo '<td class="pretty_table">';
					$data_value = array(
						'name' => 'test_value[]',	
						'value' => $test['test_value'],
						);
					echo form_error('test_value[]');
					echo form_input($data_value);
					echo '</td></tr>';		

//-------------NEW LINE, SELECT THE METHOD -----------------
//----------------THAT HAS BEEN USED TO PERFORM THE TEST
					

					echo '<tr>';	
					echo '<td class="pretty_table"></td>';
					echo '<td class="pretty_table">Изберете метод</td>';	
					echo '<td colspan="2">';
					
					for ($i=0; $i < $count_methods ; $i++) { 
						if ($test['test_id'] === $test_methods[$i]['test_id']) {
							$methods_options[$test_methods[$i]['method_id']] = $test_methods[$i]['method'];
						}
					}

					echo form_error('methods[]');
					echo form_dropdown('methods[]', $methods_options, $test['method_id']);
					$methods_options = NULL;


					echo '</td>';
					echo '</tr>';

				}

				?>

			</table>

			<p class="pretty_form">
				<?php
//SUBMIT BUTTON
				$submit_button = array(
					'name' => 'submit',
					'value' => 'Запиши!'
					);

				echo form_submit($submit_button);
				?>
			</p>
			<?php

			echo form_close();

			?>
		</div>