
<style>
.navi {
	position: relative;
}
.navi ul {
	list-style: none;
	margin: 0;
	padding: 0;
}
.navi ul li {
  /* Sub Menu */
}
.navi ul li a {
	display: block;
	/* background: #ebebeb; */
	padding: 10px 15px;
	color: #333;
	text-decoration: none;
	-webkit-transition: 0.2s linear;
	-moz-transition: 0.2s linear;
	-ms-transition: 0.2s linear;
	-o-transition: 0.2s linear;
	transition: 0.2s linear;
}
.navi ul li a:hover {
	background: #f8f8f8;
	color: #515151;
}
.navi ul li a .fa {
	width: 16px;
	text-align: center;
	margin-right: 5px;
	float:right;
}
.navi ul ul {
	background-color:#ebebeb;
}
.navi ul li ul li a {
	background: #f8f8f8;
	border-left: 4px solid transparent;
	padding: 10px 20px;
}
.navi ul li ul li a:hover {
	background: #ebebeb;
	border-left: 4px solid #3498db;
}
</style>
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
                  <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
                     <div class="closeFilter d-block d-md-block d-lg-none"><i class="icon an an-times"></i></div>
                     <div class="sidebar_tags">
                        <!-- Categories -->
                        <div class="sidebar_widget filterBox categories filter-widget">
                           <div class="widget-title">
                              <h2>Categories</h2>
                           </div>
                           <div class="widget-content">
                              <div class='animated bounceInDown navi'>
                                 <?php if(!empty($parentcategories)): ?>
                                 <ul>
                                    <?php foreach($parentcategories as $cata): ?>
                                    <li class='<?php if($this->select->get_sub_parent_categories_by_id($cata->cat_id,'is_menu')){echo 'sub-menu';}else{ echo '';} ?>'>
                                       <a href='<?php if($this->select->get_sub_parent_categories_by_id($cata->cat_id,'is_menu')){echo 'javascript:void(0)';}else{ ?> <?= base_url('products/'.$cata->cat_slug); ?> <?php } ?>'><?= $cata->cat_name ?><?php if($this->select->get_sub_parent_categories_by_id($cata->cat_id,'is_menu')): ?>
                                          <div class='fa fa-caret-down right'></div> <?php endif; ?>
                                       </a>
                                       <ul>
                                          <?php if($this->select->get_sub_parent_categories_by_id($cata->cat_id,'is_menu')){ ?>
                                          <li><a href='<?= base_url('products/'.$cata->cat_slug); ?>'><?= $cata->cat_name ?></a></li>
                                          <?php } ?>
                                          <?php 
                                             if($this->select->get_sub_parent_categories_by_id($cata->cat_id,'is_menu')){ 
                                                $res = $this->select->get_sub_parent_categories_by_id($cata->cat_id,'is_menu');
                                                   foreach($res as $r){
                                          ?>
                                          <li class='<?php if($this->select->get_sub_categories_by_id($r->cat_id,'is_menu')){echo 'sub-menu';}else{ echo '';} ?>'>
                                             <a href='<?php if($this->select->get_sub_categories_by_id($r->cat_id,'is_menu')){echo 'javascript:void(0)';}else{ ?> <?= base_url('products/'.$r->cat_slug); ?> <?php } ?>'><?= $r->cat_name ?><?php if($this->select->get_sub_categories_by_id($r->cat_id,'is_menu')): ?>
                                                <div class='fa fa-caret-down right'></div><?php endif; ?>
                                             </a>
                                             <ul>
                                                <li><a href='<?= base_url('products/'.$r->cat_slug); ?>'><?= $r->cat_name ?></a></li>
                                                <?php 
                                                   $res_sub = $this->select->get_sub_categories_by_id($r->cat_id,'is_menu');
                                                   foreach($res_sub as $sup){
                                                ?>
                                                <li><a href='<?= base_url('products/'.$sup->cat_slug); ?>'><?= $sup->cat_name ?></a></li>
                                                <?php } ?>
                                             </ul>
                                          </li>
                                          <?php } } ?>
                                       </ul>
                                    </li>
                                    <?php endforeach; ?>
                                 </ul>
                                 <?php endif; ?>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Sidebar -->
                  <!-- Main Content -->
                  <div class="col-12 col-sm-12 col-md-12 col-lg-9 main-col">
                     <div class="productList">
                        <!-- Toolbar -->
                        <div class="toolbar">
                           <div class="filters-toolbar-wrapper">
                              <div class="row">
                                 <div class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-Start align-items-center"> 
                                 </div>
                                 <div class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                                    <span class="filters-toolbar__product-count">Showing: <span id="shownum"></span></span>
                                 </div>
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
                              <div class="col-4 col-sm-3 col-md-3 col-lg-4 item checknum">
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
                                       <?php if(is_bestseller($product->id)): ?><div class="product-labels rectangular"><span class="lbl on-sale">Bestseller</span></div><?php endif; ?>
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
                     <?php if(!empty($allproducts)): ?>
                     <div class="infinitpaginOuter">
                        <div class="infinitpagin-three">  
                           <a href="#" class="btn loadMoreThree">Load More</a>
                        </div>
                     </div>
                     <?php endif ?>
                     <!-- End Infinit Pagination -->
                  </div>
                  <!-- End Main Content -->
               </div>
            </div>
         </div>
         <!-- End Body Content -->
         <script>
            document.addEventListener("DOMContentLoaded", () => {
            var n = $('.checknum').length;
            $('#shownum').html(n);
            });
         </script>