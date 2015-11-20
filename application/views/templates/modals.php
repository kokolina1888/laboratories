  <div id="modals">

    <!--  .............. LOG IN .............. -->

    <div id="login-bar" class="modalDialog login">
      <div>
        <a href="#close" title="Close" class="close">X</a>
        <img src="<?php echo base_url('assets/img/lock.png');?>" alt="">
        <h2 class="login-header">Вход в системата</h2>

        <?php
        $attributes = array('class' => 'messages_form');
        echo form_open('verifylogin/index', $attributes);

        $data = array(
          'name'        => 'username',
          'placeholder' => 'Потебител',
          'class'       => 'username'
          );
        echo form_input($data) . '<br/>';
          // end title

        $data2 = array(
          'name'        => 'password',
          'placeholder' => 'Парола',
          'class'       => 'password'
          );
        echo form_password($data2) . '<br/>';
          // end title

        $data4 = array(
          'name'        => 'submit',
          'class'       => 'submit',
          'value'       => 'Вход',
          );
        echo form_submit($data4);
          // end submit send

        echo form_close();
        ?>
      </div>
    </div>

    <!-- -----------LOG OUT ------------- -->


    

    <!--  .............. BANK .............. -->

    <div id="bank-header" class="modalDialog2 bank">
      <div>
        <a href="#close" title="Close" class="close">X</a>
        <img src="<?php echo base_url('assets/img/bank_info.png');?>" alt="">
        <h2>Нашата банкова смета:</h2>
        <h1>18641296824</h1>
      </div>
    </div>

    <!--  .............. EMAIL .............. -->

    <div id="email-header" class="modalDialog2 email">
      <div>
        <a href="#close" title="Close" class="close">X</a>
        <img src="<?php echo ('assets/img/email_info.png');?>" alt="">
        <h2>Пишете ни на e-mail:</h2>
        <h1>bulgarianlab@abv.com</h1>
      </div>
    </div>

    <!--  .............. ADD DEVICE .............. -->

    <div id="add_device" class="modalDialog add add_device">
      <div>
        <a href="#close" title="Close" class="close">X</a>
        <h2>Добави апарат</h2>
        <img src="<?php echo base_url('assets/img/heading_sep.png');?>" alt="Separator"><br/>

        <?php
        $attributes = array('class' => 'add_device_form');
        echo form_open('admin/devices', $attributes);
            // specify path in controller

        $data = array(
          'name'        => 'device',
          'placeholder' => 'Име на апарат...',
          'class'       => 'device_input'
          );
        echo form_input($data) . '<br/>';
            // end title

        $data4 = array(
          'name'        => 'submit',
          'class'       => 'submit',
          'value'       => 'Изпрати',
          );
        echo form_submit($data4);
          // end submit send

        echo form_close();
        ?>
      </div>
    </div> <!-- end device -->

    <!--  .............. ADD CALIBARATOR .............. -->

    <div id="add_calibrator" class="modalDialog add add_calibrator">
      <div>
        <a href="#close" title="Close" class="close">X</a>
        <h2>Добави калибратор</h2>
        <img src="<?php echo base_url('assets/img/heading_sep.png');?>" alt="Separator"><br/>

        <?php
        $attributes = array('class' => 'add_calibrator_form');
        echo form_open('admin/calibrators', $attributes);
            // specify path in controller

        $data = array(
          'name'        => 'calibrator',
          'placeholder' => 'Име на калибратор...',
          'class'       => 'calibrator_input'
          );
        echo form_input($data) . '<br/>';
            // end title

        $data4 = array(
          'name'        => 'submit',
          'class'       => 'submit',
          'value'       => 'Изпрати',
          );
        echo form_submit($data4);
          // end submit send

        echo form_close();
        ?>
      </div>
    </div> <!-- end calibrator -->

    <!--  .............. ADD REAGENT .............. -->

    <div id="add_reagent" class="modalDialog add add_reagent">
      <div>
        <a href="#close" title="Close" class="close">X</a>
        <h2>Добави реактив</h2>
        <img src="<?php echo base_url('assets/img/heading_sep.png');?>" alt="Separator"><br/>

        <?php
        $attributes = array('class' => 'add_reagent_form');
        echo form_open('admin/reagents', $attributes);
            // specify path in controller

        $data = array(
          'name'        => 'reagent',
          'placeholder' => 'Име на реактив...',
          'class'       => 'reagent_input'
          );
        echo form_input($data) . '<br/>';
            // end title

        $data4 = array(
          'name'        => 'submit',
          'class'       => 'submit',
          'value'       => 'Изпрати',
          );
        echo form_submit($data4);
          // end submit send

        echo form_close();
        ?>
      </div>
    </div> <!-- end reagent -->

    <!--  .............. ADD METHOD .............. -->

    <div id="add_method" class="modalDialog add add_method">
      <div>
        <a href="#close" title="Close" class="close">X</a>
        <h2>Добави метод</h2>
        <img src="<?php echo base_url('assets/img/heading_sep.png'); ?>" alt="Separator"><br/>

        <?php
        $attributes = array('class' => 'add_method_form');
        echo form_open('methods/add_method', $attributes);

        $data = array(
          'name'        => 'method',
          'placeholder' => 'Име на метод...',
          'class'       => 'method_input'
          );
        echo form_input($data) . '<br/>';
            // end title

        $data4 = array(
          'name'        => 'submit',
          'class'       => 'submit',
          'value'       => 'Изпрати',
          );
        echo form_submit($data4);
          // end submit send

        echo form_close();
        ?>
      </div>
    </div> <!-- end method -->

    <!--  .............. ADD UNITS .............. -->

    <div id="add_unit" class="modalDialog add add_unit">
      <div>
        <a href="#close" title="Close" class="close">X</a>
        <h2>Добави мерна единица</h2>
        <img src="<?php echo base_url('assets/img/heading_sep.png');?>" alt="Separator"><br/>

        <?php
        $attributes = array('class' => 'add_unit_form');
        echo form_open('units/add_units', $attributes);


        $data = array(
          'name'        => 'unit',
          'placeholder' => 'Име на мерна единица...',
          'class'       => 'unit_input'
          );
        echo form_input($data) . '<br/>';
            // end title

        $data4 = array(
          'name'        => 'submit',
          'class'       => 'submit',
          'value'       => 'Изпрати',
          );
        echo form_submit($data4);
          // end submit send

        echo form_close();
        ?>
      </div>
    </div> <!-- end unit -->

    <!--  .............. ADD PROGRAM TYPE.............. -->

    <div id="add_program_type" class="modalDialog add add_program_type">
      <div>
        <a href="#close" title="Close" class="close">X</a>
        <h2>Добави програма - Вид</h2>
        <img src="<?php echo base_url('assets/img/heading_sep.png');?>" alt="Separator"><br/>

        <?php
        $attributes = array('class' => 'add_program_type_form');
        echo form_open('programm_types/add_programm_types', $attributes);
            // specify path in controller

        $data = array(
          'name'        => 'programm_types',
          'placeholder' => 'Име на програма...',
          'class'       => 'program_type_input'
          );
        echo form_input($data) . '<br/>';
            // end title

        $data4 = array(
          'name'        => 'submit',
          'class'       => 'submit',
          'value'       => 'Изпрати',
          );
        echo form_submit($data4);
          // end submit send

        echo form_close();
        ?>
      </div>
    </div> <!-- end program_type -->


    <!--  .............. ADD PROGRAM DATE .............. -->

    <div id="add_program_date" class="modalDialog add add_program_date">
      <div>
        <a href="#close" title="Close" class="close">X</a>
        <?php
        echo anchor('programm_dates/add_programm_date_form', '<h2>Добави програма - дата</h2>', 'add_program_date');
        
        ?>
        <img src="<?php echo base_url('assets/img/heading_sep.png');?>" alt="Separator">

      </div>
    </div> <!-- end program_date -->


    <!--  .............. ADD METHOD TO TEST .............. -->

    <div id="add_test_methods" class="modalDialog add test_methods">
      <div>
        <a href="#close" title="Close" class="close">X</a>
        <?php
        echo anchor('test_methods/add_test_method_form', '<h2>Метод за тест</h2>', 'add_program_date');
        
        ?>
        <img src="<?php echo base_url('assets/img/heading_sep.png');?>" alt="Separator">

      </div>
    </div> <!-- end method to test -->

    <!--  .............. ADD NEW USER .............. -->
    <div id="add_new_user" class="modalDialog add add_new_user">
      <div>
        <a href="#close" title="Close" class="close">X</a>
        <h2>Нова лаборатория</h2>
        <img src="<?php echo base_url('assets/img/heading_sep.png');?>" alt="Separator">
        <?php
        $attributes = array (
          'class'  =>'tests_form');

