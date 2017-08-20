<!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
<!-- =======================================LOOP================================================ -->
<?php

$no=$this->uri->segment('3') + 1;

foreach ($news as $n) 
{
?>

                <div class="post-preview">
                    <a href="<?php echo base_url()?>post/<?php echo $n->id_post;?>">
                        <h2 class="post-title">
                            <?php echo ''.ucfirst($n->judul).'' ?>
                        </h2>
</a>
                        <h3 class="post-subtitle">
                            <?php echo $n->isi; ?>
                        </h3>
                    
                    <p class="post-meta">Posted by <a href="about">Ilham Bintang</a> on <?php echo $n->tanggal; ?></p>
                </div>
                <hr>
<?php } ?>
<!-- =======================================ENDLOOP================================================ -->

<!-- =======================================PAGING================================================ -->                
                <hr>
                <!-- Pager -->
               <?php
                echo $this->pagination->create_links();
                ?>
<!-- =======================================PAGING================================================ -->
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->