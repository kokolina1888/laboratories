<div class="form">

	<h2>Изберете лаборатория за да разгледате програмите, в които участва</h2>
	<p class="pretty_form">
		<img src="<?php echo base_url('assets/img/heading_sep.png');?>" alt="Separator"><br/>
	</p>
	<p class="pretty_form">

		<?php 
		$i = 0;
		
		foreach ($all_users as $user) 
		{
			
			$i++;
			echo '<p class="pretty">'.$i.'<a class="change" href="'.base_url("admin/check_user_programs").'/'.$user['user_id'].'">'.$user['username'].'</a></p>';

		}
		?>
	</p>
</div>

