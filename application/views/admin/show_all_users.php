<div class="form_bigger">
	<p class="pretty_form">
		<table class="pretty_table_big">
			<?php 
			echo '<tr>';
			echo '<td class="pretty_table">No</td>';
			echo '<td class="pretty_table">потребител</td>';
			echo '<td class="pretty_table">име</td>';
			echo '<td class="pretty_table">адрес</td>';
			echo '<td class="pretty_table"></td>';
			echo '<td class="pretty_table"></td>';
			echo '</tr>';
			$i = 0;
			foreach ($all_users as $user) {
				$i++;
				echo '<tr>';
				echo '<td class="pretty_table">'.$i.'</td>';
				echo '<td class="pretty_table">'.$user['username'].'</td>';
				echo '<td class="pretty_table">'.$user['lab_name'].'</td>';
				echo '<td class="pretty_table">'.$user['address'].'</td>';
				echo '<td class="pretty_table">'. anchor('admin/update-user-form/'.$user['user_id'], 'Прегледай', array('class' => 'change')).'</td>';
				echo '<td class="pretty_table">'. anchor('admin/delete-user/'.$user['user_id'], 'Изтрий', array('class' => 'delete')).'</td>';
				echo '</tr>';
			}
			?>
		</table>
	</p>
	<p class="pretty_form">
		<?php echo anchor('admin/add-new-user-form', 'Добави нов потребител',  array('class' => 'pretty')); ?>
	</p>
	
</div>