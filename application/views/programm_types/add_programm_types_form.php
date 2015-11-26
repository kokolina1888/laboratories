<div class="form">
	<?php 
	$attributes = array (
		'id'	=>'programm_types_form',
		);

//by default CI uses post method, to use get method you should use html form
	echo form_open('programm_types/add_programm_types', $attributes);
	?>
	<p class="pretty_form">
		<?php 	
//input type=text
		echo form_label('Въведете нов тип програма');

		$data_programm_type = array(
			
			'name' => 'programm_types',	
			'placeholder' => 'тип програма',			

			);
	//form_input - Lets you generate a standard text input field.
		echo form_error('programm_types');
		echo '<p class="pretty_form">'.form_input($data_programm_type).'</p>';
		?>
	</p>
	<p class="pretty_form">
		<?php
		
//submit button
		$progr_btn_enter = array(
			'name' => 'submit',
			'value' => 'Въведи'
			);

		echo form_submit($progr_btn_enter);
		?>
	</p>

	<?php

	echo form_close();
	?>
</div>