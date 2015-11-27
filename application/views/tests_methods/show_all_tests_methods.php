<div class="form_bigger">
	<p class="pretty_form">
		<?php echo anchor('test-methods/add-test-method-form', 'Добави нов метод/тест', array('class'=>'add'));?>
		<h2>Тестове и методи за изследването им</h2>
	</p>
	<table class="pretty_table">
		<?php 

		$i=1;
		echo "<tr>";

		echo '<td class="pretty_table"></td>';

		echo '<td class="pretty_table"> Тест </td>';
		echo '<td class="pretty_table"> Метод </td>';
		echo '<td></td><td></td>';

		echo "</tr>";
		foreach ($all_tests_methods as $tests) {

			echo '<tr>';
			echo '<td class="pretty_table">'.$i.'</td>';

			echo '<td class="pretty_table">'.$tests['test'].'</td>';
			echo '<td class="pretty_table">'.$tests['method'].'</td>';

			echo '<td class="pretty_table">'.anchor('test-methods/update-test-method-form/'.$tests['test_method_id'], 'Промени', array('class'=>'change')).'</td>';
			echo '<td class="pretty_table">'.anchor('test-methods/delete-test-method/'.$tests['test_method_id'], 'Изтрий', array('class'=>'delete')).'</tr>';
			$i++;

		}
		?>
	</table>
	<p class="pretty_form">
		<?php echo anchor('test-methods/add-test-method-form', 'Добави нов метод/тест', array('class'=>'add'));?>		
	</p>

</div>

