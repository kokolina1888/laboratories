<div class="form">

	<h2>Избери дата и програма</h2>

	

	<?php 	
	echo form_open('admin/show_users_bydates');
	?>
	<p class="pretty_form">
		<?php	

	//SELECT PROGRAMM DATE
		echo form_label('Изберете дата');

		

		foreach ($programm_dates as $programs) {
			$program_options[$programs['programm_date_id']] = $programs['cicle'];
		}

		$program_date_value = $this->input->post('program_date');
		echo form_error('program_date');
		echo form_dropdown('program_date', $program_options, set_value('program_date', ( ( !empty($program_date_value) ) ? "$program_date_value" : 0 ) ));

		?>
	</p>
	<p class="pretty_form">
		<?php 	

	//SELECT PROGRAMM TYPE
		
		echo form_label('Изберете програма');


		foreach ($programm_types as $pr_types) {
			$pr_types_options[$pr_types['programm_type_id']] = $pr_types['programm_type'];
		}

		$pr_types_value = $this->input->post('program_type');
		echo form_error('program_type');
		echo form_dropdown('program_type', $pr_types_options, set_value('program_type', ( ( !empty($pr_types_value) ) ? "$pr_types_value" : 0 ) ));
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