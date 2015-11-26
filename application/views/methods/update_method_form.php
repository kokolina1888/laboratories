<div class="form">
	<?php 
	$attributes = array (
		'id'	=>'methods_form',
		);

//by default CI uses post method, to use get method you should use html form
	echo form_open('methods/update-method/'.$method_info['method_id'], $attributes);
	?>

	
	<?php 	
	//input type=hidden - Lets you generate a standard text input field.
	echo form_hidden('method_id', $method_info['method_id']);
	?>
	<p class="pretty_form">
		<?php

//input type=text
		echo form_label('Променете метода за изследване');
		?>
	</p>
	<p class="pretty_form">
		<?php

		$data = array(
			'class' => 'form-control',	
			'name' => 'method',	
			'value' => $method_info['method'],			

			);
		echo form_error('method');
		echo form_input($data);
		?>
	</p>
	<p class="pretty_form">

		<?php
		
//submit button
		$method_btn_enter = array(
			'class' => 'btn btn-info', 
			'name' => 'submit',
			'value' => 'Въведи'
			);

		echo form_submit($method_btn_enter);
		?>
	</p>
	<?php

	echo form_close();
	?>

</div>
