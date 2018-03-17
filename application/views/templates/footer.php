



<div class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-md-3">
				<div class="kontakkami">
					<h3>Kontak </h3>
					<hr>
	<p><i class="fas fa-map-marker-alt"></i> Jl. Phh. Mustofa No. 23, Bandung, Jawa Barat 40123 <br>Sekretariat: Gedung 2 lantai 2 <br><i class="fas fa-phone-volume"></i> Phone :+62227272215 <br> <i class="far fa-envelope"></i> hmifitenas@yahoo.co.id </p>

				</div>
			</div>

						<div class="col-xs-12 col-md-3">
				<div class="footer1 aboutus">
					<h3>Tentang Kami</h3>
					<hr>
					<ul>
						<a href="<?php echo base_url() ?>sejarah"><li>Sejarah</li></a>
						<a href="<?php echo base_url() ?>visimisi"><li>Visi & Misi</li></a>
						<a href="<?php echo base_url() ?>prestasi"><li>Prestasi</li></a>
						<a href="<?php echo base_url() ?>badanpengurus"><li>Struktur Organisasi</li></a>

					</ul>
				</div>
			</div>

						<div class="col-xs-12 col-md-3">
				<div class="footer1 rcpost">
					<h3>Recent Post</h3>
					<hr>
					<ul>

						<!-- <a href="?news"> <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> MUSYAWARAH BESAR HMIF 2018 <br><p>Posted on Februari 15, 2018 </p> </li></a>
						<a href="?news"><li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>  CALON KETUA BADAN PERWAKILAN ANGGOTA  <br><p>Posted on January 26, 2018 </p> </li></a>
							<a href="?news"><li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>  ITC <br><p>Posted on Mei 19, 2017 </p> </li></a> -->

						<?php foreach ($events as $eventisi ) {?>
								<a href="<?php echo site_url('event/'.$eventisi['slug']); ?>"> <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> <?php 	$title =$eventisi['title'];
					 $title = character_limiter($title,47);
					 echo $title; ?> <br><p>Posted on <?php echo $eventisi['date']; ?> </p> </li></a>
							<?php  } ?>
					</ul>
				</div>
			</div>

						<div class="col-xs-12 col-md-3">
				<div class="footer1 socialmedia">
					<h3>Follow Us</h3>
					<hr>
							<ul>
		<li><a href="https://www.facebook.com/hmif.itenas" target="_blank"> <i class="fab fa-facebook-f"></i></li>
	<li><a href="https://www.instagram.com/hmifitenas/" target="_blank"> <i class="fab fa-instagram"></i> </a></li>
		<li><a href="https://twitter.com/HMIFitenas?lang=en" target="_blank"><i class="fab fa-twitter"></i> </a></li>
		<li><a href="https://www.youtube.com/channel/UCMsgcKdfrGVvXSxsb7c7Efw/videos" target="_blank"><i class="fab fa-youtube"></i> </a></li>
	</ul>
				</div>
			</div>








		</div>


	</div>


</div>
<div class="copyright">
			<p>Copyright © 2018
				| Powered by Developer HMIF 2017/2018 </p>
		</div>
		       <script src="<?php echo base_url() ?>assets/bootstrap/costum.js"></script>
