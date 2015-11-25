<?php
echo "<pre>";
echo "</pre>";
echo "<div class='form'>";
echo "<p class='pretty_form'>Успешно записахте следните данни!!</p>";

echo '<table class="pretty_table">';
echo '<tr><td class="pretty_table" colspan="2">лаборатория</td>';
echo '<td class="pretty_table" colspan="2">'.$program_data[0]['username'].'</td>';
echo '</tr>';
echo '<tr><td class="pretty_table" colspan="2">програма</td>';
echo '<td class="pretty_table" colspan="2">'.$program_data[0]['programm_type'].'</td>';
echo '</tr>';
echo '<tr><td class="pretty_table" colspan="2">дата за анализ</td>';
echo '<td class="pretty_table" colspan="2">'.$program_data[0]['cicle'].'</td>';
echo '</tr>';
echo '<tr><td class="pretty_table" colspan="2">дата на въвеждане</td>';
echo '<td class="pretty_table" colspan="2">'.$program_data[0]['date_value_added'].'</td>';
echo '</tr>';
$count = count($program_data);
for ($i=0; $i < $count; $i++) { 
	echo '<tr><td class="pretty_table">тест №'.($i+1).'</td>';
	echo '<td class="pretty_table">'.$program_data[$i]['test'].'</td>';
	echo '<td class="pretty_table">'.$program_data[$i]['test_value'].'</td>';
	//DISPLAY UNITS AS REAL UNITS!!
	foreach ($units as $key => $value) {
		if ($value['unit_id'] == $program_data[$i]['unit_id']) {
			echo '<td class="pretty_table">'.$value['unit'].'</td>';	
		}
		
	}
	
	echo '</tr>';

	echo '<tr><td class="pretty_table">метод</td>';
	//DISPLAY METHODS AS REAL METHODS!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	foreach ($test_methods as $key => $value) {
		if ($value['method_id'] == $program_data[$i]['method_id']) {
			echo '<td class="pretty_table" colspan="3">'.$value['method'].'</td>';	
		}
		
	}
	
	echo '</tr>';
	
}

echo '</table>';

echo '<p class="pretty_form">';
echo anchor('user/update_program_data_form'.'/'.$program_data[0]['programm_type_id'].'/'.$program_data[0]['programm_date_id'].'/'.$program_data[0]['user_id'], 'Промени!', array('class' => 'change'));
echo anchor('user/delete_program_data'.'/'.$program_data[0]['programm_type_id'].'/'.$program_data[0]['programm_date_id'].'/'.$program_data[0]['user_id'], 'Изтрий!', array('class' => 'delete'));
echo anchor('home_user/index', 'Начало', array('class' => 'pretty'));

echo '</p>';
echo "</div>";
