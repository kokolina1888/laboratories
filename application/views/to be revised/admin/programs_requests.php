<div id="admin_p_request">

	<h2>Заявки за програми</h2>
	<img src="../../assets/img/heading_sep.png" alt="Separator"><br/>

	<div class="selects">

		<?php
			echo form_label('Изберете лаборатория:', 'labs');
			$options = array(
                  'lab1'   => 'Laboratory 1',
                  'lab2'   => 'Laboratory 2',
                  'lab3'   => 'Laboratory 3',
                  'lab4'   => 'Laboratory 4',
                );

			echo form_dropdown('labs', $options);
		?>  <br/>
		<!--  End select 1 -->


		<?php
			echo form_label('Изберете лаборатория:', 'labs');
			$options = array(
                  'lab1'   => 'Laboratory 1',
                  'lab2'   => 'Laboratory 2',
                  'lab3'   => 'Laboratory 3',
                  'lab4'   => 'Laboratory 4',
                );

			echo form_dropdown('labs', $options);
		?>  <br/>
		<!--  End select 2 -->


		<?php
			echo form_label('Изберете лаборатория:', 'labs');
			$options = array(
                  'lab1'   => 'Laboratory 1',
                  'lab2'   => 'Laboratory 2',
                  'lab3'   => 'Laboratory 3',
                  'lab4'   => 'Laboratory 4',
                );

			echo form_dropdown('labs', $options);
		?>  <br/>
		<!--  End select 3 -->

		<?php 
			echo form_label('Иотбележи изследвания:', 'check');

			$data = array(
		    'name'        => 'checkbox1',
		    'value'       => 'accept',
		    'class'       => 'check1'
		    );

			echo form_checkbox($data); 
			echo "Checkbox 1 &nbsp;&nbsp;&nbsp;";
			// end checkbox 1


			$data = array(
		    'name'        => 'checkbox2',
		    'value'       => 'accept'
		    );

			echo form_checkbox($data); 
			echo "Checkbox 2 <br/><br/>";
			// end checkbox 2

			$data = array(
		    'name'        => 'checkbox3',
		    'value'       => 'accept',
		    'class'       => 'check3'
		    );

			echo form_checkbox($data); 
			echo "Checkbox 3<br/><br/>";
			// end checkbox 2


			$data_submit = array(
              'name'        => 'send',
              'class'       => 'send',
              'value'       => 'Изпрати',
            );
			echo form_submit($data_submit);
			// end submit send
		?>



	</div>


</div>