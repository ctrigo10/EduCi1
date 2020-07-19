<?php echo view('templates/header'); ?>
<?php if(session('message')){?>
    <div class="bs-component">
        <div class="alert alert.dismissible alert-success">
            <button class="close" type='button' data-dismiss='alert'>x</button>
            <strong>Correcto! </strong><?php echo session('message'); ?> 
        </div>
    </div> 
<?php } ?>
<a href="<?php echo base_url('/curso/new'); ?>"
    class="btn btn-primary">
    Nuevo Curso
</a>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">    
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>DESCRIPCIÓN</th>
                                <th>PRECIO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($cursos as $curso){ ?>
                                <tr>
                                    <td><?php echo $curso->id; ?></td>
                                    <td><?php echo $curso->descripcion; ?></td>
                                    <td><?php echo $curso->precio; ?></td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>                           
<?php echo view('templates/footer'); ?>