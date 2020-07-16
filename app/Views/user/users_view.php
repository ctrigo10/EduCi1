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
                            <th>USER</th>
                            <th>EMAIL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user){ ?>
                            <tr>
                                <td><?php echo $user->id; ?></td>
                                <td><?php echo $user->username; ?></td>
                                <td><?php echo $user->email; ?></td>
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