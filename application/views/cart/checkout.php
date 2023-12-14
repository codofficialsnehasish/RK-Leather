<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?> 
<?php $check_option = true; ?>
      <style type="text/css"> 
         @media (min-width:1650px){.container {max-width:1400px;}}
         .totalcard{padding:9px 0px}
         .totalcard p{padding-left:9px;margin-bottom:15px}
         .totalcard p.right{padding-left:0px;padding-right:9px}
         .cartload{margin:80px 0}
         .cartbody{padding:0}
         .name{margin-bottom: 3px;}
         .name a{color:#333}
         .offprice{font-size:18px;font-weight:600}
         .mrpprice{font-size:16px;color:#878787;}
         .percentage{color:green;font-size:16px;font-weight:600}
         .subtotal{font-size:16px;margin-top:15px;}
         .delbtn svg{height: 40px;width: 27px;position: relative;top: 6px;left: calc(100% - 30px);fill: #6b6565;}
         .eachitem{padding: 10px;margin-bottom:10px;border-bottom: 1px solid #f0f0f0!important;}
         .eachitem:last-child{border-bottom: 1px solid #fff!important;}
         .orderplc{position:-webkit-sticky;position:sticky;bottom:0;padding:10px 23px;display: -webkit-flex;display: -ms-flexbox;display: flex;-webkit-justify-content: flex-end;-ms-flex-pack: end;justify-content: flex-end;background: #fff;border-top: 1px solid #f0f0f0;box-shadow: 0 -2px 10px 0 rgba(0,0,0,.1);}
         .orderbtn{float:right;padding: 15px 30px;min-width: 250px;margin-right: 6px;text-transform: uppercase;border-radius: 2px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.1);font-size: 16px;font-weight: 500;background:#0d8f5f;border: none;color:#fff;text-align:center;}
         .orderbtn:hover{color:#fff}
         .mb0{margin-bottom:0}
         .right{text-align:right;}
         .right svg{height: 14px;width: 16px;position: relative;top: -2px;fill: #585252;}
         .pricebox p{font-size:15px}
         .hr {border: 1px dashed #dcd8dc;margin-bottom: 7px;margin: 15px 0;}
         .payoption li{display:inline-block;}
         .payoption li img{max-height:35px;margin-bottom:10px;}
         .payamnt{    font-size: 20px;color: #008000;font-weight: 600;}
         #orderdiv .form-group{margin-bottom:20px}
         @media (min-width:768px){.leftpan{padding-right:4px}.rightpan{padding-left:4px}}
         @media (max-width:767px){
         .orderplc{position:fixed!important;bottom:0!important;width:100%!important;z-index:55;justify-content:unset;padding:0;left:0}
         .orderbtn{width:100%;margin:0;}
         .propan{padding-left:0}
         .leftpan{padding-right: 4px;padding-left: 4px;}
         .clearxs{clear:both;margin-top: 13px;}
         .subtotal{margin-bottom:8px;float:left;margin-top:0;padding-right: 13px;font-size:14px}
         .delbtn svg{top:0}
         }
         .cload{display:none}.cload.load{display:block;min-height:500px}
         .chkoutpan{padding:0;}
         .adpan{padding:10px 15px}
         .orderplc{position:-webkit-sticky;position:sticky;bottom:0;padding:10px 23px;display: -webkit-flex;display: -ms-flexbox;display: flex;-webkit-justify-content: flex-end;-ms-flex-pack: end;justify-content: flex-end;background: #fff;border-top: 1px solid #f0f0f0;box-shadow: 0 -2px 10px 0 rgba(0,0,0,.1);}
         .orderbtn{float:right;padding: 15px 30px;min-width: 250px;margin-right: 6px;text-transform: uppercase;border-radius: 2px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.1);font-size: 16px;font-weight: 500;background: #0d8f5f;border: none;color:#fff;text-align:center;}
         .orderbtn:hover{color:#fff}
         .mb0{margin-bottom:0}
         .right{text-align:right;}
         .right svg{height: 14px;width: 16px;position: relative;top: -2px;fill: #585252;}
         .pricebox p{font-size:15px}
         .hr {border: 1px dashed #dcd8dc;margin-bottom: 7px;margin: 15px 0;}
         .payoption{text-align:center;}
         .payoption li img{max-height:31px;margin-bottom:10px;}
         .payamnt{font-size:20px;color:#008000;font-weight:600;}
         .radio p.name{font-size:18px;}
         .radio p {margin-bottom:3px}
         .eachradio{position:relative;margin-bottom:21px;}
         .eachradio::after{border:1px solid #f1efef;width:calc(100% + 30px);bottom:-5px;position:absolute;content:'';left:-15px;}
         .eachradio label{display:block;}
         .reviewlink{text-align: right;float: right;font-size: 15px;text-transform: capitalize;color: #1d1c1c;}
         .panpan{padding-left:15px;text-align: center;}
         .panpan h4{font-size: 20px;padding-top: 7px;margin-bottom: 5px;color: #0b3252;}
         .change{color: #4e090a;font-size: 12px;}
         .card{margin-bottom:15px}
         .payoption{padding: 15px 15px 0px 15px;}
         .card-body img{max-width:100%}
         .pull-right{margin-right:8px}
         @media (min-width:768px){.leftpan{padding-right:4px}.rightpan{padding-left:4px}}
         @media (max-width:767px){
         .orderplc{position:fixed!important;bottom:0!important;width:100%!important;z-index:55;justify-content:unset;padding:0;left:0}
         .orderbtn{width:100%;margin:0;}
         .propan{padding-left:0}
         .leftpan{padding-right: 4px;padding-left: 4px;}
         } 
         .form-control validate{border: 1px solid #bfbfbf!important; height: 49px!important;border-radius: 3px!important;color:#000;font-size:16px!important}
         .radio-inline{display:inline-block;margin-right:15px}
      </style>
       <?php echo form_open('payment-method-post',  'class="needs-validation" id="orderform" autocomplete="off"  novalidate '); ?>
         <div class="container">
            <div class="row">
               <div class="col-sm-8 leftpan">
                  <div class="card">
                     <div class="card-header">
                        <div class="card-title">Delivery Address <a href="cart" class="reviewlink">Review Order</a></div>
                     </div>
                     <div class="card-body chkoutpan">
                        <!-- <div class="panpan">
                           <h4>Select Payment Option</h4>
                           <label class="radio-inline"><input type="radio" value="1" name="payoption" checked> Pay Now</label>
                           <label class="radio-inline"><input type="radio" value="2" name="payoption"> Cash On Delivery</label>
                        </div>
                        <hr> -->
                        <div class="adpan">
                           <?php if(!empty($shipping_address)):
                            foreach($shipping_address as $addr):  
                           ?>
                           <div class="radio form-check eachradio">
                              <label>
                                 <input type="radio" name="addrradio" required class="form-check-input" required value="2" <?= $addr->is_default==1?'checked':'';?>>
                                 <p class="name"><?= $addr->billing_first_name?> <?= !empty($addr->billing_first_name)?', '.$addr->billing_phone_number:'';?>
                                 <span class="addr_type"><?= address_type($addr->address_type);?></span>
                              </p>
                                 <p><?= get_address_by_id($addr->id)?></p><div class="invalid-tooltip" style="width:23%;">Address is Required</div>
                              </label>
                              
                           </div>
                           <?php endforeach;endif;?>
                           <!-- <div class="radio eachradio">
                              <label>
                                 <input type="radio" name="addrradio" value="1" checked>
                                 <p class="name">Debabrata Mondal, 9732162577</p>
                                 <p>136/A KALI CHARAN GHOSH ROAD, kolkata, swetw, 111111, wet, Home</p>
                              </label>
                           </div> -->
                          

                           <div class="radio form-check eachradio">
                              <label>
                                 <input type="radio" name="addrradio" class="form-check-input" required value="fornewaddr">
                                 <p class="name">Add New</p><div class="invalid-tooltip" style="width:23%;">Address is Required</div>
                              </label>
                              
                           </div>
                           <div id="orderdiv" style='display:none;'>
                              <div class="row">
                                 <div class="form-group col-sm-6">
                                    <label for="oname">First Name:<span class="req"> *</span></label>
                                    <input type="text" class="form-control validate" id="billing_first_name" name="billing_first_name" value="">
                                    <div class="invalid-tooltip">This field is required</div>
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="oname">Last Name:<span class="req"> *</span></label>
                                    <input type="text" class="form-control validate" id="billing_last_name" name="billing_last_name" value="">
                                    <div class="invalid-tooltip">This field is required</div>
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="ophone">Phone:<span class="req"> *</span></label>
                                    <input type="text" class="form-control validate" id="billing_phone_number" name="billing_phone_number" value="">
                                    <div class="invalid-tooltip">This field is required</div>
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="oemail">Email:<span class="text-muted">(Optional)</span></label>
                                    <input type="email" class="form-control" id="billing_email" name="billing_email" value="">
                                    <div class="invalid-tooltip">This field is required</div>
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="street">Address:<span class="req"> *</span></label>
                                    <input type="text" class="form-control validate" id="billing_address_1" name="billing_address_1">
                                    <div class="invalid-tooltip">This field is required</div>
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="city">Street:<span class="req"> *</span></label>
                                    <input type="text" class="form-control validate" id="billing_address_2" name="billing_address_2">
                                    <div class="invalid-tooltip">This field is required</div>
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="landmark">Landmark:<span class="text-muted">(Optional)</span></label>
                                    <input type="text" class="form-control" id="billing_landmark" name="billing_landmark">
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="pin">ZIP Code:<span class="req"> *</span></label>
                                    <input type="text" class="form-control validate" id="billing_zip_code" name="billing_zip_code" value="">
                                    <div class="invalid-tooltip">This field is required</div>
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="state">Country:<span class="req"> *</span></label>
                                       <select class="form-control form-select validate" name="billing_country" id="country_id" required>
                                          <option value="">Select Country</option> 
                                             <?php 
                                             if(!empty($countries)):
                                                foreach($countries as $country):?> 
                                                   <option value="<?= $country->id;?>"> <?= $country->name;?> </option> 
                                                   <?php 
                                                endforeach;
                                             endif;
                                          ?>
                                    </select>
                                    <div class="invalid-tooltip">This field is required</div>
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="state">State:<span class="req"> *</span></label>
                                       <select class="form-control form-select validate" name="billing_state" id="state_id" required>
                                          <option value="">Choose...</option>
                                       </select>
                                    <div class="invalid-tooltip">This field is required</div>
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="state">City:<span class="req"> *</span></label>
                                    <select class="form-control form-select validate eventbtn" name="billing_city" id="city_id" required>
                                       <option value="">Choose...</option>
                                    </select>
                                    <div class="invalid-tooltip">This field is required</div>
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="adtype">Address Type:<span class="req"> *</span></label>
                                    <select class="form-control form-select validate" name="address_type">
                                       <option value="1">Home</option>
                                       <option value="2">Office</option>
                                    </select>
                                    <div class="invalid-tooltip">This field is required</div>
                                 </div>
                                 <div class="form-group col-sm-12">
                                    <label for="otherinfo">Any Other Information:<span class="text-muted">(Optional)</span></label>
                                    <input type="text" class="form-control" id="addl_info" name="addl_info">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="orderplcc">
                           <button type="submit" class="btn orderbtn">PLACE ORDER</button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4 rightpan">
                  <div class="card">
                     <div class="card-header">
                        <div class="card-title">Price Details</div>
                     </div>
                     <div class="card-body totalcard">
                        <div class="row">
                           <div class="col-8">
                              <p>Total Amount</p>
                              <p>Delivery Charges</p>
                           </div>
                           <div class="col-4">
                              <p class="right">
                                 <svg class="svg_icon">
                                    <use xlink:href="static/icons.svg#iw-dollar"/>
                                 </svg>
                                 55
                              </p>
                              <p class="right">
                                 <svg class="svg_icon">
                                    <use xlink:href="static/icons.svg#iw-dollar"/>
                                 </svg>
                                 80
                              </p>
                           </div>
                        </div>
                        <div class="hr"></div>
                        <p class="payamnt">Amount Payable <span class="pull-right">$ 135</span></p>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header">
                        <div class="card-title">Payment Option</div>
                     </div>
                     <div class="card-body">
                           <div class="form-group">
												<ul class="payment-options-list">
													<?php if ($this->payment_settings->square_enabled): ?>
														<li>
															<div class="option-payment">
																<div class="list-left">
																	<!-- <div class="custom-control custom-radio"> -->
																		<input type="radio" class="payment-way-input" id="option_razorpay" name="payment_option" value="square" required <?php echo ($check_option == true) ? 'checked' : ''; ?>>
																		<!-- <label class="custom-control-label label-payment-option" for="option_razorpay">Razorpay</label> -->
                                                      <label class="ps-4" for="option_razorpay">
                                                      <div class="payment-way-hd">Pay Now</div>
                                                      <div class="payment-way-text">We accept all major credit and debit cards.</div>
                                                      <div class="payment-way-image">
                                                      <label for="option_razorpay">
																		<img src="<?php echo base_url(); ?>/assets/images/icon/paymant/visa.png" alt="visa" width="50">
																		<img src="<?php echo base_url(); ?>assets/images/icon/paymant/discover.png" alt="mastercard" width="50">
																		<img src="<?php echo base_url(); ?>assets/images/icon/paymant/american.png" alt="amex" width="50">
																		<img src="<?php echo base_url(); ?>assets/images/icon/paymant/master-card.png" alt="maestro" width="50">
																		<img src="<?php echo base_url(); ?>assets/images/icon/paymant/giro-pay.png" alt="diners" width="50">
																	</label>
                                                      </div>
                                                   </label>
																	<!-- </div> -->
																</div>
																
															</div>
														</li>
														<?php $check_option = false;
													endif; ?>
												
													
												
													<?php if ($this->auth_check == 1 && $this->payment_settings->cash_on_delivery_enabled): ?>
														<li>
															<div class="option-payment">
																<div class="list-left">
																	<input type="radio" class="payment-way-input" id="option_cash_on_delivery" name="payment_option" value="cash_on_delivery" required <?php echo ($check_option == true) ? 'checked' : ''; ?>>
                                                   <label class="ps-4" for="option_cash_on_delivery">
                                                      <div class="payment-way-hd">Cash On Delivery/Pay on Delivery</div>
                                                      <div class="payment-way-text">We only collect the amount printed on the invoice.</div>
                                                     
																	</label>
                                                </div>
															</div>
														</li>
													<?php endif; ?>
												</ul>
									</div>
                        <div class="orderplc">
                           <button type="submit" class="btn orderbtn">PLACE ORDER</button>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header">
                        <div class="card-title">We accept</div>
                     </div>
                     <div class="card-body">
                        <ul class="list-inline payoption">
                           <li><img src="<?= base_url('assets/static/pay/visa.png');?>"></li>
                           <li><img src="<?= base_url('assets/static/pay/netbanking.png');?>"></li>
                           <li><img src="<?= base_url('assets/static/pay/mastercard.png');?>"></li>
                           <li><img src="<?= base_url('assets/static/pay/upi.png');?>"></li>
                           <li><img src="<?= base_url('assets/static/pay/rupay.png');?>"></li>
                        </ul>
                     </div>
                  </div>

               </div>
            </div>
         </div>
         <?php echo form_close(); ?>
      <script type="text/javascript">
        // function showToast(message,type){$.notify(message,{globalPosition:"bottom center",className:type});}
         // $("#orderform").on('submit',(function(e){
         // e.preventDefault();
         // var url="_validation"; 
         // var data = new FormData(this);
         // data.append("operation","ordersubmit");
         // $.ajax({
         // type:"post",url:url,data:data,contentType:false,cache:false,processData:false, dataType:"json",
         // beforeSend:function(){$('.orderbtn').addClass('eventbtn');},
         // error:function(jqXHR,textStatus,errorThrown){
         // $('.orderbtn').removeClass('eventbtn');
         // showToast("Error occured try Later","error");
         // },
         // success:function(res){
         // $('.orderbtn').removeClass('eventbtn');
         // if(res.status){location.href=res.msg;}
         // else{showToast(res.msg,"error");}
         // }
         // }); 
         // }));
      </script>

