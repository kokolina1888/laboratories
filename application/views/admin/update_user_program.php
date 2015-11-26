<div class="form">
	<p class="pretty_form">
		<?php 
//DISPLAYS ALL PROGRAMS OF A USER IN ORDER TO UPDATE OR DELETE

		echo '<h2>'.$user_info['username'].'</h2>';
		$count = count($program_requests);
		if ($count>0) {			

		

		echo '<ul>';

		
		echo '<li>'. $program_requests[0]['programm_type'] .'-'. $program_requests[0]['cicle'];
		echo anchor("admin/update_user_program_user/".$program_requests[0]['programm_type_id'].'/'.$program_requests[0]['programm_date_id'].'/'.$program_requests[0]['user_id'], 'Прегледай детайли');
		echo anchor("admin/delete_user_program_user/".$program_requests[0]['programm_type_id'].'/'.$program_requests[0]['programm_date_id'].'/'.$program_requests[0]['user_id'], 'Изтрий');


		for ($i=1; $i < $count; $i++) { 
			if ($program_requests[$i]['programm_type_id'] === $program_requests[$i-1]['programm_type_id'] && $program_requests[$i]['cicle'] === $program_requests[$i-1]['cicle']) 
			{

				echo '</li>';
			}

			else
			{
				echo '<li>'. $program_requests[$i]['programm_type'] .' - '. $program_requests[$i]['cicle'];
				echo anchor("admin/update_user_program_user/".$program_requests[$i]['programm_type_id'].'/'.$program_requests[$i]['programm_date_id'].'/'.$program_requests[$i]['user_id'], 'Прегледай детайли');
				echo anchor("admin/delete_user_program_user/".$program_requests[$i]['programm_type_id'].'/'.$program_requests[$i]['programm_date_id'].'/'.$program_requests[$i]['user_id'], 'Изтрий');
			}
		}


		echo '</li></ul>';
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
	
	</p>
</div>
