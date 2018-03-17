



 <div class="contenthome">

      <img src="assets/img/LOGO4.png"  alt="" class="img-responsive" id="imgblur">

      <div class="element">
      <div id="typed-strings" >
      <p class="typetext">Welcome to website <span class="typetext2"><strong>HMIF.</strong> </span></p>
      <p class="typetext">Welcome to website <span class="typetext2"><strong>HMIF.</strong> </span><br> Himpunan Mahasiswa Teknik Informatika.</p>
      <p class="typetext">Welcome to website <span class="typetext2"><strong>HMIF.</strong> </span> <br>Institut Teknologi Nasional.</p>
  </div>
  <span id="typed"></span></div>
  <div class="buttonevent">
        <a href="#produk" class="scroll">
          <span>VIEW OUR EVENTS </span>
          </a>
  </div>


</div>

<div class="contenthome2">


    <center>  <img src="assets/img/logohmif.png"  alt="" class="img-responsive" id="imgblur"></center>
<div class="buttonevent2">
    <a href="#produk" class="scroll">
            <span>VIEW OUR EVENTS </span>
            </a>
  </div>
</div>




<div class="tentangkami">
  <div class="container-fluid">

    <div class="isitentang">
      <div class="container">
        <div class="abouthmif">


  <h1>    ABOUT <span >HMIF</span>  </h1>
  <h3>(Himpunan Mahasiswa Teknik Informatika)</h3>
  <center><p >HMIF atau kepanjangan dari Himpunan Mahasiswa Teknik Informatika
    adalah sebuah organisasi Mahasiswa teknik informatika di institut teknologi nasional (ITENAS) Bandung.
    Bersekretariat di Jl. Phh. Mustofa No. 23, Bandung, Jawa Barat 40123 phone :+62227272215 gedung 2 lantai 2 </p></center>
    </div>
    <center><div class="garisbatas"></div></center>
<div class="row">
  <center>
  <div class="col-xs-12 col-md-4 ">
    <div class="borderrcpost pad">


    <img src="assets/img/sejarah/sejarahif.png" class="img-circle imganimate1">
    <h3>SEJARAH</h3>
    <p>Himpunan Mahasiswa Teknik Informatika (HMIF) Berdiri pada tanggal 15 Maret 2005</p>
    <a href="sejarah" class="btn btn-default btn-yellow" role="button">Read More</a>
      </div>
  </div>
    <div class="col-xs-12 col-md-4 ">
        <div class="borderrcpost pad">
    <img src="assets/img/sejarah/tujuan.png" class="img-circle imganimate2">
     <h3>VISI DAN MISI</h3>
     <p>Visi dan Misi Himpunan Mahasiswa Teknik Informatika periode 2017-2018</p>
       <a href="visimisi" class="btn btn-default btn-yellow" role="button">Read More</a>
     </div>
  </div>
    <div class="col-xs-12 col-md-4 ">
      <div class="borderrcpost pad">
    <img src="assets/img/sejarah/so.png" class="img-circle imganimate3">
     <h3>PRESTASI</h3>

     <p>Himpunan Mahasiswa Teknik Informatika (HMIF) memiliki banyak prestasi yang di raih yaitu</p>
       <a href="prestasi" class="btn btn-default btn-yellow" role="button">Read More</a>
            </div>

  </div>
  </center>
</div>



</div>
<div class="skewed1">

</div>

</div>


  </div>
</div>









      <div class="recentpost">


<div class="container">
<div class="row">
    <div class="col-xs-12 col-md-8 " >



  <div class="recentpostjudul">
        <h1>RECENT POST</h1>
        <hr class="hrrcpost">
  </div>



<div class="row" id="produk" >
  <?php foreach ($events as $eventisi ) {?>
    <div class="col-xs-12 col-md-12 borderrcpost" >
  <div class="col-xs-12 col-md-6 ">
    <a href="<?php echo site_url('event/'.$eventisi['slug']); ?>" class="thumbnail ">
      <img src="<?php echo base_url() ?>uploads/<?php echo $eventisi['picture']; ?>" alt="...">
    </a>
     </div>
                   <div class="col-xs-12 col-md-6   ">
                 <div class="caption">

      <a href="<?php echo site_url('event/'.$eventisi['slug']); ?>"> <h4><?php 	$title =$eventisi['title'];
 $title = character_limiter($title,47);
 echo $title; ?></h4></a>
 <span >   <i class="far fa-calendar-alt"></i> Posted on <?php echo $eventisi['date']; ?></span><br>
 <div class="rcborder"><br>
 </div>


        <p>
          <?php

          $string =$eventisi['subject'];

          $string = character_limiter($string,200);
          echo $string;
          ?>
</p>

<a href="<?php echo site_url('event/'.$eventisi['slug']); ?>" class="btn btn-default btn-modif " role="button">Read More <span class="glyphicon  glyphicon glyphicon-hand-left" aria-hidden="true"></span></a>



      </div>
  </div>
    </div>
<?php  } ?>







</div>
</div>

<div class="col-xs-12 col-md-4">
    <div class="recentpostjudul">
        <h1>EVENT</h1>
        <hr class="hrrcpost">
  </div>

  <div class="siderecentpost latest">
    <center><h3>Latest Post</h3>  <div class="sideborder">
      </div></center>

    <?php foreach ($events_left as $eventisi ) {?>
    <a href="<?php echo site_url('event/'.$eventisi['slug']); ?>"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span><?php 	$title =$eventisi['title'];
$title = character_limiter($title,100);
echo $title; ?></span> <br>
<div class="datesidepost">


<span >   <i class="far fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp; Posted on <?php echo $eventisi['date']; ?></span>
</div>
</a><hr>
<?php  } ?>
    </div>
</div>




</div>

</div>

</div>

<!-- <div class="about">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6 ">
          <div class="caption">

<h1> About HMIF ITENAS </h1>

<p> HMIF atau kepanjangan dari Himpunan Mahasiswa Teknik Informatika adalah sebuah organisasi Mahasiswa teknik informatika di institut teknologi nasional (ITENAS) Bandung. Bersekretariat di Jl. Phh. Mustofa No. 23, Bandung, Jawa Barat 40123  gedung 2 lantai 2 </p>
<a href="news" class="btn btn-default" role="button">Read More</a>
          </div>
        </div>
        <div class=" col-md-4 col-md-offset-2">
          <img src="logo.png" class="img-responsive" alt="LOGO">
        </div>




      </div>
    </div>
</div>
 -->
