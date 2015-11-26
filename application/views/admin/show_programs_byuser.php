<?php 
$count = count($user_programs);
?>
<div class="form">
	<p class="pretty">
		<?php
		echo 'Потребител '.$user_info['username'];
		?>
	</p>
	<?php

	if ($count > 0) 	
	{
		echo '<ul>';
		foreach ($user_programs as $value) {
			echo '<li>програма '.$value['programm_type'].'-'.$value['cicle'].'</li>';
			echo '<li>'. anchor('admin/@', 'Промени');
			echo anchor('admin/@', 'Изтрий').'</li>';
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