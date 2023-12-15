<!-- Body Content -->
<div id="page-content">
   <!-- Bredcrumbs -->
   <div class="bredcrumbWrap bredcrumb-style2">
      <div class="container breadcrumbs">
         <a href="<?= base_url('') ?>" title="Back to the home page">Home</a><span aria-hidden="true">|</span><span class="title-bold"><?= $product->title;?></span>
      </div>
   </div>
   <!-- End Bredcrumbs -->
   <div class="container">
      <!-- Main Content -->
      <div id="ProductSection-product-template" class="product-template__container prstyle2">
         <!-- #ProductSection product template -->
         <div class="product-single product-single-1">
            <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="product-details-img product-single__photos bottom">
                     <?php $this->load->view('products/details/_preview');?>
                     <div class="product-thumb product-thumb-1">
                        <div id="gallery" class="product-dec-slider-1 product-tab-left">
                           <?php
                              foreach($product_images as $pimg){
                                 // print_r($pimg);
                           ?>
                           <a data-image="<?= get_product_image($pimg->media_id); ?>" data-zoom-image="<?= get_product_image($pimg->media_id); ?>" class="slick-slide slick-cloned active" data-slick-index="-4" aria-hidden="true" tabindex="-1">
                              <img class="blur-up lazyload" src="<?= get_product_image($pimg->media_id); ?>" alt="" />
                           </a>
                           <?php } ?>
                        </div>
                        <div class="lightboximages">
                           <?php
                              foreach($product_images as $pimg){
                                 // print_r($pimg);
                           ?>
                           <a href="<?= get_product_image($pimg->media_id); ?>" data-size="1462x2048"></a>
                           <?php } ?>
                        </div>
                        <!-- End Product Images -->
                        <!-- Wishlist - Share -->
                        <div class="display-table shareRow pt-3 pb-0 d-table">
                           <div class="display-table-cell text-center align-top">
                              <div class="social-sharing">
                                 <a target="_blank" href="#" onclick='window.open("https://www.facebook.com/sharer/sharer.php?u=<?php //echo generate_product_url($product); ?>", "Share This Post", "width=640,height=450");return false' class="btn btn--small btn--secondary btn--share share-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Facebook">
                                 <i class="icon an an-facebook" aria-hidden="true"></i><span class="share-title" aria-hidden="true">Facebook</span>
                                 </a>
                                 <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-google" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on google+">
                                 <i class="icon an an-google-plus" aria-hidden="true"></i><span class="share-title" aria-hidden="true">Google+</span>
                                 </a>
                                 <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-email" data-bs-toggle="tooltip" data-bs-placement="top" title="Share by Email">
                                 <i class="icon an an-envelope" aria-hidden="true"></i><span class="share-title" aria-hidden="true">Email</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <!-- End Wishlist - Share -->
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <!-- Product Info -->
                  <div class="product-single__meta">
                     <h1 class="product-single__title"><?= $product->title;?></h1>
                     <!-- Product Price -->
                     <div class="product-single__price product-single__price-product-template">
                        <!-- <span class="visually-hidden">Regular price</span>
                        <s id="ComparePrice-product-template"><span class="money">$900.00</span></s>
                        <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                        <span id="ProductPrice-product-template"><span class="money">$788.00</span></span></span> -->
                        <?php $this->load->view("products/details/_price", ['product' => $product, 'price' => $product->price, 'discount_rate' => $product->discount_rate]); ?>
                     </div>
                     <!-- End Product Price -->
                     <!-- Product Description -->
                     <div class="product-single__description rte">
                        <p class="mb-2"><?= $product->short_desc;?></p>
                        <!-- <ul class="checkmark">
                           <li>Wash Care: Hand Wash Cold</li>
                           <li>Size And Fit: The specifications for the model are: Height 5 feet 8 inches, bust 34 inches, waist 28 inches. The model is wearing size S.</li>
                        </ul> -->
                     </div>
                     <!-- End Product Description -->
                     <!-- Form -->
                     <form method="post" action="/cart/add" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template product-form-border hidedropdown" enctype="multipart/form-data">
                        <!-- Product Action -->
                        <div class="product-action clearfix">
                           <div class="product-form__item--submit">
                              <a type="button" href="https://wa.me/+919804723114" name="add" class="btn product-form__cart-submit"><span>connect With Whatsapp</span></a>
                           </div>
                           <div class="payment-button" data-shopify="payment-button">
                                 <a type="submit" href="mailto:rkoverseas@aol.com" class="btn payment-button__button payment-button__button--unbranded"> connect With Email</a>
                           </div>
                        </div>
                        <!-- End Product Action -->
                     </form>
                     <!-- End Form -->
                     <!-- Product Intro -->
                     <div class="product-info">
                        <!-- <p class="product-stock">Availability: <span class="instock">In Stock</span><span class="outstock hide">Unavailable</span></p>
                        <p class="product-type">Product Type: <span>unique</span></p>
                        <p class="product-type">Vendor: <span>Sibel Saral</span></p>
                        <p class="product-sku">SKU: <span class="variant-sku">3435DT-1</span></p> -->
                     </div>
                     <!-- End Product Intro -->
                  </div>
                  <!-- End Product Info -->
               </div>
               <!-- End Product single -->
               <!-- Product Tabs -->
               <div class="tabs-listing tab-details mt-0 mt-md-4">
                  <!-- Tabs -->
                  <ul class="product-tabs d-none d-md-block">
                     <li class="active" rel="tab1"><a class="tablink">Product Details</a></li>
                     <!-- <li rel="tab4"><a class="tablink">Shipping &amp; Returns</a></li> -->
                  </ul>
                  <!-- End Tabs -->
                  <!-- Tabs Container -->
                  <div class="tab-container pb-0 mb-0">
                     <!-- Tabs Content One -->
                     <h3 class="acor-ttl active d-block d-md-none" rel="tab1">Product Details</h3>
                     <div id="tab1" class="tab-content py-3 py-md-0" style="display:block;">
                        <div class="product-description rte">
                           <p><?= $product->description;?></p>
                        </div>
                     </div>
                     <!-- End Tabs Content One -->
                     <!-- Tabs Content Four -->
                     <!-- <h3 class="acor-ttl d-block d-md-none" rel="tab4">Shipping &amp; Returns</h3>
                     <div id="tab4" class="tab-content py-3 py-md-0">
                        <h4>Returns Policy</h4>
                        <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eros justo, accumsan non dui sit amet. Phasellus semper volutpat mi sed imperdiet. Ut odio lectus, vulputate non ex non, mattis sollicitudin purus. Mauris consequat justo a enim interdum, in consequat dolor accumsan. Nulla iaculis diam purus, ut vehicula leo efficitur at.</p>
                        <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit nunc enim, sit amet pharetra erat aliquet ac.</p>
                        <h4>Shipping</h4>
                        <p>Pellentesque ultrices ut sem sit amet lacinia. Sed nisi dui, ultrices ut turpis pulvinar. Sed fringilla ex eget lorem consectetur, consectetur blandit lacus varius. Duis vel scelerisque elit, et vestibulum metus.  Integer sit amet tincidunt tortor. Ut lacinia ullamcorper massa, a fermentum arcu vehicula ut. Ut efficitur faucibus dui Nullam tristique dolor eget turpis consequat varius. Quisque a interdum augue. Nam ut nibh mauris.</p>
                     </div> -->
                     <!-- End Tabs Content Four -->
                  </div>
                  <!-- End Tabs Container -->
               </div>
               <!-- End Product Tabs -->
               <!-- Related Product Slider -->
               <?php if(!empty($similarproducts)): ?>
               <div class="related-product grid-products">
                        <header class="section-header">
                           <h2 class="section-header__title text-center h2"><span>Related Products</span></h2>
                           <!-- <p class="sub-heading">You can stop autoplay, increase/decrease aniamtion speed and number of grid to show and products from store admin.</p> -->
                        </header>
                        <div class="productPageSlider">
                        <?php
                           foreach($similarproducts as $sproduct):?>
                           <div class="col-12 item">
                              <!-- Product Image -->
                              <div class="product-image">
                                 <!-- Product Image -->
                                 <a href="<?= base_url('product/'.$sproduct->slug);?>">
                                    <!-- Image -->
                                    <img class="primary blur-up lazyload" data-src="<?= get_product_main_image($sproduct);?>" src="<?= get_product_main_image($sproduct);?>" alt="image" title="product" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover blur-up lazyload" data-src="<?= get_product_image_by_hovar($sproduct);?>" src="<?= get_product_image_by_hovar($sproduct);?>" alt="image" title="product" />
                                 </a>
                                 <!-- End Product Image -->
                              </div>
                              <!-- End Product Image -->
                              <!-- Product Details -->
                              <div class="product-details text-center">
                                 <!-- Product Name -->
                                 <div class="product-name">
                                    <a href="<?= base_url('product/'.$sproduct->slug);?>"><?= $sproduct->title;?></a>
                                 </div>
                                 <!-- End Product Name -->
                                 <!-- Product Price -->
                                 <!-- <div class="product-price">
                                    <span class="old-price">$500.00</span>
                                    <span class="price">$600.00</span>
                                 </div> -->
                                 <div class="product-price">
                                    <?php if($sproduct->no_discount!=1){?>
                                       <span class="old-price"><?= select_value_by_id('currencies','id',$sproduct->currency_code,'hex');?> <?= $sproduct->price;?></span>
                                    <?php }?>
                                    <span class="price"><?= select_value_by_id('currencies','id',$sproduct->currency_code,'hex');?> <?= $sproduct->discounted_price;?></span>
                                 </div>
                                 <!-- End Product Price -->
                              </div>
                              <!-- End Product Details -->
                           </div>
                           <?php 
                           endforeach;
                           ?>	
                        </div>
                     </div>
                     <!-- End Related Product Slider -->
                  </div>
                  <!-- #ProductSection product template -->
               </div>
               <?php endif; ?>	
               <!-- End Main Content -->
            </div>
         </div>
         <!-- End Body Content -->
      </div>
   </div>

