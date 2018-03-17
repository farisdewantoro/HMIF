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
      <?php echo form_open_multipart('admin/addanggota'); ?>
      <div class="row">


<div class="col-md-12">
  <p class="bg-danger"><?php echo $this->session->flashdata('error'); ?></p>
  <p class="bg-success"><?php echo $this->session->flashdata('success'); ?></p>
  <input type="hidden" name="date" value="<?php echo date("d/M/Y h:i A");?>">
  <br>
  <label for=""> Nama Anggota:</label>
  <br>
  <input type="text" class="form-control" name="nama_anggota" placeholder="Text input" value="<?php echo set_value('nama_anggota'); ?>">
  <br>

</div>

        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">ANGKATAN
                <!-- <small>Simple and fast</small> -->
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">

                <input name="angkatan" ><?php echo set_value('angkatan'); ?></input>

            </div>
          </div>
        </div>
        <!-- /.col-->

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
