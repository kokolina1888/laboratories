<div class="form">
	<p class="pretty_form">
		<?php 
//DISPLAYS ALL PROGRAMS OF A USER IN ORDER TO UPDATE OR DELETE

		echo '<h2>'.$user_info['username'].'</h2>';

		echo "<pre>";

		var_dump($program_requests);

		echo "</pre>";

		echo '<ul>';

		$count = count($program_requests);

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
		?>
	</p>
</div>
