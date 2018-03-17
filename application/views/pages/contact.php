<div class="contact">

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-6">
		<h1>Kontak Kami</h1>
	<p><i class="fas fa-map-marker-alt"></i>Jl. Phh. Mustofa No. 23, Bandung, Jawa Barat 40123 <br>Sekretariat: Gedung 2 lantai 2 <br><i class="fas fa-phone-volume"></i> Phone :+62227272215 <br> <i class="far fa-envelope"></i> hmifitenas@yahoo.co.id  </p>
		<div class="contact1">

			<p class="bg-success berhasil" ><?php echo $this->session->flashdata('success'); ?></p>
		<div class="bg-danger error">
		<p>	<?php echo validation_errors(); ?></p>
		</div>
			<?php echo form_open_multipart('halaman/message');?>
			<input type="hidden" name="date" value="<?php echo date('l jS \of F Y h:i:s A');?>"><br>
		 	<span> Name :</span>
			<br>
			<input type="text" name="nama" required placeholder="Enter your name"  value="<?php echo set_value('nama'); ?>">
			<span class="focus-input100"></span>
			<br>
	 		<span> Email :</span>
			<br>
			<input type="email" name="email" required placeholder="Enter your email" value="<?php echo set_value('email'); ?>" >
			<span class="focus-input100"></span>
			<br>
	 		<span>Message :</span>
			<br>
			<textarea rows="4"  name="message" required placeholder="Your message here......" ><?php echo set_value('message'); ?>  </textarea>
			<span class="focus-input100"></span>
			<br>
			<button name="button">Send Your Message </button>
			<?php form_close(); ?>
		</div>
</div>

<div class="col-xs-12 col-md-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.55872273809848!2d107.63565073894762!3d-6.897832103016023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7bb26b63b69%3A0x9ed5cea73b538ee0!2sInstitut+Teknologi+Nasional!5e0!3m2!1sid!2sid!4v1518684702969" width="100%" height="500vh" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</div>

</div>
</div>
