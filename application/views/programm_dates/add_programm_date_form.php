 <div id="add_program_date" class="modalDialog add add_program_date">
 	<?php 

 	
//by default CI uses post method, to use get method you should use html form
 	echo form_open('programm_dates/add_programm_dates');
 	?>


 	<div>
 		<?php 	

	//SELECT PROGRAMM TYPE
 		echo form_label('Изберете програма');

 		foreach ($all_programm_types as $key => $value) {
 			$options[$value['programm_type_id']] = $value['programm_type'];	

 		}
 		echo '<p>'.form_error('programm_type_id').'</p>';
 		echo form_dropdown('programm_type_id', $options, 0);
 		?>
 	</div>
 	<div>
 		<?php 	
//input type=text
 		echo form_label('Въведете цикъл');

 		$data_cicle = array(
 			'name' => 'cicle',
 			'value' => set_value('cicle'),	
 			'placeholder' => 'цикъл',			

 			);
 		echo '<p>'.form_error('cicle').'</p>';
 		echo '<p>'.form_input($data_cicle).'</p>';
 		?>
 	</div>
 	<div>
 		<?php 	
	//INSERT d%

 		echo form_label('Въведете номер на проба');

 		$data_probe_number = array(
 			'name' => 'probe_number',
 			'value' => set_value('probe_number'),	
 			'placeholder' => 'номер на проба',			

 			);
 		echo form_error('probe_number');
 		echo '<p>'.form_input($data_probe_number).'</p>';
 		?>
 	</div>
 	<div>
 		<?php 	
	//INSERT d%

 		echo form_label('Дата за анализ');

 		$data_date_analyse = array(
 			'name' => 'date_analyse',
 			'value' => set_value('date_analyse'),	
 			'placeholder' => 'yyyy-mm-dd',			

 			);
 		echo form_error('date_analyse');
 		echo '<p>'.form_input($data_date_analyse).'</p>';
 		?>
 	</div>
 	<div>
 		<?php 	
//input type=text
	//INSERT d%

 		echo form_label('краен срок за въвеждане');

 		$data_date_final = array(

 			'name' => 'date_final',
 			'value' => set_value('date_final'),	
 			'placeholder' => 'yyyy-mm-dd',			

 			);
 		echo form_error('date_final');
 		echo '<p>'.form_input($data_date_final).'</p>';
 		?>
 	</div>
 	<div>
 		<?php 
//submit button
 		$test_btn = array(
 			'name' => 'submit',
 			'value' => 'Въведи'
 			);

 		echo form_submit($test_btn);
 		?>
 	</div>
 	<?php

 	echo form_close();
 	?>
 </div>