//by default CI uses post method, to use get method you should use html form
        echo form_open('admin/add_new_user', $attributes);
        ?>

        <div>
          <?php   
          echo form_label('Въведете потребителско име');

          $data_username = array(
            'name' => 'username', 
            'value' => set_value('username'),
            'placeholder' => 'потребителско име',     

            );
          echo form_error('username');
          echo '<p>'.form_input($data_username).'</p>';
          ?>
        </div>
        <div>
          <?php   

          echo form_label('Въведете парола');

          $data_password = array(
            'name' => 'password',
            'value' => set_value('password'), 
            'placeholder' => 'парола',      

            );
          echo form_error('password');
          echo '<p>'.form_password($data_password).'</p>';
          ?>
        </div>
        <div>
          <?php   
          echo form_label('Повторете паролата');

          $data_password_confirm = array(
            'name' => 'password_confirm',
            'value' => set_value('password_confirm'), 
            'placeholder' => 'повторете паролата',      

            );
          echo form_error('password_confirm');
          echo '<p>'.form_password($data_password_confirm).'</p>';
          ?>
        </div>
        <div>
          <?php   

          echo form_label('Име на лабораторията');

          $data_lab_name = array(
            'name' => 'lab_name',
            'value' => set_value('lab_name'), 
            'placeholder' => 'Име на лабораторията',      

            );
          echo form_error('password');
          echo '<p>'.form_input($data_lab_name).'</p>';
          ?>
        </div>
        <div>
          <?php   

          echo form_label('Адрес на лабораторията');

          $data_address = array(
            'name' => 'address',
            'value' => set_value('address'),  
            'placeholder' => 'Адрес на лабораторията',      

            );
          echo form_error('address');
          echo '<p>'.form_input($data_address).'</p>';
          ?>
        </div>
        <?php

//submit button
        $user_btn = array(
          'name' => 'submit',
          'value' => 'Въведи'
          );

        echo form_submit($user_btn);
        ?>
      </div>
      <?php

      echo form_close();
      ?>

    </div>
  </div> <!-- end new user -->



</div> <!-- end modals -->
