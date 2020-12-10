<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Smart Sale  | Backend Data Administrator</title>
  <base href="<?=base_url()?>"></base>


<link href="css/jquery-ui.css" rel="stylesheet">
  <link href="<?=base_url()?>images/favicon.ico" rel="shortcut icon"/>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/signin.css">
<!--  <link rel="stylesheet" type="text/css" href="css/sb-admin.css">
  <link rel="stylesheet" type="text/css" href="css/mystyle.css"> -->
   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    
  
   <link rel="stylesheet" type="text/css" href="css/main.css">
      <style>
  .ui-autocomplete {
    max-height: 200px;
    overflow-y: auto;
    /* prevent horizontal scrollbar */
    overflow-x: hidden;
  }
  /* IE 6 doesn't support max-height
   * we use height instead, but this forces the menu to always be this tall
   */
  * html .ui-autocomplete {
    height: 200px;
  }
  </style>
</head>
<body onload="cashier_checkstock()" id="body">

 <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar cashier-bar navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        
        <!--   <h3 class="sadmin">SMART SALE | CASHIER</h3> -->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right navbar-user">
          
           <!--  <li id="promotionalert"></li> -->

            <li class="dropdown alerts-dropdown" id="stockalert">
             <?php $check_remind=$this->admin_model->check_stock_remind();?>
              <a href="" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell"></i> Product Balance Alerts <span class="badge">
              <?=$check_remind->num_rows()?></span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
              
              <?php
              $no=1;
            
              foreach($check_remind->result() as $remind):

              ?>
                <li><a><span class="badge"><?=$remind->product_code?></span> <?=$remind->product_name;?>
                 <span class="label label-danger"><?=$remind->l;?></span></a></li>
                
            <?php
            $no++;     
                  endforeach;
                ?>
                <li class="divider"></li>
                <li class="viewall" onclick="data_list('remind_purchase')" >View All</li>
             
              </ul>
            </li>
                       <li> <?=anchor("cashier",'<i class="fa fa-chevron-circle-right"></i> Sale Form')?>


             <li class="dropdown user-dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list"></i> Purchase <b class="caret"></b></a>
              <ul class="dropdown-menu">
                               <li class="divider"></li>

                 <li calss="btn btn-info"> 
               <?=anchor("cashier/data_list/purchase",'<i class="fa fa-chevron-circle-right"></i> Purchase List')?>
                           
              </li>
                <li class="divider"></li>
              
              </ul>
            </li>

