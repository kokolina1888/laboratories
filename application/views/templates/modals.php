  <div id="modals">

  <!--  .............. LOG IN .............. -->

    <div id="login-bar" class="modalDialog login">
      <div>
        <a href="#close" title="Close" class="close">X</a>
          <img src="<?php echo base_url('assets/img/lock.png');?>" alt="">
          <h2 class="login-header">Вход в системата</h2><br/>

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
        </form>
      </div>
    </div>

    <!-- -----------LOG OUT ------------- -->


     <div id="login-bar" class="modalDialog login">
     
     </div>

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
        <img src="../../assets/img/email_info.png" alt="">
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
        <img src="<?php echo base_url('assets/img/heading_sep.png')?>" alt="Separator"><br/>

        <?php
            $attributes = array('class' => 'add_method_form');
            echo form_open('admin/methods', $attributes);
            // specify path in controller

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
            echo form_open('admin/units', $attributes);
            // specify path in controller

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
            echo form_open('admin/program_types', $attributes);
            // specify path in controller

            $data = array(
              'name'        => 'program_type',
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
        <h2>Добави програма - дата</h2>
        <img src="<?php echo base_url('assets/img/heading_sep.png');?>" alt="Separator"><br/>

        <?php
            $attributes = array('class' => 'add_program_date_form');
            echo form_open('admin/program_dates', $attributes);
            // specify path in controller

            $data = array(
              'name'        => 'program_date',
              'placeholder' => 'Име на програма...',
              'class'       => 'program_date_input'
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
    </div> <!-- end program_date -->
    

  </div> <!-- end modals -->
