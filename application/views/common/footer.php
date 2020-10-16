<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer1">
								
							<a href="#"><i class="fa fa-map-marker"></i>Thane, Ulhasnagar</a>
							<a href="#"><i class="fa fa-phone"></i>+91-9284168815</a>
							<a href="#"><i class="fa fa-envelope-o"></i>san.athavale2011@yahoo.in</a>
								<!-- <ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Thane, Ulhasnagar</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+91-9284168815</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>san.athavale2011@yahoo.in</a></li>
								</ul> -->
							</div>
						</div>
						<div class="col-md-6 text-center" style="margin-top:10px;">
							<!-- <ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul> -->
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="#" target="_blank">Santosh Athavale</a>
							<!-- Link back to Colorlib can't be removed. -->
							</span>
						</div>

					

						<div class="clearfix visible-xs"></div>

						
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->
                

			<!-- bottom footer -->
			
			<!-- /bottom footer -->
		</footer>
		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/nouislider.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.zoom.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/actions.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/sweetalert.min"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>assets/js/script.js"></script>
		<script>var c = 0;
        function menu(){
          if(c % 2 == 0) {																																																																																																																								
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";    
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";    
            c++; 
              }else{
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";        
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";        
            c++;
              }
        }
           
		
</script>
    <script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>
	