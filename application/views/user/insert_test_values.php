<!---FINAL STEP OF USER ADDING DATA TO DB-->
<div class="form">

	<h2><?php echo $username;?>, въведете стойности по програма <?php echo $program_tests[0]['programm_type']; ?>, </h2>

	<?php echo '<p class="pretty_form"> Цикъл '.$program_tests[0]['cicle'].'</p>';
	echo '<p class="pretty_form"> Дата на въвеждане ' . date('d-m-Y').'</p>';


	?>
	

	<p class="pretty_form">
		<img src="<?php echo base_url('assets/img/heading_sep.png');?>" alt="Separator">
	</p>
	
	<?php echo form_open('user/add_data_final/'.$program_tests[0]['programm_type_id'].'/'.$program_tests[0]['programm_date_id']);?>

	
	<table class="pretty_table">
		<?php 
		$number = 0;
		echo form_hidden('programm_type_id', $program_tests[0]['programm_type_id']);
		echo form_hidden('programm_date_id', $program_tests[0]['programm_date_id']);


		foreach ($program_tests as $test) {

			$number++;
			echo '<tr><td class="pretty_table">'.$number.'</td>';

			echo '<td class="pretty_table">'.$test['test'].'</td>';
			echo form_hidden('test_id[]', $test['test_id']);

					//RETRIEVES THE UNIT
			foreach ($units as $value) {
				if ($value['unit_id'] === $test['unit_id']) {
					echo '<td class="pretty_table">'.$value['unit'].'</td>';
				}
					}//end of retrieving units

					echo '<td class="pretty_table">';
					$data_value = array(
						'name' => 'test_value[]',	
						'value' => set_value('test_value[]'),
						'placeholder' => 'въведете стойността, която сте получили ...',			

						);
					echo form_error('test_value[]');
					echo form_input($data_value);
					echo '</td></tr>';		

					//NEW LINE, SELECT THE METHOD THAT HAS BEEN USED TO PERFORM THE TEST
					//$methods['method']

					echo '<tr>';	
					echo '<td class="pretty_table"></td>';
					echo '<td class="pretty_table">Изберете метод</td>';	
					echo '<td colspan="2">';
					

					foreach ($test_methods as $key => $methods) {
						if ($methods['test_id'] === $test['test_id']) {
							$options[$methods['method_id']]=$methods['method'];		
							
						}
					}

					echo form_error('methods[]');
					echo form_dropdown('methods[]', $options);
					$options = NULL;


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