<div id="admin_messages">

	<h2>Напишете съобщение</h2>
	<img src="<?php echo base_url('assets/img/heading_sep.png');?>" alt="Separator"><br/>


	<?php
		// Start form
		$attributes = array('class' => 'messages_form');
		echo form_open('admin/messages', $attributes);

		$data = array(
              'name'        => 'message_title',
              'class'       => 'title',
              'placeholder' => 'Заглавие',
              'maxlength'   => '100',
            );
		echo form_input($data);
		// end title

		$data2 = array(
              'name'        => 'publisher',
              'class'       => 'publisher',
              'placeholder' => 'От:',
              'maxlength'   => '100',
            );
		echo form_input($data2);
		// end publisher

		$data3 = array(
              'name'        => 'message_text',
              'class'       => 'content',
              'placeholder' => 'Съдържание',
              'maxlength'   => '100',
            );
		echo form_textarea($data3);
		// end text/content

		$data4 = array(
              'name'        => 'send',
              'class'       => 'send',
              'value'       => 'Изпрати',
            );
		echo form_submit($data4);
		// end submit send

	?>
</div>