<!-- Body Content -->
<div id="page-content">
            <!-- Collection Banner -->
            <div class="collection-header">
               <div class="collection-hero">
                  <div class="collection-hero__image blur-up lazyload" style="background-image:url('<?= base_url('assets/site/images/collection/women-collection-bnr.jpg') ?>');"></div>
                  <div class="collection-hero__title-wrapper">
                     <h1 class="collection-hero__title page-width">Shop </h1>
                  </div>
               </div>
            </div>
            <!-- End Collection Banner -->
            <div class="container">
               <div class="row">
                  <!-- Sidebar -->
                  
                  <!-- End Sidebar -->
                  <!-- Main Content -->
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                     <div class="productList">
                        <!-- Toolbar -->
                        <div class="toolbar">
                           <div class="filters-toolbar-wrapper">
                              <div class="row">
                                 <div class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-Start align-items-center">
                                    <button type="button" class="btn-filter d-block d-md-block d-lg-none icon an an-sliders-h" data-bs-toggle="tooltip" data-bs-placement="top" title="Filters"></button>
                                    <a href="#" class="change-view change-view--active" data-bs-toggle="tooltip" data-bs-placement="top" title="Grid View">
                                    <i class="icon an an-table"></i>
                                    </a>
                                    <!-- <a href="#" class="change-view" data-bs-toggle="tooltip" data-bs-placement="top" title="List View">
                                    <i class="icon an an-th-list"></i> -->
                                    </a>
                                 </div>
                                 <div class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                                    <!-- <span class="filters-toolbar__product-count">Showing: 22</span> -->
                                 </div>
                                 <!-- <div class="col-4 col-md-4 col-lg-4 d-flex justify-content-end align-items-center text-end">
                                    <div class="filters-toolbar__item">
                                       <label for="SortBy" class="hidden">Sort</label>
                                       <select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                                          <option value="title-ascending" selected="selected">Sort</option>
                                          <option>Best Selling</option>
                                          <option>Alphabetically, A-Z</option>
                                          <option>Alphabetically, Z-A</option>
                                          <option>Price, low to high</option>
                                          <option>Price, high to low</option>
                                       </select>
                                       <input class="collection-header__default-sort" type="hidden" value="manual">
                                    </div>
                                 </div> -->
                              </div>
                           </div>
                        </div>
                        <!-- End Toolbar -->
                        <!-- Grid Product -->
                        <div class="grid-products grid--view-items product-three-load-more">
                           <div class="row">
                              <?php 
                                 if(!empty($allproducts)): 
                                 foreach($allproducts as $product):
                              ?>
                              <div class="col-4 col-sm-3 col-md-3 col-lg-4 item">
                                 <!-- Product Image -->
                                 <div class="product-image">
                                    <!-- Product Image -->
                                    <a href="<?= base_url('product/'.$product->slug);?>">
                                       <!-- Image -->
                                       <img class="primary blur-up lazyload" data-src="<?= get_product_main_image($product);?>" src="<?= get_product_main_image($product);?>" alt="image" title="product" />
                                       <!-- End Image -->
                                       <!-- Hover Image -->
                                       <img class="hover blur-up lazyload" data-src="<?= get_product_image_by_hovar($product);?>" src="<?= get_product_image_by_hovar($product);?>" alt="image" title="product" />
                                       <!-- End Hover Image -->
                                       <!-- Product Label -->
                                       <!-- <div class="product-labels rectangular"><span class="lbl on-sale">Exclusive</span></div> -->
                                       <!-- End Product Label -->
                                    </a>
                                    <!-- End Product Image -->
                                 </div>
                                 <!-- End Product Image -->
                                 <!-- Product Details -->
                                 <div class="product-details text-center">
                                    <!-- Product Name -->
                                    <div class="product-name">
                                       <a href="<?= base_url('product/'.$product->slug);?>"><?= $product->title;?></a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <!-- <div class="product-price">
                                       <span class="old-price">$500.00</span>
                                       <span class="price">$600.00</span>
                                    </div> -->
                                    <div class="product-price">
                                    <?php if($product->no_discount!=1){?>
                                       <span class="old-price"><?= select_value_by_id('currencies','id',$product->currency_code,'hex');?> <?= $product->price;?></span>
                                    <?php }?>
                                    <span class="price"><?= select_value_by_id('currencies','id',$product->currency_code,'hex');?> <?= $product->discounted_price;?></span>
                                 </div>
                                    <!-- End Product Price -->
                                 </div>
                                 <!-- End Product Details -->
                              </div>
                              <?php 
                                 endforeach;
                                 else:
                                    echo '<p>No products Found!</p>';
                                 endif;
                              ?>
                           </div>
                        </div>
                        <!-- End Grid Product -->
                     </div>
                     <!-- Infinit Pagination -->
                     <div class="infinitpaginOuter">
                        <div class="infinitpagin-three">  
                           <a href="#" class="btn loadMoreThree">Load More</a>
                        </div>
                     </div>
                     <!-- End Infinit Pagination -->
                  </div>
                  <!-- End Main Content -->
               </div>
            </div>
         </div>
         <!-- End Body Content -->
