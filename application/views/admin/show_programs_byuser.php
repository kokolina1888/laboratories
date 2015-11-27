<?php 
$count = count($program_info);
?>
<div class="form_bigger">
	<p class="pretty">
		<?php
		echo 'Потребител '.$user_info['username'];
		?>
	</p>
	<?php

	if ($count > 0) 	
	{
		echo '<ul class ="pretty">';
		foreach ($program_info as $value) {
			echo '<li>програма '.$value['programm_type'].'-'.$value['cicle'].'</li>';
			echo '<li>'. anchor('admin/update_user_program_user/'.$value['programm_type_id'].'/'.$value['programm_date_id'].'/'.$user_info['user_id'], 'Промени', array('class'=>'change'));
			echo anchor('admin/delete_user_program_user/'.$value['programm_type_id'].'/'.$value['programm_date_id'].'/'.$user_info['user_id'], 'Изтрий', array('class'=>'delete')).'</li>';
			
		}
		echo '</ul>';
	}
	else 
	{
		
		?>
		
		<p class="pretty">
			Няма заявки за програми
		</p>
		<?php
//	TO DO - ADD PROGRAM TO USER BY ID
		echo '<p class="pretty_form">'. anchor('admin/programs-requests', 'заяви програма', array('class' => 'add'));
		echo anchor('admin/show', 'Начало', array('class' => 'pretty')).'</p>';
	}
	?>
</div>