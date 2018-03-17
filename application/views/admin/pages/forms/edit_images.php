<?php date_default_timezone_set('Asia/Jakarta'); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Create</a></li>
        <li class="active">Forms</li>
      </ol>
    </section>



    <!-- Main content -->
    <section class="content">

      <?php echo validation_errors(); ?>
      <?php echo form_open_multipart('admin/edit_image/'.$img_item['nogambar']); ?>
      <div class="row">


<div class="col-md-12">
  <div class="update-img">
  <img src="<?php echo base_url()?>uploads/img_acara/<?php echo $img_item['gambar']; ?>" alt="">
  </div>
  <p class="bg-danger"><?php echo $this->session->flashdata('error'); ?></p>
  <p class="bg-success"><?php echo $this->session->flashdata('success'); ?></p>
  <input type="hidden" name="date" value="<?php echo date("d/M/Y h:i A");?>">
  <br>
  <label for=""> TITLE:  <?php echo $img_item['nama_acara']; ?></label>


</div>

        <div class="col-md-12">

        </div>
        <!-- /.col-->
        <div class="col-md-12">
            <label for=""> Picture: </label>
            <input type="hidden"  id="old"  name="old"  value="<?php echo $img_item['gambar']; ?>">
            <input type="file" name="gambar" id="upload" value="">
              <br>

        </div>
        <br>


        <!--button  -->
        <div class="col-md-12">
  <br>

<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</div>
        <!--end button  -->
      </div>
      <?php echo form_close(); ?>
      <!-- ./row -->
    </section>

    <!-- Main content -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
