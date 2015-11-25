<!---INITIAL STEP OF USER ADDING DATA TO DB-->

<div class="form">

	<h2><?php echo $username;?>, изберeте програма, за която ще въвеждате данни</h2>
	<p class="pretty_form">

		<img src="<?php echo base_url('assets/img/heading_sep.png');?>" alt="Separator">
	</p>

	<?php echo form_open('user/add_data_second');?>

	<p class="pretty_form">
		<?php 	
		

	//SELECT PROGRAMM TYPE		

		foreach ($program_type as $program) {
			$program_options[$program['programm_type_id']] = $program['programm_type'];
		}

		$program_value = $this->input->post('program_type');
		echo form_dropdown('program_type', $program_options, set_value('program_type', ( ( !empty($program_value) ) ? "$program_value" : 0 ) ));
		?>
	</p>
	<p class="pretty_form">
		<?php
//SUBMIT BUTTON
		$submit_button = array(
			'name' => 'submit',
			'value' => 'Избери'
			);

		echo form_submit($submit_button);
		?>
	</p>
	<?php

	echo form_close();

	?>
</div>