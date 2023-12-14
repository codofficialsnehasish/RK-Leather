<html>
<head>
<head>
 <?php $this->load->view('partials/title-meta');?>
    <!-- ====================== Css file ================== -->
<?php $this->load->view('partials/head');?>
</head>
</head>

<?php $this->load->view('partials/body');?>
	<section class="new-login-page">
		<div class="row align-center text-center w-100vh m-0">
			<div class="col-md-8 log-sign-section">
				<h2 class="yeseva alada-heading">Register Now</h2>
				<?php $this->load->view('auth/sociallogin');?>
	            <div class="wid400 card mt-3">
                <?= form_open_multipart('authentication/reg-process', 'class="needs-validation" name="myform"  novalidate ');?>
                <?php $this->load->view('admin/partials/_messages');?>
						            <div class="row">
										<div class="col-md-6">
											<div class="form-floating mb-3">
                                        		<input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" required>
                                        		<label for="first_name">First Name</label>
                                    		</div>
										</div>
                                        <div class="col-md-6">
                                    		<div class="form-floating mb-3">
                                        		<input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" required>
                                        		<label for="last_name">Last Name</label>
                                    		</div>
										</div>
                                        <div class="col-md-6">
                                        	<div class="form-floating mb-3">
						                		<input type="email" class="form-control" name="email" id="floatingInputEmail" placeholder="name@example.com">
						                		<label for="floatingInputEmail">Email address</label>
						            		</div>
                                        </div>
                                        <div class="col-md-6">
                                        	<div class="form-floating mb-3">
						                		<input type="tel" class="form-control" name="phone_number" id="floatingInputnumber" placeholder="0000000000" required>
						                		<label for="floatingInputnumber">Phone Number</label>
						            		</div>
                                        </div>
                                        <div class="col-md-12">
                                        	<div class="form-floating mb-3">
						                		<input type="text" class="form-control" name="address" id="address" placeholder="Address" required>
						                		<label for="floatingInputnumber">Address</label>
						            		</div>
                                        </div>
                                        <div class="col-md-6">
                                        	<div class="form-floating mb-3">
						                		<input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
						                		<label for="floatingPassword">Password</label>
						            		</div>
                                        </div>
                                        <div class="col-md-6">
                                        	<div class="form-floating mb-3">
						                		<input type="password" class="form-control" name="confirm_password" id="floatingPasswordConfirm" placeholder="Confirm Password">
						                		<label for="floatingPasswordConfirm">Confirm Password</label>
						            		</div>
                                        </div>
                                        <div class="col-md-12">
                                        	<div class="form-check text-start">
												<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
												<label class="form-check-label" for="invalidCheck">
													I Agree to <a href="<?= base_url('terms-and-conditions')?>" target="_blank">terms and conditions</a>
												</label>
												<div class="invalid-feedback">
													You must agree before submitting.
												</div>
											</div>
                                        </div>
                                        <div class="col-md-12">
                                        	<div class="text-center mb-2 col-6 mx-auto">
						                		<button class="w-100 btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Register</button>
												Already have an account? <a href="<?= base_url('login');?>">Login</a> here
						            		</div>	
                                        </div>
									</div>						            					            
									<?= form_close();?>
	            </div>
			</div>
			<div class="col-md-4 w-100vh text-center login-bg-s align-center">
				<div class="form-target">
					<!-- <h2 class="yeseva alada-heading text-white">New Here!</h2>
					<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#kjhgjfkk">
					  	Sign up
					</button> -->
				</div>
			</div>
		</div>
	</section>
	<!-------------back to home-------------->
	<a href="<?= base_url('');?>" class="backtohome1">Back to home <i class="zmdi zmdi-home"></i></a>


<!------ all scripts link ------>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js');?>"></script> -->
	<script src="<?= base_url('assets/js/jquery-3.6.0.min.js');?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/vendor/bootstrap5.1/js/bootstrap.bundle.min.js');?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/vendor/produce-zoom/js/my-zoom.js');?>"></script>
	<script src="<?= base_url('assets/js/nav.jquery.min.js');?>"></script>
		
	<script type="text/javascript" src="<?= base_url('assets/vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js');?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/vendor/slick-slider/slick/slick.min.js');?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/vendor/acmeticker/assets/js/acmeticker.min.js');?>"></script>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')
  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }else{
           // $(".animate-container").addClass("animation-added");
            setInterval(function() { 
          //  $('#stepForm1').submit();
        }, 4000);  
        }
        
        form.classList.add('was-validated')
        
      }, false)
    })
   
})()
</script>

</body>
</html>