    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Ingin menyampaikan sesuatu? silahkan isikan pada pesan berikut!</p>
                
                <form action="<?php echo base_url(); ?>welcome/pesan" method="post">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Nama</label>
                            <input type="text" class="form-control" placeholder="Nama" id="name" required data-validation-required-message="Please enter your name." name="nama">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email address." name="email">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control" placeholder="Nomor telepon" id="phone" required data-validation-required-message="Please enter your phone number." name="no_hp">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea rows="5" class="form-control" placeholder="Pesan" id="message" required data-validation-required-message="Please enter a message." name="pesan"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success">
                        <?php if(isset($sukses)) {
                                if ($sukses!= false) {
                                    echo "Sukses mengirim pesan";
                                }
                                else
                                {
                                    echo "Gagal mengirim pesan";   
                                }
                              }
                            
                         ?>
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <input type="submit" class="btn btn-default" value="Kirim"></input>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>