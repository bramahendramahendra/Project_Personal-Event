<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<?php $this->load->view("_Partials/Header_V.php") ?>
	
	<style>
		#img-upload, #logo-image{
			width: 50%;
		}	
	</style>
	<!-- include summernote css/js -->
	<!-- <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/website/summernote/summernote-bs4.css';?>">
</head>
<body>
	<!-- NAVBAR  -->
	<?php $this->load->view("_Partials/Navbar_V.php") ?>
	<!-- BANNER   -->
	<?php $this->load->view("_Partials/Banner/Banner_All_V.php") ?>

	<!-- START Buat Event page -->
	<!-- start form insert -->
	<div class="whole-wrap">
		<div class="container">
			<div class="section-top-border">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<h3 class="mb-30">Buatlah event </h3>
						<!-- <h4 class="mb-30">Buatlah event </h4> -->
						<form action="<?= site_url(); ?>Buat_Event/create" method="post" enctype="multipart/form-data">
						
							<!-- Event     -->
							<h4 class="mb-30">Event </h4>
							<!-- Nama Event -->
							<div class="mt-10">
								<div class="row">
									<div class="col-md-2" style="text-align: right;" >
										<p>Nama Event</p>
									</div>
									<div class="col-md-10">
										<input name="nama_event" type="text" placeholder="Nama Event" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Event'" class="single-input">
									</div>
								</div>
							</div>

							<!-- upload poter/banner/gambar  -->
							<div class="mt-10">
								<div class="row">
									<div class="col-md-2" style="text-align: right;" >
										<p>
											Upload Event  <br>
											Poster/Banner/Gambar
										</p>
									</div>
									<div class="col-md-10">
										<div class="custom-file">
											<input name="poster_event" type="file" class="custom-file-input" id="image_input" >
											<label class="custom-file-label" for="image_input">Choose file</label>
										</div>
									</div>
								</div>                                    
							</div>
							<img id='img-upload'/>
							<br>
							
							<!-- Katageri -->
							<h4 class="mb-30">Kategori Event </h4>
							<!-- Katagero Event -->
							<div class="mt-10">
								<div class="row">
									<div class="col-md-2" style="text-align: right;" >
										<p>Kategori</p>
									</div>
									<div class="col-md-10">
										<select name="kategori_event[]" id="multi-select-condition" class="form-control">
											<option value="Bazaar" icon="multi-option-clavents-icon-bazaar">Bazaar</option>
											<option value="Job Fair" icon="multi-option-clavents-icon-job_fair">Job Fair</option>
											<option value="Lomba" icon="multi-option-clavents-icon-lomba">Lomba</option>
											<option value="Pameran" icon="multi-option-clavents-icon-pameran">Pameran</option>
											<option value="Seminar" icon="multi-option-clavents-icon-seminar">Seminar</option> 
										</select>
									</div>
								</div>
							</div>

							<!-- Jenis Event -->
							<div class="mt-10 single-element-widget">
								<div class="row">
									<div class="col-md-2" style="text-align: right;" >
										<p>Jenis</p>
									</div>
									<div class="col-md-10">
										<div class="form-check">
											<input class="form-check-input" type="radio" name="jenis_event" id="" value="Public" checked>
											<label class="form-check-label" for="Public">
												Public
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="jenis_event" id="" value="Private">
											<label class="form-check-label" for="Private">
												Private
											</label>
										</div>
									</div>
								</div>
							</div>

							<!-- Kapasitas -->
							<div class="mt-10">
								<div class="row">
									<div class="col-md-2" style="text-align: right;" >
										<p>Kapasitas</p>
									</div>
									<div class="col-md-10">
										<input type="text" name="kapasitas_event" placeholder="Kapasitas" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kapasitas'" class="single-input">
									</div>
								</div>
							</div>
							<br>

							<!-- Tanggal dan Jam -->
							<h4 class="mb-30">Tanggal dan Jam Event </h4>
							<!-- Start Tanggal Event -->
							<div class="mt-10">
								<div class="row">
									<div class="col-md-2" style="text-align: right;" >
										<p>Tanggal Mulai</p>
									</div>
									<div class="col-md-5">
										<input type="text" name="tanggal_mulai_event" placeholder="Tanggal Mulai Event" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal Mulai Event'" class="single-input datepicker-here" data-language='en' id="datepicker-0"  >
									</div>
								</div>                                    
							</div>

							<!-- Start Jam Event -->
							<div class="mt-10">
								<div class="row">
									<div class="col-md-2" style="text-align: right;" >
										<p>Jam Mulai</p>
									</div>
									<div class="col-md-3">
										<input type="time" format="H:i A" name="jam_mulai_event" placeholder="Jam Mulai Event" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Jam Mulai Event'" class="single-input">
									</div>
								</div>
							</div>
							
							<!-- End Tanggal Event -->
							<div class="mt-10">
								<div class="row">
									<div class="col-md-2" style="text-align: right;" >
										<p>Tanggal Akhir</p>
									</div>
									<div class="col-md-5">
										<input type="text" name="tanggal_akhir_event" placeholder="Tanggal Akhir Event" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal Akhir Event'" class="single-input datepicker-here" data-language='en' id="datepicker-1" >
									</div>
								</div>                                    
							</div>

							<!-- End Jam Event -->
							<div class="mt-10">
								<div class="row">
									<div class="col-md-2" style="text-align: right;" >
										<p>Jam Akhir</p>
									</div>
									<div class="col-md-3">
										<input type="time" format="H:i A" name="jam_akhir_event" placeholder="Jam Akhir Event" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Jam Akhir Event'" class="single-input">
									</div>
								</div>
							</div>


							<!-- Alamat -->
							<br>
							<h4 class="mb-30">Alamat </h4>	
							<!-- Nama Tempat Event -->
							<div class="mt-10">
								<div class="row">
									<div class="col-md-2" style="text-align: right;" >
										<p>Nama Tempat</p>
									</div>
									<div class="col-md-10">
										<textarea name="nama_tempat_event" class="single-textarea" placeholder="Nama Tempat" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Tempat'"></textarea>
									</div>
								</div>
							</div>

							<!-- Alamat Event -->
							<div class="mt-10">
								<div class="row">
									<div class="col-md-2" style="text-align: right;" >
										<p>Alamat</p>
									</div>
									<div class="col-md-10">
										<textarea name="alamat_event" class="single-textarea" placeholder="Alamat" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat'"></textarea>
									</div>
								</div>
							</div>

							<!-- Alamat Kota/Kabupaten Event -->
							<div class="mt-10">
								<div class="row">
									<div class="col-md-2" style="text-align: right;" >
										<p>Kota/Kabupaten</p>
									</div>
									<div class="col-md-10">
										<input type="text" name="kota_kabupaten_event" placeholder="Kota/Kabupaten" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kota/Kabupaten'" class="single-input">
									</div>
								</div>
							</div>

							<!-- Alamat Provinsi Event -->
							<div class="mt-10">
								<div class="row">
									<div class="col-md-2" style="text-align: right;" >
										<p>Provinsi</p>
									</div>
									<div class="col-md-10">
										<input type="text" name="provinsi_event" placeholder="Provinsi" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Provinsi'" class="single-input">
									</div>
								</div>
							</div>
							<br>

							<!-- Organisasi atau kepanitiaan -->
							<h4 class="mb-30">Organisasi </h4>
							<!-- upload logo organisasi -->
							<div class="mt-10">
								<div class="row">
									<div class="col-md-2" style="text-align: right;" >
										<p>
											Upload <br>
											Logo Organisasi
										</p>
									</div>
									<div class="col-md-10">
										<div class="custom-file">	
											<input name="logo_organisasi" type="file" class="custom-file-input" id="">
											<label class="custom-file-label" for="">Choose file</label>
										</div>
									</div>
								</div>                                    
							</div>
							<!-- <img id='logo-image'/> -->

							<!-- Nama Orhanisasi -->
							<div class="mt-10">
								<div class="row">
									<div class="col-md-2" style="text-align: right;" >
										<p>Nama Organisasi</p>
									</div>
									<div class="col-md-10">
										<input type="text" name="nama_organisasi" placeholder="Nama Organisasi" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Organisasi'" class="single-input">
									</div>
								</div>
							</div>
							<br>
							
							<!-- Tentang Event -->
							<h4 class="mb-30">Tentang Event </h4>
							<!-- Deskripsi Event -->
							<div class="mt-10">
								<div class="row">
									<div class="col-md-2" style="text-align: right;" >
										<p>Deskripsi Event</p>
									</div>
									<div class="col-md-10">
										<!-- <textarea name="lokasi" class="single-textarea" placeholder="Deskripsi Event" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Deskripsi Event'"></textarea> -->
										<!-- <div id="summernote" name="deskripsi_event"><p>Hello Summernote</p></div> -->
										<textarea id="summernote" name="deskripsi_event"></textarea>
									</div>
								</div>
							</div>
							<!-- Syarat dan Ketentuan Event -->
							<div class="mt-10">
								<div class="row">
									<div class="col-md-2" style="text-align: right;" >
										<p>Syarat dan Ketentuan</p>
									</div>
									<div class="col-md-10">
										<textarea name="syarat_dan_ketentuan_event" class="single-textarea" placeholder="Syarat dan Ketentuan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Syarat dan Ketentuan'"></textarea>
									</div>
								</div>
							</div>
							<!-- Info dan Kontak Event -->
							<div class="mt-10">
								<div class="row">
									<div class="col-md-2" style="text-align: right;" >
										<p>Info dan Kontak</p>
									</div>
									<div class="col-md-10">
										<textarea name="info_dan_kontak_event" class="single-textarea" placeholder="Info dan Kontak" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Info dan Kontak'"></textarea>
									</div>
								</div>
							</div>
							<!-- SUBMIT  -->
							<div class="button-group-area mt-40">
								<div class="row">
									<div class="col-md-10"></div>
									<div class="col-md-2" >
										<button class="genric-btn success circle arrow" type="submit">
											SUBMIT
											<span class="lnr lnr-arrow-right"></span>
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end form insert -->
	<!-- END Buat Event page -->

	<!-- FOOTER  -->
	<?php $this->load->view("_Partials/Footer_V.php") ?>
	<!-- JAVASCRIPT  -->
	<?php $this->load->view("_Partials/JavaScript_V.php") ?>	
	<!-- <script>
		$(function () {
			$('#datepicker-0').datepicker({
				format: "yyyy-mm-dd",
				autoclose: true
			});
			$('#datepicker-1').datepicker({
				format: "yyyy-mm-dd",
				autoclose: true
			});
		});
	</script> -->
	<!-- include summernote  -->	
	<script type="text/javascript" src="<?php echo base_url().'assets/website/summernote/summernote-bs4.js';?>"></script>
    <script>
		$(document).ready(function(){
			$('#summernote').summernote({
				height: "300px",
				callbacks: {
			        onImageUpload: function(image) {
			            uploadImage(image[0]);
			        },
			        onMediaDelete : function(target) {
			            deleteImage(target[0].src);
			        }
				}
			});

			function uploadImage(image) {
			    var data = new FormData();
			    data.append("image", image);
			    $.ajax({
			        url: "<?php echo site_url('Buat_Event/Upload_Image')?>",
			        cache: false,
			        contentType: false,
			        processData: false,
			        data: data,
			        type: "POST",
			        success: function(url) {
						$('#summernote').summernote("insertImage", url);
			        },
			        error: function(data) {
			            console.log(data);
			        }
			    });
			}

			function deleteImage(src) {
			    $.ajax({
			        data: {src : src},
			        type: "POST",
			        url: "<?php echo site_url('Buat_Event/delete_image')?>",
			        cache: false,
			        success: function(response) {
			            console.log(response);
			        }
			    });
			}

		});
  	</script>

	
</body>
</html>
