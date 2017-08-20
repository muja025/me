<div id="page-content-wrapper">
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Postingan
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                <form action="<?php echo base_url(); ?>crud/insertAction" method="post">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" name="judul" type="text">
                                            <p class="help-block">Isikan judul post disini.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Isi Post</label>
                                            <textarea class="form-control" rows="10" name="isi"></textarea>
                                        </div>
                                        <div class="form-group">
                                                <input type="submit" name="kirim" value="Kirim" class="btn btn-primary">
                                        </div>
                                </form>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </div>