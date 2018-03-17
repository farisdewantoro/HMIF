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

  <div class="activity">
  	<div class="container">
  		<div class="judul">
  			<h1>ACTIVITY </h1>
  			<p>HMIF Memiliki kegiatan - kegiatan yang postif, berikut adalah kegiatan-kegiatan yang dilakukan </p>
  		</div>

  		<div class="row">
        <?php foreach ($acara as $acr ) {?>
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <a href="<?php echo site_url('admin/image/'.$acr['nama_acara']); ?>"><img src="<?php echo base_url() ?>uploads/acara/<?php echo $acr['gambar_acara']; ?>" alt="..."> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>

  			<div class="caption">
          <h3><?php echo $acr['nama_acara']; ?> </h3>
          <p><?php echo $acr['subject']; ?></p>

        </div>
      </div>
    </div>
<?php  } ?>

    </div>

    <center>
    <div class="pagination1">
      <?php echo $this->pagination->create_links(); ?>
    </div>
</center>
        </div>
            </div>

</div>
