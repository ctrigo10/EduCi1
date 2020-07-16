<?php echo view('templates/header'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">   
                        <thead>
                            <tr>
                                <th>#°</th>
                                <th>CI</th>
                                <th>NOMBRE</th>
                                <th>APELLIDO</th>
                                <th>DIRECCIÓN</th>
                                <th>TELEFONNO</th>
                                <th>FECHA NACIMIENTO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($estudiantes as $estudiante){ ?>
                                <tr>
                                    <td><?php echo $estudiante->id; ?></td>
                                    <td><?php echo $estudiante->ci; ?></td>
                                    <td><?php echo $estudiante->nombre; ?></td>
                                    <td><?php echo $estudiante->apellido; ?></td>
                                    <td><?php echo $estudiante->direccion; ?></td>
                                    <td><?php echo $estudiante->telefono; ?></td>
                                    <td><?php echo $estudiante->fecha_nacimiento; ?></td>
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