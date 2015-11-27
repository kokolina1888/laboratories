<div class="form_bigger">
	<p class="pretty_form">
		<h2>Добавихте нов потребител</h2>
		</p>
		<table class="pretty_table">
			<?php 
			
			echo '<tr>';
			echo '<td class="pretty_table">потребител</td><td class="pretty_table">'.$user_info['username'].'</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td class="pretty_table">име</td><td class="pretty_table">'.$user_info['lab_name'].'</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td class="pretty_table">адрес</td><td class="pretty_table">'.$user_info['address'].'</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td class="pretty_table">'. anchor('admin/update-user-form/'.$user_info['user_id'], 'Промени информацията', array('class' => 'change')).'</td>';
			echo '<td class="pretty_table">'. anchor('admin/delete-user/'.$user_info['user_id'], 'Изтрий', array('class' => 'delete')).'</td>';
			echo '</tr>';			
			?>
			</table>
		
	</p>
	<p class="pretty_form">
		<?php echo anchor('admin/add-new-user-form', 'Добави нов потребител',  array('class' => 'add')); ?>
	
		<?php echo anchor('admin/show-all-users', 'Всички потребители',  array('class' => 'pretty')); ?>
	</p>
	
</div>