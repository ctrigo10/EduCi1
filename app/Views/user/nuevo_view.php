<?php echo view('templates/header'); ?>
    <?php $errors = \Config\Services::validation()->getErrors(); ?>
    <?php if ($errors) {?>
        <div class="alert alert-danger" role="alert">
            <ul>
                <?php foreach($errors as $error){ ?>
                    <li><?php echo $error; ?></li>
                <?php }?>
            </ul>
        </div>
    <?php } ?>
    <?php echo form_open('user/create'); ?>
        <div class="form-group">
            <?php echo form_label('Nombre de usuario','txtUsername') ?>
            <?php echo form_input([
                'id' => 'txtUsername',
                'name' => 'username',
                'value' => set_value('username'),
                'class' =>'form-control',
                'placeholder'=> 'Ingrese Nombre USuario',
            ]); ?>
            <?php echo form_label('Password','txtPassword') ?>
            <?php echo form_password([
                'id' => 'txtPassword',
                'name' => 'password',
                'value' => set_value('password'),
                'class' =>'form-control',
                'placeholder'=> 'Ingrese password',
            ]); ?>
            <?php echo form_label('Email','txtEmail') ?>
            <?php echo form_input([
                'id' => 'txtEmail',
                'name' => 'email',
                'value' => set_value('email'),
                'class' =>'form-control',
                'placeholder'=> 'Ingrese email',
            ]); ?>
        </div>    
        <?php echo form_submit([
            'value' => 'Guardar',
            'class' => 'btn btn-primary'
        ]); ?>
        
    <?php echo form_close(); ?>
<?php echo view('templates/footer'); ?>