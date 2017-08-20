        <div id="page-content-wrapper">
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pesan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">

                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="20px">#</th>
                                            <th width="150px">Nama</th>
                                            <th width="50px">Email</th>
                                            <th width="50px">No Hp</th>
                                            <th>Pesan</th>
                                            <th width="10px">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $no=1;
                                        foreach ($data as $p) {
                                        
                                    ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $p->nama; ?></td>
                                            <td><?php echo $p->email; ?></td>
                                            <td><?php echo $p->no_hp; ?></td>                                            
                                            <td><?php echo $p->pesan; ?></td>
                                            <td>
                                            <a href="<?php echo base_url(); ?>crud/hapus/<?php echo $p->id; ?>">
                                                <input type="button" class="btn btn-danger" name="" value="Hapus">
                                            </a>
                                            </td>
                                        </tr>
                                    <?php $no++; } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>