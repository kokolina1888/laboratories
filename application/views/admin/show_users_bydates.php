<div class="form_bigger">
	<h2>Лаборатории, участващи в</h2>
	<h3>програма <?php echo $program_type['programm_type'];?></h3>

	<h3>цикъл <?php echo $cicle['cicle']; ?></h3>
	<p class="pretty_form">
	<?php 

//COUNTS THE NUMBER OF TESTS THE USER WILL EVALUATE
	$count = count($user_info);
	
	echo '<ul>';
	echo '<li>';
	echo $user_info[0]['username'];
	echo '<ul><li>';
	echo $user_info[0]['test'];
	echo '</li>';
	for ($i=1; $i < $count ; $i++) 
	{ 
		if ($user_info[$i]['user_id'] === $user_info[$i-1]['user_id']) 
		{
			echo '<li>';		
			echo $user_info[$i]['test'];
			echo '</li>';
		}
		else 
		{
			echo '<p>';
			echo '<a class="change" href="'.base_url('admin/update_user_program_user').'/'.$program_type['programm_type_id'].'/'.$cicle['programm_date_id'].'/'.$user_info[$count-1]['user_id'].' ">Промени</a>';
			echo '<a class="delete" href="'.base_url('admin/delete_user_program_user').'/'.$program_type['programm_type_id'].'/'.$cicle['programm_date_id'].'/'.$user_info[$count-1]['user_id'].' ">Изтрий</a>';
			echo '</p>';
			echo '</ul>';
			echo '<li>'.$user_info[$i]['username'];
			echo '<ul><li>';
			echo $user_info[$i]['test'];
			echo '</li>';
		}
	}
	echo '<p>';
	echo '<a class="change" href="'.base_url('admin/update_user_program_user').'/'.$program_type['programm_type_id'].'/'.$cicle['programm_date_id'].'/'.$user_info[$count-1]['user_id'].'">Промени</a>';
	echo '<a class="delete" href="'.base_url('admin/delete_user_program_user').'/'.$program_type['programm_type_id'].'/'.$cicle['programm_date_id'].'/'.$user_info[$count-1]['user_id'].'">Изтрий</a>';
	echo '<p>';
	echo '</ul>';
	?>
	</p>
</div>