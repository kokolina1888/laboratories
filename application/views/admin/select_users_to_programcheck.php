<div class="form">

	<h2>Изберете лаборатория за да разгледате програмите, в които участва</h2>
	<img src="<?php echo base_url('assets/img/heading_sep.png');?>" alt="Separator"><br/>
	<p class="pretty_form">

		<?php 
		
		foreach ($all_users as $user) 
		{
			
			echo '<a href="'.base_url("admin/check_user_programs").'/'.$user['user_id'].'">'.$user['username'].'</a>';

		}
		?>
	</p>
</div>

