
<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');
echo "<div class='form'>";

echo "<h2>Лаборатория ".$user_data['username']."</h2>";
echo "<h3> Програма ". $additional_complex_info[0]['programm_type']."</h3>";



echo form_open('admin/add_aditional_complex_info');

//SELECT PROGRAMM DATE

$data_user = $user_data['user_id'];
echo form_hidden('user_id', $data_user);
$data_username = $user_data['username'];
echo form_hidden('username', $data_username);
$data_programm_type_id = $additional_complex_info[0]['programm_type_id'];
echo form_hidden('programm_type_id', $data_programm_type_id);
$data_programm_type = $additional_complex_info[0]['programm_type'];
echo form_hidden('programm_type', $data_programm_type);

echo '<p class="pretty_form">'.form_label('Изберете дата/цикъл').'</p>';

foreach ($additional_complex_info as $key => $value) {
	$options_programm_dates[$value['programm_date_id']] = $value['cicle'];				
}

			//VALUE SET
echo "<p class='pretty_form'>";

$programm_date_value = $this->input->post('programm_date');

echo form_dropdown('programm_date', $options_programm_dates, ( ( !empty($programm_date_value) ) ? "$programm_date_value" : 0 ) );


echo "</p>";

//SUBMIT THE FORM

$complex_btn = array(
	'name' => 'submit',
	'value' => 'Въведи'
	);

echo form_submit($complex_btn);

echo form_close();
echo "</div>";



//TO DO
/*
ДА ОБРАБОТЯ ТАЗИ ФОРМА ДА ВКАРАМ В БАЗАТА ДАТАТА ЕВЕНТУАЛНО?
ИЛИ ПО-СКОРО ОТ КОНТРОЛЕРА ДА ОГРАНИЧА САМО ТЕСТОВЕТЕ ЗА ТАЗИ ПРОГРАМА И ТАЗИ ДАТА ДА МИ СЕ ПОЯВЯТ В СЛЕДВАЩАТА ФОРМА
complex_info_form.php ТАМ ВЕЧЕ ЩЕ СЕ ВИЖДА ЛАБОРАТОРИЯ ПРОГРАМА, ДАТА, ЗА КОЯТО СТАВА ВЪПРОС И ЩЕ СЕ ИЗБИРАТ ТЕСТОВЕ. КАТО СЕ КОМПЛЕКТОВА ЦЯЛАТА ИНФО - ЗАПИС В БД!*/

