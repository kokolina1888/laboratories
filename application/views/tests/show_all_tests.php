<div class="form_bigger">
	<p class="pretty_form">
		<?php echo anchor('tests/add-tests-form', 'Добави нов тест', array('class'=>'add'));?>
		<h2>Изследвания</h2>
	</p>

	<table class="pretty_table_big">
		<?php 


		$i=1;
		echo "<tr>";

		echo '<td class="pretty_table"></td>';

		echo '<td class="pretty_table"> Тест </td>';
		echo '<td class="pretty_table"> Мерни единици </td>';
		echo '<td class="pretty_table"> d% </td>';
		echo '<td class="pretty_table"> Програма </td><td></td><td></td>';
		

		echo "</tr>";
		foreach ($all_tests as $tests) {

			echo '<tr>';
			echo '<td class="pretty_table">'.$i.'</td>';

			echo '<td class="pretty_table">'.$tests['test'].'</td>';
			echo '<td class="pretty_table">'.$tests['unit'].'</td>';
			echo '<td class="pretty_table">'.$tests['d_percent'].'</td>';
			echo '<td class="pretty_table">'.$tests['programm_type'].'</td>';

			echo '<td class="pretty_table">'.anchor('tests/update-tests-form/'.$tests['test_id'], 'Промени', array('class'=>'change')).'</td>';
			echo '<td class="pretty_table">'.anchor('tests/delete-test/'.$tests['test_id'], 'Изтрий', array('class'=>'delete')).'</td></tr>';

			$i++;

		}
		?>
	</table>
	<p class="pretty_form">
		<?php echo anchor('tests/add-tests-form', 'Добави нов тест', array('class'=>'add'));?>
		
	</p>
</div>