<div class="form">
	<p class="pretty_form">
		<h2>Заявки за програми</h2>
	</p>
	<p class="pretty_form">
		<img src="<?php echo base_url('assets/img/heading_sep.png');?>" alt="Separator">
	</p>


<?php	//THE PURPOSE OF THIS FORM IS TO CONNECT A USER TO A CERTAIN PROGRAMM TYPE

echo form_open('admin/add-complex-info');


	//SELECT USER
echo "<p class='pretty_form'>";

echo form_label('Изберете лаборатория');

echo '</p>';

echo "<p class='pretty_form'>";

foreach ($all_users as $key => $value) {
	$options_user[$value['user_id']] = $value['username'];	
	;

}

//VALUE SET


$user_value = $this->input->post('username');

echo form_dropdown('username', $options_user, set_value('username', ( ( !empty($user_value) ) ? "$user_value" : 0 ) ));

echo "</p>";


echo "<p class='pretty_form'>";

//SELECT PROGRAMM TYPE
echo form_label('Изберете програма');

echo "</p>";


echo "<p class='pretty_form'>";

foreach ($complex_info as $key => $value) {
	$options_programm_type[$value['programm_type_id']] = $value['programm_type'];	
}


//VALUE SET


$programm_programm_type = $this->input->post('programm_type');

echo form_dropdown('programm_type', $options_programm_type, ( ( !empty($programm_programm_type) ) ? "$programm_programm_type" : 0 ) );

echo "</p>";


//SUBMIT THE FORM



echo "<p class='pretty_form'>";


$complex_btn = array(
	'name' => 'submit',
	'value' => 'Въведи'
	);

echo form_submit($complex_btn);

echo "</p>";

echo form_close();

?>
</div>