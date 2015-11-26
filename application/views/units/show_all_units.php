<div class="form">
<p class="pretty_form">
		<?php 
		echo anchor('units/add-units', 'Добави нова единица', array('class'=>'add'));
		?>
	</p>
	<h2>Единици за измерване</h2>


	<table class="pretty_table_big">
		<?php 
		$i=1;
		foreach ($all_units as $units) {
			echo '<tr>';
			echo '<td class="pretty_table">'.$i.'</td>';
			echo '<td class="pretty_table">'.$units['unit'].'</td>';
			echo '<td class="pretty_table">'.anchor('units/update-units-form/'.$units['unit_id'], 'Промени', array('class'=>'change')).'</td>';
			echo '<td class="pretty_table">'.anchor('units/delete-units/'.$units['unit_id'], 'Изтрий', array('class'=>'delete')).'</td>';

		//to do промени и изтрий като бутони и линкнати;
			$i++;
			echo '</tr>';

		}


		?>
	</table>
</div>
