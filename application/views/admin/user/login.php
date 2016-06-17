<!-- Modal content-->
<div class="modal-content">
    <div class="modal-header">

        <h4 class="modal-title">Log in</h4>
        <p>Please login using your credentials</p>
    </div>
    <div class="modal-body">

        <?php
        $error1 = $this->session->flashdata('error');
        if (isset($error1)) {
            echo $this->session->flashdata('error');
        }
        ?>
        <?php echo validation_errors(); ?>
        <?php echo form_open('', 'role="form"'); ?>


        <div class="form-group">

            <label for="email">Email address:</label>

            <?php
            $data = array(
                'name' => 'email',
                'id' => 'email',
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
            <div class="row">
                <div class="col-sm-12">
                    <?php echo form_submit('submit', 'Log in', 'class="pull-right btn btn-primary"'); ?>
                </div>
            </div>
        </div>

        <?php echo form_close(); ?>



    </div>
