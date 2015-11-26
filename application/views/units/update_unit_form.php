<div class="form">
	<?php 

	$attributes = array (
		'id'	=>'units_form',
		'class'	=>'form-horizontal');

//by default CI uses post method, to use get method you should use html form
	echo form_open('units/update_units/'.$data_unit['unit_id'], $attributes);
	?>

	<p class="pretty_form">
		<?php 	
	//input type=hidden - Lets you generate a standard text input field.
		echo form_hidden('unit_id', $data_unit['unit_id']);

//input type=text
		echo form_label('Променете единиците за измерване');
		?>
	</p>
	<?php

	$data = array(
		'class' => 'form-control',	
		'name' => 'unit',	
		'value' => $data_unit['unit'],			

		);
	echo form_error('unit');
	echo '<p class="pretty_form">'.form_input($data).'</p>';
	?>
	<p class="pretty_form">

		<?php

//submit button
		$unit_btn_enter = array(
			'class' => 'btn btn-info', 
			'name' => 'submit',
			'value' => 'Въведи'
			);

		echo form_submit($unit_btn_enter);
		?>
	</p>
	<?php

	echo form_close();
	?>
</div>