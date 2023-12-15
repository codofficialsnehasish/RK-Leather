<?php 
   $categoriesMenu=$this->select->get_parent_categories();

   $menucon['where']['is_visible'] = 1;
   $menucon['where']['is_popular'] = 1;
   $menucon['where']['parent_id'] = 0;
   $menucon['tblName'] = 'categories';
   $menucategories = $this->select->getResult($menucon);
?>


<!-- Body Content -->
<div id="page-content">
   <!-- Home Banner slider -->
   <div class="slideshow slideshow-wrapper pb-section">
      <div class="home-slideshow slideshow--large">
         <?php if(!empty($slider)):
            $i=1;
            foreach($slider as $slide):
         ?>
         <div class="slide slide1 d-block">
            <div class="slideimg blur-up lazyload">
               <img class="blur-up lazyload" data-src="<?= get_image($slide->media_id);?>" src="<?= get_image($slide->media_id);?>" alt="Welcome to Diva" title="Welcome to RK" oncontextmenu="return false;" />
               <div class="slideshow__text-wrap slideshow__overlay">
                  <div class="slideshow__text-content mt-0 center">
                     <div class="container">
                        <div class="wrap-caption center">
                           <?php $array = preg_split("/\r\n|\n|\r/", get_desc($slide->id)); ?>
                           <h2 class="h1 mega-title slideshow__title"><?= strip_tags($array[0]); ?></h2>
                           <span class="mega-subtitle slideshow__subtitle"><?= strip_tags($array[1]); ?></span>
                           <a href="<?= base_url('/contact_us') ?>" class="btn btn--large">Contact Now</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <?php 
            $i++;
            endforeach;
            endif;
			?>
      </div>
   </div>
   <!-- End Home Banner slider -->


   <div class="collection-box tle-bold section">
      <div class="container">
         <!-- Collection Box -->
         <div class="row collection-grids">
            <?php if(!empty($menucategories)): foreach($menucategories as $cata){ ?>
            <div class="col-12 col-sm-6 col-md-4 item">
               <div class="collection-grid-item">
                  <img class="blur-up lazyload" data-src="<?= get_image($cata->media_id) ?>" src="<?= get_image($cata->media_id) ?>" alt="collection" title="" nosave />
                  <a href="<?= base_url('products/'.$cata->cat_slug); ?>" class="collection-grid-item__title-wrapper">
                     <div class="title-wrapper">
                        <h3 class="collection-grid-item__title fw-bold"><?= $cata->cat_name ?></h3>
                     </div>
                  </a>
               </div>
            </div>
            <?php } endif ?>
         </div>
         <!-- End Collection Box -->
      </div>
   </div>
   <!-- End Collection -->



      <!-- top selling -->
       <?php if(!empty($newproducts)){?>
      <div class="product-rows section">
         <div class="container">
            <div class="row">
               <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                  <div class="section-header text-center">
                     <h2 class="h2">NEW ARRIVALS</h2>
                  </div>
                  <div class="productList">
                     <!-- Grid Product -->
                     <div class="grid-products grid--view-items">
                        <div class="row">
                           <?php foreach($newproducts as $new){?>
                           <div class="col-6 col-sm-6 col-md-3 col-lg-3 item">
                              <!-- Product Image -->
                              <div class="product-image">
                                 <!-- Product Image -->
                                 <a href="<?= base_url('product/'.$new->slug);?>">
                                    <!-- Image -->
                                    <img class="primary blur-up lazyloaded" data-src="<?= get_product_main_image($new);?>" src="<?= get_product_main_image($new);?>" alt="image" title="product">
                                    <!-- End Image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyloaded" data-src="<?= get_product_image_by_hovar($new);?>" src="<?= get_product_image_by_hovar($new);?>" alt="image" title="product">
                                    <!-- End Hover Image -->
                                    <!-- Product Label -->
                                    <div class="product-labels rectangular"><span class="lbl pr-label1">New</span></div>
                                    <!-- End Product Label -->
                                 </a>
                                 <!-- End Product Image -->
                              </div>
                              <!-- End Product Image -->
                              <!-- Product Details -->
                              <div class="product-details text-left">
                                 <!-- Product Name -->
                                 <div class="product-name">
                                    <a href="<?= base_url('product/'.$new->slug);?>"><?= $new->title;?></a>
                                 </div>
                                 <!-- End Product Name -->
                                 <!-- Product Price -->
                                 <div class="product-price">
                                    <?php if($new->no_discount!=1){?>
                                       <span class="old-price"><?= select_value_by_id('currencies','id',$new->currency_code,'hex');?> <?= $new->price;?></span>
                                    <?php }?>
                                    <span class="price"><?= select_value_by_id('currencies','id',$new->currency_code,'hex');?> <?= $new->discounted_price;?></span>
                                 </div>
                                 <!-- End Product Price -->
                              </div>
                              <!-- End product details -->
                           </div>
                           <?php }?>
                        </div>
                     </div>
                     <!-- End Grid Product -->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php }?>



      <div class="video_warp">
         <div class="row m-0">
            <div class="col-12 col-sm-12 col-md-12 col-lg-5 p-0 mb-lg-0 mb-sm-4 mb-md-4 mb-4">
               <!--  <img class="blur-up lazyloaded" data-src="assets/images/collection/home2-collection3.jpg" src="assets/images/collection/home2-collection3.jpg" alt="About Us" title=""> -->
               <!-- <iframe src="https://www.youtube.com/embed/0p-9ojyjUmw?si=u7j1jsvQ-FmxvCge" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
               <video width="470" height="255" poster="<?= get_image($allitems[0]->thumbnail); ?>" controls>
                  <source src="<?= base_url($allitems[0]->video_path.$allitems[0]->video_name) ?>" type="video/mp4">
               </video>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-7 d-flex justify-content-center align-items-center flex-wrap px-5 mb-md-5 mb-lg-0 mb-sm-5 mb-5">
               <div class="text-center font15 px-0 px-sm-5 px-md-5 px-lg-5">
                  <div class="texr_warp">
                     <h2><?= $this->settings->application_name?></h2>
                     <p><?= strip_tags(get_main_about()[0]->about_content); ?></p>
                     <a href="<?= base_url('/contact_us') ?>" class="btn">Contact Now</a>
                  </div>
               </div>
            </div>
         </div>
      </div>



      <?php if(!empty($newproducts)){?>
      <!-- Product slider -->
      <div class="product-rows section">
         <div class="container">
            <div class="row">
               <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="section-header text-center">
                     <h2 class="h2">BESTSELLERS</h2>
                  </div>
                  <!-- Product List -->
                  <div class="grid-products grid-products-hover-btn">
                     <div class="productSlider">
                        <?php foreach($newproducts as $top){?>
                        <div class="col-12 item">
                           <!-- Product Image -->
                           <div class="product-image">
                              <!-- product Image -->
                              <a href="<?= base_url('product/'.$top->slug);?>">
                                 <!-- Image -->
                                 <img class="primary blur-up lazyload" data-src="<?= get_product_main_image($top);?>" src="<?= get_product_main_image($top);?>" alt="image" title="product" />
                                 <!-- End Image -->
                                 <!-- Hover Image -->
                                 <img class="hover blur-up lazyload" data-src="<?= get_product_image_by_hovar($top);?>" src="<?= get_product_image_by_hovar($top);?>" alt="image" title="product" />
                                 <!-- End Hover Image -->
                                 <!-- Product Label -->
                                 <div class="product-labels rectangular"><span class="lbl on-sale">bestsellers</span></div>
                                 <!-- End Product Label -->
                              </a>
                              <!-- End Product Image -->
                              <!-- End Product Button -->
                           </div>
                           <!-- End Product Image -->
                           <!-- Product Details -->
                           <div class="product-details text-center">
                              <!-- Product Name -->
                              <div class="product-name">
                                 <a href="<?= base_url('product/'.$top->slug);?>"><?= $top->title;?></a>
                              </div>
                              <!-- End Product Name -->
                              <!-- Product Price -->
                              <div class="product-price">
                                 <!-- <span class="old-price">$800.00</span>
                                 <span class="price">$600.00</span> -->
                                 <?php if($top->no_discount!=1){?>
                                    <span class="old-price"><?= select_value_by_id('currencies','id',$top->currency_code,'hex');?> <?= $top->price;?></span>
                                 <?php }?>
                                 <span class="price"><?= select_value_by_id('currencies','id',$top->currency_code,'hex');?> <?= $top->discounted_price;?></span>
                              </div>
                              <!-- End Variant -->
                           </div>
                           <!-- End Product Details -->
                        </div>
                        <?php } ?>
                     </div>
                  </div>
                  <!-- End Product List -->
               </div>
            </div>
         </div>
      </div>
      <!-- End Product slider -->
      <?php }?>


      <div class="section hero-background">
         <div class="hero hero--medium hero__overlay bg-size" data-stellar-background-ratio="0.08" data-stellar-vertical-offset="0" style="background-image: url(&quot;<?= base_url('assets/images/parallax-banners/home4-parallax-banner.jpg') ?>&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <img class="bg-img blur-up" src="<?= base_url('assets/site/images/parallax-banners/home4-parallax-banner.jpg') ?>" alt="image" style="display: none;">
            <div class="hero__inner">
               <div class="container">
                  <div class="wrap-text center text-medium font-bold">
                     <h2 class="h1 mega-title"><span>New</span> Design Bag</h2>
                     <a href="<?= base_url('/contact_us') ?>" class="btn border-btn-1">Contact Now</a>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Instagram -->
      <!-- <div class="section home-instagram no-pb-section">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                           <h2 class="h2">Instagram Feed</h2>
                        </div>
                     </div>
                  </div>
                  <div class="instagram-section instagram-slider">
                     <?php
                     //   $instagramData = instagram('instagram',20);
                         
                      
                     //    foreach($instagramData as $insta){
                             
                     //        $username = isset($insta->username) ? $insta->username : "";
                     //        $caption = isset($insta->caption) ? $insta->caption : "";
                     //        $media_url = isset($insta->media_url) ? $insta->media_url : "";
                     //        $permalink = isset($insta->permalink) ? $insta->permalink : "";
                     //        $media_type = isset($insta->media_type) ? $insta->media_type : "";
                            ?>
                      
                     <div class="instagram-item">
                        <a href="<= $permalink; ?>" target="_blank">
                            <?php //if($media_type == 'IMAGE'):?>
                            <img class="blur-up lazyload" src="<= $media_url ?>" data-src="<= $media_url ?>" alt="image" title="" />
                            <?php// endif;?>
                        <span class="inst-icon"><i class="icon an an-instagram"></i></span>
                        </a>
                     </div>
                     <?php //}?>
                  </div>
                  <div class="followus text-center mt-3 d-none">
                     <a href="#" target="_blank" class="btn">View Gallery</a>
                  </div>
               </div>
            </div>
         </div>
         End Body Content -->