<?php 
$categoriesMenu=$this->select->get_parent_categories();

		$menucon['where']['is_visible'] = 1;
        $menucon['where']['is_home'] = 1;
        $menucon['where']['parent_id'] = 0;
		$menucon['tblName'] = 'categories';
        $menucategories = $this->select->getResult($menucon);
?>

         <?php $this->load->view('partials/topbar');?>
         <!-- Header -->
         <div class="header-wrap d-flex">
                  <div class="container-fluid">
                     <div class="row align-items-center">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-8 d-block d-lg-none">
                           <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Menu"><i class="icon an an-times"></i><i class="icon an an-bars"></i></button>
                           <!-- Mobile Search -->
                           <div class="site-header__search d-block d-lg-none mobile-search-icon">
                              <button type="button" class="search-trigger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Search"><i class="icon an an-search"></i></button>
                           </div>
                           <!-- End Mobile Search -->
                        </div>
                        <!-- Desktop Logo -->
                        <div class="logo col-4 col-sm-4 col-md-4 col-lg-2 align-self-center">
                           <a href="<?= base_url(''); ?>"><img src="<?= get_logo(); ?>" alt="Diva Multipurpose Html Template" title="Diva Multipurpose Html Template" /></a>
                        </div>
                        <!-- End Desktop Logo -->
                        <!-- Desktop Navigation -->
                        <div class="col-2 col-sm-3 col-md-3 col-lg-8 d-none d-lg-block">
                           <!-- Desktop Menu -->
                           <nav class="grid__item" id="AccessibleNav">
                              <ul id="siteNav" class="d-flex flex-wrap site-nav medium left ms-0 hidearrow">
                                 <li class="lvl1 parent dropdown">
                                    <a href="<?= base_url(''); ?>">Home<i class="an an-angle-down"></i></a>
                                 </li>
                                 <?php $inc = 1; if($menucategories){ foreach($menucategories as $cata){ ?>
                                 <li class="lvl1 parent <?php if($this->select->get_sub_parent_categories_by_id($cata->cat_id,'is_home')){echo 'megamenu';}else{ echo 'dropdown';} ?>">
                                    <a href="<?= base_url('products/'.$cata->cat_slug); ?>"><?= $cata->cat_name ?></a>
                                    <?php if($this->select->get_sub_parent_categories_by_id($cata->cat_id,'is_home')){ ?>
                                    <div class="megamenu style2">
                                       <ul class="row mmWrapper">
                                          <?php 
                                             $res = $this->select->get_sub_parent_categories_by_id($cata->cat_id,'is_home');
                                             foreach($res as $r){
                                                if($inc >= 6){break;}

                                          ?>
                                          <li class="lvl-1 col-md-2 col-lg-2">
                                             <a href="<?= base_url('products/'.$r->cat_slug); ?>" class="site-nav lvl-1 menu-title"><?= $r->cat_name; ?></a>
                                             <?php if($this->select->get_sub_categories_by_id($r->cat_id,'is_home')){ ?>
                                             <ul class="subLinks">
                                                <?php 
                                                   $res_sub = $this->select->get_sub_categories_by_id($r->cat_id,'is_home');
                                                   foreach($res_sub as $sup){
                                                ?>
                                                <li class="lvl-2"><a href="<?= base_url('products/'.$sup->cat_slug); ?>" class="site-nav"><?= $sup->cat_name; ?></a></li>
                                                <?php } ?>
                                             </ul>
                                             <?php } ?>
                                          </li>
                                          <?php $inc++; } ?>
                                          <li class="lvl-1 col-md-2 col-lg-2 text-center">
                                             <a href="#"><img src="<?= get_image($cata->media_id) ?>" width="190" alt="image"/></a>
                                          </li>
                                       </ul>
                                    </div>
                                    <?php } ?>
                                 </li>
                                 <?php } }?>
                                 <li class="lvl1 parent dropdown">
                                    <a href="<?= base_url('/about_us') ?>">ABOUT US</a>
                                 </li>
                                 <li class="lvl1 parent dropdown">
                                    <a href="<?= base_url('/contact_us') ?>">CONTACT US</a>
                                 </li>
                              </ul>
                           </nav>
                           <!-- End Desktop Menu -->
                        </div>
                        <!-- End Desktop Navigation -->
                        <!-- Right Side -->
                        <div class="col-4 col-sm-4 col-md-4 col-lg-2">
                           <div class="right-action d-flex-align-center justify-content-end">
                              <!-- Search -->
                              <div class="item site-header__search d-none d-lg-block">
                                 <button type="button" class="search-trigger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Search"><i class="icon an an-search"></i></button>
                              </div>
                              <!-- End Search -->
                              <!-- User Links -->
                              <!--   <div class="item user-menu-dropdown d-none d-sm-block d-md-block d-lg-block">
                                 <span class="user-menu" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Account"><i class="icon an an-user-alt"></i></span>
                                 <ul class="customer-links list-inline" style="display:none;">
                                     <li class="item"><a href="login.html">Login</a></li>
                                     <li class="item"><a href="register.html">Register</a></li>
                                     <li class="item"><a href="my-account.html">Orders</a></li>
                                     <li class="item"><a href="compare.html">Compare</a></li>
                                 </ul>
                                 </div> -->
                           </div>
                        </div>
                        <!-- End Right Side -->
                     </div>
                  </div>
               </div>
               <!-- End Header -->
            </div>
            <!-- End Desktop Header -->
         </div>
         <!-- End Main Header -->
         <!-- Mobile Menu -->
         <div class="mobile-nav-wrapper" role="navigation">
            <div class="closemobileMenu"><i class="icon an an-times-circle closemenu"></i> Close Menu</div>
            <ul id="MobileNav" class="mobile-nav">
               <li class="lvl1 parent megamenu">
                  <a href="<?= base_url(''); ?>">Home</a>
               </li>

               <?php if($menucategories){ foreach($menucategories as $cata){ ?>
               <li class="lvl1 parent <?php if($this->select->get_sub_parent_categories_by_id($cata->cat_id,'is_home')){echo 'megamenu';}else{ echo 'dropdown';} ?>">
                  <a href="<?= base_url('products/'.$cata->cat_slug); ?>"><?= $cata->cat_name ?><i class="an an-plus"></i></a>
                  <?php if($this->select->get_sub_parent_categories_by_id($cata->cat_id,'is_home')){ ?>
                  <!-- <div class="megamenu style2"> -->
                     <ul>
                        <?php 
                           $res = $this->select->get_sub_parent_categories_by_id($cata->cat_id,'is_home');
                           foreach($res as $r){
                        ?>
                        <li class="lvl-1 col-md-3 col-lg-3">
                           <a href="<?= base_url('products/'.$r->cat_slug); ?>" class="site-nav lvl-1 menu-title"><?= $r->cat_name; ?><i class="an an-plus"></i></a>
                           <?php if($this->select->get_sub_categories_by_id($r->cat_id,'is_home')){ ?>
                           <ul class="subLinks">
                              <?php 
                                 $res_sub = $this->select->get_sub_categories_by_id($r->cat_id,'is_home');
                                 foreach($res_sub as $sup){
                              ?>
                              <li class="lvl-2"><a href="<?= base_url('products/'.$sup->cat_slug); ?>" class="site-nav"><?= $sup->cat_name; ?></a></li>
                              <?php } ?>
                           </ul>
                           <?php } ?>
                        </li>
                        <?php } ?>
                        <li class="lvl-1 col-md-3 col-lg-3 text-center">
                           <a href="#"><img src="<?= get_image($cata->media_id) ?>" width="190" alt="image"/></a>
                        </li>
                     </ul>
                  <!-- </div> -->
                  <?php } ?>
               </li>
               <?php } }?>
               <li class="lvl1 parent megamenu">
                  <a href="<?= base_url('/about_us') ?>">ABOUT US</a>
               </li>
               <li class="lvl1 parent megamenu">
                  <a href="<?= base_url('/contact_us') ?>">CONTACT US</a>
               </li>
            </ul>
         </div>
         <!-- End Mobile Menu -->