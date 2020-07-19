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
    <?php echo form_open('curso/create'); ?>
        <div class="form-group">
            <?php echo form_label('Descripción','txtDescripcions') ?>
            <?php echo form_input([
                'id' => 'txtDescripcions',
                'name' => 'descripcion',
                'value' => set_value('descripcion'),
                'class' =>'form-control',
                'placeholder'=> 'Ingrese descripción',
            ]); ?>
            <?php echo form_label('Precio','txtPrecio') ?>
            <?php echo form_input([
                'id' => 'txtPrecio',
                'name' => 'precio',
                'value' => set_value('precio'),
                'class' =>'form-control',
                'placeholder'=> 'Ingrese precio',
            ]); ?>
        </div>    
        <?php echo form_submit([
            'value' => 'Guardar',
            'class' => 'btn btn-primary'
        ]); ?>
        
    <?php echo form_close(); ?>
<?php echo view('templates/footer'); ?>