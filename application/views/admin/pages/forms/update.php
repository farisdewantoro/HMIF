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
      <?php echo form_open_multipart('admin/update/'.$event_item['noevent']); ?>
      <div class="row">


<div class="col-md-12">
  <div class="update-img">
  <img src="<?php base_url()?>../../uploads/<?php echo $event_item['picture']; ?>" alt="">
  </div>
  <p class="bg-danger"><?php echo $this->session->flashdata('error'); ?></p>
  <p class="bg-success"><?php echo $this->session->flashdata('success'); ?></p>
  <input type="hidden" name="date" value="<?php echo date("d/M/Y h:i A");?>">
  <br>
  <label for=""> TITLE:</label>
  <br>
  <input type="text" class="form-control" name="title" placeholder="Text input" value="<?php echo $event_item['title']; ?>">
  <br>

</div>

        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">ISI BERITA/KEGIATAN
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

                <textarea name="subject"
                          style="width: 100%; height: 200px;
                          font-size: 14px;
                          line-height: 18px;
                          border: 1px solid #dddddd; padding: 10px;"


                          ><?php echo $event_item['subject']; ?></textarea>

            </div>
          </div>
        </div>
        <!-- /.col-->
        <div class="col-md-12">
            <label for=""> Picture: </label>
            <input type="hidden"  id="old"  name="old"  value="<?php echo $event_item['picture']; ?>">
            <input type="file" name="picture" id="upload" value="">
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
