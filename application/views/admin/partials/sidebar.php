<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <!-- <li class="menu-title">Main</li> -->
                <?php if($this->auth_user->role=='admin'){?>
               
                <li>
                    <a href="<?= base_url('admin/dashboard/')?>" class="waves-effect <?= active_link('dashboard');?>">
                         <i class="ti-home"></i><!--<span class="badge rounded-pill bg-primary float-end">2</span> -->
                        <span>Dashboard</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="<= base_url('admin/orders/')?>" class="waves-effect <= active_link('dashboard');?>">
                         <i class="ti-shopping-cart-full"></i><span class="badge rounded-pill bg-primary float-end">2</span>
                        <span>Orders</span>
                    </a>
                </li> -->
                        <?php
                        $segment='';
                        if($this->uri->segment(2)=='settings'){$segment='settings';}
                        if($this->uri->segment(2)=='email-settings'){$segment='email-settings';}
                        if($this->uri->segment(2)=='social-login-settings'){$segment='social-login-settings';}
                        if($this->uri->segment(2)=='custom-fields'){$segment='custom-fields';}
                        if($this->uri->segment(2)=='category'){$segment='category';}
                        if($this->uri->segment(2)=='currencies'){$segment='currencies';}
                        
                        ?>   
                <li class="<?= active_menu('pages');?>">
                    <a href="javascript: void(0);" class="has-arrow waves-effect <?= active_menu('pages');?>">
                        <i class="ti-book"></i>
                        <span>Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="<?= tab_active('add-new');?>"><a href="<?= base_url('admin/pages/add-new/')?>" class="<?= tab_active('add-new');?>">Add New</a></li>
                        <li class="<?= tab_active('');?>"><a href="<?= base_url('admin/pages')?>" class="<?= tab_active('');?>">All Pages</a></li>
                    </ul>
                </li>

                <li class="<?= active_menu($segment);?>">
                    <a href="javascript: void(0);" class="has-arrow waves-effect <?= active_menu($segment);?>">
                        <i class="ti-settings"></i>
                        <span>Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="<?= tab_active('settings');?>"><a href="<?= base_url('admin/settings/')?>" class="<?= active_link('settings');?>">General Settings</a></li>
                        <li class="<?= tab_active('email-settings');?>"><a href="<?= base_url('admin/email-settings/')?>" class="<?= active_link('email-settings');?>">eMail Settings</a></li>
                        <li class="<?= tab_active('social-login-settings');?>"><a href="<?= base_url('admin/social-login-settings/')?>" class="<?= active_link('social-login-settings');?>">Social Login Settings</a></li>
                        <li class="<?= tab_active('custom-fields');?>"><a href="<?= base_url('admin/custom-fields/')?>" class="<?= active_link('custom-fields');?>">Custom Fields</a></li>
                        <li class="<?= tab_active('currencies');?>"><a href="<?= base_url('admin/currencies/')?>" class="<?= active_link('currencies');?>">Currencies</a></li>
                    </ul>
                </li>

                <li class="<?= active_menu('media');?>">
                    <a href="<?= base_url('admin/media/')?>" class="waves-effect <?= active_link('media');?>">
                         <i class="ti-image"></i>
                        
                        <span>Media</span>
                    </a>
                </li>

                <li class="<?= active_menu('category');?>">
                    <a href="<?= base_url('admin/category/')?>" class="waves-effect <?= active_link('category');?>">
                         <i class="ti-support"></i>
                        
                        <span>Categories</span> 
                    </a>
                </li>

                <li class="<?= active_menu('products');?>">
                    <a href="<?= base_url('admin/products/')?>" class="waves-effect <?= active_link('products');?>">
                         <i class="ti-support"></i>
                        
                        <span>Manage Products</span>
                    </a>
                </li>
                <?php 
            //    $usegment='';
            //    if($this->uri->segment(2)=='buyer'){$usegment='buyer';}
            //    if($this->uri->segment(2)=='seller'){$usegment='seller';}
               ?>
                <!-- <li class="<= active_menu($usegment);?>">
                    <a href="javascript: void(0);" class="has-arrow waves-effect <= active_menu($usegment);?>">
                        <i class="ti-user"></i>
                        <span>Users</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="<= tab_active('buyer');?>"><a href="<= base_url('admin/buyer/')?>" class="<= active_link('buyer');?>">Buyer</a></li>
                        <li class="<= tab_active('seller');?>"><a href="<= base_url('admin/seller/')?>" class="<= active_link('seller');?>">Seller</a></li>                    
                    </ul>
                </li> -->
                <li class="<?= active_menu('about');?>">
                    <a href="<?= base_url('admin/about/')?>" class="waves-effect <?= active_link('about');?>">
                         <i class="ti-email"></i>
                        
                        <span>About Us</span>
                    </a>
                </li>
                <li class="<?= active_menu('contact');?>">
                    <a href="<?= base_url('admin/contact/')?>" class="waves-effect <?= active_link('contact');?>">
                         <i class="ti-email"></i>
                        
                        <span>Contact Us</span>
                    </a>
                </li>
                <li class="<?= active_menu('slider');?>">
                    <a href="<?= base_url('admin/slider/')?>" class="waves-effect <?= active_link('slider');?>">
                         <i class="ti-image"></i>
                        
                        <span>Slider</span>
                    </a>
                </li> 
               
               
                <?php }?>
                  
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->