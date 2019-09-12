        <!-- start footer Area -->		
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-12">
                        <div class="single-footer-widget">
                            <h6>Menu ClaVents</h6>
                            <ul class="footer-nav">
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Tentang</a></li>
                                <li><a href="#">Kontak</a></li>
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
                                        <input name="email" placeholder="Masukkan Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Email '" required="" type="email">
                                        <div style="position: absolute; left: -5000px;">
                                            <input name="menu" tabindex="-1" value="1" type="text">
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script><a href="http://firstsearchcenter.com" target="_blank"> ClaVents</a>. Semua Hak Cipta Dilindungi.
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
        
        <!-- start modal -->
        <!-- modal success -->
        <div class="modal modal-alert-success-clavest animated-swing-clavest fade" id="modal-success">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class=" modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <i class="fa fa-check modal-check-clavest"></i>
                        <h2>Sukses!</h2>
                        <p>Anda berhasil Subscribe<p>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer" >
                        <div class="col text-center">
                            <a data-dismiss="modal" href="#">Done</a>
                            <!-- <a href="#">Process</a> -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- modal duplikat -->
        <div class="modal modal-alert-duplikat-clavest animated-bounce-up-clavest fade" id="modal-duplicate">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class=" modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <!-- <span class="adminpro-icon adminpro-warning-danger modal-check-pro information-icon-pro"></span> -->
                        <i class="fa fa-exclamation modal-check-clavest"></i>
                        <h2>Perhatian!</h2>
                        <p>Email yang anda masukkan sudah Subscribe.<p>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer" >
                        <div class="col text-center">
                            <a data-dismiss="modal" href="#">Close</a>
                            <!-- <a href="#">Process</a> -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- modal failed -->
        <div class="modal modal-alert-failed-clavest animated-shake-clavest fade" id="modal-failed">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class=" modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <!-- <span class="adminpro-icon adminpro-warning-danger modal-check-pro information-icon-pro"></span> -->
                        <i class="fa fa-times modal-check-clavest"></i>
                        <h2>Gagal!</h2>
                        <p>Email yang anda masukkan tidak valid.<p>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer" >
                        <div class="col text-center">
                            <a data-dismiss="modal" href="#">Close</a>
                            <!-- <a href="#">Process</a> -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- end modal -->

        <script src="<?= base_url(); ?>assets/website/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="<?= base_url(); ?>assets/website/js/vendor/bootstrap.min.js"></script>			
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="<?= base_url(); ?>assets/website/js/easing.min.js"></script>			
        <script src="<?= base_url(); ?>assets/website/js/hoverIntent.js"></script>
        <script src="<?= base_url(); ?>assets/website/js/superfish.min.js"></script>	
        <script src="<?= base_url(); ?>assets/website/js/jquery.ajaxchimp.min.js"></script>
        <script src="<?= base_url(); ?>assets/website/js/jquery.magnific-popup.min.js"></script>	
        <script src="<?= base_url(); ?>assets/website/js/owl.carousel.min.js"></script>			
        <script src="<?= base_url(); ?>assets/website/js/jquery.sticky.js"></script>
        <script src="<?= base_url(); ?>assets/website/js/jquery.nice-select.min.js"></script>			
        <script src="<?= base_url(); ?>assets/website/js/parallax.min.js"></script>		
        <script src="<?= base_url(); ?>assets/website/js/mail-script.js"></script>
        <script src="<?= base_url(); ?>assets/website/js/modal.js"></script>	
        <script src="<?= base_url(); ?>assets/website/js/main.js"></script>
        
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



