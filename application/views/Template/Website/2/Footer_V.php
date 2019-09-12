		<!-- start footer Area -->		
		<footer class="footer-area section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-3  col-md-12">
						<div class="single-footer-widget">
							<h6>Menu ClaVents</h6>
							<ul class="footer-nav">
								<li><a href="#">Kategori</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Contact</a></li>
							</ul>	
						</div>
					</div>
					<div class="col-lg-6  col-md-12">
						<div class="single-footer-widget newsletter">
							<h6>Subscribe Sekarang</h6>
							<p>Subscribe sekarang juga dan dapatkan info terbaru dari kami.</p>

						
							<form action="<?= site_url(); ?>Subscribe/index/<?= $name_page; ?>" method="post" class="form-inline">
								<div class="form-group row" style="width: 100%">
									<div class="col-lg-8 col-md-12">
										<input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
										<div style="position: absolute; left: -5000px;">
											<input name="menu" tabindex="-1" value="2" type="text">
										</div>
									</div> 
								
									<div class="col-lg-4 col-md-12">
										<button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
									</div> 
								</div>		
								<div class="info"></div>
							</form>
								
						</div>
					</div>
					<div class="col-lg-3  col-md-12">
						<div class="single-footer-widget mail-chimp">
							<h6 class="mb-20">ClaVents</h6>
							<p>description</p>
							<p>alamat</p>
							<p>kontak</p>
						</div>
					</div>						
				</div>

				<div class="row footer-bottom d-flex justify-content-between">
					<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
					<div class="col-lg-4 col-sm-12 footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</footer>
		<!-- End footer Area -->		

		<script src="<?php echo base_url(); ?>assets/website/js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="<?php echo base_url(); ?>assets/website/js/vendor/bootstrap.min.js"></script>			
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="<?php echo base_url(); ?>assets/website/js/easing.min.js"></script>			
		<script src="<?php echo base_url(); ?>assets/website/js/hoverIntent.js"></script>
		<script src="<?php echo base_url(); ?>assets/website/js/superfish.min.js"></script>	
		<script src="<?php echo base_url(); ?>assets/website/js/jquery.ajaxchimp.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/website/js/jquery.magnific-popup.min.js"></script>	
		<script src="<?php echo base_url(); ?>assets/website/js/owl.carousel.min.js"></script>			
		<script src="<?php echo base_url(); ?>assets/website/js/jquery.sticky.js"></script>
		<script src="<?php echo base_url(); ?>assets/website/js/jquery.nice-select.min.js"></script>			
		<script src="<?php echo base_url(); ?>assets/website/js/parallax.min.js"></script>		
		<script src="<?php echo base_url(); ?>assets/website/js/mail-script.js"></script>	
		<script src="<?php echo base_url(); ?>assets/website/js/modal.js"></script>
		<script src="<?php echo base_url(); ?>assets/website/js/multi-select.js"></script>
		<script src="<?php echo base_url(); ?>assets/website/js/main.js"></script>	
		<!-- DATE-PICKER -->
		<script src="<?php echo base_url(); ?>assets/website/vendor/date-picker/js/datepicker.js"></script>
		<script src="<?php echo base_url(); ?>assets/website/vendor/date-picker/js/datepicker.en.js"></script>
		
		<!-- <script>
			// Add the following code if you want the name of the file appear on select
			$(".custom-file-input").on("change", function() {
			var fileName = $(this).val().split("\\").pop();
			$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
			});
		</script> -->

		<script>
			var session = "<?php echo $_SESSION['Modal-Alert'] ?>";
			if(session == 'Failed-Subscribe') {
				$('#modal-failed').modal('show');
			}
			else if(session == 'Duplicate-Subscribe')
			{
				$('#modal-duplicate').modal('show');
			}
			else if(session == 'Success-Subscribe')
			{
				$('#modal-success').modal('show');
			}
		</script>
		</body>
</html>



