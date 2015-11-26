<div class="form_big">

	<p class="pretty_form">
	<?php echo anchor('methods/add-method', 'Добави нов метод', array('class'=>'add'))?>
		<h2>
			Методи за изследване
			
		</h2>
	</p2>
	

	<table class="pretty_table">
		<?php 
		$i=1;


		foreach ($all_methods as $methods) {
			?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $methods['method']; ?></td>
				<td><?php echo anchor('methods/update-method-form/'.$methods['method_id'], 'Промени', array('class' => 'change'))?></td>
				<td><?php echo anchor('methods/delete-method/'.$methods['method_id'], 'Изтрий', array('class' => 'delete'))?></td>
			</tr>
			<?php 
			$i++;
		}

		?>
	</table>
	<p class="pretty_form">
	<?php echo anchor('methods/add-method', 'Добави нов метод', array('class'=>'add'))?>
	</p>
</div>