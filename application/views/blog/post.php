    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <?php 
                            echo $isi;
                         ?>

                   <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on <?php echo $tanggal; ?></p>
                </div>
            </div>
            <hr>            
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Komentar post ini</p>
                <?php foreach ($komentar as $k) 
                {
                    
                 ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <?php echo $k->nama; ?>
                            </h4>
                        </div>
                        <div class="panel-body text-muted">
                            <?php echo $k->komentar; ?>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
            <hr>
            <div class="row control-group">
            <form action="<?php echo base_url(); ?>welcome/komentar" method="post">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 form-group floating-label-form-group controls">                
                    <label>Nama</label>
                    <input type="name" class="form-control" placeholder="Tuliskan nama anda" name="nama">
                </div>
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 form-group floating-label-form-group controls">
                    <label>Komentar</label>
                    <textarea rows="5" class="form-control" placeholder="Tuliskan komentar anda" name="komentar"></textarea>
                </div>
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 form-group floating-label-form-group controls">
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <input type="submit" class="btn btn-default" value="Kirim"></input>
                        </div>
                    </div>

                    <input type="hidden" value="<?php echo $id; ?>" name="id_post"></input>
                </div>
            </form>
            </div>
        </div>
    </article>

 