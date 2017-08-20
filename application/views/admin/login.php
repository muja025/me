<body>
<br>
<br>
<br>
<?php if($status != false) { ?>
    <div class="panel panel-danger">
    <p>
        <?php echo $error; ?>
    </p>
    </div>
    <?php } ?>
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Silahkan masuk, tuan.</h3>
                    </div>
                    <div class="panel-body">
                         <form action="<?php echo base_url('login/aksiLogin'); ?>" method="post"> 
                            <fieldset>
                                <div class="form-group">
                                    <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email"> 
                                </div>
                                <div class="form-group">
                                    <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="login" value="login" class="btn btn-success btn-block">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
