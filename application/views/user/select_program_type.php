
<!---INITIAL STEP OF USER ADDING DATA TO DB-->

<div id="admin_add">

	<h2><?php echo $username;?>, изберeте програма, за която ще въвеждате данни</h2>

	<img src="<?php echo base_url('assets/img/heading_sep.png');?>" alt="Separator"><br/>

	<?php echo form_open('user/add_data_second');?>

	<div>
		<?php 	
		

	//SELECT PROGRAMM TYPE		

		foreach ($program_type as $program) {
			$program_options[$program['programm_type_id']] = $program['programm_type'];
		}

		$program_value = $this->input->post('program_type');
		echo form_dropdown('program_type', $program_options, set_value('program_type', ( ( !empty($program_value) ) ? "$program_value" : 0 ) ));
		?>
	</div>
	<div>
		<?php
//SUBMIT BUTTON
		$submit_button = array(
			'name' => 'submit',
			'value' => 'Избери'
			);

		echo form_submit($submit_button);
		?>
	</div>
	<?php

	echo form_close();

	?>
</div>