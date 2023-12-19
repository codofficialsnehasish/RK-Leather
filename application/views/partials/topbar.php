<!-- Page Wrapper -->
<div class="pageWrapper">
<!-- Promotion Bar -->
<!-- <div class="notification-bar mobilehide">
<a href="#" class="notification-bar__message">20% off your very first purchase, use promo code: diva fashion</a>
<span class="close-announcement icon an an-times"></span>
</div> -->
<!-- End Promotion Bar -->
<!-- Search Form Drawer -->
<div class="search">
<div class="search__form">
   <form class="search-bar__form" id="frid" action="<?= base_url('search/') ?>" method="get">
      <button id="sbtnid" class="go-btn search__button" type="submit"><i class="icon an an-search"></i></button>
      <input class="search__input" id="sbtnidinp" name="name" type="text" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off" />
   </form>
   <button type="button" class="search-trigger close-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Close"><i class="icon an an-times"></i></button>
</div>
</div>
<!-- End Search Form Drawer -->
<!-- Main Header -->
<div class="header-section clearfix animated hdr-sticky">
<!-- Desktop Header -->
<div class="header-1">
   <!-- Top Header -->
   <div class="top-header">
      <div class="container-fluid">
         <div class="row">
            <div class="col-10 col-sm-8 col-md-7 col-lg-4">
               <!-- <div class="currency picker float-start">
                  <select class="nice-select" name="currency">
                     <option value="USD">USD</option>
                     <option value="AUD">AUD</option>
                     <option value="CAD">CAD</option>
                     <option value="EUR">EUR</option>
                     <option value="GBP">GBP</option>
                     <option value="INR">INR</option>
                     <option value="JPY">JPY</option>
                  </select>
               </div> -->
               <div class="language picker float-start" id="google_translate_element">
               </div>
               <p class="phone-no float-start"><i class="icon an an-phone me-1"></i><a href="tel:<?= $this->settings->contact_phone; ?>"><?= $this->settings->contact_phone; ?></a></p>
            </div>
            <!-- <div id="google_translate_element"></div> -->
            <div class="col-sm-4 col-md-4 col-lg-4 d-none d-md-none d-lg-block">
               <div class="text-center">
                  <!--  <p class="top-header_middle-text">Free express shipping & import fees included</p> -->
               </div>
            </div>
            <div class="col-2 col-sm-4 col-md-5 col-lg-4 text-end d-none d-sm-block d-md-block d-lg-block">
               <div class="header-social">
                  <ul class="justify-content-end list--inline social-icons">
                     <!-- <li><a class="social-icons__link" href="<= $this->settings->facebook_url;?>" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Facebook"><i class="icon an an-facebook"></i> <span class="icon__fallback-text">Facebook</span></a></li> -->
                     <li><a class="social-icons__link" href="<?= $this->settings->twitter_url;?>" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Twitter"><i class="icon an an-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                     <li><a class="social-icons__link" href="<?= $this->settings->linkedin_url;?>" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Linkedin"><i class="icon an an-linkedin"></i> <span class="icon__fallback-text">Linkedin</span></a></li>
                     <li><a class="social-icons__link" href="<?= $this->settings->instagram_url;?>" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Instagram"><i class="icon an an-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                     <li><a class="social-icons__link" href="<?= $this->settings->youtube_url;?>" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="YouTube"><i class="icon icon an an-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                  </ul>
               </div>
            </div>
            <!-- <div class="col-2 col-sm-4 col-md-5 col-lg-4 text-end d-block d-sm-none d-md-none d-lg-none">
               <div class="user-menu-dropdown">
                  <span class="user-menu"><i class="an an-user-alt"></i></span>
                  <ul class="customer-links list-inline" style="display:none;">
                     <li class="item"><a href="login.html">Login</a></li>
                     <li class="item"><a href="register.html">Register</a></li>
                     <li class="item"><a href="my-account.html">Orders</a></li>
                     <li class="item"><a href="compare.html">Compare</a></li>
                  </ul>
               </div>
            </div> -->
         </div>
      </div>
   </div>
   <!-- End Top Header -->

   <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en', includedLanguages: 'en,es,fr,ar,de,ja', layout: google.translate.TranslateElement.InlineLayout.SIMPLE }, 'google_translate_element');
        }
    </script>
