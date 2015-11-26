<div class="form">
	<?php 
	
	$attributes = array (
		'id'	=> 'update_programm_types_form',
		);

//by default CI uses post method, to use get method you should use html form
	echo form_open('programm_types/update-programm-types/'.$programm_type['programm_type_id'], $attributes);
	?>

	<?php 	
//input type=hidden - Lets you generate a standard text input field.
	echo form_hidden('id', $programm_type['programm_type_id']);
	?>
	<p class="pretty_form">
		<?php 

//input type=text
		echo form_label('Променете типа на програмата');
		
		$programm_type_name = array(
			'name' => 'programm_types',	
			'value' => $programm_type['programm_type'],			

			);

	//form_hidden - Lets you generate a standard hidden input field.
		echo form_error('programm_types');		
		echo '<p class="pretty_form">'.form_input($programm_type_name).'</p>';
		?>
	</p>
	<p class="pretty_form">
		<?php		
//submit button
		$progr_btn = array(
			'name' => 'submit',
			'value' => 'Въведи'
			);

		echo form_submit($progr_btn);	

		echo form_close();
		?>
	</p>
</div>