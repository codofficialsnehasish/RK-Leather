<!-- Footer -->
<footer id="footer">
            <div class="site-footer">
               <div class="footer-top">
                  <div class="container">
                     <!-- Footer Links -->
                     <div class="row">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 contact-box">
                           <img src="<?= get_email_logo() ?>" alt="Diva Multipurpose Html Template" title="Diva Multipurpose Html Template" width="130">
                           <p><?= strip_tags(get_main_about()[0]->about_content); ?></p>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                           <h4 class="h4">Quick Links</h4>
                           <ul>
                              <li><a href="<?= base_url(' ') ?>">Home</a></li>
                              <li><a href="<?= base_url('/about_us') ?>">About us</a></li>
                              <li><a href="<?= base_url('/contact_us') ?>">Contact Us</a></li>
                              <li><a href="#">Privacy Policy</a></li>
                           </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-5 col-lg-5 newsletter">
                           <div class="display-table">
                              <div class="display-table-cell footer-newsletter">
                                 <form action=" " method="post">
                                    <label class="h4">Newsletter</label>
                                    <p>sign up for newsletter to know our latest news and offers.</p>
                                    <div class="input-group">
                                       <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
                                       <span class="input-group__btn">
                                       <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe" disabled><span class="newsletter__submit-text--large">Sign Up</span></button>
                                       </span>
                                    </div>
                                 </form>
                              </div>
                           </div>
                           <div class="callwhatsapp">
                              <a href="https://wa.me/+919804723114" target="_blank"><img src="<?= base_url('assets/site/images/whatsapp.png') ?>" alt="site name" class="img-fluid mb-3"></a>
                              <!-- <a href="tel:9804723114" target="_blank"><img src="<= base_url('assets/site/images/call.png') ?>" alt="site name" class="img-fluid"></a> -->
                           </div>
                           <ul class="list--inline site-footer__social-icons social-icons">
                              <!-- <li><a class="social-icons__link d-inline-block" href="<= $this->settings->facebook_url;?>" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Facebook" aria-label="Facebook"><i class="icon an an-facebook"></i></a></li> -->
                              <li><a class="social-icons__link d-inline-block" href="<?= $this->settings->twitter_url;?>" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Twitter"><i class="icon an an-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                              <li><a class="social-icons__link d-inline-block" href="<?= $this->settings->linkedin_url;?>" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Linkedin"><i class="icon an an-linkedin"></i> <span class="icon__fallback-text">Linkedin</span></a></li>
                              <li><a class="social-icons__link d-inline-block" href="<?= $this->settings->instagram_url;?>" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Instagram"><i class="icon an an-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                              <li><a class="social-icons__link d-inline-block" href="<?= $this->settings->youtube_url;?>" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="YouTube"><i class="icon an an-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-- End Footer Links -->
               </div>
               <div class="footer-bottom">
                  <div class="container">
                     <div class="row">
                        <!-- Footer Copyright -->
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 copyright text-center"><span><?= $this->settings->copyright; ?></span></div>
                        <!-- End Footer Copyright -->
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- End Footer -->
         <!-- Scoll Top -->
         <div id="site-scroll"><i class="icon an an-angle-up"></i></div>
         <!-- End Scoll Top -->

	
	
	
	
	
    <!-- FOOTER -->
   <!-- Including Javascript -->
      <!-- Plugins JS -->
      <script src="<?= base_url('assets/site/js/plugins.js') ?>"></script>
      <!-- Main JS -->
      <script src="<?= base_url('assets/site/js/main.js') ?>"></script>
      <script>
         $('.sub-menu ul').hide();
      $(".sub-menu a").click(function () {
         $(this).parent(".sub-menu").children("ul").slideToggle("100");
         $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
      });
      </script>
      <script type="text/javascript">
         $('.mainslider').slick({
         infinite: true,
         slidesToShow: 1,
         slidesToScroll: 1,
         focusOnSelect: true,
         autoplay: true,
         autoplaySpeed: 5000,
         prevArrow:'<button class="slick-prev"><i class="fa fa-arrow-left"></i></button>',
         nextArrow:'<button class="slick-next"><i class="fa fa-arrow-right"></i></button>'
         });
      </script>

	<!-- toast message -->
<script src="<?= base_url('assets/admin/libs/toast/toastr.js');?>"></script>
<script src="<?= base_url('assets/admin/js/pages/toastr.init.js');?>"></script>
<!-- toast message -->

    <!-- Bootstrap rating js -->
<script src="<?= base_url('assets/admin/libs/bootstrap-rating/bootstrap-rating.min.js');?>"></script>

<script src="<?= base_url('assets/admin/js/pages/rating-init.js');?>"></script>

<script src="<?= base_url('assets/admin/libs/sweetalert2/sweetalert2.min.js');?>"></script>

<!-- Sweet alert init js-->
<script src="<?= base_url('assets/admin/js/pages/sweet-alerts.init.js');?>"></script>
<script type="text/javascript" src="https://magxmart.com/assets/vendor/produce-zoom/js/my-zoom.js"></script>


    <?php $this->load->view('partials/ajax');?>
    <?php $this->load->view('partials/_messages');?>
    <?php $this->load->view('partials/modal');?>

<script>
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

// 'use strict';
//    window.addEventListener('load', function () {
//          // Fetch all the forms we want to apply custom Bootstrap validation styles to
//          var forms = document.getElementsByClassName('needs-validation');
//          // Loop over them and prevent submission
//          var validation = Array.prototype.filter.call(forms, function (form) {
//             form.addEventListener('submit', function (event) {
//                //Prevent the browser default action
//                event.preventDefault();
//                event.stopPropagation();
//                if (form.checkValidity()) {
//                      try {
//                         var data = {
//                            firstname: form.name.value,
//                            lastname: form.lastname.value,
//                            company: form.company.value,
//                            email: form.email.value,
//                            phone: form.phone.value,
//                            jobtitle: form.job.value,
//                            message: form.comments.value,
//                         }
//                         $.ajax({
//                            type: "POST",
//                            url: 'http://localhost/filthygainzinc/add-to-cart',
//                            data: data
//                         });
//                      } catch (error) {
//                         console.log(error)
//                      }
//                }
//                form.classList.add('was-validated');
//             }, false);
//          });
//    }, false);

</script>
</body>
</html>