<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HMIF ITENAS</title>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/favicon.ico" type="image/x-icon">
       <script src="<?php echo base_url() ?>assets/bootstrap/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/typed.min.js"></script>
<script src="<?php echo base_url() ?>assets/sweetalert.js"></script>
    <meta name="author" content="HMIF 15 <?php echo "fe3b38955adae84f2599581c7b3c3c6a" ?>">
    <meta name="description" content="HIMPUNAN MAHASISWA TEKNIK INFORMATIKA ITENAS BANDUNG">
    <meta name="keywords" content="HMIF,ITENAS,HIMPUNAN MAHASISWA TEKNIK INFORMATIKA ITENAS BANDUNG,INFORMATIKA BANDUNG">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/bootstrap.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/fluid-gallery.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/baguetteBox.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/sweetalert.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/fluid-gallery.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/baguetteBox.min.css"/>



  </head>
  <body>

    <script type="text/javascript">
    $(document).ready(function(){

      var pathname = window.location.pathname;
      if (pathname == "/HMIFFF/"){

          // $(".navbar.design").css("box-shadow","none");
          $(".navbar-brand img").css("height","6vh");
$(".navbar.design").css("padding","0");
          $(".navbar .nav").css("margin","0");
    checkSize();
    $(window).resize(checkSize);


        $(window).scroll(function(){
          // var style1 = {
      // backgroundColor:"black",
      // boxShadow:"1px 1px 10px rgba(0,0,0,0.5)"
      // };
  //     var style2 = {
  // background:"none",
  // boxShadow:"none"
  // };

            var wScroll = $(this).scrollTop();
          if(wScroll > 100 ){
            $(".navbar-brand img").css("opacity","1");
            // $(".navbar.design").css(style1);


          }else{
            if ($(window).width() <= 768){
              // $(".navbar.design").css("background","black");
              $(".navbar-brand img").css("opacity","1");

            }else{
                // $(".navbar.design").css(style2);
              $(".navbar-brand img").css("opacity","0");


            }

           }





           });
           function checkSize(){
             if ($(window).width() <= 768){
               // $(".navbar.design").css("background","black");
               $(".navbar-brand img").css("opacity","1");
               $(".contenthome img").css("margin-top","50px");
             }else{
               $(".navbar-brand img").css("padding-right","100px");
                $(".navbar-brand img").css("opacity","0");
                 // $(".navbar.design").css("background","none");
               $(".contenthome img").css("margin-top","0px");



             }
           }


        }
  });






    </script>


 <nav class="navbar  design  navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url() ?>">
    	   <img alt="Brand" src="<?php echo base_url() ?>assets/img/logo.png"></a>

    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left">
        <li <?php if($this->uri->segment(1)== ''){
          echo " class='item-active'";
        } ?> ><a  href="<?php echo base_url() ?>">HOME</a></li>


 <li class="dropdown <?php if($this->uri->segment(1)== "gallery"){
                         echo " item-active";
                       }else if($this->uri->segment(1)== "events"){
                         echo " item-active";
                       } ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ACTIVITY
&nbsp;<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url() ?>gallery"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>Gallery</a></li>
            <!-- <li role="separator" class="divider"></li> -->
            <li><a href="<?php echo base_url() ?>events"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>Events</a></li>
          </ul>
        </li>

        <li <?php if($this->uri->segment(1) == "masterplan" ){
          echo " class='item-active'";
        }?>><a href="<?php echo base_url() ?>masterplan">MASTERPLAN</a></li>
        <li <?php if($this->uri->segment(1)=="badanpengurus"){
          echo " class='item-active'";
        }?>><a href="<?php echo base_url() ?>badanpengurus">TEAM</a></li>
                       <li class="dropdown <?php if($this->uri->segment(1)=="anggotahmif"){
                         echo " item-active";
                       }else if($this->uri->segment(1)=="perkuliahan"){
                         echo " item-active";
                       } ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ARCHIVES
  &nbsp;<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url() ?>anggotahmif"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>Anggota HMIF</a></li>
            <!-- <li role="separator" class="divider"></li> -->
            <li><a href="<?php echo base_url() ?>perkuliahan"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>Perkuliahan</a></li>

          </ul>
        </li>
        <li <?php

         if($this->uri->segment(1)=="contact"){
          echo " class='item-active'";
        } ?>><a href="<?php echo base_url() ?>contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>


	<!-- 	<div class="logohmif">

		</div>

 -->
