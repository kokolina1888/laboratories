
<!---SECOND STEP OF USER ADDING DATA TO DB-->

<div id="admin_add">

	<h2><?php echo $username;?>, изберeте дата по програма <?php echo $program_date[0]['programm_type']?>, за която ще въвеждате данни</h2>

	<img src="<?php echo base_url('assets/img/heading_sep.png');?>" alt="Separator"><br/>

	<?php echo form_open('user/add_data_third');?>

	<div>
		<?php 	

		//STORING THE PROGRAM TYPE ID
		echo form_hidden('program_type', $program_date[0]['programm_type_id']);
		
		
		//SELECT PROGRAMM DATE		

		foreach ($program_date as $pr_date) {
			$program_date_options[$pr_date['programm_date_id']] = $pr_date['cicle'];
		}

		$pr_date_value = $this->input->post('program_date');
		echo form_dropdown('program_date', $program_date_options, set_value('program_date', ( ( !empty($pr_date_value) ) ? "$pr_date_value" : 0 ) ));
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