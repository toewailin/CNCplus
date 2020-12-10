
<div class="row space-row"> 
    <div class="col-lg-6 col-md-6 col-xs-6">
       <div class="panel panel-danger">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-warning fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">Alert</p>
                    <p class="announcement-text"></p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                   <div class="col-xs-6">
                    
                  </div>
                    <div class="col-xs-6 text-right">
                    <?=anchor("admin/data_list/stock_alert",$alert.' <i class="fa fa-arrow-circle-right"></i> ')?>   
                 
                    </div>
                  </div>
                </div>
              </a>
               <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                  
                  </div>
                    <div class="col-xs-6 text-right">
                 <?=anchor("admin/data_list/debt_alert", $debtalert.' <i class="fa fa-arrow-circle-right"></i> ')?>   
                 
                    </div>
                  </div>
                </div>
              </a>
            </div>
      </div>
  <div class="col-lg-6 col-md-6 col-xs-6">
      <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-credit-card fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"> ORDER / DELIVER                      
                    </p>
                    <p class="announcement-text"></p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                     
                    </div>
                    <div class="col-xs-6 text-right">
                     <?=anchor("admin/data_list/supplier_order",  $supplierordertitle.' <i class="fa fa-arrow-circle-right"></i> ')?> 
                    </div>

                  </div>
                </div>
              </a>
                <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6"> 
                                     
                    </div>
                    <div class="col-xs-6 text-right">
                    <?=anchor("admin/data_list/customer_order", $customerordertitle.' <i class="fa fa-arrow-circle-right"></i> ')?>
                   
                    </div>
                  </div>
                </div>
              </a>
      </div>
    </div>
</div>

<div class="row space-row">
       <div class="col-lg-6 col-md-6 col-xs-6">
      <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-sort-alpha-asc fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">Stock</p>
                    <p class="announcement-text"></p>
                  </div>
                </div>
              </div>
             
               <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                    
                   </div>
                    <div class="col-xs-6 text-right">
                             <?=anchor("admin/data_list/stock",'<i class="fa fa-arrow-user"></i>Godaung Stock <i class="fa fa-arrow-circle-right"></i>')?> 
                    </div>

                  </div>
                  
                </div>
              </a>

              <a href="#">
              <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                    
                   </div>
                    <div class="col-xs-6 text-right">
                             <?=anchor("admin/data_list/shop_stock",'<i class="fa fa-arrow-user"></i>Shop Stock <i class="fa fa-arrow-circle-right"></i>')?> 
                    </div>
                    
                  </div>
                </div>
               
              </a>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-xs-6">
       <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-th-list fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">Products</p>
                    <p class="announcement-text "></p>
                  </div>
                </div>
              </div>
             
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                   </div>


                    <div class="col-xs-6 text-right">                     
                    <?=anchor("admin/data_list/unit",'<i class="fa fa-arrow-user"></i> Product Lists <i class="fa fa-arrow-circle-right"></i>')?>
                  </div>
                    
                  </div>
                </div>
              </a>
            </div>
      </div>

     
</div>