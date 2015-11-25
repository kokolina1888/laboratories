<div id="admin_wrap">

 <h2>Здравейте, <?php echo $username;?>!</h2>
  <img src="<?php echo base_url('assets/img/heading_sep.png');?>" alt="Separator"><br/>

  <a href="<?php echo base_url('user/add_data_initial'); ?>">
  <!--трябва да избере програма-дата за въвеждане-->
    <div class="box">
      <span class="icons message_icon"></span>
      <h2>Данни</h2>
      <p>Въведете резултатите от направените от Вас изследвания по активните програми, в които участвате</p>
    </div>
  </a>

  <a href="<?php echo base_url('user/show_user_programs'); ?>">
   <!--трябва да избере програма-дата-->
    <div class="box">
      <span class="icons add_icon"></span>
      <h2>Прегледай</h2>
      <p>Прегледайте въвежданите от вас данни и ако желаете - променете данните във все още активните програми</p>
    </div>
  </a>
  <a href="<?php echo base_url('user/error')?>">
    <div class="box devices">
      <span class="icons devices_icon"></span>
      <h2>Оценки</h2>
      <p>Прегледайте, оценките за участие по програма/дата или програма/тест</p>
    </div>
  </a> 
 
</div>
