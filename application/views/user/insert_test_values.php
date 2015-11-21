<?php 

echo "<pre>";
var_dump($test_methods);
echo "</pre>";
echo "<pre>";
var_dump($program_tests);
echo "</pre>";
/*echo "<pre>";
var_dump($units);
echo "</pre>";*/
?>

<!---FINAL STEP OF USER ADDING DATA TO DB-->

<div id="admin_add">

	<h2><?php echo $username;?>, въведете стойности по програма <?php echo $program_tests[0]['programm_type']; ?>, </h2>

	<?php echo '<p> Цикъл '.$program_tests[0]['cicle'].'</p>';
	echo 'Дата на въвеждане ' . date('d-m-Y');


	?>

	<img src="<?php echo base_url('assets/img/heading_sep.png');?>" alt="Separator">

	<?php echo form_open('user/add_data_final');?>

	<div>
		<table border="1">
			<tr>
				<?php 
				$number = 0;

				foreach ($program_tests as $test) {
					$number++;
					echo '<td>'.$number.'</td>';
					
					echo '<td>'.$test['test'].'</td>';

					//RETRIEVES THE UNIT
					foreach ($units as $value) {
						if ($value['unit_id'] === $test['unit_id']) {
							echo '<td>'.$value['unit'].'</td>';
						}
					}//end of retrieving units

					echo '<td>';
					$data_value = array(
						'name' => 'value',	
						'value' => set_value('value'),
						'placeholder' => 'въведете стойността, която сте получили ...',			

						);
					echo form_input($data_value);
					echo '</td></tr>';		

					//NEW LINE, SELECT THE METHOD THAT HAS BEEN USED TO PERFORM THE TEST
					//$methods['method']

					echo '<tr>';	
					echo '<td></td>';
					echo '<td>Изберете метод</td>';	
					echo '<td colspan="2">';

					foreach ($test_methods as $methods) {
							if ($methods['test_id'] === $test['test_id']) {
							$options[$methods['method_id']]=$methods['method'];
							
						}
					}

					echo form_dropdown('methods', $options);


					echo '</td>';

					echo '</tr>';
					
				}

				?>
			</tr>
		</table>
	</div>
	<div>
		<?php
//SUBMIT BUTTON
		$submit_button = array(
			'name' => 'submit',
			'value' => 'Запиши!'
			);

		echo form_submit($submit_button);
		?>
	</div>
	<?php

	echo form_close();

	?>
</div>