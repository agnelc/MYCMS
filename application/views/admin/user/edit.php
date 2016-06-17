
	<h3 class="modal-title"><?php echo empty($user->id) ? 'Add a new user' : 'Edit user ' . $user->name; ?></h3>

        
        <?php  $error1 = $this->session->flashdata('error');
        if(isset($error1))
            {echo $this->session->flashdata('error');}?>
        <?php echo validation_errors(); ?>
        <?php echo form_open(); ?>
        <div class="table">
            
            <div class="form-group">

                <label for="name">Name:</label>

                <?php
                $data = array(
                    'name' => 'name',
                    'id' => 'name',
                    'value'=> set_value('name', $user->name),
                    'class' => 'form-control'
                );

                echo form_input($data);
                ?>
            </div>
            <div class="form-group">

                <label for="email">Email address:</label>

                <?php
                $data = array(
                    'name' => 'email',
                    'id' => 'email',
                    'value'=>set_value('email', $user->email),
                    'class' => 'form-control'
                );

                echo form_input($data);
                ?>
            </div>

            <div class="form-group">

                <label for="password">Password:</label>

                <?php
                $data = array(
                    'name' => 'password',
                    'id' => 'password',
                    'class' => 'form-control'
                );

                echo form_password($data);
                ?>
            </div>
                        <div class="form-group">

                <label for="password_confirm">Confirm Password:</label>

                <?php
                $data = array(
                    'name' => 'password_confirm',
                    'id' => 'password_confirm',
                    'class' => 'form-control'
                );

                echo form_password($data);
                ?>
            </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                <?php echo form_submit('submit', 'Save', 'class="pull-right btn btn-primary"'); ?>
             </div>
            </div>
        </div>


        <?php echo form_close(); ?>
        </div>



