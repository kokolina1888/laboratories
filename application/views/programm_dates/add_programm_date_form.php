 <div class="form">
 <?php echo anchor('programm-dates/show-all-programm-dates', 'назад', array('class'=>'pretty'));?>

 	<?php  	
//by default CI uses post method, to use get method you should use html form
 	echo form_open('programm_dates/add_programm_dates');
 	?>
 	<p class="pretty_form">
 		<?php 	

	//SELECT PROGRAMM TYPE
 		echo form_label('Изберете програма');
 		?>
 	</p>
 	<p class="pretty_form">
 		<?php

 		foreach ($all_programm_types as $key => $value) {
 			$options[$value['programm_type_id']] = $value['programm_type'];	

 		}
 		echo form_dropdown('programm_type_id', $options, 0);
 		?>
 	</p>
 	<p class="pretty_form">
 		<?php 	
//input type=text
 		echo form_label('Въведете цикъл');
 		?>
 	</p>
 	
 	<?php

 	$data_cicle = array(
 		'name' => 'cicle',
 		'value' => set_value('cicle'),	
 		'placeholder' => 'цикъл',			

 		);
 	echo form_error('cicle');
 	?>
 	<p class="pretty_form">
 		<?php 		
 		echo form_input($data_cicle);
 		?>
 	</p>
 	<p class="pretty_form">
 		<?php 	
	//INSERT d%

 		echo form_label('Въведете номер на проба');
 		?>
 	</p>
 	<?php

 	$data_probe_number = array(
 		'name' => 'probe_number',
 		'value' => set_value('probe_number'),	
 		'placeholder' => 'номер на проба',			

 		);
 	echo form_error('probe_number');
 	?>
 	<p class="pretty_form">
 		<?php
 		echo form_input($data_probe_number);
 		?>
 	</p>
 	<p class="pretty_form">
 		<?php 	
	//INSERT d%

 		echo form_label('Дата за анализ');
 		?>
 	</p>
 	<?php

 	$data_date_analyse = array(
 		'name' => 'date_analyse',
 		'value' => set_value('date_analyse'),	
 		'placeholder' => 'yyyy-mm-dd',			

 		);
 	echo form_error('date_analyse');
 	?>
 	<p class="pretty_form">
 		<?php
 		echo form_input($data_date_analyse);
 		?>
 	</p>
 	<p class="pretty_form">
 		<?php 	
//input type=text
	//INSERT d%

 		echo form_label('краен срок за въвеждане');
 		?>
 	</p>
 	<p class="pretty_form">
 		<?php

 		$data_date_final = array(

 			'name' => 'date_final',
 			'value' => set_value('date_final'),	
 			'placeholder' => 'yyyy-mm-dd',			

 			);
 		echo form_error('date_final');
 		?>
 		<p class="pretty_form">
 			<?php
 			echo  form_input($data_date_final);
 			?>
 		</p>
 		<p class="pretty_form">
 			<?php 
//submit button
 			$test_btn = array(
 				'name' => 'submit',
 				'value' => 'Въведи'
 				);

 			echo form_submit($test_btn);
 			?>
 		</p>
 		<?php

 		echo form_close();
 		?>
 	</div>