<!-- 
               <li class="dropdown user-dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list"></i> Orders<b class="caret"></b></a>
              <ul class="dropdown-menu">
                               <li class="divider"></li>

                 <li calss="btn btn-info"> 
               <?=anchor("cashier/data_list/sale_order",'<i class="fa fa-chevron-circle-right"></i> Sale Order')?>
                           
              </li>
                <li class="divider"></li>
                <li calss="btn btn-info"> 
                <?=anchor("cashier/data_list/purchase_order",'<i class="fa fa-chevron-circle-right"></i> Purchase Order')?>
                           
              </li>
              </ul>
            </li>


             <li class="dropdown user-dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list"></i> Delivery<b class="caret"></b></a>
              <ul class="dropdown-menu">
                               <li class="divider"></li>

                 <li calss="btn btn-info"> 
               <?=anchor("cashier/data_list/sale_delivery",'<i class="fa fa-chevron-circle-right"></i> Sale Delivery')?>
                           
              </li>
                <li class="divider"></li>
                <li calss="btn btn-info"> 
                <?=anchor("cashier/data_list/purchase_delivery",'<i class="fa fa-chevron-circle-right"></i> Purchase Delivery')?>
                           
              </li>
              </ul>
            </li>
 -->


             <li class="dropdown user-dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list"></i> Sale<b class="caret"></b></a>
              <ul class="dropdown-menu">
                               <li class="divider"></li>

                 <li calss="btn btn-info"> 
               <?=anchor("cashier/data_list/sale",'<i class="fa fa-chevron-circle-right"></i> Sale List')?>
                           
              </li>
                <li class="divider"></li>
              
              </ul>
            </li>


             <li class="dropdown user-dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list"></i> Stock <b class="caret"></b></a>
              <ul class="dropdown-menu">
                               <li class="divider"></li>

                 <li calss="btn btn-info"> 
               <?=anchor("cashier/data_list/warehouse1",'<i class="fa fa-chevron-circle-right"></i> Warehouse (1) Stock')?>
                           
              </li>
                <li class="divider"></li>
                <li calss="btn btn-info"> 
                <?=anchor("cashier/data_list/warehouse2",'<i class="fa fa-chevron-circle-right"></i> Warehouse (2) Stock')?>
                           
              </li>
              <li class="divider"></li>
                <li calss="btn btn-info"> 
                <?=anchor("cashier/data_list/shop_stock",'<i class="fa fa-chevron-circle-right"></i> Shop Stock')?>
                           
              </li>

               <li class="divider"></li>
                <li calss="btn btn-info"> 
                 <?=anchor("cashier/data_list/transfer_history",'<i class="fa fa-chevron-circle-right"></i> Transfer Lists')?>
                           
              </li>


              </ul>
            </li>
              <li class="dropdown user-dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list"></i> Damage <b class="caret"></b></a>
              <ul class="dropdown-menu">
                               <li class="divider"></li>

                 <li calss="btn btn-info"> 
               <?=anchor("cashier/data_list/damage_shop",'<i class="fa fa-chevron-circle-right"></i> Shop Damages')?>
                           
              </li>
                <li class="divider"></li>
                <li calss="btn btn-info"> 
                <?=anchor("cashier/data_list/damage_warehouse1",'<i class="fa fa-chevron-circle-right"></i> Warehouse (1) Damages ')?>
                           
              </li>
              <li class="divider"></li>
                <li calss="btn btn-info"> 
                <?=anchor("cashier/data_list/damage_warehouse2",'<i class="fa fa-chevron-circle-right"></i> Warehouse (2) Damages')?>
                           
              </li>
              </ul>
            </li>

            <li class="dropdown user-dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list"></i> Returns <b class="caret"></b></a>
              <ul class="dropdown-menu">
                               <li class="divider"></li>

                 <li calss="btn btn-info"> 
               <?=anchor("cashier/data_list/purchase_return",'<i class="fa fa-chevron-circle-right"></i> Purchase Returns')?>
                           
              </li>
                <li class="divider"></li>
                <li calss="btn btn-info"> 
               <?=anchor("cashier/data_list/sale_return",'<i class="fa fa-chevron-circle-right"></i> Sale Returns')?>
                           
              </li>
              </ul>
            </li>


             <li class="dropdown user-dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list"></i> Data Lists <b class="caret"></b></a>
              <ul class="dropdown-menu">
                               <li class="divider"></li>

                 <li calss="btn btn-info"> 
               <?=anchor("cashier/data_list/supplier",'<i class="fa fa-chevron-circle-right"></i> Suppliers')?>
                           
              </li>
                <li class="divider"></li>
                <li calss="btn btn-info"> 
               <?=anchor("cashier/data_list/customer",'<i class="fa fa-chevron-circle-right"></i> Customers')?>
                           
              </li>
              </ul>
            </li>

               <li class="dropdown user-dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?=get_cookie('cashier_cookie'); ?><b class="caret"></b></a>
              <ul class="dropdown-menu">
               
            <li class="divider"></li>
                <li calss="btn btn-info"> <?=anchor("cashier/insert_form/account_setting",'<i class="fa fa-gears"></i> Account Setting')?>
              </li>
           
                <li class="divider"></li>
                <li calss="btn btn-info"> <?=anchor("cashier/logout",'<i class="fa fa-power-off"></i> Log Out')?>
              </li>
              </ul>
            </li>

              
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

</div>

  <div class="cashier-wrapper" id="cashier_wrapper" style="margin-top:55px">
            <?php $this->load->view("cashier/".$main_content); ?>
          </div>    
 <!-- </div> -->
 <!-- </div> --><!-- /#wrapper -->

    <!-- JavaScript -->

  </body>
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/cashier.js"></script>
  <script>

  $(function() {

     $( ".date" ).datepicker({
  dateFormat: "dd-mm-yy"
});
    $( "#date1" ).datepicker("option", "dateFormat","d-M-yy");
    $( "#date2" ).datepicker("option", "dateFormat","d-M-yy");
     $( ".date" ).datepicker("option", "dateFormat","d-M-yy");
  });



//var availableTags = [ { label: "Choice1", value: "value1" },{label: "Choice2", value: "value2" } ];
/*$(".autocomplete").autocomplete({
source: "http://localhost/smartsale/index.php/admin/search",
minLength: 0,//search after two characters
select: function(event,ui){
    //do something
    }
});*/

$(document).on('focus', "input.autocomplete", function() {
    $(this).autocomplete({
source: "http://localhost:8080/cnc/index.php/admin/search",
minLength: 0,//search after two characters
select: function(event,ui){
    //do something
    }
});
});
   /* 
$( ".autocomplete" ).autocomplete({
    source: "http://localhost/smartsale/index.php/admin/search"
 //   source: availableTags
});*/

  </script>
  
    <script type="text/javascript" src="js/bootstrap.js"></script>
</html>
