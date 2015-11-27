<div class="form_bigger">
	<p class="pretty_form">
		<?php echo anchor('programm-dates/add-programm-date-form', 'Добави нова дата', array('class'=>'add'));?>
		<h2>Програми/дати</h2>
	</p>

	<table class="pretty_table">
		<?php 
		$i=1;
		
		echo '<tr><td class="pretty_table"></td>';		
		echo '<td class="pretty_table">Цикъл</td>';
		echo '<td class="pretty_table">Номер на проба</td>';
		echo '<td class="pretty_table">Програма</td>';
		echo '<td class="pretty_table">Дата за анализ</td>';
		echo '<td class="pretty_table">Краен срок за въвеждане</td>';
		echo '<td class="pretty_table"></td>';
		echo '<td class="pretty_table"></td></tr>';
		foreach ($all_programm_dates as $programm_dates) {
			echo '<tr><td>'.$i.'</td>';		
			echo '<td class="pretty_table">'.$programm_dates['cicle'].'</td>';
			echo '<td class="pretty_table">'.$programm_dates['probe_number'].'</td>';
			echo '<td class="pretty_table">'.$programm_dates['programm_type'].'</td>';
			echo '<td class="pretty_table">'.$programm_dates['date_analyse'].'</td>';
			echo '<td class="pretty_table">'.$programm_dates['date_final'].'</td>';

			
			
			
		//to do button промени and delete;
			$i++;
			echo '<td class="pretty_table">'.anchor('programm-dates/update_programm_date_form/'.$programm_dates['programm_date_id'], 'Промени', array('class'=>'change')).'</td>';
			echo '<td class="pretty_table">'.anchor('programm-dates/delete_programm_date/'.$programm_dates['programm_date_id'], 'Изтрий', array('class'=>'delete')).'</tr>';
			
		}

		?>
	</table>
	<p class="pretty_form">
		<?php echo anchor('programm-dates/add-programm-date-form', 'Добави нова дата', array('class'=>'add'));?>
		
	</p>
</div>