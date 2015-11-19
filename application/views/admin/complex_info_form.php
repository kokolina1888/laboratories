<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');?>


<div id="admin_p_request">

	<h2>Заявки за програми</h2>
	<img src="<?php echo base_url('assets/img/heading_sep.png');?>" alt="Separator">


<?php	//THE PURPOSE OF THIS FORM IS TO CONNECT A USER TO A CERTAIN PROGRAMM TYPE

	echo form_open('admin/add_complex_info');

	//SELECT USER

	echo form_label('Изберете лаборатория');

	foreach ($all_users as $key => $value) {
	$options_user[$value['user_id']] = $value['username'];	

}

//VALUE SET
echo "<p>";

$user_value = $this->input->post('username');

echo form_dropdown('username', $options_user, set_value('username', ( ( !empty($user_value) ) ? "$user_value" : 0 ) ));

echo "</p>";


//SELECT PROGRAMM TYPE
echo form_label('Изберете програма');

foreach ($complex_info as $key => $value) {
$options_programm_type[$value['programm_type_id']] = $value['programm_type'];				
}


//VALUE SET
echo "<p>";

$programm_programm_type = $this->input->post('programm_type');

echo form_dropdown('programm_type', $options_programm_type, ( ( !empty($programm_programm_type) ) ? "$programm_programm_type" : 0 ) );

echo "</p>";


//SUBMIT THE FORM

$complex_btn = array(
'name' => 'submit',
'value' => 'Въведи'
);

echo form_submit($complex_btn);

echo form_close();

?>
</div>