<?php 
echo "<div class='form'>";
echo "<p class='pretty_form'>Успешен запис!</p>";
?>
<p class="pretty">
<?php

//LOAD THE RECORD JUST MADE



echo '<p class="pretty"> потребител '.$program_info[0]['username'].'</p>';
echo '<p class="pretty"> лаборатория '.$program_info[0]['lab_name'].'</p>';
echo '<p class="pretty"> адрес '.$program_info[0]['address'].'</p>';
echo '<p class="pretty"> програма '.$program_info[0]['programm_type'].'</p>';
echo '<p class="pretty"> дата '.$program_info[0]['cicle'].'</p>';
echo '<p class="pretty"> тестове, с които участва в оценката'.'</p>';
echo '<ol class="beauty">';
foreach ($program_info as $value) {
	echo '<li>'.$value['test'].'</li>';
}
echo '</ol>';
?>
</p>
<?php

//LOAD UPDATE
echo anchor('admin/update-user-program-user'.'/'.$program_info[0]['programm_type_id'].'/'.$program_info[0]['programm_date_id'].'/'.$program_info[0]['user_id'], 'Променете заявката', array('class' => 'change'));


//LOAD DELETE 
echo anchor('admin/delete-user-program-user'.'/'.$program_info[0]['programm_type_id'].'/'.$program_info[0]['programm_date_id'].'/'.$program_info[0]['user_id'], 'Изтрийте заявката', array('class' => 'delete'));


//ADD ANOTHER RECORD - 
echo anchor('admin/programs-requests', 'Добави нова програма', array('class' => 'add'));


echo "</div>";