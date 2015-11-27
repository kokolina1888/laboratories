<div class="form">
	<?php echo anchor('programm-dates/show-all-programm-dates', 'назад', array('class'=>'pretty'));?>


	<?php 
	$attributes = array (
		'id'	=>'tests_form',
		);

//by default CI uses post method, to use get method you should use html form
	echo form_open('programm_dates/update_programm_date/'.$programm_date_data['programm_date_id'], $attributes);
	?>
	<p class="pretty_form">
		<?php 	
		echo form_hidden('programm_date_id', $programm_date_data['programm_date_id']);

	//SELECT PROGRAMM TYPE
		echo form_label('Изберете програма');
		?>
	</p>
	<p class="pretty_form">
		<?php
		foreach ($all_programm_types as $key => $value) {
			$options[$value['programm_type_id']] = $value['programm_type'];		
		}
		echo form_dropdown('programm_type_id', $options, $programm_date_data['programm_type_id']);
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
		'value' => $programm_date_data['cicle'],	
		'placeholder' => 'цикъл',			

		);
	echo form_error('cicle');
	echo '<p class="pretty_form">'.form_input($data_cicle).'</p>';
	?>
	<p class="pretty_form">
		<?php 	
//input type=text
	//INSERT d%

		echo form_label('Променете номера на проба');
		?>
	</p>
	<?php

	$data_probe_number = array(
		
		'name' => 'probe_number',
		'value' => $programm_date_data['probe_number'],	
		'placeholder' => 'номер на проба',			

		);
	echo form_error('probe_number');
	echo '<p class="pretty_form">'.form_input($data_probe_number).'</p>';
	?>
	<p class="pretty_form">
		<?php 	
//input type=text
	//INSERT d%

		echo form_label('Променете датата за анализ');
		?>
		<p class="pretty_form">

			<?php

			$data_date_analyse = array(
				'class' => 'form-control',	
				'name' => 'date_analyse',
				'value' => $programm_date_data['date_analyse'],	
				'placeholder' => 'yyyy-mm-dd',			

				);
				?>
			</p>
			<?php
			echo form_error('date_analyse');
			echo '<p class="pretty_form">'.form_input($data_date_analyse).'</p>';
			?>
		</p>
		<p class="pretty_form">
			<?php 	
//input type=text
	//INSERT d%

			echo form_label('Променете крайния срок за въвеждане');
			?>
		</p>
		<?php

		$data_date_final = array(
			'class' => 'form-control',	
			'name' => 'date_final',
			'value' => $programm_date_data['date_final'],	
			'placeholder' => 'yyyy-mm-dd',			

			);
		echo form_error('date_final');
		echo '<p class="pretty_form">'.form_input($data_date_final).'</p>';
		?>
		<p class="pretty_form">
			<?php 
//submit button
			$submit_btn = array(
				'class' => 'btn btn-info', 
				'name' => 'submit',
				'value' => 'Въведи'
				);

			echo form_submit($submit_btn);
			?>
		</p>
		<?php

		echo form_close();
		?>
	</div>