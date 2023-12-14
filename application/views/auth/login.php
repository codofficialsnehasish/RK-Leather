<?php $this->load->view('partials/main');?>
<head>
<head>
 <?php $this->load->view('partials/title-meta');?>
    <!-- ====================== Css file ================== -->
<?php $this->load->view('partials/head');?>
</head>
</head>

<?php $this->load->view('partials/body');?>
	<a href="<?= base_url('');?>" class="backtohome1">Back to home <i class="zmdi zmdi-home"></i></a>
	<section class="new-login-page">
		<div class="row align-center text-center w-100vh m-0">
			<div class="col-md-8 log-sign-section only-for-login">
				<h2 class="yeseva alada-heading">Login To Your Account</h2>
				<?php $this->load->view('auth/sociallogin');?>
	            <div class="wid400 card mt-5">
					<div style="" id="emailLoginForm">
						<?= form_open('authentication/login-process', 'class="needs-validation" novalidate ');?>					            	
								<?php $this->load->view('admin/partials/_messages');?>
	            		<div class="form-floating mb-4">
			                <input type="email" class="form-control" id="floatingInputEmail" name="email" placeholder="name@example.com">
			                <label for="floatingInputEmail">Email address</label>
			            </div>
			            <div class="form-floating mb-4">
			                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
			                <label for="floatingPassword">Password</label>
			            </div>
			            <div class="row m-0">
			            	<div class="col-6 text-start">
			            		<label>
			            			<input type="checkbox" name="" class="check-input"> Remember Me
			            		</label>
			            	</div>
			            	<div class="col-6 text-end">
			            		<a href="javascript:;" id="forgetPassword">Forgot password?</a>
			            	</div>
			            </div>
			            <div class="text-center mt-5 mb-4 col-6 mx-auto">
			                <button class="w-100 btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">
			                	Login
			                </button>
			            </div>
						<?= form_close();?>
                   </div>
                     <?php $this->load->view('auth/_forgetPassword');?> 
                            
                     <?php $this->load->view('auth/_mobileOtpLogin');?> 

	            </div>
			</div>
			<div class="col-md-4 w-100vh text-center login-bg-s align-center">
				<div class="form-target">
					<h2 class="yeseva alada-heading text-white mb-3">New Here!</h2>
					<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#kjhgjfkk">
					  	Sign up
					</button>
				</div>
			</div>
		</div>
	</section>


	<div class="jkghdgz">
		<div class="modal fade" id="kjhgjfkk" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		  	<div class="modal-dialog modal-dialog-centered">
		    	<div class="modal-content">
		      		<div class="modal-body position-relative">
		      			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      			<h2 class="yeseva alada-heading text-center"><small>Sign Up </small></h2>
		        		<div class="row mt-5 mb-5 " style="justify-content: center;">
		            		<div class="gitn">
						        <input class="form-check-input" type="radio" name="user_type" id="gridRadios1" value="buyer" checked="">
						        <label class="form-check-label" for="gridRadios1">
						          As a Buyer
						        </label>
						    </div>
						    <div class="gitn">
						        <input class="form-check-input" type="radio" name="user_type" id="gridRadios2" value="seller">
						        <label class="form-check-label" for="gridRadios2">
						          As a Seller
						        </label>
						    </div>
		            	</div>
		      		</div>
		      		<div class="modal-footer">
		        		<button type="button" class="btn-ef4036" id="log_nxt">Next</button>
		      		</div>
		    	</div>
		  	</div>
		</div>
	</div>

<!------ all scripts link ------>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js');?>"></script> -->
	<script src="<?= base_url('assets/js/jquery-3.6.0.min.js');?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/vendor/bootstrap5.1/js/bootstrap.bundle.min.js');?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/vendor/produce-zoom/js/my-zoom.js');?>"></script>
	<script src="<?= base_url('assets/js/nav.jquery.min.js');?>"></script>
		

	<script type="text/javascript" src="<?= base_url('assets/vendor/slick-slider/slick/slick.min.js');?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/vendor/acmeticker/assets/js/acmeticker.min.js');?>"></script>
	<script>
     $("#log_nxt").click(function() {
        const getUrl = window.location;
        const baseUrl = getUrl.protocol + "//" + getUrl.host + "/" ;
        const val = $("input[name='user_type']:checked").val();
        if (val == 'buyer') {
            window.location.href = baseUrl+"signup";
        } else {
            window.location.href = baseUrl+"seller/signup/step1";
        }

    })

    </script>
<?php $this->load->view('partials/ajax');?>

</body>
</html>    