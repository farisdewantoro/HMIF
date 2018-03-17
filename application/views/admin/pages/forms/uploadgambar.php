



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
      <?php echo form_open_multipart('admin/uploadgambar'); ?>

      <div class="row">


<div class="col-md-12">
  <p class="bg-danger"><?php echo $this->session->flashdata('error'); ?></p>
  <p class="bg-success"><?php echo $this->session->flashdata('success'); ?></p>
  <input type="hidden" name="date" value="<?php echo date("d/M/Y h:i A");?>">
  <br>
  <label for=""> Nama Acara:</label>
  <select  name="nama_acara">
    <option value="">PILIH ACARA</option>
    <?php foreach ($acara_nama as $acara ) {?>
<option value="<?php echo $acara['nama_acara']; ?>"> <?php echo $acara['nama_acara']; ?> </option>
  <?php  } ?>
  </select>


</div>


        <!-- /.col-->
        <div class="col-md-12">
            <label for=""> Picture: </label>
            <input type="file" name="gambar[]" id="upload" multiple="multiple"> </input>
              <br>
              <span id="image-holder">  </span>
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
