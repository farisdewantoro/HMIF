<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>
  <br>
  <div class="galleri">


  <div class="container-fluid gallery-container">

      <h1><?php echo $content_item['nama_acara'];  ?></h1>

      <p class="page-description text-center"><?php echo $content_item['content_acara'];  ?></p>

      <div class="tz-gallery">

          <div class="row">
            <?php foreach ($acara as $acr ) {?>
          	 <div class="col-xs-6 col-sm-4">

                  <a class="lightbox" href="<?php echo base_url() ?>uploads/img_acara/<?php echo $acr['gambar']; ?>">
                    <div class="img-content">
                      <img src="<?php echo base_url() ?>uploads/img_acara/<?php echo $acr['gambar']; ?>" alt="1">
                        </div>
                  </a>
                  <div class="action">
                        <a href="<?php echo site_url('admin/image/delete/'.$acr['nogambar']); ?>  "><i class="fa fa-trash"></i> DELETE </a> &nbsp;&nbsp;|
                          &nbsp;&nbsp;<a href="<?php echo site_url('admin/edit_image/'.$acr['nogambar']); ?>"><i class="fa fa-edit"></i> EDIT</a>
                  </div>
              </div>


            <?php } ?>

                      </div>

                  </div>
              </div>
              </div>
                  <script src="<?php echo base_url()?>assets/bootstrap/baguetteBox.min.js"></script>
              <script>
                  baguetteBox.run('.tz-gallery');
              </script>





</div>
