<div class="form">
	<p class="pretty_form">
		<!--TO BE SEPARATED ON ACTIVE AND UNACTIVE PROGRAMS-->
		<h2><?php echo $username;?>
			<p>Списък на програмите, в които участвате</p> 
		</h2>
		<p class="pretty_form">
			<img src="<?php echo base_url('assets/img/heading_sep.png');?>" alt="Separator">
		</p>		
	</p>
	<p class="pretty_form">
		<ul class="pretty">
			<?php 
			$count = count($user_programs);
			echo '<li class="pretty">'.$user_programs[0]['programm_type'].'-'.$user_programs[0]['cicle'].'</li>';
			echo '<ul class="pretty"><li>';
			echo anchor('user/update_program_data_form'.'/'.$user_programs[0]['programm_type_id'].'/'.$user_programs[0]['programm_date_id'].'/'.$user_programs[0]['user_id'], 'Промени!', array('class' => 'change'));
			echo anchor('user/delete_program_data'.'/'.$user_programs[0]['programm_type_id'].'/'.$user_programs[0]['programm_date_id'].'/'.$user_programs[0]['user_id'], 'Изтрий!', array('class' => 'delete'));
			echo '</li></ul>';

			for ($i=1; $i < $count ; $i++) 
			{ 

				if ($user_programs[$i]['programm_type_id'] !== $user_programs[$i-1]['programm_type_id']) 
				{

					echo '<li class="pretty">'.$user_programs[$i]['programm_type'].'-'.$user_programs[$i]['cicle'].'</li>';
					echo '<ul class="pretty"><li>';
					echo anchor('user/update_program_data_form'.'/'.$user_programs[$i]['programm_type_id'].'/'.$user_programs[$i]['programm_date_id'].'/'.$user_programs[$i]['user_id'], 'Промени!', array('class' => 'change'));
					echo anchor('user/delete_program_data'.'/'.$user_programs[$i]['programm_type_id'].'/'.$user_programs[$i]['programm_date_id'].'/'.$user_programs[$i]['user_id'], 'Изтрий!', array('class' => 'delete'));
					echo '</li></ul>';
				}
			}
			?>
		</ul>		
	</p>
</div>