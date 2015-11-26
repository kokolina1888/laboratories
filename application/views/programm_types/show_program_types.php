<div class="form">
	<p class="pretty_form">
	<?php 
	echo anchor('programm_types/add-programm-types', 'Добави нова програма', array('class'=>'add'));
	?>
		<h2>Видове програми</h2>
	</p>

	<table class="pretty_table_big">
		<?php 
		$i=1;
		
		foreach ($all_programm_types as $programm_types) {
			echo '<tr><td class="pretty_table">'.$i.'</td>';		
			echo '<td class="pretty_table">'.$programm_types['programm_type'].'</td>';
			
		//to do промени;
			$i++;
			echo '<td>'.anchor('programm_types/update_programm_types_form/'.$programm_types['programm_type_id'], 'Промени', array('class'=>'change')).'</td>';
			echo '<td>'.anchor('programm_types/delete-programm-types/'.$programm_types['programm_type_id'], 'Изтрий', array('class'=>'delete')).'</td>';
			
			
		}


		?>
	</table>
</div>
