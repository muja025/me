        <div id="page-content-wrapper">
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Post
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <br>
                                <a href="<?php echo base_url(); ?>crud/insert">
                                    <input type="button" class="btn btn-primary" name="" value="Tambah Postingan">
                                 </a>
                                 <br>
                                 <br>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="20px">#</th>
                                            <th width="150px">Judul</th>
                                            <th>Isi</th>
                                            <th width="150px">Tanggal</th>
                                            <th width="170px">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $no=1;
                                        foreach ($data as $p) {                                        
                                    ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $p->judul; ?></td>
                                            <td><?php echo $p->isi; ?></td>
                                            <td><?php echo $p->tanggal; ?></td>                               
                                            <td>
                                            
                                            <a href="<?php echo base_url(); ?>crud/edit/<?php echo $p->id_post; ?>">
                                                <input type="button" class="btn btn-primary" name="" value="Edit">
                                            </a>

                                            <a href="<?php echo base_url(); ?>crud/hapusPost/<?php echo $p->id_post; ?>">
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